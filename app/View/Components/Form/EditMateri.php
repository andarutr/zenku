<?php

namespace App\View\Components\Form;

use App\Models\Category;
use App\Models\Card;
use Illuminate\View\Component;

class EditMateri extends Component
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
        $data['materi'] = Card::where('id', $this->id)->first();
        $data['categories'] = Category::all();
        
        return view('components.form.edit-materi', $data);
    }
}
