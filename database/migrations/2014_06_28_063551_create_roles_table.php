<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRolesTable extends Migration {

	public function up()
	{
		Schema::create('roles', function(Blueprint $table) {
			$table->string('hcsid', 5)->primary();
			$table->string('title');
            $table->smallInteger('level')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('roles');
	}
}