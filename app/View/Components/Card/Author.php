<?php

namespace App\View\Components\Card;

use App\Models\Views\VCard;
use Illuminate\View\Component;

class Author extends Component
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
        $data['author'] = VCard::where('id_card', $this->id)
                        ->first();

        return view('components.card.author', $data);
    }
}
