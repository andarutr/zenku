<?php

namespace App\View\Components\Form;

use App\Models\Comment;
use Illuminate\View\Component;
use Illuminate\Support\Facades\Auth;

class EditCommentUser extends Component
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
        $comment = Comment::where(['id_comment' => $this->id, 'id_user' => Auth::user()->id])->first();

        return view('components.form.edit-comment-user', compact('comment'));
    }
}
