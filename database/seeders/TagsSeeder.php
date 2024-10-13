<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tag;

class TagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tags = [
            ['name' => 'Digital'],
            ['name' => 'Painting'],
            ['name' => 'Character'],
            ['name' => 'Space'],
        ];

        foreach($tags as $tag){
            Tag::create($tag);
        }
    }
}
