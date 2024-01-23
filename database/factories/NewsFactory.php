<?php

namespace Database\Factories;

use App\Models\News;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\News>
 */
class NewsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    // protected $model = News::class;

    public function definition(): array
    {

        return [
            'title' => fake()->sentence(),
            'description' => fake()->paragraph(2, true),
            'category' => fake()->text(20),
            'author' => fake()->email(),
        ];
    }
}
