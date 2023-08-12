<?php

namespace App\View\Components\Card;

use App\Models\Views\VCard;
use Illuminate\View\Component;

class NewVerifMateri extends Component
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
        $data['materi'] = VCard::where('is_active', 'active')
                        ->orderByDesc('id_card')
                        ->limit(8)->get();

        return view('components.card.new-verif-materi', $data);
    }
}
