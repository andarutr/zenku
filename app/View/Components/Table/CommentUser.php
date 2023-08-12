<?php

namespace App\View\Components\Table;

use App\Models\Comment;
use Illuminate\View\Component;
use Illuminate\Support\Facades\Auth;

class CommentUser extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $comments = Comment::orderByDesc('id_comment')
                        ->join('cards','cards.id_card','=','comments.id_card')
                        ->join('users','users.id','=','comments.id_user')
                        ->select('cards.title_card','cards.picture_card','cards.url_card','users.name','users.email','comments.*')
                        ->where('email', Auth::user()->email)
                        ->paginate(8);

        return view('components.table.comment-user', compact('comments'));
    }
}
