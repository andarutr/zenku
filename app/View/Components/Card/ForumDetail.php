<?php

namespace App\View\Components\Card;

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
        $data['forum'] = \DB::table('forums')
                    ->where('url_forum', $this->url)
                    ->join('users','users.id','=','forums.id_user')
                    ->select('forums.*','users.name','users.picture')
                    ->first();
        $data['visit'] = \DB::table('forums')
                    ->where('url_forum', $this->url)
                    ->increment('views_forum');

        $data['contents'] = \DB::table('content_forums')
                        ->where('url_forum', $this->url)
                        ->join('forums','forums.id_forum','=','content_forums.id_forum')
                        ->join('users','users.id','=','content_forums.id_user')
                        ->select('content_forums.*','users.name', 'users.picture','forums.title_forum')
                        ->get();

        return view('components.card.forum-detail', $data);
    }
}
