<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserService 
{
    public function store(array $data)
    {
        $store = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt('zenku123'),
            'picture' => 'user.png', 
            'role_id' => $data['id_role'],
            'provinsi' => 'DKI Jakarta',
            'kota_administrasi' => 'Jakarta Timur'
        ]);

        return $store;
    }

    public function update($id, array $data)
    {
        $update = User::where('id', $id)
            ->update([
                'name' => $data['name'],
                'email' => $data['email'],
                'birthday' => $data['birthday'],
                'whatsapp' => $data['whatsapp'],
                'alamat' => $data['alamat'],
                'provinsi' => $data['provinsi'],
                'kota_administrasi' => $data['kota_administrasi'],
                'kode_pos' => $data['kode_pos'],
                'status_kenegaraan' => $data['status_kenegaraan'],
                'updated_at' => now()
            ]);

        return $update;
    }

    public function destroy($id)
    {
        $user = User::where('id', $id)->first();

        \Record::track('Menghapus Akun '.$user->name);

        $destroy = User::where('id', $id)->delete();

        return $destroy;
    }

    public function changePassword($id, array $data)
    {
        $data = User::where('id', $id)
                    ->update([
                        'password' => Hash::make($data['new_password']),
                        'updated_at' => now()
                    ]);

        return $data;
    }
}