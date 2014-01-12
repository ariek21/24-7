<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateClientsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('clients', function(Blueprint $table) {
			$table->increments('id');
			$table->string('city');
			$table->string('address');
			$table->string('address_number');
			$table->integer('number_of_floors');
			$table->integer('number_of_apartments');
			$table->text('general_comment');
			$table->string('main_photo_url');
			$table->dateTime('contract_start');
			$table->dateTime('contract_end')->nullable();
			$table->integer('cashback_value')->nullable();
			$table->integer('discount_percent')->nullable();
			$table->integer('package_id')->nullable();

			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('clients');
	}

}
