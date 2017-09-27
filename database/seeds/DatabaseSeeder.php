<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ItemsTableSeeder::class);
        $this->call(UserRolesTableSeeder::class);
        $this->call(CompaniesTableSeeder::class);
        $this->call(SizesTableSeeder::class);
        $this->call(ItemsSizesTableSeeder::class);
    }
}
