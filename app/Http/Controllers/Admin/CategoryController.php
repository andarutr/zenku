<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Services\CategoryService;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;

class CategoryController extends Controller
{
    protected $categoryService;

    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }
    
    public function index()
    {
        $data['menu'] = 'Kategori';
        return view('pages.admin.category.index', $data);
    }

    public function create()
    {
        $data['menu'] = 'Tambah Kategori';
        return view('pages.admin.category.create', $data);
    }

    public function store(CategoryRequest $req)
    {
        $this->categoryService->createCategory($req->only('category'));

        return redirect()->route('admin.kategori.index')->withToastSuccess('Berhasil menambah kategori!');
    }

    public function edit($id)
    {
        $data['menu'] = 'Memperbarui Kategori';
        $data['id'] = $id;
        
        return view('pages.admin.category.edit', $data);
    }

    public function update(CategoryRequest $req, $id)
    {
        $this->categoryService->updateCategory($id, $req->only('category'));

        return redirect()->route('admin.kategori.index')->withToastSuccess('Berhasil memperbarui kategori!');
    }

    public function destroy($id)
    {
        $this->categoryService->deleteCategory($id);

        return redirect()->back()->withToastSuccess('Berhasil menghapus data!');
    }
}
