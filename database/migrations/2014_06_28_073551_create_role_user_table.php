<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRoleUserTable extends Migration {

	public function up()
	{
		Schema::create('role_user', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('role_hcsid', 5);
            $table->foreign('role_hcsid')->references('hcsid')->on('roles')->onDelete('cascade');
			$table->string('user_hcsid', 5);
            $table->foreign('user_hcsid')->references('hcsid')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
	}

	public function down()
	{
		Schema::drop('role_user');
	}
}