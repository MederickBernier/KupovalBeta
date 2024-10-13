<?php
namespace App\Http\Controllers;

use App\Models\Artwork;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ArtworksController extends Controller
{
    public function index()
    {
        $artworks = Artwork::with('category', 'tags', 'artist')->get();
        return view('admin.artworks.index', compact('artworks'));
    }

    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('admin.artworks.create', compact('categories', 'tags'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'main_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'category_id' => 'required|exists:categories,id',
            'tags' => 'nullable|array',
            'tags.*' => 'exists:tags,id',
        ]);

        $mainImageName = null;
        if ($request->hasFile('main_image')) {
            $mainImage = $request->file('main_image');
            $mainImageName = Str::uuid() . '.' . $mainImage->getClientOriginalExtension();
            $mainImage->move(public_path('images'), $mainImageName);
        }

        $artwork = Artwork::create([
            'artist_id' => auth()->id(),
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'image_path' => $mainImageName,
            'category_id' => $request->input('category_id'),
        ]);

        if ($request->has('tags')) {
            $artwork->tags()->sync($request->input('tags'));
        }

        return redirect()->route('admin.artworks.index')->with('success', 'Artwork created successfully');
    }

    public function edit(Artwork $artwork)
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('admin.artworks.edit', compact('artwork', 'categories', 'tags'));
    }

    public function update(Request $request, Artwork $artwork)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'main_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'category_id' => 'required|exists:categories,id',
            'tags' => 'nullable|array',
            'tags.*' => 'exists:tags,id',
        ]);

        if ($request->hasFile('main_image')) {
            $mainImage = $request->file('main_image');
            $mainImageName = Str::uuid() . '.' . $mainImage->getClientOriginalExtension();
            $mainImage->move(public_path('images'), $mainImageName);
            $artwork->image_path = $mainImageName;
        }

        $artwork->update([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'category_id' => $request->input('category_id'),
        ]);

        if ($request->has('tags')) {
            $artwork->tags()->sync($request->input('tags'));
        }

        return redirect()->route('admin.artworks.index')->with('success', 'Artwork updated successfully.');
    }

    public function destroy(Artwork $artwork)
    {
        $artwork->delete();
        return redirect()->route('admin.artworks.index')->with('success', 'Artwork deleted successfully.');
    }
}
