<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('TasksTableSeeder');
		$this->call('UsersTableSeeder');
		$this->call('RolesTableSeeder');
		$this->call('UsersRolesTableSeeder');
		$this->call('ClientsTableSeeder');
		$this->call('ContactsTableSeeder');
		$this->call('ClientUsersTableSeeder');
	}

}