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
            'role_id' => $user->role_id,
            'provinsi' => $user->provinsi,
            'kota_administrasi' => $user->kota_administrasi,
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
