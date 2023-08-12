<?php

namespace App\Http\Controllers\User;

use App\Models\Card;
use App\Models\Like;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LikeController extends Controller
{
    public function index()
    {
        $menu = 'Like';
        return view('pages.user.like.index', compact('menu'));
    }

    public function store($id_card)
    {
        // Track Activity Account
        $materi = Card::where('id_card', $id_card)->first();
        \Record::track('Menyukai Materi '.$materi->title_card);
        
        Like::firstOrCreate([
            'id_card' => $id_card,
            'id_user' => Auth::user()->id,
            'id_author' => $materi->id_user
        ]);
        
        return redirect()->back()->withToastSuccess('Berhasil Like Materi!');
    }

    public function destroy($id_like)
    {
        // Track Activity Account
        $materi = Like::where('id_like', $id_like)
                            ->first();
                            
        \Record::track('Menghapus Like Pada Materi '.$materi->title_card);

        Like::where(['id_like' => $id_like, 'id_user' => Auth::user()->id])->delete();
        
        return redirect()->back()->withToastSuccess('Berhasil menghapus like!');
    }
}
