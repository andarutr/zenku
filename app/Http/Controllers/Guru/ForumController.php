<?php

namespace App\Http\Controllers\Guru;

use App\Models\Forum;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ForumController extends Controller
{
    public function index()
    {
        $data['menu'] = 'Forum';
        return view('pages.guru.forum.index', $data);
    }

    public function show($url_forum)
    {
        $data['menu'] = 'Forum Detail';
        $data['url_forum'] = $url_forum;
        
        return view('pages.guru.forum.show', $data);
    }

    public function create()
    {
        $data['menu'] = 'Membuat Forum';
        return view('pages.guru.forum.create', $data);
    }

    public function store(Request $req)
    {
        $this->validate($req, [
            'title_forum' => 'required|unique:forums',
            'description' => 'required'
        ]);

        $store = Forum::create([
            'title_forum' => $req->title_forum,
            'description' => $req->description,
            'user_id' => Auth::user()->id,
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
