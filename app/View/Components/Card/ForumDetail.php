<?php

namespace App\View\Components\Card;

use App\Models\Forum;
use App\Models\ContentForum;
use Illuminate\View\Component;

class ForumDetail extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $url;
    public function __construct($url)
    {
        $this->url = $url;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $data['forum'] = Forum::where('url_forum', $this->url)->first();
        $data['visit'] = Forum::where('url_forum', $this->url)->increment('views_forum');
        $data['contents'] = ContentForum::where('forum_id', $data['forum']->id)->get();

        return view('components.card.forum-detail', $data);
    }
}
