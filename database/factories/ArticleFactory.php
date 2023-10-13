<?php

namespace Database\Factories;

use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory<Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = $this->faker->sentence();

        //Pellentesque malesuada euismod porta integer vestibulum sit
        //Pellentesque-malesuada-euismod-porta-integer-vestibulum-sit
        $slug = Str::substr(Str::lower(preg_replace('/\s+/', '-', $title)), 0, -1);

        return [
            'title'      => $title,
            'body'       => $this->faker->paragraph(100),
            'slug'       => $slug,
            'img'        => 'https://loremflickr.com/320/240',
            'created_at' => $this->faker->dateTimeBetween('-1 years'),
        ];
    }
}
