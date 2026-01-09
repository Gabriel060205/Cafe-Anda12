<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Item>
 */
class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'category_id' => $this->faker->numberBetween(1, 2),
            'price' => $this->faker->randomFloat(2, 1000, 10000),
            'description' => $this->faker->text(),
            'img' => fake()->randomElement(
                ['https://images.unsplash.com/photo-1623341214825-9f4f963727da',
                'https://images.unsplash.com/photo-1594041680534-e8c8cdebd659',
                'https://images.unsplash.com/photo-1571175534150-72cd2b5a6039']),
            'is_active' => $this->faker->boolean(),
        ];
    }
}
