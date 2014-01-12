<?php

class UsersTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('users')->truncate();

		DB::table('users')->insert(
			array(
				'username'=>'nadava',
				'email'=>'nadav.avidan@convertro.com',
				'password'=> Hash::make('1234'),
				'role_id' => 1,
				'created_at' => new DateTime(),
				'updated_at' => new DateTime()
			)
		);
		DB::table('users')->insert(
			array(
				'username'=>'motti',
				'email'=>'nihul247@gmail.com',
				'password'=> Hash::make('1234'),
				'role_id' => 2,
				'created_at' => new DateTime(),
				'updated_at' => new DateTime()
			)
		);

		DB::table('users')->insert(
			array(
				'username'=>'jhon',
				'email'=>'jhon@gmail.com',
				'password'=> Hash::make('1234'),
				'role_id' => 2,
				'created_at' => new DateTime(),
				'updated_at' => new DateTime()
			)
		);

	}

}
