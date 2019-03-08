<?php

use Illuminate\Database\Seeder;
use App\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() 
    {
        $data = [

        	[
        		'name' => 'Gilberto',
        		'email' => 'gparedes@marivalaccess.com',
        		'password' => bcrypt('123456')
        	],
        	[
        		'name' => 'Fernando',
        		'email' => 'furibe@marivalaccess.com',
        		'password' => bcrypt('123456')
        	]
        ];

        User::insert($data);
    }
}
