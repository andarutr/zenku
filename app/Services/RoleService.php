<?php
namespace App\Services;

use App\Models\Role;

class RoleService 
{
    public function store(array $data)
    {
        $create = Role::create([
            'id' => $data['id'],
            'role' => $data['role']
        ]);

        return $create;
    }

    public function update($id, array $data)
    {
        $update = Role::where('id', $id)
                    ->update([
                        'id' => $data['id'],
                        'role' => $data['role']
                    ]);

        return $update;
    }

    public function destroy($id)
    {
        $destroy = Role::where('id', $id)->delete();

        return $destroy;
    }
}