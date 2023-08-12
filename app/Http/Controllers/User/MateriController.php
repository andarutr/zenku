<?php

namespace App\Http\Controllers\User;

use App\Models\Card;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MateriController extends Controller
{
    public function index()
    {
        $menu = 'Semua Materi';
        return view('pages.user.materi.index', compact('menu'));
    }

    public function search(Request $req)
    {
        $menu = 'Pencarian Materi';
        $search = $req->search;

        return view('pages.user.materi.search', compact('menu','search'));
    }

    public function show($id_card, $url_card)
    {
        $menu = 'Materi';
        $title = Card::where('id_card', $id_card)->first();
        $visit = Card::where('id_card', $id_card)->increment('visit');

        return view('pages.user.materi.show', compact('menu','title','id_card'));
    }

    public function category($id,$name_category)
    {
        $menu = $name_category;
        return view('pages.user.materi.category', compact('menu','id'));
    }
}
