<?php
namespace App\Services;

use App\Models\ContentForum;
use Illuminate\Support\Facades\Auth;

class ContentForumService 
{
    public function store($id, array $data)
    {
        $store = ContentForum::create([
            'forum_id' => $id,
            'user_id' => Auth::user()->id,
            'text_forum' => $data['text_forum'],
            'updated_at' => date('d F Y'),
            'created_at' => date('d F Y')
        ]);

        return $store;
    }

    public function destroy($id)
    {
        $destroy = ContentForum::where('id', $id)->delete();

        return $destroy;
    }
}