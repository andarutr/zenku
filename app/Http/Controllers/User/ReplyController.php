<?php

namespace App\Http\Controllers\User;

use App\Models\ContentForum;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ReplyController extends Controller
{
    public function create($id, $url)
    {
        $data['id'] = $id;
        $data['url'] = $url;
        $data['menu'] = str_replace('-', ' ', $url);

        return view('pages.user.forum.reply', $data);
    }

    public function store(Request $req, $id, $url)
    {
        $this->validate($req, [
            'text_forum' => 'required'
        ]);

        $store = ContentForum::create([
            'forum_id' => $id,
            'user_id' => Auth::user()->id,
            'text_forum' => $req->text_forum,
            'updated_at' => date('d F Y'),
            'created_at' => date('d F Y')
        ]);

        return redirect('/user/forum/'.$url)->withToastSuccess('Berhasil membalas forum diskusi!');
    }
}
