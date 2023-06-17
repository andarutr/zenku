<?php

namespace App\View\Components\Form;

use App\Models\Menu;
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
        $menu_get = Menu::where('id_menu', $this->id)
                        ->join('category_menu','category_menu.id_category_menu','=','menu.id_category_menu')
                        ->join('roles','roles.id_role','=','menu.id_role')
                        ->first();
        $categories = \DB::table('category_menu')->get();
        $roles = \DB::table('roles')->get();
        return view('components.form.edit-menu', compact('menu_get','categories','roles'));
    }
}
