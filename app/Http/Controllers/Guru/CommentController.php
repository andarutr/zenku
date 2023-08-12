<?php

namespace App\Http\Controllers\Guru;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CommentController extends Controller
{
    public function index()
    {
        $data['menu'] = 'Komentar';
        return view('pages.guru.comment.index', $data);
    }

    public function show($id_comment)
    {
        $data['menu'] = 'Komentar';
        $data['id_comment'] = $id_comment;
        return view('pages.guru.comment.show', $data);
    }
}
