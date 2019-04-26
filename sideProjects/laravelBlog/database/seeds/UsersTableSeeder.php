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
        //reset the users table
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('users')->truncate();

        //generate 4 users/author
        DB::table('users')->insert([

        	[
        		'name' => 'Jonathon Dumbitj', 
        		'email' => 'jond@gmail.com',
        		'password' => bcrypt('secret')

        	],

        	[
        		'name' => 'Lana Dumbitj', 
        		'email' => 'lana@gmail.com',
        		'password' => bcrypt('ret')

        	],

        	[
        		'name' => 'Tim Dumbitj', 
        		'email' => 'timd@gmail.com',
        		'password' => bcrypt('secret')

        	],

        ]);
    }
}
