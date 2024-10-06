<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Artist;
use App\Models\Event;
use Carbon\Carbon;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $artist = Artist::first();

        if($artist){
            Event::create([
                'title' => 'Art Exhibition',
                'description' => 'An exhibition showcasing various artworks.',
                'location' => 'Art Gallery Downtown',
                'date' => Carbon::now()->addDays(10),
                'artist_id' => $artist->id,
            ]);

            Event::create([
                'title' => 'Live Painting Session',
                'description' => 'Watch Kupoval paint live.',
                'location' => 'Main Square',
                'date' => Carbon::now()->addDays(20),
                'artist_id' => $artist->id,
            ]);

        }
    }
}
