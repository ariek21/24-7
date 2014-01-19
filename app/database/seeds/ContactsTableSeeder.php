<?php

class ContactsTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('contacts')->truncate();

		DB::table('contacts')->insert(
			array(
				'name'=>'נדב אבידן',
				'phone_1'=>'054-8835020',
				'phone_2'=> '',
				'phone_3' => '',
				'address' => 'האבות 20',
				'floor' => 4,
				'apartment_number' => 24,
				'email' => 'nadav.avidan@convertro.com',
			)
		);

	}

}
