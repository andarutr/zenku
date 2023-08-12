<?php

namespace App\View\Components\Form;

use App\Models\Category;
use Illuminate\View\Component;

class PostMateri extends Component
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
        $data['categories'] = Category::all();
        return view('components.form.post-materi', $data);
    }
}
