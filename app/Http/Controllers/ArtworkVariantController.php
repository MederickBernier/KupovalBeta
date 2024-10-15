<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArtworkVariant;
use App\Models\Artwork;
use App\Models\ProductType;

class ArtworkVariantController extends Controller
{
    public function create(Artwork $artwork){
        $productTypes = ProductType::all();
        return view('admin.artwork_variants.create', [
            'artwork' => $artwork,
            'productTypes' => $productTypes
        ]);
    }

    public function store(Request $request, Artwork $artwork){
        $request->validate([
            'product_type_id' => 'required|exists:product_types,id',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
        ]);

        $artwork->variants()->create($request->only(['product_type_id','price','stock']));
        return redirect()->route('admin.artworks.index')->with('success', 'Artwork Variant created successfully');
    }

    public function edit(ArtworkVariant $variant){
        $productTypes = ProductType::all();
        return view('admin.artwork_variants.edit', [
            'variant' => $variant,
            'productTypes' => $productTypes
        ]);
    }

    public function update(Request $request, ArtworkVariant $variant){
        $request->validate([
            'product_type_id' => 'required|exists:product_types,id',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
        ]);

        $variant->update($request->only(['product_type_id','price','stock']));
        return redirect()->route('admin.artworks.index')->with('success', 'Artwork Variant updated successfully');
    }

    public function destroy(ArtworkVariant $variant){
        $variant->delete();
        return redirect()->route('admin.artworks.index')->with('success', 'Artwork Variant deleted successfully');
    }
}
