<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\User;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
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
        $title = $this->faker->unique()->realText(55);
        return [
            'title'=> $title,
            'slug'=> Str::slug($title),
            'introduction'=> $this->faker->realText(255),
            'image'=>'articles/'.$this->faker->image('public/storage/articles', 640,480,null,true),
            'body'=> $this->faker->text(2000), 
            'status'=> $this->faker->boolean(), 
            'status'=> $this->faker->boolean(), 
            'user_id'=> User::all()->isNotEmpty() ? User::all()->random()->id : null,
            'category_id' => Category::all()->isNotEmpty() ? Category::all()->random()->id : null,
            
             
        ];
    }
}
