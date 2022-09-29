<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Faker\Factory;
use Illuminate\Support\Carbon;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Factory::create();

        for($i = 0; $i < 10; $i++) : 

            $posts = [
                'title' => $faker->realText(30),
                'slug' => $faker->slug(),
                'excerpt' => $faker->paragraph(2),
                'thumbnail' => $faker->imageUrl(1000, 600),
                'content'   => $faker->paragraph(10),
                'user_id'   => $faker->numberBetween(1, 5),
                'category_id'   => $faker->numberBetween(1, 5),
                'created_at'    => Carbon::now()->format('Y-m-d h:i:s'),
                'updated_at'    => Carbon::now()->format('Y-m-d h:i:s'),
                'views' => $faker->numberBetween(100, 4000)
            ];
            DB::table("posts")->insert($posts);

        endfor;
    }
}
