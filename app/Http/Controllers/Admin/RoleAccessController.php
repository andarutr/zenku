<?php

namespace App\Http\Controllers\Admin;

use App\Models\Role;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\EditRoleRequest;
use App\Http\Requests\Admin\PostRoleRequest;

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

        $create = Role::create([
            'id' => $req->id,
            'role' => $req->role,
        ]);

        return redirect()->route('admin.role.index')->withToastSuccess('Berhasil menambah role!');
    }

    public function edit(Request $req, $id_role)
    {
        $data['menu'] = 'Perbarui Role';
        $data['id_role'] = $id_role;

        return view('pages.admin.account.role_edit', $data);
    }

    public function update(EditRoleRequest $req, $id)
    {
        $req->validated();

        $update = \DB::table('roles')
                    ->where('id', $id)
                    ->update([
                        'id' => $req->id,
                        'role' => $req->role,
                    ]);

        return redirect()->route('admin.role.index')->withToastSuccess('Berhasil memperbarui role!');
    }
    
    public function destroy($id)
    {
        $destroy = Role::where('id', $id)->delete();
        
        return redirect()->route('admin.role.index')->withToastSuccess('Berhasil menghapus role!');
    }
}
