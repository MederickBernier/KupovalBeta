<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Artist;
use App\Models\Artwork;
use App\Models\Category;
use App\Models\Tag;

class ArtworkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $artist = Artist::first();
        $category = Category::inRandomOrder()->first(); // Random category
        $tags = Tag::inRandomOrder()->take(2)->pluck('id'); // Random tags

        if ($artist && $category) {
            $artworks = [
                [
                    'title' => 'Mario',
                    'description' => "It's a me, Mario",
                    'image_path' => 'mario.jpg',
                    'artist_id' => $artist->id,
                    'category_id' => $category->id,
                ],
                [
                    'title' => 'Screen',
                    'description' => 'A depiction of a screen in vibrant colors',
                    'image_path' => 'screen.jpg',
                    'artist_id' => $artist->id,
                    'category_id' => $category->id,
                ],
                [
                    'title' => 'Spaceman',
                    'description' => 'An astronaut floating in space',
                    'image_path' => 'spaceman.jpg',
                    'artist_id' => $artist->id,
                    'category_id' => $category->id,
                ],
                [
                    'title' => 'Warrior',
                    'description' => 'A brave warrior ready for battle',
                    'image_path' => 'warrior.jpg',
                    'artist_id' => $artist->id,
                    'category_id' => $category->id,
                ],
                [
                    'title' => 'Warrior 2',
                    'description' => 'A second warrior showcasing different armor',
                    'image_path' => 'warrior2.jpg',
                    'artist_id' => $artist->id,
                    'category_id' => $category->id,
                ],
            ];

            foreach ($artworks as $artworkData) {
                $artwork = Artwork::create($artworkData);
                $artwork->tags()->sync($tags);
            }
        }
    }
}
