<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\User\ChangePasswordUserRequest;
use App\Http\Requests\User\StoreUserRequest;
use App\Http\Requests\User\UpdateUserRequest;
use App\Services\UserService;

class AccountController extends Controller
{
    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function index()
    {
        $data['menu'] = 'Account';
        return view('pages.admin.management.account', $data);
    }

    public function create()
    {
        $data['menu'] = 'Tambah Account';
        return view('pages.admin.management.account_add', $data);
    }

    public function store(StoreUserRequest $req)
    {
        $this->userService->store($req->all());

        return redirect()->route('admin.account.index')->withToastSuccess('Berhasil menambah akun!');
    }

    public function edit($id)
    {
        $data['menu'] = 'Profile';
        $data['id'] = $id;

        return view('pages.admin.management.account_edit', $data);
    }

    public function update(UpdateUserRequest $req, $id)
    {
        $this->userService->update($id, $req->all());

        return redirect()->route('admin.account.index')->withToastSuccess('Berhasil memperbarui akun!');
    }

    public function destroy($id)
    {
        $this->userService->destroy($id);

        return redirect()->back()->withToastSuccess('Berhasil menghapus data!');
    }

    public function ganti_password($id)
    {
        $data['menu'] = 'Ganti Password Account';
        $data['user'] = User::where('id', $id)->first();

        return view('pages.admin.management.ganti_password', $data);
    }

    public function proses_ganti_password(ChangePasswordUserRequest $req, $id)
    {
        $this->userService->changePassword($id, $req->all());
            
        return redirect()->route('admin.account.index')->withToastSuccess('Berhasil memperbarui password!');
    }
}
