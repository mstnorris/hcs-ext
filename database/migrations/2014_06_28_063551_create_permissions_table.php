<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePermissionsTable extends Migration {

	public function up()
	{
		Schema::create('permissions', function(Blueprint $table) {
			$table->string('hcsid', 5)->primary();
			$table->string('slug', 100);
		});
	}

	public function down()
	{
		Schema::drop('permissions');
	}
}