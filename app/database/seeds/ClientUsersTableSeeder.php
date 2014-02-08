<?php

class ClientUsersTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('client_users')->truncate();

		// Uncomment the below to run the seeder
		DB::table('client_users')->insert(array(
			'username'=>'moshe',
			'real_name'=> 'משב אפללו',
			'password'=>'1234',
			'client_id'=> '1',
			'last_login' => new DateTime('10/1/2014')
		));

		DB::table('client_users')->insert(array(
			'username'=>'david',
			'real_name' => 'דוד דוד',
			'password'=>'1234',
			'client_id'=> '1',
			'last_login' => new DateTime('1/11/2013')
		));
	}

}
