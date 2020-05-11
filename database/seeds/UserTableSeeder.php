<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        	'type' => 'Admin',
        	'name' => 'Yug Soni',
        	'email' => 'yug.spider@gmail.com',
        	'username' => 'yug-soni',
        	'avatar' => 'yug.jpg',
        	'gender' => 'Male',
        	'country' => 'India',
        	'password' => '21march2006',
          'created_at' => date("Y/m/d")
        ]);
    }
}
