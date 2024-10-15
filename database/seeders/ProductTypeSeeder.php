<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProductType;

class ProductTypeSeeder extends Seeder
{
    public function run()
    {
        // Define some sample product types
        $productTypes = [
            ['name' => 'Canvas'],
            ['name' => 'Print'],
            ['name' => 'Drawing'],
            ['name' => 'Oil'],
            ['name' => 'Acrylic'],
            ['name' => 'Digital'],
            ['name' => 'Sculpture'],
            ['name' => 'Photography'],
        ];

        // Insert the product types into the database
        foreach ($productTypes as $type) {
            ProductType::create($type);
        }
    }
}
