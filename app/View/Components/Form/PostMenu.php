<?php

namespace App\View\Components\Form;

use Illuminate\View\Component;

class PostMenu extends Component
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
        $categories = \DB::table('category_menu')->get();
        $roles = \DB::table('roles')->get();

        return view('components.form.post-menu', compact('categories','roles'));
    }
}
