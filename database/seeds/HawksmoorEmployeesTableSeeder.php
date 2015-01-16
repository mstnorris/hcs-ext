<?php

use Faker\Factory as Faker;

class HawksmoorEmployeesTableSeeder extends Seeder {

	public function run()
	{
        // Metodi's account

        $faker = Faker::create('en_GB');
        $metodi_hcsid = str_random(5);

        $metodi_updated_at  = $faker->dateTimeBetween($startDate = '-6 months', $endDate = 'now');
        $metodi_created_at  = $faker->dateTimeBetween($startDate = '-2 years', $endDate = $metodi_updated_at);

        User::create([
            'hcsid'      => $metodi_hcsid,
            'email'      => 'metodigeorgiev@hawksmoorcs.co.uk',
            'username'   => 'mgeorgeiv',
            'password'   => 'password',
            'key'        => str_random(5),
            'confirmed'  => 1,
            'created_at' => $metodi_created_at,
            'updated_at' => $metodi_updated_at
        ]);


        $photo_category = $faker->randomElement($array = array('abstract', 'animals', 'city', 'food', 'nature', 'sports', 'transport'));
        $photo_number   = $faker->randomNumber(1, 10);

        Profile::create([
            'user_hcsid'       => $metodi_hcsid,
            'name'             => 'Metodi Georgiev',
            'nickname'         => 'Metodi',
            'dob'              => '1988-09-17',
            'photo'            => 'http://lorempixel.com/300/300/' . $photo_category . '/' . $photo_number,
            'job_description'  => 'Software Engineer',
            'company'          => 'Hawksmoor',
            'mobile'           => '07951657096',
            'landline'         => 'NA',
            'address_line1'    => 'NA',
            'address_line2'    => 'NA',
            'address_town'     => 'NA',
            'address_county'   => 'NA',
            'address_country'  => 'NA',
            'address_postcode' => 'NA',
            'languages'        => 'NA',
            'bio'              => 'NA',
            'work_email'       => 'metodigeorgiev@hawksmoorcs.co.uk',
            'home_email'       => 'NA'
        ]);
	}

}
