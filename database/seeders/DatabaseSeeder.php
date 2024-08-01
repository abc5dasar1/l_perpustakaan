<?php

namespace Database\Seeders;

use App\Models\Category;
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
            'name' => 'Fadiyah',
            'email' => 'fadiyah@gmail.com',
            'password' => 12345
        ]);
        User::factory()->create([
            'name' => 'Irbati',
            'email' => 'irbati@gmail.com',
            'password' => 12345
        ]);

        Category::create([
            'category_name' => 'Buku',
        ]);
    }
}
