<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['menu'] = 'Kategori';
        return view('pages.admin.category.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['menu'] = 'Tambah Kategori';
        return view('pages.admin.category.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        $this->validate($req, [
            'category' => 'required|unique:categories'
        ]);
        
        $store = Category::create([
            'category' => $req->category
        ]);

         // Track Activity Account
         \Record::track('Menambahkan Kategori '.$req->category);

        return redirect()->route('admin.kategori.index')->withToastSuccess('Berhasil menambah kategori!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['menu'] = 'Memperbarui Kategori';
        $data['id'] = $id;
        
        return view('pages.admin.category.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, $id)
    {
        $this->validate($req, [
            'category' => 'required|unique:categories'
        ]);
        
        $update = Category::where('id', $id)
                        ->update([
                            'category' => $req->category
                        ]);
        
        // Track Activity Account
        \Record::track('Memperbarui Kategori '.$req->name_category);

        return redirect()->route('admin.kategori.index')->withToastSuccess('Berhasil memperbarui kategori!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Track Activity Account
        $category = Category::where('id', $id)->first();
        \Record::track('Menghapus Kategori '.$category->category);

        $destroy = Category::where('id', $id)->delete();

        return redirect()->back()->withToastSuccess('Berhasil menghapus data!');
    }
}
