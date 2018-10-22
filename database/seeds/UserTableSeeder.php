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
        $faker = Faker\Factory::create();
        for ($i = 0; $i < 15; $i++) {
            DB::table('users')->insert([
                'name' => $faker->name,
                'email' => $faker->unique->email,
                'phone' => $faker->phoneNumber,
                'password' => bcrypt('123456'),
                'facebook_id' => $faker->uuid,
                'google_id' => $faker->uuid,
                'avatar' => "public/images/avatars/" . $i . "jpg",
            ]);
        }
    }
}
