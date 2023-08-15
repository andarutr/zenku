<?php

namespace App\View\Components\Form;

use App\Models\Menu;
use App\Models\Role;
use App\Models\CategoryMenu;
use Illuminate\View\Component;

class EditMenu extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $id;
    public function __construct($id)
    {
        $this->id = $id;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $data['menu_get'] = Menu::where('id', $this->id)->first();
        $data['categories'] = CategoryMenu::get();
        $data['roles'] = Role::get();

        return view('components.form.edit-menu', $data);
    }
}
