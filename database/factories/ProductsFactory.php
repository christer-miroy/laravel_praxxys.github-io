<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Products;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Products>
 */
class ProductsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Products::class;

    public function definition(): array
    {
        $categories = ["One", "Two", "Three"];
        $category = $categories[rand(0,2)];
        return [
            /* faker generates random data */
            'name' => $this->faker->word(),
            'category' => $category,
            'description' => $this->faker->words(5,true),
            'datetime' => $this->faker->dateTime(),
        ];
    }
}
