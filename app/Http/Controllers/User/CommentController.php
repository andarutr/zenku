<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Services\CommentService;
use App\Http\Controllers\Controller;
use App\Http\Requests\Comment\StoreCommentRequest;

class CommentController extends Controller
{
    protected $commentService;

    public function __construct(CommentService $commentService)
    {
        $this->commentService = $commentService;
    }

    public function index()
    {
        $data['menu'] = 'Comment';
        return view('pages.user.comment.index', $data);
    }

    public function store(StoreCommentRequest $req, $id_card)
    {
        $this->commentService->store($id_card, $req->all());

        return redirect()->back()->withToastSuccess('Berhasil menambahkan komentar!');
    }

    public function edit(Request $req, $id_comment)
    {
        $data['menu'] = 'Comment';
        $data['id_comment'] = $id_comment;

        return view('pages.user.comment.update', $data);
    }

    public function update(StoreCommentRequest $req, $id_comment)
    {
        $this->commentService->update($id_comment, $req->all());
        
        return redirect()->route('user.comment.index')->withToastSuccess('Berhasil memperbarui komentar!');
    }

    public function destroy($id_comment)
    {
        $this->commentService->destroy_by_id_comment($id_comment);
        
        return redirect()->route('user.comment.index')->withToastSuccess('Berhasil menghapus komentar!');
    }
}
