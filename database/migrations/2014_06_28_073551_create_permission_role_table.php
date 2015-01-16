<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePermissionRoleTable extends Migration {

	public function up()
	{
		Schema::create('permission_role', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('permission_hcsid', 5);
            $table->foreign('permission_hcsid')->references('hcsid')->on('permissions')->onDelete('cascade');
            $table->string('role_hcsid', 5);
            $table->foreign('role_hcsid')->references('hcsid')->on('roles')->onDelete('cascade');
            $table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('permission_role');
	}
}