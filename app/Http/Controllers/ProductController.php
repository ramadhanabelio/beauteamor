<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function listProduk()
    {
        $products = Product::all();
        return view('admin.product', compact('products'));
    }

    public function create()
    {
        return view('Admin.tambah');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_produk' => 'required',
            'jenis_produk' => 'required',
            'stok' => 'required|numeric',
            'harga' => 'required|numeric',
            'gambar' => 'required|image',
        ]);

        $gambar = $request->file('gambar')->store('uploads', 'public');

        Product::create([
            'nama_produk' => $request->nama_produk,
            'jenis_produk' => $request->jenis_produk,
            'stok' => $request->stok,
            'harga' => $request->harga,
            'gambar' => $gambar,
        ]);

        return redirect()->route('produk.list')->with('success', 'Produk berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('Admin.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        $request->validate([
            'nama_produk' => 'required',
            'jenis_produk' => 'required',
            'stok' => 'required|numeric',
            'harga' => 'required|numeric',
            'gambar' => 'nullable|image',
        ]);

        $data = $request->all();

        if ($request->hasFile('gambar')) {
            $data['gambar'] = $request->file('gambar')->store('uploads', 'public');
        } else {
            unset($data['gambar']);
        }

        $product->update($data);

        return redirect()->route('produk.list')->with('success', 'Produk berhasil diupdate!');
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('produk.list');
    }
}
