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
            'category_menu_id' => $req->category_menu,
            'role_id' => $req->role,
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

    public function update(MenuRequest $req, $id)
    {
        $req->validated();

        $create = Menu::where('id', $id)
                    ->update([
                        'name_menu' => $req->name_menu,
                        'category_menu_id' => $req->category_menu,
                        'role_id' => $req->role,
                        'icon_menu' => $req->icon_menu,
                        'url_menu' => $req->url_menu,
                    ]);
        
        // Track Activity Account
        \Record::track('Memperbarui Menu '.$req->name_menu);

        return redirect()->route('admin.menu.index')->withToastSuccess('Berhasil memperbarui menu!');
    }

    public function destroy($id)
    {
        // Track Activity Account
        $menu = Menu::where('id', $id)->first();
        \Record::track('Menghapus Menu '.$menu->name_menu);

        Menu::where('id', $id)->delete();

        return redirect()->back()->withToastSuccess('Berhasil menghapus data!');
    }
}
