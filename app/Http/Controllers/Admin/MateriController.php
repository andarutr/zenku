<?php

namespace App\Http\Controllers\Admin;

use App\Models\Card;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MateriController extends Controller
{
    public function index()
    {
        $data['menu'] = 'Materi';
        return view('pages.admin.materi.index', $data);
    }

    public function show($id_card)
    {
        $data['menu'] = 'Materi';
        $data['id_card'] = $id_card;
        return view('pages.admin.materi.show', $data);
    }

    public function destroy($id_card)
    {
        // Track Activity Account
        $materi = Card::where('id_card', $id_card)
                        ->first();
                        
        \Record::track('Menghapus Materi - '.$materi->name.' ('.$materi->title_card.')');

        Card::where('id_card', $id_card)->delete();
        return redirect()->route('admin.materi.index')->withToastSuccess('Berhasil menghapus data!');
    }
}
