<?php
// app/Http/Controllers/CategoryController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\File;

class CategoryController extends Controller
{
    public function index()
    {
        $category = Category::all();
        return view('category.index', compact('category'));
    }

public function create()
{
    return view('category.create');
}

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'course' => 'required',
            'harga' => 'required|numeric',
        ]);

        Category:: create ($request->all());

        return redirect()->route('category.index')->with('success', 'Data Category berhasil ditambahkan');
    }

    // public function edit($id)
    // {
    //     $category = Category::table('category')->where('id', '=', $id)->get();
    //     return view('category.edit', ['category' => $category]);
    // }

    // public function update(Request $request)
    // {
    //     Category::table('category')
    //         ->where('id', $request->id)
    //         ->update([
    //             'id' => $request->id,
    //             'nama' => $request->nama,
    //             'course' => $request->course,
    //             'harga' => $request->harga
    //         ]);
    //         return redirect()->route('category.index')->with('success', 'Data Category berhasil diubah');
    //     }
    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('category.edit', compact('category'));
    }
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nama' => 'required',
            'course' => 'required',
            'harga' => 'required',
        ]);

        $data = [
            'nama' => $request->nama,
            'course' => $request->course,
            'harga' => $request->harga
        ];

        $category = Category::findOrFail($id);
        $category->update($data);
        
        return redirect()->route('category.index')->with('success', 'Data Category berhasil diubah');
    }
    public function destroy($id)
    {
        $Category = Category::find($id);
        $Category->delete();

        return redirect()->route('category.index')->with('success', 'Data Category berhasil dihapus');
    }
}
