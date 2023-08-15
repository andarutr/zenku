<?php

namespace App\View\Components\Table;

use App\Models\Role as Roles;
use Illuminate\View\Component;

class Role extends Component
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
        $roles = Roles::paginate(5);

        return view('components.table.role', compact('roles'));
    }
}
