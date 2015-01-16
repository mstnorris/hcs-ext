<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class ProfilesTableSeeder extends Seeder
{

    public function run()
    {
        $faker = Faker::create('en_GB');
        $allUsers = User::lists('hcsid');
        foreach (range(0, DB::table('users')->count() - 1) as $index) {
            $user_hcsid     = $allUsers[$index];
            $user_firstname = $faker->firstName;
            $user_lastname  = $faker->lastName;
            $user_mobile    = "07" . $faker->numerify($string = '#########'); //"07" + $faker->randomNumber($nbDigits = 9);
            $user_landline  = "0208" . $faker->numerify($string = '#######'); //"07" + $faker->randomNumber($nbDigits = 9);
            $photo_category = $faker->randomElement($array = array('abstract', 'animals', 'city', 'food', 'nature', 'sports', 'transport'));
            $photo_number   = $faker->randomNumber(1, 10);
            $user_dob       = $faker->dateTimeBetween($startDate = '-60 years', $endDate = '-14 years');
            Profile::create([
                'user_hcsid'       => $user_hcsid,
                'name'             => $user_firstname . ' ' . $user_lastname,
                'nickname'         => $user_firstname,
                'dob'              => $user_dob,
                'photo'            => 'http://lorempixel.com/300/300/' . $photo_category . '/' . $photo_number,
                'job_description'  => $faker->randomElement($array = array('plumber', 'carpenter', 'electrician', 'gas engineer', 'kitchen fitter', 'carpet layer', 'driver', 'supervisor')),
                'company'          => 'Hawksmoor',
                'mobile'           => $user_mobile,
                'landline'         => $user_landline,
                'address_line1'    => $faker->streetAddress,
                'address_line2'    => $faker->streetName,
                'address_town'     => $faker->city,
                'address_county'   => $faker->county,
                'address_country'  => $faker->country,
                'address_postcode' => $faker->postcode,
                'languages'        => $faker->languageCode,
                'bio'              => $faker->text(),
                'work_email'       => $faker->email,
                'home_email'       => $faker->safeEmail
            ]);
            //User::whereHcsid($user_hcsid)->username($user_firstname.$user_lastname)->save();
        }

    }

}