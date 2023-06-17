<?php

namespace Database\Seeders;

use File;
use Illuminate\Database\Seeder;

class KotaAdministrasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $json = File::get('database/data/kota_administrasi.json');
      $kota_administrasi = json_decode($json);

      foreach($kota_administrasi as $admn){
        \DB::table('kota_administrasi')->insert([
          'name_kota_administrasi' => $admn->name_kota_administrasi
        ]);
      }
    }
}
