<?php

namespace App\Http\Controllers\Admin;

use App\Models\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\CommentService;

class CommentController extends Controller
{
    protected $commentService;

    public function __construct(CommentService $commentService)
    {
        $this->commentService = $commentService;
    }

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

    public function destroy($id)
    {
        $this->commentService->destroy($id);
        
        return redirect()->route('admin.komentar.index')->withToastSuccess('Berhasil menghapus komentar!');
    }
}
