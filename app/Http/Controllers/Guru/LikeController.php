<?php

namespace App\Http\Controllers\Guru;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LikeController extends Controller
{
    public function index()
    {
        $menu = 'Like';
        return view('pages.guru.like.index', compact('menu'));
    }
}
