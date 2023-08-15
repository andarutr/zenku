<?php

namespace App\View\Components\Table;

use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\View\Component;

class MenuList extends Component
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
        $menus = Menu::all();

        return view('components.table.menu-list', compact('menus'));
    }

}
