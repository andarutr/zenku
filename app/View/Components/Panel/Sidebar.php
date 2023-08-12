<?php

namespace App\View\Components\Panel;

use App\Models\Menu;
use App\Models\Category;
use Illuminate\View\Component;
use Illuminate\Support\Facades\Auth;

class Sidebar extends Component
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
        $menus = Menu::where('role_id', Auth::user()->role_id)->get();
        $categories = Category::all();

        return view('components.panel.sidebar', compact('menus','categories'));
    }
}
