<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'category_id' => $this->faker->numberBetween(1,10),
            'photo_id' => 1,
            'title' => $this->faker->sentence(7,11),
            'body' => $this->faker->paragraphs(rand(10,15), true),
            'slug' => $this->faker->slug()
        ];
    }
}
