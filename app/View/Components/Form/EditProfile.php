<?php

namespace App\View\Components\Form;

use App\Models\User;
use Illuminate\View\Component;
use Illuminate\Support\Facades\Auth;

class EditProfile extends Component
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
        $data['user'] = User::where('id', Auth::user()->id)->first();
        return view('components.form.edit-profile', $data);
    }
}
