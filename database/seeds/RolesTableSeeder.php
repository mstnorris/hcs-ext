<?php

class RolesTableSeeder extends Seeder {

	public function run()
	{
        Role::create([
            'hcsid' => str_random(5),
            'title' => 'Super',
            'level' => 1000
        ]);

        Role::create([
            'hcsid' => str_random(5),
            'title' => 'Senior Administrator',
            'level' => 500
        ]);

        Role::create([
            'hcsid' => str_random(5),
            'title' => 'Administrator',
            'level' => 200
        ]);

        Role::create([
            'hcsid' => str_random(5),
            'title' => 'Senior Manager',
            'level' => 100
        ]);

        Role::create([
            'hcsid' => str_random(5),
            'title' => 'Manager',
            'level' => 50
        ]);

        Role::create([
            'hcsid' => str_random(5),
            'title' => 'Supervisor',
            'level' => 20
        ]);

        Role::create([
            'hcsid' => str_random(5),
            'title' => 'Worker',
            'level' => 10
        ]);
	}

}
