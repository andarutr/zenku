<?php

namespace App\View\Components\Table;

use App\Models\User;
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
        $data['users'] = User::get();
        return view('components.table.account-list', $data);
    }
}
