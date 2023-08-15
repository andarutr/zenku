<?php

namespace App\View\Components\Form;

use App\Models\User;
use Illuminate\View\Component;

class EditAccount extends Component
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
        $data['user'] = User::where('id', $this->id)->first();

        return view('components.form.edit-account', $data);
    }
}
