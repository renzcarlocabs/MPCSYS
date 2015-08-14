<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        	\App\User::create([
        		'email' => "renz",
                'name' => "carlo",
        		'password' => Hash::make('pass')
        		]);
    }
}
