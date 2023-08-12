<?php

namespace App\Http\Controllers\Admin;

use App\Models\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CommentController extends Controller
{
    public function index()
    {
        $data['menu'] = 'Komentar';
        return view('pages.admin.comment.index', $data);
    }
    
    public function show($id_comment)
    {
        $data['menu'] = 'Komentar';
        $data['id_comment'] = $id_comment;

        return view('pages.admin.comment.show', $data);
    }

    public function destroy($id_comment)
    {
        // Track Activity Account
        $comment = Comment::where('id_comment', $id_comment)->first();
                            
        \Record::track('Menghapus Komentar '.$comment->name);

        Comment::where('id_comment', $id_comment)->delete();
        return redirect()->route('admin.komentar.index')->withToastSuccess('Berhasil menghapus komentar!');
    }
}
