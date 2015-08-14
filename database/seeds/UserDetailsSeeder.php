<?php

use Illuminate\Database\Seeder;

class UserDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\UserDetail::create([
        		'employee_id' => "2",
                'user_level_id' => "2",
        		'fname' => 'tesasdt',
        		'mname' => 'tesst',
        		'lname' => 'tesasdt',
        		'address' => 'testdb',
        		'contact_no' => '1523455',
        		'date_employed' => 'test',
        		'basic_salary' => '10000',
        		'service_years' => "5",
        		'img' => 'test123',
        		'user_id' => '2'
        		]);
    }
}
