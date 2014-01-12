<?php

class ClientsTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('clients')->truncate();

		DB::table('clients')->insert(
			array(
				'city'=>'ראשון לציון',
				'address'=>'האבות',
				'address_number'=> '20',
				'number_of_floors' => 8,
				'number_of_apartments' => 25,
				'main_photo_url' => 'http://upload.wikimedia.org/wikipedia/commons/2/2f/Greist_Building.JPG',
				'contract_start' => new DateTime(),
				'contract_end' => new DateTime('1-1-2015'),
				'cashback_value' => 2500,
				'discount_percent' => 5,
				'package_id' => 1,
			)
		);

		DB::table('clients')->insert(
			array(
				'city'=>'חולון',
				'address'=>'הראובני',
				'address_number'=> '14',
				'number_of_floors' => 3,
				'number_of_apartments' => 12,
				'main_photo_url' => 'http://inhabitat.com/gherkin-gets-a-green-roof/wp-content/blogs.dir/1/files/greengherkin.jpg',
				'contract_start' => new DateTime(),
				'contract_end' => new DateTime('15-6-2014'),
				'cashback_value' => 1800,
				'discount_percent' => 4,
				'package_id' => 1,
			)
		);


	}

}
