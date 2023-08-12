<?php

namespace App\View\Components\Card;

use App\Models\Views\VCard;
use Illuminate\View\Component;
use Illuminate\Support\Facades\Auth;

class NewMateriId extends Component
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
        $data['materi'] = VCard::where('id_user', Auth::user()->id)
                        ->limit(4)->get();

        return view('components.card.new-materi-id', $data);
    }
}
