<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\WishListItem>
 */
class WishListItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->words(2, true),
            'url' => $this->faker->url(),
            'price' => $this->faker->randomFloat(2),
            'purchased' => $this->faker->boolean()
        ];
    }
}
