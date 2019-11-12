<?php

use Illuminate\Database\Seeder;
use App\Category;
class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = [

        	[
        		'name' => 'producto',
        	],
        	[
        		'name' => 'tour',
        	],
        	[
        		'name' => 'translados',
        	]

        ];

        Category::insert($category);
    }
}
