<?php

namespace App\View\Components\Card;

use App\Models\Card;
use App\Models\Comment;
use Illuminate\View\Component;

class CommentMateriId extends Component
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
        $data['materi'] = Card::where('id_card', $this->id)
                        ->join('users','users.id','=','cards.id_user')
                        ->first();

        $data['comments'] = Comment::where('id_card', $this->id)
                            ->join('users','users.id','=','comments.id_user')
                            ->select('comments.*','users.name','users.picture')
                            ->get();

        return view('components.card.comment-materi-id', $data);
    }
}
