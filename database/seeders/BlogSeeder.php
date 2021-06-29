<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\User;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;


class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        foreach (range(1,10) as $value) {
            Blog::create([
                'user_id'     => 1,
                'title'       => Str::substr($faker->paragraph(), 0, 20),
                'description' => $faker->paragraph(),
            ]);
        }
    }
}
