<?php

namespace Database\Seeders;

use File;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get('database/data/roles.json');
        $roles = json_decode($json);

        foreach($roles as $role){
          \DB::table('roles')->insert([
            'id_role' => $role->id_role,
            'name_role' => $role->name_role
          ]);
        }
    }
}
