<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomepageController extends Controller
{
    public function index(){
        $data['menu'] = 'Home';
        return view('pages.user.home', $data);
    }
}
