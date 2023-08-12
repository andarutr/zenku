<?php

namespace App\View\Components\Card;

use App\Models\Card;
use Illuminate\View\Component;

class SearchMateriUser extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $keyword;
    public function __construct($keyword)
    {
        $this->keyword = $keyword;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        
        $materi = Card::where('is_active', 'active')
                        ->orderByDesc('id_card')
                        ->where('title_card','like','%'.$this->keyword.'%')
                        ->paginate(12);

        return view('components.card.search-materi-user', compact('materi'));
    }
}
