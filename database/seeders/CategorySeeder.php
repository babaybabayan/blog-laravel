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
        Category::insert([
            [
                "name" => "Category 1",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                "name" => "Category 2",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                "name" => "Category 3",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                "name" => "Category 4",
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
