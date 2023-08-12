<?php

namespace App\View\Components\Table;

use App\Models\Views\VCard;
use Illuminate\View\Component;

class MateriListPenguji extends Component
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
        $data['materi'] = VCard::orderByDesc('id_card')->get();
                        
        return view('components.table.materi-list-penguji', $data);
    }
}
