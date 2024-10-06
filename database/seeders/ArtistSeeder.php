<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Artist;
use App\Models\User;

class ArtistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adminUser = User::where('email','val@kupoval.art')->first();

        Artist::create([
            'alias' => 'Kupoval',
            'bio' => 'An amazing artist with a passion for creating beautiful artwork.',
            'profile_picture' => 'artist.jpg',
            'user_id' => $adminUser->id,
        ]);
    }
}
