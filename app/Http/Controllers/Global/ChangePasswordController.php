<?php

namespace App\Http\Controllers\Global;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\PasswordRequest;

class ChangePasswordController extends Controller
{
    public function index()
    {
        $menu = 'Ganti Password';

        return view('pages.global.change_password', compact('menu'));
    }

    public function update(PasswordRequest $req)
    {
       $req->validated();

        if(auth()->attempt(['email' => Auth::user()->email, 'password' => $req->old_password]))
        {
            // Track Activity Account
            \Record::track('Memperbarui Password');
            
            User::where('id', Auth::user()->id)
                    ->update([
                        'password' => \Hash::make($req->new_password),
                        'updated_at' => now()
                    ]);
            
            return redirect()->back()->withSuccess('Berhasil memperbarui password!');
        }else{
            return redirect()->back()->withWarning('Password anda salah!');
        }
    }
}