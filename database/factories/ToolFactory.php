<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class ToolFactory extends Factory
{
    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'category_id' => Category::factory(),
            'name' => fake()->name(),
            'description' => fake()->text(),
            'brand' => fake()->regexify('[A-Za-z0-9]{80}'),
            'price' => fake()->randomFloat(2, 0, 99999999.99),
            'stock' => fake()->numberBetween(-10000, 10000),
            'status' => fake()->randomElement(["activa","inactiva"]),
            'image' => fake()->regexify('[A-Za-z0-9]{255}'),
        ];
    }
}
