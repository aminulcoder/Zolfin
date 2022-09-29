<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Faker\Factory;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Factory::create();

        for($i=0; $i<10; $i++){

            DB::table('users')->insert([
                'name'      => $faker->name(),
                'username'  => $faker->username(),
                'photo'     => $faker->imageUrl(100, 100),
                'email'     => $faker->safeEmail(),
                'password'  => Hash::make("pass1234")
            ]);

        }


    }
}
