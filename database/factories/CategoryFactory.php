<?php

namespace Database\Factories;
use App\Models\Category;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word, // Generates a random word
            'image' => $this->faker->word.'.jpg', // Generates a random image URL
            'description' => $this->faker->paragraph, // Generates a random paragraph
            'parent_id' => null, // You can set this to a random parent category if needed
            
        ];
    }
}
