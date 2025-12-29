<?php

namespace App\Http\Controllers\Global;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

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
            $this->update_with_picture($req);
        }else{
            $this->update_without_picture($req);
        }

        \Record::track('Memperbarui Profile');

        return redirect()->back()->withToastSuccess('Berhasil memperbarui profile!');
    }

    public function update_without_picture($req)
    {
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

    public function update_with_picture($req)
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
    }
}
