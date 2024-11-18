<?php

namespace Database\Factories;


use App\Models\BlogPost;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BlogPost>
 */
class BlogPostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = BlogPost::class;

    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'author' => $this->faker->name,
            'image' => $this->faker->imageUrl(800, 600, 'business', true),
            'published_at' => $this->faker->dateTimeThisYear,
        ];
    }
}
