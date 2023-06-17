<?php

namespace App\View\Components\Form;

use Illuminate\View\Component;

class PostAccount extends Component
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
        $roles = \DB::table('roles')->get();
        return view('components.form.post-account', compact('roles'));
    }
}
