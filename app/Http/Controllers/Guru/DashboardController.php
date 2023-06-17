<?php

namespace App\Http\Controllers\Guru;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index(){
        $menu = 'Dashboard';
        return view('pages.guru.dashboard', compact('menu'));
    }
}
