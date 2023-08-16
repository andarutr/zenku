<?php

namespace App\Http\Controllers\Penguji;

use App\Models\Card;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MateriController extends Controller
{
    public function index()
    {
        $data['menu'] = 'Materi';
        return view('pages.penguji.materi.index', $data);
    }

    public function show($id_card)
    {
        $data['menu'] = 'Materi';
        $data['id_card'] = $id_card;

        return view('pages.penguji.materi.show', $data);
    }

    public function update($id_card)
    {
        $materi = Card::where('id', $id_card)->first();

        if($materi->is_active === 'not_active')
        {
            // Track Activity Account
            \Record::track('Melakukan Approve Materi '.$materi->title_card);

            Card::where('id', $id_card)
                ->update([
                    'is_active' => 'active'
                ]);
        }else{
            // Track Activity Account
            \Record::track('Membatalkan Approve Materi '.$materi->title_card);

            Card::where('id', $id_card)
                ->update([
                    'is_active' => 'not_active'
                ]);
        }
        
        return redirect('/penguji/materi')->withToastSuccess('Berhasil memperbarui status materi!');
    }
}
