<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
        	[
        		[
        			'first_name' => 'joey',
                    'last_name' => 'user',
        			'email' => 'joey@moticorp.com',
        			'password' => 'secret',
        			'user_role_id' => '1',
        			'created_at' => date("Y-m-d H:i:s")
        		],[
        			'first_name' => 'lab',
                    'last_name' => 'user',
        			'email' => 'joey+1@moticorp.com',
        			'password' => 'secret',
        			'user_role_id' => '1',
        			'created_at' => date("Y-m-d H:i:s")
        		],[
        			'first_name' => 'vava',
                    'last_name' => 'user',
        			'email' => 'joey+2@moticorp.com',
        			'password' => 'secret',
        			'user_role_id' => '1',
        			'created_at' => date("Y-m-d H:i:s")
        		],[
        			'first_name' => 'purple',
                    'last_name' => 'user',
        			'email' => 'joey+3@moticorp.com',
        			'password' => 'secret',
        			'user_role_id' => '1',
        			'created_at' => date("Y-m-d H:i:s")
        		],[
        			'first_name' => 'columbia',
                    'last_name' => 'user',
        			'email' => 'joey+4@moticorp.com',
        			'password' => 'secret',
        			'user_role_id' => '1',
        			'created_at' => date("Y-m-d H:i:s")
        		],[
        			'first_name' => 'charleston',
                    'last_name' => 'user',
        			'email' => 'joey+5@moticorp.com',
        			'password' => 'secret',
        			'user_role_id' => '1',
        			'created_at' => date("Y-m-d H:i:s")
        		]
        	]
        );
    }
}
