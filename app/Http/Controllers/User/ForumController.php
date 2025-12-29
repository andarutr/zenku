<?php

namespace App\Http\Controllers\User;

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

    public function store(StoreForumRequest $req)
    {
        $this->forumService->store($req->all());

        return redirect()->route('user.forum.index')->withToastSuccess('Berhasil membuat forum diskusi!');
    }
}
