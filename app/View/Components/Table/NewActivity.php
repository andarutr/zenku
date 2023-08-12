<?php

namespace App\View\Components\Table;

use App\Models\Views\VActivity;
use Illuminate\View\Component;

class NewActivity extends Component
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
        $activities = VActivity::orderByDesc('id_activity')                      
                                ->limit(5)
                                ->get();

        return view('components.table.new-activity', compact('activities'));
    }
}
