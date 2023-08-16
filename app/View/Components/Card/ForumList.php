<?php

namespace App\View\Components\Card;

use App\Models\User;
use App\Models\Forum;
use Illuminate\View\Component;
use Illuminate\Support\Facades\Cache;

class ForumList extends Component
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
        $data['forum'] = Forum::orderByDesc('id')->get();
        
        return view('components.card.forum-list', $data);
    }
}
