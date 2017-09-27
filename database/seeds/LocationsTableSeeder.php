<?php

use Illuminate\Database\Seeder;

class LocationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('locations')->insert(
        	[
        		[
        			'name' => 'lab',
        			'created_at' => date("Y-m-d H:i:s")
        		],[
        			'name' => 'vava',
        			'created_at' => date("Y-m-d H:i:s")
        		],[
        			'name' => 'purple',
        			'created_at' => date("Y-m-d H:i:s")
        		],[
        			'name' => 'charleston',
        			'created_at' => date("Y-m-d H:i:s")
        		],[
        			'name' => 'columbia',
        			'created_at' => date("Y-m-d H:i:s")
        		]
        	]
        );
    }
}
