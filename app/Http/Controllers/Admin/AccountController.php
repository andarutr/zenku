<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menu = 'Account';
        return view('pages.admin.management.account', compact('menu'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $menu = 'Tambah Account';
        return view('pages.admin.management.account_add', compact('menu'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        $this->validate($req, [
            'name' => 'required|unique:users',
            'email' => 'required|unique:users',
            'id_role' => 'required',
        ]);

        $store = User::create([
            'name' => $req->name,
            'email' => $req->email,
            'password' => bcrypt('zenku123'),
            'picture' => 'user.png', 
            'id_role' => $req->id_role,
            'id_provinsi' => 17,
            'id_kota_administrasi' => 1
        ]);

        return redirect()->route('admin.account.index')->withToastSuccess('Berhasil menambah akun!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $menu = 'Profile';
        return view('pages.admin.management.account_edit', compact('menu','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, $id)
    {
        $this->validate($req, [
            'name' => 'required',
            'email' => 'required',
        ]);

        $update = User::where('id', $id)
        ->update([
            'name' => $req->name,
            'email' => $req->email,
            'birthday' => $req->birthday,
            'whatsapp' => $req->whatsapp,
            'alamat' => $req->alamat,
            'id_provinsi' => $req->id_provinsi,
            'id_kota_administrasi' => $req->id_kota_administrasi,
            'kode_pos' => $req->kode_pos,
            'status_kenegaraan' => $req->status_kenegaraan,
            'updated_at' => now()
        ]);

        return redirect()->route('admin.account.index')->withToastSuccess('Berhasil memperbarui akun!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Track Activity Account
        $user = User::where('id', $id)->first();

        \Record::track('Menghapus Akun '.$user->name);

        $destroy = User::where('id', $id)->delete();

        return redirect()->back()->withToastSuccess('Berhasil menghapus data!');
    }

    public function ganti_password($id)
    {
        $menu = 'Ganti Password Account';
        $user = User::where('id', $id)->first();

        return view('pages.admin.management.ganti_password', compact('menu','user'));
    }

    public function proses_ganti_password(Request $req, $id)
    {
        $this->validate($req, [
            'new_password' => 'required|min:8'
        ]);

        $ganti_password = User::where('id', $id)
                                ->update([
                                    'password' => \Hash::make($req->new_password),
                                    'updated_at' => now()
                                ]);
            
        return redirect()->route('admin.account.index')->withToastSuccess('Berhasil memperbarui password!');
    }
}
