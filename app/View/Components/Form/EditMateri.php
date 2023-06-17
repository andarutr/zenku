<?php

namespace App\View\Components\Form;

use App\Models\Category;
use App\Models\Views\VCard;
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
        $materi = VCard::where('id_card', $this->id)->first();
        $categories = Category::all();
        return view('components.form.edit-materi', compact('materi','categories'));
    }
}
