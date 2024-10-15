<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ArtworkVariant;
use App\Models\Artwork;
use App\Models\ProductType;

class ArtworkVariantSeeder extends Seeder
{
    public function run()
    {
        // Retrieve all existing artworks and product types
        $artworks = Artwork::all();
        $productTypes = ProductType::all();

        foreach ($artworks as $artwork) {
            // Randomly select a product type for each artwork
            $productType = $productTypes->random();

            // Create a few variants for each artwork
            for ($i = 1; $i <= 3; $i++) {
                ArtworkVariant::create([
                    'artwork_id' => $artwork->id,
                    'product_type_id' => $productType->id,
                    'price' => rand(100, 1000), // Random price between 100 and 1000
                    'stock' => rand(1, 50) // Random stock quantity between 1 and 50
                ]);
            }
        }
    }
}
