<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateClientUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('client_users', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('client_id')->nullable();
			$table->string('username');
			$table->string('email');
			$table->string('password', 60);
			$table->boolean('status');
			$table->dateTime('last_login')->nullable();
			$table->string('real_name');
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
		Schema::drop('client_users');
	}

}