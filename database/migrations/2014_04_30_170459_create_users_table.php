<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table) {
            $table->engine = 'InnoDB';
			$table->string('hcsid', 5)->primary();
			//$table->string('username')->unique();
			$table->string('email')->unique();
			$table->string('password', 60);
            $table->string('key', 5);
            $table->boolean('confirmed')->default(0);
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}
