<?php

namespace App\Http\Controllers\Admin;

use App\Models\Activity;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\ActivityService;

class ActivityAccountController extends Controller
{
    protected $activityService;

    public function __construct(ActivityService $activityService)
    {
        $this->activityService = $activityService;
    }

    public function index()
    {
        $data['menu'] = 'Aktifitas Akun';
        return view('pages.admin.account.activity', $data);
    }

    public function destroy()
    {
        $this->activityService->destroy();

        return redirect()->back()->withToastSuccess('Berhasil menghapus semua data!');
    }
}
