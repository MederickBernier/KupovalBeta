<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artwork;
use App\Models\Event;
use App\Models\User;

class HomeController extends Controller
{
    public function index(){
        $artworks = Artwork::orderBy('created_at','desc')->take(5)->get();
        $events = Event::where('date','>=', now())->orderBy('date','asc')->take(3)->get();

        $artist = User::where('role','admin')->first();

        $page = 'index';

        return view('home.home', [
            'page' => $page,
            'artworks' => $artworks,
            'events' => $events,
            'artist' => $artist,
        ]);
    }

    public function contact(){
        $page = 'contact';
        return view('home.contact', compact('page'));
    }

    public function gallery(){
        $artworks = Artwork::all();
        $page = 'gallery';

        return view('home.gallery',[
            'page' => $page,
            'artworks' => $artworks,
        ]);
    }

    public function events(){
        $events = Event::where('date', '>=', now())->orderBy('date', 'asc')->get();
        $page = 'events';

        return view('home.events', [
            'page' => $page,
            'events' => $events,
        ]);
    }

    public function about(){
        $user = User::where('role', 'admin')->with('artist')->first();

        if($user && $user->artist){
            $artist = $user->artist;
        } else {
            $artist = null;
        }

        $page = 'about';

        return view('home.about', [
            'page' => $page,
            'artist' => $artist,
        ]);
    }
}
