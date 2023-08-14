<?php

namespace App\Http\Controllers\Global;

use App\Models\Card;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BiodataController extends Controller
{
    public function show($name)
    {
        $user = str_replace('-', ' ', strtolower($name));
        $data['user'] = User::where('name', $user)->first();
        $data['menu'] = $user;
        $data['materi'] = Card::orderByDesc('id')->limit(6)->get();

        return view('pages.global.biodata', $data);
    }
}
