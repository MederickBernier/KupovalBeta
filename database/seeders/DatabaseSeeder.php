<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            ArtistSeeder::class,
            CategoriesSeeder::class,
            TagsSeeder::class,
            ArtworkSeeder::class,
            EventSeeder::class,
            ReviewSeeder::class,
            ProductTypeSeeder::class,
            ArtworkVariantSeeder::class,
        ]);

    }
}
