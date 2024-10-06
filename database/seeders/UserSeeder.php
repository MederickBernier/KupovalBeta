<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'first_name' => 'Valerie',
            'last_name' => 'Labelle',
            'email' => 'val@kupoval.art',
            'password' => Hash::make('Natureangel23'),
            'role' => 'admin',
            'active' => true,
        ]);
        User::create([
            'first_name' => 'John',
            'last_name' => 'Doe',
            'email' => 'john.doe@example.com',
            'password' => Hash::make('password'),
            'role' => 'client',
            'active' => true,
        ]);
    }
}
