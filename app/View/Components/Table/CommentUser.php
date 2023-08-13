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
        $data['comments'] = Comment::orderByDesc('id')->paginate(8);

        return view('components.table.comment-user', $data);
    }
}
