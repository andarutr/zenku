<?php

namespace App\View\Components\Card;

use App\Models\Comment;
use Illuminate\View\Component;

class CommentList extends Component
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
        $data['comments'] = Comment::orderByDesc('id')->get();

        return view('components.card.comment-list', $data);
    }
}
