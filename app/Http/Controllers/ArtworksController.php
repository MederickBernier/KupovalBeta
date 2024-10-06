<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artwork;

class ArtworksController extends Controller
{
    public function index(){
        $artworks = Artwork::all();
        $page = "Artworks";
        return view('admin.artworks.index',[
            $page => $page,
            'artworks' => $artworks,
        ]);
    }

    public function create(){
        return view('admin.artworks.create');
    }

    public function store(Request $request){
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image_path' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imagePath = null;
        if($request->hasFile('image_path')){
            $imagePath = $request->file('image_path')->store('artworks','public');
        }
        Artwork::create([
            'artist_id' => auth()->id(),
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'image_path' => $imagePath,
        ]);

        return redirect()->route('admin.artworks.index')->with('success','Artwork created successfully');
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
}
