<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LikeController extends Controller
{
    public function index()
    {
        $data['menu'] = 'Like';
        return view('pages.admin.like.index', $data);
    }
}
