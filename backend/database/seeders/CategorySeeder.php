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
    // In your CategorySeeder.php
    public function run(): void
    {
        $categories = [
            ['name' => 'Music'],
            ['name' => 'Concerts'],
            ['name' => 'Festivals'],
            ['name' => 'History'],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
