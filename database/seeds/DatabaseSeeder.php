<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

    /**
     * @var array
     */
    private $tables = array(
        'users',
        'profiles',
        'roles'
    );

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		//Model::unguard();

        $this->cleanDatabase();

		$this->call('UsersTableSeeder');
        $this->call('ProfilesTableSeeder');
		$this->call('SimpleTableSeeder');
        $this->call('HawksmoorEmployeesTableSeeder');
		$this->call('RolesTableSeeder');
	}

    public function cleanDatabase()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        foreach ($this->tables as $table) {
            DB::table($table)->truncate();
        }
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }

}