<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\Artwork;

class ShopController extends Controller
{
    public function index(){
        $artworks = Artwork::with(['variants.productType'])->get();
        return view('shop.index',[
            'artworks' => $artworks
        ]);
    }

    public function show(Artwork $artwork){
        $artwork->load(['variants.productType']);
        return view('shop.show',[
            'artwork' => $artwork
        ]);
    }
}
