<?php

namespace App\Http\Controllers\Global;

use App\Models\Views\VCard;
use App\Models\Views\VUser;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BiodataController extends Controller
{
    public function show($name)
    {
        $user_name = str_replace('-', ' ', strtolower($name));
        $user = VUser::where('name', $user_name)->first();
        $menu = $user->name;
        $materi = VCard::where('name', $user_name)->orderByDesc('id_card')->limit(6)->get();

        return view('pages.global.biodata', compact('menu','user','materi'));
    }
}
