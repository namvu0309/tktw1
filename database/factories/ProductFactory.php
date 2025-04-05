<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductFactory extends Factory
{
    public function definition(): array
    {
        $name = $this->faker->unique()->words(3, true);
        return [
            'name' => $name,
            'slug' => Str::slug($name),
            'description' => $this->faker->paragraph(),
            'price' => $this->faker->numberBetween(50000, 2000000),
            'image' => 'uploads/products/sample-' . $this->faker->numberBetween(1, 5) . '.jpg',
            'category_id' => Category::inRandomOrder()->first()->id,
            'quantity' => $this->faker->numberBetween(0, 100),
            'status' => $this->faker->randomElement(['in_stock', 'out_of_stock']),
            'created_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'updated_at' => function (array $attributes) {
                return $this->faker->dateTimeBetween($attributes['created_at'], 'now');
            },
        ];
    }

    /**
     * Indicate that the product is in stock.
     */
    public function inStock(): Factory
    {
        return $this->state(function (array $attributes) {
            return [
                'status' => 'in_stock',
                'quantity' => $this->faker->numberBetween(1, 100),
            ];
        });
    }

    /**
     * Indicate that the product is out of stock.
     */
    public function outOfStock(): Factory
    {
        return $this->state(function (array $attributes) {
            return [
                'status' => 'out_of_stock',
                'quantity' => 0,
            ];
        });
    }
}
