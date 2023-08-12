<?php

namespace App\Http\Controllers\Admin;

use App\Models\Menu;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\MenuRequest;

class MenuController extends Controller
{
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
        $req->validated();

        $create = Menu::create([
            'name_menu' => $req->name_menu,
            'id_category_menu' => $req->id_category_menu,
            'id_role' => $req->id_role,
            'icon_menu' => $req->icon_menu,
            'url_menu' => $req->url_menu,
        ]);

        // Track Activity Account
        \Record::track('Menambahkan Menu '.$req->name_menu);

        return redirect()->route('admin.menu.index')->withToastSuccess('Berhasil menambah menu!');
    }

    public function edit($id)
    {
        $data['menu'] = 'Menu';
        $data['id'] = $id;

        return view('pages.admin.management.menu_edit', $data);
    }

    public function update(MenuRequest $req, $id_menu)
    {
        $req->validated();

        $create = Menu::where('id_menu', $id_menu)
                    ->update([
                        'name_menu' => $req->name_menu,
                        'id_category_menu' => $req->id_category_menu,
                        'id_role' => $req->id_role,
                        'icon_menu' => $req->icon_menu,
                        'url_menu' => $req->url_menu,
                    ]);
        
        // Track Activity Account
        \Record::track('Memperbarui Menu '.$req->name_menu);

        return redirect()->route('admin.menu.index')->withToastSuccess('Berhasil memperbarui menu!');
    }

    public function destroy($id_menu)
    {
        // Track Activity Account
        $menu = Menu::where('id_menu', $id_menu)->first();
        \Record::track('Menghapus Menu '.$menu->name_menu);

        Menu::where('id_menu', $id_menu)->delete();

        return redirect()->back()->withToastSuccess('Berhasil menghapus data!');
    }
}
