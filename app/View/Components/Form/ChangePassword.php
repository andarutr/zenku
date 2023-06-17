<?php

namespace App\View\Components\Form;

use App\Models\User;
use Illuminate\View\Component;
use Illuminate\Support\Facades\Auth;

class ChangePassword extends Component
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
        $role = User::where('id', Auth::user()->id)
                    ->join('roles','roles.id_role','=','users.id_role')
                    ->first();

        return view('components.form.change-password', compact('role'));
    }
}
