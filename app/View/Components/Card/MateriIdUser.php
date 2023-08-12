<?php

namespace App\View\Components\Card;

use App\Models\Views\VCard;
use Illuminate\View\Component;

class MateriIdUser extends Component
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
        $data['materi'] = VCard::where(['is_active' => 'active', 'id_category'=> $this->id])
                        ->orderByDesc('id_card')
                        ->paginate(12);
                        
        return view('components.card.materi-id-user', $data);
    }
}
