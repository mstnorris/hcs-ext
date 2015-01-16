<?php

use Faker\Factory as Faker;

class SimpleTableSeeder extends Seeder {

	public function run()
	{
        $faker = Faker::create('en_GB');
        $mike_hcsid = str_random(5);

        $mike_updated_at  = $faker->dateTimeBetween($startDate = '-6 months', $endDate = 'now');
        $mike_created_at  = $faker->dateTimeBetween($startDate = '-2 years', $endDate = $mike_updated_at);

        // Mike's account
        User::create([
            'hcsid'      => $mike_hcsid,
            'email'      => 'mstnorris@gmail.com',
            'username'   => 'mstnorris',
            'password'   => 'password',
            'key'        => str_random(5),
            'confirmed'  => 1,
            'created_at' => $mike_created_at,
            'updated_at' => $mike_updated_at
        ]);

        Profile::create([
            'user_hcsid'       => $mike_hcsid,
            'name'             => 'Michael Norris',
            'nickname'         => 'Mike',
            'dob'              => '1988-08-17',
            'photo'            => 'http://hawksmoor.dev:8000/img/profile_photos/mstnorris.png',
            'job_description'  => 'Software Engineer',
            'company'          => 'Hawksmoor',
            'mobile'           => '07446990061',
            'landline'         => '01273276739',
            'address_line1'    => '121 Ditchling Rise',
            'address_line2'    => 'Ground Floor Flat',
            'address_town'     => 'Brighton',
            'address_county'   => 'East Sussex',
            'address_country'  => 'UK',
            'address_postcode' => 'BN1 4QP',
            'languages'        => 'English',
            'bio'              => 'This is a little excerpt about me.',
            'work_email'       => 'michaelnorris@hawksmoorcs.co.uk',
            'home_email'       => 'mstnorris@gmail.com'
        ]);

	}

}
