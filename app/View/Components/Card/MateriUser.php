<?php

namespace App\View\Components\Card;

use App\Models\Like;
use App\Models\Views\VCard;
use Illuminate\View\Component;

class MateriUser extends Component
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
        $materi = VCard::where('is_active', 'active')
                        ->orderByDesc('id_card')
                        ->paginate(12);

        return view('components.card.materi-user', compact('materi'));
    }
}
