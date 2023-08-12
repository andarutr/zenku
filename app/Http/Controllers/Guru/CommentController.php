<?php

namespace App\Http\Controllers\Guru;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CommentController extends Controller
{
    public function index()
    {
        $menu = 'Komentar';
        return view('pages.guru.comment.index', compact('menu'));
    }

    public function show($id_comment)
    {
        $menu = 'Komentar';
        return view('pages.guru.comment.show', compact('menu','id_comment'));
    }
}
