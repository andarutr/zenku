<?php

namespace App\View\Components\Table;

use App\Models\Card;
use Illuminate\View\Component;
use Illuminate\Support\Facades\Auth;

class MateriListGuru extends Component
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
        $data['materi'] = Card::where('user_id', Auth::user()->id)
                                ->orderByDesc('id')
                                ->get();
                        
        return view('components.table.materi-list-guru', $data);
    }
}
