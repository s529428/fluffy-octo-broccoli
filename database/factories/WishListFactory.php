<?php

namespace Database\Factories;

use App\Models\WishList;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\WishList>
 */
class WishListFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     * 
     * @var class string <\Illuminate\Database\Eloquent\Model>
     */
    protected $model = WishList::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->sentence(3),
            'expiration' => $this->faker->dateTimeThisCentury('+8 years')
        ];
    }
}
