<?php

namespace App\Http\Controllers\Admin;

use App\Models\Activity;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ActivityAccountController extends Controller
{
    public function index()
    {
        $menu = 'Aktifitas Akun';
        return view('pages.admin.account.activity', compact('menu'));
    }

    public function destroy($aktifitas_akun)
    {
        Activity::truncate();

        return redirect()->back()->withToastSuccess('Berhasil menghapus semua data!');
    }
}
