<?php

namespace Database\Seeders;

use File;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get('database/data/menus.json');
        $menus = json_decode($json);

        foreach($menus as $menu){
            \DB::table('menu')->insert([
                'name_menu' => $menu->name_menu,
                'role_id' => $menu->role_id,
                'url_menu' => $menu->url_menu,
                'icon_menu' => $menu->icon_menu,
                'category_menu_id' => $menu->category_menu_id
            ]);
        }
    }
}
