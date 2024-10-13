<?php
namespace Database\Seeders;

use App\Models\Artwork;
use App\Models\Review;
use App\Models\User;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Fetch artworks and users dynamically
        $artwork1 = Artwork::first();
        $artwork2 = Artwork::skip(1)->first(); // Get second artwork
        $user1 = User::find(1);
        $user2 = User::find(2);

        if ($artwork1 && $artwork2 && $user1 && $user2) {
            $reviews = [
                [
                    'user_id' => $user1->id,
                    'artwork_id' => $artwork1->id,
                    'rating' => 5,
                    'content' => 'Amazing piece of artwork!',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'user_id' => $user2->id,
                    'artwork_id' => $artwork2->id,
                    'rating' => 4,
                    'content' => 'Really liked the details.',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
            ];

            Review::insert($reviews);
        }
    }
}
