<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProfilesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('profiles', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->string('user_hcsid', 5)->primary();
            $table->foreign('user_hcsid')->references('hcsid')->on('users')->onDelete('cascade');
            $table->string('name');
            $table->string('nickname');
            $table->date('dob');
            $table->string('photo')->nullable();
            $table->string('job_description')->nullable();
            $table->string('company')->nullable();
            $table->string('mobile')->nullable();
            $table->string('landline')->nullable();
            $table->string('address_line1')->nullable();
            $table->string('address_line2')->nullable();
            $table->string('address_town')->nullable();
            $table->string('address_county')->nullable();
            $table->string('address_country')->nullable();
            $table->string('address_postcode')->nullable();
            $table->string('languages')->nullable();
            $table->text('bio')->nullable();
            $table->string('work_email')->nullable();
            $table->string('home_email')->nullable();

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
		Schema::drop('profiles');
	}

}
