<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'category_name' => 'Horror'
        ]);
        Category::create([
            'category_name' => 'Fiksi'
        ]);
        Category::create([
            'category_name' => 'Non Fiksi'
        ]);
    }
}
