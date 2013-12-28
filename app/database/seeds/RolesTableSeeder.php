<?php

class RolesTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('roles')->truncate();

		$roles =
		array(
			array(
				'title'=>'Administrator',
				'description'=>'Super user',
			),
			array(
				'title'=>'Guest',
				'description'=>'User',
			),

		);

		// Uncomment the below to run the seeder
		DB::table('roles')->insert($roles);
	}

}
