<?php

namespace Database\Seeders;

use File;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get('database/data/category.json');
        $categories = json_decode($json);

        foreach($categories as $ctg){
            \DB::table('categories')->insert([
                'category' => $ctg->category 
            ]);
        }
    }
}
