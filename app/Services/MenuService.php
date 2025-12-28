<?php
namespace App\Services;

use App\Models\Menu;

class MenuService 
{
    public function store(array $data)
    {
        $create = Menu::create([
            'name_menu' => $data['name_menu'],
            'category_menu_id' => $data['category_menu'],
            'role_id' => $data['role'],
            'icon_menu' => $data['icon_menu'],
            'url_menu' => $data['url_menu'],
        ]);

        \Record::track('Menambahkan Menu '.$data['name_menu']);

        return $create;
    }

    public function update($id, array $data)
    {
        $update = Menu::where('id', $id)
                    ->update([
                        'name_menu' => $data['name_menu'],
                        'category_menu_id' => $data['category_menu'],
                        'role_id' => $data['role'],
                        'icon_menu' => $data['icon_menu'],
                        'url_menu' => $data['url_menu'],
                    ]);
        
        \Record::track('Memperbarui Menu '.$data['name_menu']);

        return $update;
    }

    public function destroy($id)
    {
        $menu = Menu::where('id', $id)->first();
        \Record::track('Menghapus Menu '.$menu->name_menu);

        $destroy = Menu::where('id', $id)->delete();

        return $destroy;
    }
}