<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\MenuRequest;
use App\Services\MenuService;

class MenuController extends Controller
{
    protected $menuService;

    public function __construct(MenuService $menuService)
    {
        $this->menuService = $menuService;
    }

    public function index()
    {
        $data['menu'] = 'Menu';
        return view('pages.admin.management.menu', $data);
    }

    public function create()
    {
        $data['menu'] = 'Tambah Menu';
        return view('pages.admin.management.menu_add', $data);
    }

    public function store(MenuRequest $req)
    {
        $this->menuService->store($req->all());        

        return redirect()->route('admin.menu.index')->withToastSuccess('Berhasil menambah menu!');
    }

    public function edit($id)
    {
        $data['menu'] = 'Menu';
        $data['id'] = $id;

        return view('pages.admin.management.menu_edit', $data);
    }

    public function update(MenuRequest $req, $id)
    {
        $this->menuService->update($id, $req->all());

        return redirect()->route('admin.menu.index')->withToastSuccess('Berhasil memperbarui menu!');
    }

    public function destroy($id)
    {
        $this->menuService->destroy($id);

        return redirect()->back()->withToastSuccess('Berhasil menghapus data!');
    }
}
