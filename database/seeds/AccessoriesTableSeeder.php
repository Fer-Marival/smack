<?php

use Illuminate\Database\Seeder;
use App\Accessories;

class AccessoriesTableSeeder extends Seeder
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
	        	'name' => 'prodcuto1',
	        	'image' => 'https://http2.mlstatic.com/estabilizador-gopro-karma-grip-para-hero-5-hero-6-y-hero-7-D_NQ_NP_773318-MLM29223576726_012019-F.jpg',
	        	'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
	        	'availables' => '11',
	        	'price' => '345.50',
	        	'product_id' => 1,
	        ],

	        [
	        	'name' => 'prodcuto2',
	        	'image' => 'http://www.fotosamar.eu/2419-thickbox_default/gopro-the-strap-correa-de-mano-y-muneca.jpg',
	        	'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
	        	'availables' => '16',
	        	'price' => '675.50',
	        	'product_id' => 1,
	        ],
	        [
	        	'name' => 'prodcuto3',
	        	'image' => 'https://sgfm.elcorteingles.es/SGFM/dctm/IMAGENES02/201203/16/00108438396080___P1_600x600.jpg',
	        	'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
	        	'availables' => '9',
	        	'price' => '147.99',
	        	'product_id' => 1,
	        ],
     	];

     	Accessories::insert($data);
    }
}
