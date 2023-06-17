<?php

namespace App\View\Components\Table;

use App\Models\Views\VLike;
use Illuminate\View\Component;
use Illuminate\Support\Facades\Auth;

class LikeList extends Component
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
        if(Auth::user()->id === 1){
            $likes = VLike::orderByDesc('id_like')
                        ->paginate(8);
        }else{
            $likes = VLike::where('author', Auth::user()->name)
                        ->orderByDesc('id_like')
                        ->paginate(8);
        }

        return view('components.table.like-list', compact('likes'));
    }
}
