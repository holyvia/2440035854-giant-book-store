<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::factory()->create([
            'name' => 'Romance'
        ]);
        Category::factory()->create([
            'name' => 'Horror'
        ]);
        Category::factory()->create([
            'name' => 'Finance'
        ]);
        Category::factory()->create([
            'name' => 'Self-Improvement'
        ]);
        Category::factory()->create([
            'name' => 'Comedy'
        ]);
        Category::factory()->create([
            'name' => 'Fantasy'
        ]);
        Category::factory()->create([
            'name' => 'Science'
        ]);
        Category::factory()->create([
            'name' => 'Computer Science'
        ]);
    }
}
