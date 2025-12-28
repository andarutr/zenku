<?php
namespace App\Services;

use App\Models\Comment;
use Illuminate\Support\Facades\Hash;

class CommentService 
{
    public function destroy($id)
    {
        $comment = Comment::where('id', $id)->first();
                            
        \Record::track('Menghapus Komentar '.$comment->name);

        $destroy = Comment::where('id', $id)->delete();

        return $destroy;
    }
}