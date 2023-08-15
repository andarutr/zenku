<?php

namespace App\View\Components\Card;

use App\Models\Comment;
use Illuminate\View\Component;

class CommentUser extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $id;
    public function __construct($id)
    {
        $this->id = $id;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $data['comment'] = Comment::where('id', $this->id)->first();

        return view('components.card.comment-user', $data);
    }
}
