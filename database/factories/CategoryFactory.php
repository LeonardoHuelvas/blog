<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
        $title = 'My Title';
        return [
            'title'=> $title,
            'slug'=> Str::slug($title),
            'introduction'=> $this->faker->realText(255),
            'image'=>'articles/'.$this->faker->image('public/storage/articles', 640,480,null,true),
            'body'=> $this->faker->text(2000), 
            'status'=> $this->faker->boolean(), 
        ];
    }
}
