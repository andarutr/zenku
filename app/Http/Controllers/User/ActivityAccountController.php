<?php

namespace App\Http\Controllers\User;

use App\Models\Activity;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ActivityAccountController extends Controller
{
    public function index()
    {
      $sub_menu = '/user/pengaturan-akun/aktifitas-akun';
      $menu = 'Aktifitas Akun';
      $activities = Activity::where('id_user', Auth::user()->id)
                              ->orderByDesc('id_activity')
                              ->join('users','users.id','=','activity.id_user')
                              ->select('users.name','users.picture','activity.*')
                              ->paginate(5);

      return view('pages.app.account.activity', compact('sub_menu','menu','activities'));
    }
}
