<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PostRoleRequest;
use App\Http\Requests\Admin\EditRoleRequest;

class RoleAccessController extends Controller
{
    public function index()
    {
        $data['menu'] = 'Role';
        return view('pages.admin.account.role', $data);
    }

    public function create()
    {
        $data['menu'] = 'Tambah Role';

        return view('pages.admin.account.role_add', $data);
    }

    public function store(PostRoleRequest $req)
    {
        $req->validated();

        $create = \DB::table('roles')->insert([
            'id_role' => $req->id_role,
            'name_role' => $req->name_role,
        ]);

        return redirect()->route('admin.role.index')->withToastSuccess('Berhasil menambah role!');
    }

    public function edit(Request $req, $id_role)
    {
        $data['menu'] = 'Perbarui Role';
        $data['id_role'] = $id_role;

        return view('pages.admin.account.role_edit', $data);
    }

    public function update(EditRoleRequest $req, $id_role)
    {
        $req->validated();

        $update = \DB::table('roles')
                    ->where('id_role', $id_role)
                    ->update([
                        'id_role' => $req->id_role,
                        'name_role' => $req->name_role,
                    ]);

        return redirect()->route('admin.role.index')->withToastSuccess('Berhasil memperbarui role!');
    }
    
    public function destroy($id_role)
    {
        \DB::table('roles')->where('id_role', $id_role)->delete();
        return redirect()->route('admin.role.index')->withToastSuccess('Berhasil menghapus role!');
    }
}
