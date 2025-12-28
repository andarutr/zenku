<?php
namespace App\Services;

use App\Models\Card;

class CardService 
{
    public function destroy($id)
    {
        $materi = Card::where('id', $id)->first();
                        
        \Record::track('Menghapus Materi - '.$materi->name.' ('.$materi->title_card.')');

        $destroy = Card::where('id', $id)->delete();

        return $destroy;
    }
}