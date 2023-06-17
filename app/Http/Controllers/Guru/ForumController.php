<?php

namespace App\Http\Controllers\Guru;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ForumController extends Controller
{
    public function index()
    {
        $menu = 'Forum';
        return view('pages.guru.forum.index', compact('menu'));
    }

    public function show($url_forum)
    {
        $menu = 'Forum Detail';
        return view('pages.guru.forum.show', compact('menu','url_forum'));
    }

    public function create()
    {
        $menu = 'Membuat Forum';
        return view('pages.guru.forum.create', compact('menu'));
    }

    public function store(Request $req)
    {
        $this->validate($req, [
            'title_forum' => 'required|unique:forums',
            'description' => 'required'
        ]);

        $store = \DB::table('forums')->insert([
            'title_forum' => $req->title_forum,
            'description' => $req->description,
            'id_user' => Auth::user()->id,
            'url_forum' => Str::slug($req->title_forum),
            'views_forum' => 1,
            'updated_at' => date('d F Y'),
            'created_at' => date('d F Y')
        ]);

        return redirect()->route('guru.forum.index')->withToastSuccess('Berhasil membuat forum diskusi!');
    }
    
    public function destroy($id)
    {
        $destroy = \DB::table('forums')->where('id_forum', $id)->delete();
        
        return redirect()->route('guru.forum.index')->withToastSuccess('Berhasil menghapus forum diskusi!');
    }
}
