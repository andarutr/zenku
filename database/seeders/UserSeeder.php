<?php

namespace Database\Seeders;

use File;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get('database/data/users.json');
        $users = json_decode($json);

        foreach($users as $user){
          User::create([
            'name' => $user->name,
            'email' => $user->email,
            'password' => $user->password,
            'picture' => $user->picture,
            'id_role' => $user->id_role,
            'id_provinsi' => $user->id_provinsi,
            'id_kota_administrasi' => $user->id_kota_administrasi,
            'birthday' => $user->birthday,
            'whatsapp' => $user->whatsapp,
            'alamat' => $user->alamat,
            'kode_pos' => $user->kode_pos,
            'bio' => $user->bio,
            'status_kenegaraan' => $user->status_kenegaraan,
            'updated_at' => $user->updated_at,
            'created_at' => $user->created_at
          ]);
        }
    }
}
