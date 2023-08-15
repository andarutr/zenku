<?php

namespace App\View\Components\Table;

use App\Models\Feedback;
use Illuminate\View\Component;

class FeedbackList extends Component
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
        $data['feedbacks'] = Feedback::orderByDesc('id')->paginate(8);

        return view('components.table.feedback-list', $data);
    }
}
