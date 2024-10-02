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
            'name' => 'Web Progamming',
            'slug' => 'web-programming'
        ]);
        Category::create([
            'name' => 'Artificial Intelligence',
            'slug' => 'artifial-intelligence'
        ]);
        Category::create([
            'name' => 'Data Analyst',
            'slug' => 'data-analyst'
        ]);
        Category::create([
            'name' => 'UI UX Design',
            'slug' => 'ui-ux-design'
        ]);
        Category::create([
            'name' => 'Technology',
            'slug' => 'technology'
        ]);
    }
}
