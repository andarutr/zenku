<?php

namespace App\View\Components\Table;

use App\Models\User;
use Illuminate\View\Component;

class NewUser extends Component
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
        $users = User::where('role_id', 3)->limit(5)->get();
        return view('components.table.new-user', compact('users'));
    }
}
