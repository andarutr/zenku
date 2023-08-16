<?php

namespace App\View\Components\Table;

use App\Models\Comment;
use Illuminate\View\Component;
use Illuminate\Support\Facades\Auth;

class CommentGuru extends Component
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
        $data['comments'] = Comment::where('author_id', Auth::user()->id)
                                    ->orderByDesc('id')
                                    ->get();

        return view('components.table.comment-guru', $data);
    }
}
