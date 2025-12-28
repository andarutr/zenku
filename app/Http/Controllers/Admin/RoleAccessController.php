<?php

namespace App\Http\Controllers\Admin;

use App\Models\Role;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\EditRoleRequest;
use App\Http\Requests\Admin\PostRoleRequest;
use App\Services\RoleService;

class RoleAccessController extends Controller
{
    protected $roleService;

    public function __construct(RoleService $roleService)
    {
        $this->roleService = $roleService;
    }

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
        $this->roleService->store($req->all());

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
        $this->roleService->update($id, $req->all());

        return redirect()->route('admin.role.index')->withToastSuccess('Berhasil memperbarui role!');
    }
    
    public function destroy($id)
    {
        $this->roleService->destroy($id);
        
        return redirect()->route('admin.role.index')->withToastSuccess('Berhasil menghapus role!');
    }
}
