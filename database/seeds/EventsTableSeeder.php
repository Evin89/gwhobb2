<?php

use Illuminate\Database\Seeder;

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('events')->insert([
    		'title' => 'Event One',
    		'description' => 'Met een toffe beschrijving',
    		'from' => new DateTime(),
    		'till' => new DateTime(),
    		'user_id' => 1,
    		'location' => '3100AA, Rotterdam',
    		'cost' => 10,
    		]);


    	DB::table('events')->insert([
    		'title' => 'Event Two',
    		'description' => 'Met een toffe beschrijving',
    		'from' => new DateTime(),
    		'till' => new DateTime(),
    		'user_id' => 1,
    		'location' => '3100AA, Rotterdam',
    		'cost' => 10,
    		]);

    	DB::table('events')->insert([
    		'title' => 'Event Two',
    		'description' => 'Met een toffe beschrijving',
    		'from' => new DateTime(),
    		'till' => new DateTime(),
    		'user_id' => 1,
    		'location' => '3100AA, Rotterdam',
    		'cost' => 10,
    		]);
    }
}
