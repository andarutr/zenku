<?php

namespace App\Http\Controllers\User;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ForumController extends Controller
{
    public function index()
    {
        $data['menu'] = 'Forum';
        return view('pages.user.forum.index', $data);
    }

    public function show($url_forum)
    {
        $data['menu'] = 'Forum Detail';
        $data['url_forum'] = $url_forum;

        return view('pages.user.forum.show', $data);
    }

    public function create()
    {
        $data['menu'] = 'Membuat Forum';
        return view('pages.user.forum.create', $data);
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

        return redirect()->route('user.forum.index')->withToastSuccess('Berhasil membuat forum diskusi!');
    }
}
