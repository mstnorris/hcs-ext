<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMobileDeviceTable extends Migration {

	public function up()
	{
		Schema::create('devices', function(Blueprint $table)
		{
            $table->engine = 'InnoDB';
            $table->string('user_hcsid', 5)->primary();
            $table->foreign('user_hcsid')->references('hcsid')->on('users')->onDelete('cascade');
            $table->string('mobile_phone_number')->nullable();
            $table->string('mobile_simcard_number')->nullable();
            $table->string('device_imei_number')->nullable();
            $table->string('device_make')->nullable();
            $table->string('device_model')->nullable();
            $table->string('device_description')->nullable();
            $table->string('contract_start_date')->nullable();
            $table->string('contract_length_months')->nullable();
            $table->string('contract_end_date')->nullable();
            $table->string('contract_tariff')->nullable();
            $table->string('contract_cost_per_month')->nullable();
            $table->string('contract_account_holder_hcsid')->references('hcsid')->on('users');
            $table->timestamps();
            $table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('devices', function(Blueprint $table)
		{
			//
		});
	}

}
