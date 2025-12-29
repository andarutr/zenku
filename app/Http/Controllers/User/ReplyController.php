<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\StoreContentForumRequest;
use App\Services\ContentForumService;

class ReplyController extends Controller
{
    protected $contentForumService;

    public function __construct(ContentForumService $contentForumService)
    {
        $this->contentForumService = $contentForumService;
    }

    public function create($id, $url)
    {
        $data['id'] = $id;
        $data['url'] = $url;
        $data['menu'] = str_replace('-', ' ', $url);

        return view('pages.user.forum.reply', $data);
    }

    public function store(StoreContentForumRequest $req, $id, $url)
    {
        $this->contentForumService->store($id, $req->all());

        return redirect('/user/forum/'.$url)->withToastSuccess('Berhasil membalas forum diskusi!');
    }
}
