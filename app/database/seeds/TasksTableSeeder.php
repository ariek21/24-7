<?php

class TasksTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('tasks')->truncate();

			DB::table('tasks')->insert(array(
				'building_id' => 1,
				'user_id' => 1,
				'title' => 'Broken lamp',
				'description' => '3 Broken lamps in the loby, 3rd floor and first floor',
				'responded_by' => 'Nadava',
				'created_at' => new DateTime(),
				'updated_at' => new DateTime()

			));
			DB::table('tasks')->insert(array(
				'building_id' => 1,
				'user_id' => 1,
				'title' => 'Broken Window',
				'description' => 'Lorem ipsum dan tantolem',
				'responded_by' => 'Nadava',
				'created_at' => new DateTime(),
				'updated_at' => new DateTime()
			));

			DB::table('tasks')->insert(array(
				'building_id' => 1,
				'user_id' => 2,
				'title' => 'Garden looks bad',
				'description' => 'The gardner didn\'t visit in a while now...',
				'responded_by' => 'Nadava',
				'status' => 'active',
				'created_at' => new DateTime(),
				'updated_at' => new DateTime()
			));

			DB::table('tasks')->insert(array(
				'building_id' => 1,
				'user_id' => 2,
				'title' => 'Coffee spill in the hall',
				'description' => 'Someone spilled coffee in the lobby, please send a cleaner',
				'status' => 'finished',
				'created_at' => new DateTime(),
				'updated_at' => new DateTime()
			));

	}

}
