<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateHcsidTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('hcsid', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->string('hcsid', 5);
            $table->integer('table_number');
            $table->string('table_name');
            $table->timestamps();
            $table->softDeletes();
            $table->primary(array('hcsid', 'table_number'));
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('hcsid');
	}

}
