<?php

namespace App\View\Components\Panel;

use App\Models\User;
use Illuminate\View\Component;
use Illuminate\Support\Facades\Auth;

class Navbar extends Component
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
        $like_count = \DB::table('likes')
                                ->where('id_user', Auth::user()->id)
                                ->count();

        $comment_count = \DB::table('comments')
                                ->where('id_user', Auth::user()->id)
                                ->count();

        $user = User::where('id', Auth::user()->id)
                        ->join('roles','roles.id_role','=','users.id_role')
                        ->first();

        return view('components.panel.navbar', compact('like_count','comment_count','user'));
    }
}
