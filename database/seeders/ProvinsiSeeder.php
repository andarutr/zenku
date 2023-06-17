<?php

namespace Database\Seeders;

use File;
use Illuminate\Database\Seeder;

class ProvinsiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get('database/data/provinsi.json');
        $provinsi = json_decode($json);

        foreach($provinsi as $prv){
          \DB::table('provinsi')->insert([
            'name_provinsi' => $prv->name_provinsi
          ]);
        }
    }
}
