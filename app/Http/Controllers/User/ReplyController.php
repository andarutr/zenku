<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ReplyController extends Controller
{
    public function create($id, $url)
    {
        $menu = str_replace('-', ' ', $url);
        return view('pages.user.forum.reply', compact('menu','url','id'));
    }

    public function store(Request $req, $id, $url)
    {
        $this->validate($req, [
            'text_forum' => 'required'
        ]);

        $store = \DB::table('content_forums')->insert([
            'id_forum' => $id,
            'id_user' => Auth::user()->id,
            'text_forum' => $req->text_forum,
            'updated_at' => date('d F Y'),
            'created_at' => date('d F Y')
        ]);

        return redirect('/user/forum/'.$url)->withToastSuccess('Berhasil membalas forum diskusi!');
    }
}
