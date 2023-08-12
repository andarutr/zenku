<?php

namespace Database\Seeders;

use File;
use Illuminate\Database\Seeder;

class CategoryMenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get('database/data/category_menu.json');
        $category_menu = json_decode($json);

        foreach($category_menu as $ctg){
            \DB::table('category_menu')->insert([
                'category_menu' => $ctg->category_menu 
            ]);
        }
    }
}
