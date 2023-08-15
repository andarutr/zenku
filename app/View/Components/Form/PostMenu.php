<?php

namespace App\View\Components\Form;

use App\Models\Role;
use App\Models\CategoryMenu;
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
        $data['categories'] = CategoryMenu::get();
        $data['roles'] = Role::get();

        return view('components.form.post-menu', $data);
    }
}
