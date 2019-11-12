<?php

use Illuminate\Database\Seeder;
use App\Services;
class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data =
		        [
		        	
		        	[
			        	'name' => 'Staff capacitado',
			        	'path' => 'img/icons/1.svg',
			        	'locale' => 'en'
		        	],
		        	[
			        	'name' => 'Amabilidad y amigable',
			        	'path' => 'img/icons/2.svg',
			        	'locale' => 'en'
		        	],
		        	[
			        	'name' => 'Traslado incluido',
			        	'path' => 'img/icons/3.svg',
			        	'locale' => 'en'
		        	],
		        	[
			        	'name' => 'Calidad en el servicio',
			        	'path' => 'img/icons/4.svg',
			        	'locale' => 'es'
		        	]
		        ];

		Services::insert($data);
    }
}
