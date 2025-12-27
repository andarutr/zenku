<?php

namespace App\Services;

use App\Models\Category;
use Exception;

class CategoryService
{
    public function createCategory(array $data)
    {
        $category = Category::create([
            'category' => $data['category']
        ]);

        \Record::track('Menambahkan Kategori ' . $data['category']);

        return $category;
    }

    public function updateCategory($id, array $data)
    {
        $category = Category::findOrFail($id);

        $category->update([
            'category' => $data['category']
        ]);

        \Record::track('Memperbarui Kategori ' . $data['category']);

        return $category;
    }

    public function deleteCategory($id)
    {
        $category = Category::findOrFail($id);

        $category->delete();

        \Record::track('Menghapus Kategori ' . $category->category);
    }
}