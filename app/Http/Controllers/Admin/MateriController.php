<?php

namespace App\Http\Controllers\Admin;

use App\Models\Card;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\CardService;

class MateriController extends Controller
{
    protected $cardService;

    public function __construct(CardService $cardService)
    {
        $this->cardService = $cardService;
    }

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

    public function destroy($id)
    {
        $this->cardService->destroy($id);
        
        return redirect()->route('admin.materi.index')->withToastSuccess('Berhasil menghapus data!');
    }
}
