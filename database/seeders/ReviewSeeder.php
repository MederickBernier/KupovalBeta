<?php

namespace Database\Seeders;

use App\Models\Artwork;
use App\Models\User;
use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $reviews = [
            [
                'user_id' => 1,
                'artwork_id' => 1,
                'rating' => 5,
                'content' => 'Amazing piece of artwork!',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 2,
                'artwork_id' => 2,
                'rating' => 4,
                'content' => 'Really liked the details.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        Review::insert($reviews);
    }
}
