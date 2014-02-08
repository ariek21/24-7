<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateContactsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('contacts', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('client_id');
			$table->string('name');
			$table->string('address')->nullable();
			$table->string('phone_1')->nullable();
			$table->string('phone_2')->nullable();
			$table->string('phone_3')->nullable();
			$table->integer('floor')->nullable();
			$table->string('apartment_number')->nullable();
			$table->string('email')->nullable();
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
		Schema::drop('contacts');
	}

}