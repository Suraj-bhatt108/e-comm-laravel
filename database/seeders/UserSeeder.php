<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;  //import the database
use Illuminate\Support\Facades\Hash; // hash is used for encrypt the password
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=>'Sanjay Bhatt',
            'email'=>'sanjay@bhatt.com',
            'password'=>Hash::make('654321')
        ]);
    }
}
