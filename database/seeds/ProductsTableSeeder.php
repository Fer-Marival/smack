<?php

use Illuminate\Database\Seeder;
  use Illuminate\Database\Eloquent\Factory;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*factory(App\User::class, 2)->create()->each(function($u) {
    		$u->issues()->save(factory(App\Issues::class)->make());
  		});*/
		factory(\App\Product::class, 15)->create();
    }
}
