<?php

namespace App\Http\Controllers\Global;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\PasswordRequest;
use App\Services\UserService;

class ChangePasswordController extends Controller
{
    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function index()
    {
        $data['menu'] = 'Ganti Password';
        return view('pages.global.change_password', $data);
    }

    public function update(PasswordRequest $req)
    {
        $id = Auth::user()->id;

        $this->userService->changePassword($id, $req->all());
    }
}