<?php

namespace App\View\Components\Table;

use App\Models\Views\VActivity;
use Illuminate\View\Component;

class ActivityUser extends Component
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
        $data['activity'] = VActivity::orderByDesc('id_activity')->paginate(8);

        return view('components.table.activity-user', $data);
    }
}
