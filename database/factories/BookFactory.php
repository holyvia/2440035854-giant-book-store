<?php

namespace Database\Factories;

use App\Models\Publisher;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $publisherIds = Publisher::pluck('id')->toArray();

        return [
            'publisher_id' => $this->faker->randomElement($publisherIds),
            'author' => $this->faker->name(),
            'year' => $this->faker->numberBetween(1950, 2020),
            'synopsis' => $this->faker->text(200)
        ];
    }
}
