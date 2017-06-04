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
         $this->call(LookupTableSeeder::class);
         $this->call(AdminUserTableSeeder::class);
         $this->call(InitialApplicationSeeder::class);

    }
}

