<?php

namespace Database\Seeders;

use App\Models\Book;
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

        Book::create([
            'category_id' => 1,
            'title' => 'Kisah Horror',
            'stock' => 20,
            'publisher' => 'khorrordrama',
            'year_published' => '2021',
            'author' => 'khorror12'
        ]);
        Book::create([
            'category_id' => 1,
            'title' => 'Dongeng Horror',
            'stock' => 30,
            'publisher' => 'kdongeng',
            'year_published' => '2023',
            'author' => 'kdongeng12'
        ]);
        Book::create([
            'category_id' => 2,
            'title' => 'Membaca',
            'stock' => 10,
            'publisher' => 'kdrama',
            'year_published' => '2020',
            'author' => 'kdrama'
        ]);
        Book::create([
            'category_id' => 2,
            'title' => 'Menghitung',
            'stock' => 15,
            'publisher' => 'kbelajar',
            'year_published' => '2024',
            'author' => 'kbelajar12'
        ]);
    }
}
