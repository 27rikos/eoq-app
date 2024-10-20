<?php

namespace App\Http\Controllers;

use App\Imports\ProductImport;
use App\Models\Product;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Product::all();
        return view('admin.produk.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.produk.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'kode_produk' => 'required',
            'produk' => 'required',
            'jumlah' => 'required',
            'satuan' => 'required',
            'harga' => 'required',
        ]);
        $data = Product::create($request->all());
        $data->save();
        return redirect()->route('produk.index')->with('success', 'Produk Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = Product::findOrFail($id);
        return view('admin.produk.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $data = Product::findOrFail($id);
        $data->update($request->all());
        $data->save();
        return redirect()->route('produk.index')->with('success', 'Data Diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = Product::findOrFail($id);
        $data->delete();
        return redirect()->route('produk.index')->with('success', 'Data Dihapus');
    }

    public function import(Request $request)
    {
        Excel::import(new ProductImport, $request->file);
        return back();
    }
}