<?php

namespace App\View\Components\Table;

use App\Models\Views\VUser;
use Illuminate\View\Component;

class AccountList extends Component
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
        $users = VUser::get();
        return view('components.table.account-list', compact('users'));
    }
}
