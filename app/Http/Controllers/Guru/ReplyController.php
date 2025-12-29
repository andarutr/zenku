<?php

namespace App\Http\Controllers\Guru;

use App\Models\ContentForum;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\User\StoreContentForumRequest;
use App\Services\ContentForumService;
use Illuminate\Support\Facades\Auth;

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

        return view('pages.guru.forum.reply', $data);
    }

    public function store(StoreContentForumRequest $req, $id, $url)
    {
        $this->contentForumService->store($id, $req->all());

        return redirect('/guru/forum/'.$url)->withToastSuccess('Berhasil membalas forum diskusi!');
    }

    public function destroy($id)
    {
        $this->contentForumService->destroy($id);
        
        return redirect()->back()->withToastSuccess('Berhasil menghapus komentar diskusi!');
    }
}
