<?php

namespace App\Http\Controllers\Guru;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\StoreForumRequest;
use App\Services\ForumService;

class ForumController extends Controller
{
    protected $forumService;

    public function __construct(ForumService $forumService)
    {
        $this->forumService = $forumService;
    }

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

    public function store(StoreForumRequest $req)
    {
        $this->forumService->store($req->all());

        return redirect()->route('guru.forum.index')->withToastSuccess('Berhasil membuat forum diskusi!');
    }
    
    public function destroy($id)
    {
        $this->forumService->destroy($id);
        
        return redirect()->route('guru.forum.index')->withToastSuccess('Berhasil menghapus forum diskusi!');
    }
}
