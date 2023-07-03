<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LikeController extends Controller
{
    public function index()
    {
        $menu = 'Like';
        return view('pages.admin.like.index', compact('menu'));
    }
}
