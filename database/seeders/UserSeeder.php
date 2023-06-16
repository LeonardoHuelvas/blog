<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Leonardo Huelvas',
            'email' => 'lejhubo01@hotmail.com',
            'password'=> Hash::make('12345678')
        ]);

        User::create([
            'name' => 'Luis Carlos Mendinueta',
            'email' => 'lucmo01@hotmail.com',
            'password'=> Hash::make('12345678')
        ]);

        User::factory(10)->create();
    }
}
