<?php

namespace App\View\Components\Card;

use App\Models\Card;
use App\Models\User;
use Illuminate\View\Component;

class StaticPenguji extends Component
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
        $guru_count = User::where('id_role', 2)->count();
        $siswa_count = User::where('id_role', 3)->count();
        $card_verif_count = Card::where('is_active', 'active')->count();
        $card_count = Card::count();

        return view('components.card.static-penguji', compact('guru_count','siswa_count','card_verif_count','card_count'));
    }
}
