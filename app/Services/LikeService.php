<?php
namespace App\Services;

use App\Models\Card;
use App\Models\Like;
use Illuminate\Support\Facades\Auth;

class LikeService 
{
    public function store($id_card)
    {
        $materi = Card::where('id', $id_card)->first();
        \Record::track('Menyukai Materi '.$materi->title_card);
        
        $store = Like::firstOrCreate([
            'card_id' => $id_card,
            'user_id' => Auth::user()->id,
            'author_id' => $materi->user_id
        ]);

        return $store;
    }

    public function destroy($id_like)
    {
        $materi = Like::where('id_like', $id_like)->first();
                            
        \Record::track('Menghapus Like Pada Materi '.$materi->title_card);

        $destroy = Like::where(['id_like' => $id_like, 'id_user' => Auth::user()->id])->delete();

        return $destroy;
    }
}