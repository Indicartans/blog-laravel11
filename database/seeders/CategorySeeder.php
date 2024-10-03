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
            'slug' => 'web-programming',
            'color' => 'red'
        ]);
        Category::create([
            'name' => 'Artificial Intelligence',
            'slug' => 'artifial-intelligence',
            'color' => 'green'
        ]);
        Category::create([
            'name' => 'Data Analyst',
            'slug' => 'data-analyst',
            'color' => 'blue',
        ]);
        Category::create([
            'name' => 'UI UX Design',
            'slug' => 'ui-ux-design',
            'color' => 'yellow'
        ]);
        Category::create([
            'name' => 'Technology',
            'slug' => 'technology',
            'color' => 'pink'
        ]);
    }
}
