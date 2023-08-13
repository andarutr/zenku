<?php

namespace App\Http\Controllers\User;

use App\Models\Card;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MateriController extends Controller
{
    public function index()
    {
        $data['menu'] = 'Semua Materi';
        return view('pages.user.materi.index', $data);
    }

    public function search(Request $req)
    {
        $data['menu'] = 'Pencarian Materi';
        $data['search'] = $req->search;

        return view('pages.user.materi.search', $data);
    }

    public function show($id_card, $url_card)
    {
        $data['menu'] = 'Materi';
        $data['id_card'] = $id_card;
        $data['title'] = Card::where('id', $id_card)->first();
        $data['visit'] = Card::where('id', $id_card)->increment('visit');

        return view('pages.user.materi.show', $data);
    }

    public function category($id,$name_category)
    {
        $data['menu'] = $name_category;
        $data['id'] = $id;

        return view('pages.user.materi.category', $data);
    }
}
