<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artwork;
use App\Models\Category;
use App\Models\Tag;
use App\Models\ProductType;

class ArtworksController extends Controller
{
    public function index()
    {
        // Load artworks with related category, tags, artist, and variants
        $artworks = Artwork::with('category', 'tags', 'artist', 'variants')->get();
        return view('admin.artworks.index', compact('artworks'));
    }

    public function create()
    {
        // Fetch all categories, tags, and product types
        $categories = Category::all();
        $tags = Tag::all();
        $productTypes = ProductType::all();

        return view('admin.artworks.create', compact('categories', 'tags', 'productTypes'));
    }

    public function store(Request $request)
    {
        // Validate incoming request data
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'main_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'category_id' => 'required|exists:categories,id',
            'tags' => 'nullable|array',
            'tags.*' => 'exists:tags,id',
            'available_for_sale' => 'boolean',
            'price' => 'nullable|numeric', // Price for the artwork
            'stock' => 'nullable|integer', // Stock quantity
            'product_type_id' => 'nullable|exists:product_types,id', // Product type
        ]);

        // Handle image upload
        $mainImageName = null;
        if ($request->hasFile('main_image')) {
            $mainImage = $request->file('main_image');
            $mainImageName = uniqid() . '.' . $mainImage->getClientOriginalExtension();
            $mainImage->move(public_path('images'), $mainImageName);
        }

        // Create the artwork
        $artwork = Artwork::create([
            'artist_id' => auth()->id(),
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'image_path' => $mainImageName,
            'category_id' => $request->input('category_id'),
            'available_for_sale' => $request->input('available_for_sale'),
        ]);

        // Sync tags if any
        if ($request->has('tags')) {
            $artwork->tags()->sync($request->input('tags'));
        }

        // Create variant if the artwork is available for sale
        if ($request->input('available_for_sale')) {
            $artwork->variants()->create([
                'product_type_id' => $request->input('product_type_id'),
                'price' => $request->input('price'),
                'stock' => $request->input('stock'),
            ]);
        }

        return redirect()->route('admin.artworks.index')->with('success', 'Artwork created successfully.');
    }

    public function edit(Artwork $artwork)
    {
        // Fetch all categories, tags, and product types for the edit view
        $categories = Category::all();
        $tags = Tag::all();
        $productTypes = ProductType::all(); // Fetch product types
        $variants = $artwork->variants; // Load existing variants

        return view('admin.artworks.edit', compact('artwork', 'categories', 'tags', 'productTypes', 'variants'));
    }

    public function update(Request $request, Artwork $artwork)
    {
        // Validate incoming request data
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'main_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'category_id' => 'required|exists:categories,id',
            'tags' => 'nullable|array',
            'tags.*' => 'exists:tags,id',
            'available_for_sale' => 'boolean',
            'price' => 'nullable|numeric',
            'stock' => 'nullable|integer',
            'product_type_id' => 'nullable|exists:product_types,id',
        ]);

        // Handle image upload if a new one is provided
        if ($request->hasFile('main_image')) {
            $mainImage = $request->file('main_image');
            $mainImageName = uniqid() . '.' . $mainImage->getClientOriginalExtension();
            $mainImage->move(public_path('images'), $mainImageName);
            $artwork->image_path = $mainImageName; // Update image path
        }

        // Update artwork attributes
        $artwork->update([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'category_id' => $request->input('category_id'),
            'available_for_sale' => $request->input('available_for_sale'), // Update availability status
        ]);

        // Sync tags if provided
        if ($request->has('tags')) {
            $artwork->tags()->sync($request->input('tags'));
        }

        // Update or create variant based on sale status
        if ($request->input('available_for_sale')) {
            $artwork->variants()->updateOrCreate(
                ['artwork_id' => $artwork->id],
                [
                    'product_type_id' => $request->input('product_type_id'),
                    'price' => $request->input('price'),
                    'stock' => $request->input('stock'),
                ]
            );
        } else {
            // If not available for sale, delete the variant
            $artwork->variants()->delete();
        }

        return redirect()->route('admin.artworks.index')->with('success', 'Artwork updated successfully.');
    }

    public function destroy(Artwork $artwork)
    {
        $artwork->delete();
        return redirect()->route('admin.artworks.index')->with('success', 'Artwork deleted successfully.');
    }
}
