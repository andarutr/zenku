<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Services\ActivityService;

class ActivityAccountController extends Controller
{
    public function index(ActivityService $activityService)
    {
      $data['sub_menu'] = '/user/pengaturan-akun/aktifitas-akun';
      $data['menu'] = 'Aktifitas Akun';
      $data['activities'] = $activityService->get_by_id_user();

      return view('pages.app.account.activity', $data);
    }
}
