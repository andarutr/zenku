<?php

namespace App\Http\Controllers\User;

use App\Models\Card;
use App\Models\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function index()
    {
        $data['menu'] = 'Comment';
        return view('pages.user.comment.index', $data);
    }

    public function store(Request $req, $id_card)
    {
        $this->validate($req, [
            'comment' => 'required'
        ]);

        // Track Activity Account
        $materi = Card::where('id_card', $id_card)->first();
        \Record::track('Memberikan Komentar Pada Materi '.$materi->title_card);

        Comment::create([
            'id_user' => Auth::user()->id,
            'id_card' => $id_card,
            'id_author' => $materi->id_user,
            'comment' => $req->comment
        ]);

        return redirect()->back()->withToastSuccess('Berhasil menambahkan komentar!');
    }
    public function edit(Request $req, $id_comment)
    {
        $data['menu'] = 'Comment';
        $data['id_comment'] = $id_comment;

        return view('pages.user.comment.update', $data);
    }

    public function update(Request $req, $id_comment)
    {
        $this->validate($req, [
            'comment' => 'required'
        ]);

        Comment::where('id_comment', $id_comment)
                ->update([
                    'comment' => $req->comment,
                    'updated_at' => now()
                ]);
        
        return redirect()->route('user.comment.index')->withToastSuccess('Berhasil memperbarui komentar!');
    }

    public function destroy($id_comment)
    {
        // Track Activity Account
        $materi = Comment::where('id_comment', $id_comment)
                            ->first();
                            
        \Record::track('Menghapus Komentar Pada Materi '.$materi->title_card);

        Comment::where('id_comment', $id_comment)->delete();
        return redirect()->route('user.comment.index')->withToastSuccess('Berhasil menghapus komentar!');
    }
}
