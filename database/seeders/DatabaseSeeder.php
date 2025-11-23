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
            // User::factory(10)->create();

            User::factory()->create([
                'first_name' => 'Test',  // Changed from 'name'
                'last_name' => 'User',   // Added last_name
                'email' => 'test@example.com',
                'external_user' => false, // Ensure this is set
            ]);
        }
}
