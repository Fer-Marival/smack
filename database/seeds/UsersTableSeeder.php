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
        		'password' => bcrypt('secret'),
                'path' => 'https://diariopresenterm.blob.core.windows.net.optimalcdn.com/images/2018/04/01/cropw0h0comportamientodelosmonoscapuchinos1-focus-0.01-0.16-760-475.jpg'
        	],
        	[
        		'name' => 'Fernando',
        		'email' => 'furibe@marivalaccess.com',
        		'password' => bcrypt('secret'),
                'path' => 'https://cdn.20m.es/img2/recortes/2013/06/04/124695-600-338.jpg'
        	]
        ];

        User::insert($data);
    }
}
