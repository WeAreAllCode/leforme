<?php

use Illuminate\Database\Seeder;

class UserRolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_roles')->insert(
        	[
        		[
        			'role' => 'admin',
        			'created_at' => date("Y-m-d H:i:s")
        		],[
        			'role' => 'manager',
        			'created_at' => date("Y-m-d H:i:s")
        		],[
        			'role' => 'staff-lab',
        			'created_at' => date("Y-m-d H:i:s")
        		],[
        			'role' => 'staff-vava',
        			'created_at' => date("Y-m-d H:i:s")
        		],[
        			'role' => 'staff-purple',
        			'created_at' => date("Y-m-d H:i:s")
        		],[
        			'role' => 'staff-columbia',
        			'created_at' => date("Y-m-d H:i:s")
        		],[
        			'role' => 'staff-charleston',
        			'created_at' => date("Y-m-d H:i:s")
        		]
        	]
        );
    }
}
