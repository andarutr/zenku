<?php

namespace App\View\Components\Card;

use App\Models\User;
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
        $data['forum'] = \DB::table('forums')
                        ->orderByDesc('id_forum')
                        ->join('users','users.id','=','forums.id_user')
                        ->select('forums.*','users.name','users.picture')
                        ->get();
        
        return view('components.card.forum-list', $data);
    }
}
