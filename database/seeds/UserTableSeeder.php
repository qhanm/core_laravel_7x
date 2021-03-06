<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        $limit = 50;
        for($i = 0; $i < $limit; $i++)
        {
            \Illuminate\Support\Facades\DB::table('users')->insert([
                'email' => $faker->unique()->email,
                'password' => \Illuminate\Support\Facades\Hash::make('nam631996'),
                'name' => $faker->name,
            ]);
        }
    }
}
