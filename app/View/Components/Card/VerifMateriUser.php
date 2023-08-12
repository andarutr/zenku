<?php

namespace App\View\Components\Card;

use App\Models\Card;
use Illuminate\View\Component;

class VerifMateriUser extends Component
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
        $materi = Card::where('is_active', 'active')
                        ->orderByDesc('id')
                        ->limit(8)->get();
        
        return view('components.card.verif-materi-user', compact('materi'));
    }
}
