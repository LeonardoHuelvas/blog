<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Creamos 10 artículos de ejemplo
        for ($i = 0; $i < 10; $i++) {
            DB::table('articles')->insert([
                'title' => 'Artículo de ejemplo ' . $i,
                'slug' => Str::slug('Artículo de ejemplo ' . $i),
                'introduction' => 'Introducción del artículo de ejemplo ' . $i,
                'image' => 'image.jpg',
                'body' => 'Contenido del artículo de ejemplo ' . $i,
                'status' => 1,
                'user_id' => 1, // asumiendo que ya tienes un usuario en la tabla de usuarios con el id 1
                'category_id' => 1, // asumiendo que ya tienes una categoría en la tabla de categorías con el id 1
            ]);
        }
    }
}