<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Artist;
use App\Models\Artwork;

class ArtworkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $artist = Artist::first();

        if($artist){
            $artworks = [
                [
                    'title' => 'Mario',
                    'description' => "It's a me, Mario",
                    'image_path' => 'mario.jpg',
                    'artist_id' => $artist->id,
                ],
                [
                    'title' => 'Screen',
                    'description' => 'A depiction of a screen in vibrant colors',
                    'image_path' => 'screen.jpg',
                    'artist_id' => $artist->id,
                ],
                [
                    'title' => 'Spaceman',
                    'description' => 'An astronaut floating in space',
                    'image_path' => 'spaceman.jpg',
                    'artist_id' => $artist->id,
                ],
                [
                    'title' => 'Warrior',
                    'description' => 'A brave warrior ready for battle',
                    'image_path' => 'warrior.jpg',
                    'artist_id' => $artist->id,
                ],
                [
                    'title' => 'Warrior 2',
                    'description' => 'A second warrior showcasing different armor',
                    'image_path' => 'warrior2.jpg',
                    'artist_id' => $artist->id,
                ],
            ];

            foreach($artworks as $artwork){
                Artwork::create($artwork);
            }
        }
    }
}
