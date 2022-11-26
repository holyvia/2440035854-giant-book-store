<?php

namespace Database\Factories;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryBookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $bookIds = Book::pluck('id')->toArray();
        $categoryIds = Category::pluck('id')->toArray();

        return [
            'book_id' => $this->faker->randomElement($bookIds),
            'category_id' => $this->faker->randomElement($categoryIds)
        ];
    }
}
