<?php

namespace App\View\Components\Form;

use App\Models\Role;
use Illuminate\View\Component;

class EditRole extends Component
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
        $data['role'] = Role::where('id', $this->id)->first();

        return view('components.form.edit-role', $data);
    }
}
