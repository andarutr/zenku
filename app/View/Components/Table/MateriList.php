<?php

namespace App\View\Components\Table;

use App\Models\Views\VCard;
use Illuminate\View\Component;

class MateriList extends Component
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
        $materi = VCard::all();

        return view('components.table.materi-list', compact('materi'));
    }
}
