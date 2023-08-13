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
        $data['menu'] = 'Like';
        return view('pages.user.like.index', $data);
    }

    public function store($id_card)
    {
        // Track Activity Account
        $materi = Card::where('id', $id_card)->first();
        \Record::track('Menyukai Materi '.$materi->title_card);
        
        Like::firstOrCreate([
            'card_id' => $id_card,
            'user_id' => Auth::user()->id,
            'author_id' => $materi->user_id
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
