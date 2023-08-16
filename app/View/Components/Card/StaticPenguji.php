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
        $data['guru_count'] = User::where('role_id', 2)->count();
        $data['siswa_count'] = User::where('role_id', 3)->count();
        $data['card_verif_count'] = Card::where('is_active', 'active')->count();
        $data['card_count'] = Card::count();

        return view('components.card.static-penguji', $data);
    }
}
