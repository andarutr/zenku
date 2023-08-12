<?php

namespace App\View\Components\Card;

use App\Models\User;
use Illuminate\View\Component;

class UserOnline extends Component
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
        $data['users'] = User::orderByDesc('id')->limit(5)->get();

        return view('components.card.user-online', $data);
    }
}
