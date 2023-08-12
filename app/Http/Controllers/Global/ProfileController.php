<?php

namespace App\Http\Controllers\Global;

use Auth;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    public function index()
    {
        $menu = 'Profile';
        return view('pages.global.profile', compact('menu'));
    }
    
    public function update(Request $req, $id_user)
    {
        if($req->hasFile('picture'))
        {
            $file = $req->file('picture');
            $file->move('img/profile/', $file->getClientOriginalName());
            User::where('id', Auth::user()->id)
                    ->update([
                        'name' => $req->name,
                        'picture' => $file->getClientOriginalName(),
                        'birthday' => $req->birthday,
                        'whatsapp' => $req->whatsapp,
                        'alamat' => $req->alamat,
                        'bio' => $req->bio,
                        'provinsi' => $req->provinsi,
                        'kota_administrasi' => $req->kota_administrasi,
                        'kode_pos' => $req->kode_pos,
                        'status_kenegaraan' => $req->status_kenegaraan,
                        'updated_at' => now()
                    ]);
        }else{
            User::where('id', Auth::user()->id)
                    ->update([
                        'name' => $req->name,
                        'birthday' => $req->birthday,
                        'whatsapp' => $req->whatsapp,
                        'alamat' => $req->alamat,
                        'bio' => $req->bio,
                        'provinsi' => $req->provinsi,
                        'kota_administrasi' => $req->kota_administrasi,
                        'kode_pos' => $req->kode_pos,
                        'status_kenegaraan' => $req->status_kenegaraan,
                        'updated_at' => now()
                    ]);
        }

        // Track Activity Account
        \Record::track('Memperbarui Profile');

        return redirect()->back()->withToastSuccess('Berhasil memperbarui profile!');
    }
}
