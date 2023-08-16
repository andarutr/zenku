<?php

namespace App\View\Components\Card;

use App\Models\Card;
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
        $data['materi'] = Card::orderByDesc('id')
                                ->where(['is_active' => 'active', 'category_id'=> $this->id])
                                ->paginate(12);
                        
        return view('components.card.materi-id-user', $data);
    }
}
