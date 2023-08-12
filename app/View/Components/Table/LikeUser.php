<?php

namespace App\View\Components\Table;

use App\Models\Views\VLike;
use Illuminate\View\Component;
use Illuminate\Support\Facades\Auth;

class LikeUser extends Component
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
        $data['likes'] = VLike::orderByDesc('id_like')
                        ->where('name', Auth::user()->name)
                        ->paginate(8);
                        
        return view('components.table.like-user', $data);
    }
}
