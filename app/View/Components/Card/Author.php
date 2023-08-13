<?php

namespace App\View\Components\Card;

use App\Models\Card;
use App\Models\Like;
use App\Models\Comment;
use Illuminate\View\Component;

class Author extends Component
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
        $data['author'] = Card::where('id', $this->id)->first();
        $data['like_count'] = Like::where('card_id', $this->id)->count();
        $data['comment_count'] = Comment::where('card_id', $this->id)->count();
        
        return view('components.card.author', $data);
    }
}
