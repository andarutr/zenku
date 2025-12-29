<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Services\LikeService;

class LikeController extends Controller
{
    protected $likeService;

    public function __construct(LikeService $likeService)
    {
        $this->likeService = $likeService;
    }

    public function index()
    {
        $data['menu'] = 'Like';
        return view('pages.user.like.index', $data);
    }

    public function store($id_card)
    {
        $this->likeService->store($id_card);
        
        return redirect()->back()->withToastSuccess('Berhasil Like Materi!');
    }

    public function destroy($id_like)
    {
        $this->likeService->destroy($id_like);
        
        return redirect()->back()->withToastSuccess('Berhasil menghapus like!');
    }
}
