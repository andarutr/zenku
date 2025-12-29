<?php
namespace App\Services;

use App\Models\Card;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;

class CommentService 
{
    public function store($id_card, array $data)
    {
        $materi = Card::where('id', $id_card)->first();
        \Record::track('Memberikan Komentar Pada Materi '.$materi->title_card);

        $store = Comment::create([
            'user_id' => Auth::user()->id,
            'card_id' => $id_card,
            'author_id' => $materi->user_id,
            'comment' => $data['comment']
        ]);

        return $store;
    }

    public function update($id_comment, array $data)
    {
        $update = Comment::where('id_comment', $id_comment)
                    ->update([
                        'comment' => $data['comment'],
                        'updated_at' => now()
                    ]);

        return $update;

    }

    public function destroy($id)
    {
        $comment = Comment::where('id', $id)->first();
                            
        \Record::track('Menghapus Komentar '.$comment->name);

        $destroy = Comment::where('id', $id)->delete();

        return $destroy;
    }

    public function destroy_by_id_comment($id_comment)
    {
        $materi = Comment::where('id_comment', $id_comment)->first();
                            
        \Record::track('Menghapus Komentar Pada Materi '.$materi->title_card);

        Comment::where('id_comment', $id_comment)->delete();
    }
}