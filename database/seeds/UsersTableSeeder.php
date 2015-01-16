<?php

use Faker\Factory as Faker;
use Hawksmoor\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    public function run()
    {
        $faker = Faker::create();

        //create 20 users
        foreach (range(1, 20) as $index) {
            $user_hcsid  = str_random(5);
            echo $user_hcsid . "<br />";
            $user_updated_at = $faker->dateTimeBetween($startDate = '-6 months', $endDate = 'now');
            $user_created_at = $faker->dateTimeBetween($startDate = '-2 years', $endDate = $user_updated_at);
            $user_username = $faker->userName;
            $user_email = $user_username . $faker->companyEmail;

            User::create([
                'hcsid'      => $user_hcsid,
                'email'      => $user_email,
                'password'   => 'password',
                'key'        => str_random(5),
                'confirmed'  => $faker->boolean(),
                'created_at' => $user_created_at,
                'updated_at' => $user_updated_at
            ]);
        }
    }
}