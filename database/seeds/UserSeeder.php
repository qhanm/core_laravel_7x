<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        $limit = 500;

        for ($i = 0; $i < 500; $i++)
        {
            \Illuminate\Support\Facades\DB::table('users')->insert([
                'name' => $faker->name,
                'username' => $faker->unique()->email,
                'email' => $faker->unique()->email,
                'password' => \Illuminate\Support\Facades\Hash::make($faker->password),
            ]);
        }
    }
}
