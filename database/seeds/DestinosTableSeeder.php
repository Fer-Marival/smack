<?php

use Illuminate\Database\Seeder;
use App\Destino;

class DestinosTableSeeder extends Seeder
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
        		'name' => 'Puerto Vallarta DownTown',
        		'description' => 'lorem',
        		'locale' => 'es'
        	],
        	[
        		'name' => 'La marina',
        		'description' => 'lorem',
        		'locale' => 'es'
        	],
        	[
        		'name' => 'Mismaloya beach',
        		'description' => 'lorem',
        		'locale' => 'es'
        	],
        	[
        		'name' => 'Cerro del mono',
        		'description' => 'lorem',
        		'locale' => 'es'
        	],
        	[
        		'name' => 'Cascadas de Mismaloya',
        		'description' => 'lorem',
        		'locale' => 'es'
        	]
        ];

        Destino::insert($data);
    }
}