<?php

namespace App\View\Components\Card;

use App\Models\Card;
use Illuminate\View\Component;

class ShowMateriId extends Component
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
        $data['materi'] = Card::where('id', $this->id)->first();

        return view('components.card.show-materi-id', $data);
    }
}
