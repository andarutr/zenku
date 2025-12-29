<?php
namespace App\Services;

use App\Models\Forum;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class ForumService 
{
    public function store(array $data)
    {
        $store = Forum::create([
            'title_forum' => $data['title_forum'],
            'description' => $data['description'],
            'user_id' => Auth::user()->id,
            'url_forum' => Str::slug($data['title_forum']),
            'views_forum' => 1,
            'updated_at' => date('d F Y'),
            'created_at' => date('d F Y')
        ]);
        
        return $store;
    }

    public function destroy($id)
    {
        $destroy = Forum::where('id_forum', $id)->delete();

        return $destroy;
    }
}