<?php

use Illuminate\Database\Seeder;

use App\Admin;

use App\User;

class AdminUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new Admin();
        $admin->name = 'sunjhen29';
        $admin->email = 'sunjhen29@yahoo.com';
        $admin->password = bcrypt('forever');
        $admin->save();

        $admin = new Admin();
        $admin->name = 'mijaeya';
        $admin->email = 'mijaeya@gmail.com';
        $admin->password = bcrypt('707');
        $admin->save();
    }
}
