<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artwork;
use App\Models\ArtworkImage;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ArtworksController extends Controller
{
    public function index(){
        $artworks = Artwork::withTrashed()->get();
        $page = "Artworks";
        return view('admin.artworks.index',[
            $page => $page,
            'artworks' => $artworks,
        ]);
    }

    public function create(){
        return view('admin.artworks.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'main_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'additional_images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
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
        ]);

        if ($request->hasFile('additional_images')) {
            foreach ($request->file('additional_images') as $image) {
                $imageName = Str::uuid() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('images'), $imageName);

                ArtworkImage::create([
                    'artwork_id' => $artwork->id,
                    'image_path' => $imageName,
                    'is_main' => false,
                ]);
            }
        }

        return redirect()->route('admin.artworks.index')->with('success', 'Artwork created successfully');
    }

    public function edit(Artwork $artwork){
        return view('admin.artworks.edit',[
            'artwork' => $artwork,
        ]);
    }

    public function update(Request $request, Artwork $artwork){
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image_path' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('image_path')) {
            $imagePath = $request->file('image_path')->store('artworks', 'public');
            $artwork->image_path = $imagePath;
        }

        $artwork->update([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
        ]);

        return redirect()->route('admin.artworks.index')->with('success', 'Artwork updated successfully.');
    }

    public function destroy(Artwork $artwork){
        $artwork->delete();
        return redirect()->route('admin.artworks.index')->with('success','Artwork deleted successfully');
    }

    public function restore($id){
        Artwork::withTrashed()->where('id', $id)->restore();
        return redirect()->route('admin.artworks.index')->with('success','Artwork restored successfully');
    }

    public function forceDelete($id){
        Artwork::withTrashed()->where('id', $id)->forceDelete();
        return redirect()->route('admin.artworks.index')->with('success','Artwork permanently deleted successfully');
    }

    public function show($id){
        $artwork = Artwork::withTrashed()->findOrFail($id);
        return view('admin.artworks.show',[
            'artwork' => $artwork,
        ]);
    }
}
