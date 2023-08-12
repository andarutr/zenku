<?php

namespace App\Http\Controllers\Guru;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ReplyController extends Controller
{
    public function create($id, $url)
    {
        $menu = str_replace('-', ' ', $url);
        return view('pages.guru.forum.reply', compact('menu','url','id'));
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

        return redirect('/guru/forum/'.$url)->withToastSuccess('Berhasil membalas forum diskusi!');
    }

    public function destroy($id)
    {
        $destroy = \DB::table('content_forums')->where('id_content_forum', $id)->delete();
        
        return redirect()->back()->withToastSuccess('Berhasil menghapus komentar diskusi!');
    }
}
