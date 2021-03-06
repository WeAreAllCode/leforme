<?php

use Illuminate\Database\Seeder;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders')->insert(
        	[
        		[
        			'user_id' => '1',
        			'created_at' => date("Y-m-d H:i:s")
        		],[
        			'user_id' => '1',
        			'created_at' => date("Y-m-d H:i:s")
        		],[
                    'user_id' => '1',
                    'created_at' => date("Y-m-d H:i:s")
                ]
        	]
        );
    }
}
