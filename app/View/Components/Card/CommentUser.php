<?php

namespace App\View\Components\Card;

use App\Models\Views\VComment;
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
        $user = VComment::where('id_comment', $this->id)->first();

        return view('components.card.comment-user', compact('user'));
    }
}
