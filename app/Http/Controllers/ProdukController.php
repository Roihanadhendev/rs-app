<?php

namespace App\Http\Controllers;

use App\Models\ProdukDB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = ProdukDB::all();
        return view('produk.produk', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('produk.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        // $request->validate([
        //     'nama' => 'required',
        //     'harga' => 'required',
        //     'stok' => 'required',
        //     'deskripsi' => 'required',
        // ]);

        $produk = new ProdukDB();
        $produk->nama = $request->nama;
        $produk->harga = $request->harga;
        $produk->stok = $request->stok;
        $produk->deskripsi = $request->deskripsi;

        $ext = $request->foto->getClientOriginalExtension();
        $file = "foto-" . $produk->nama . "." . $ext;
        $request->foto->storeAs('public/foto', $file);

        $produk->foto = $file;
        // dd($produk->foto);
        $produk->save();


        return redirect()->route('produk.index')
            ->with('success', 'Produk berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = ProdukDB::find($id);
        return view('produk.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $produk = ProdukDB::find($id);
        $produk->nama = $request->nama;
        $produk->harga = $request->harga;
        $produk->stok = $request->stok;
        $produk->deskripsi = $request->deskripsi;

        if ($request->hasFile('foto')) {
            $ext = $request->foto->getClientOriginalExtension();
            $file = "foto-" . $produk->nama . "." . $ext;
            $request->foto->storeAs('public/foto', $file);
            Storage::delete('public/foto/' . $request->old_foto);
            $produk->foto = $file;
        } else {
            $produk->foto = $request->old_foto;
        }

        $produk->save();

        return redirect()->route('produk.index')
            ->with('success', 'Produk berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = ProdukDB::find($id);
        Storage::delete('public/foto/' . $data->foto);
        $data->delete();


        return redirect()->route('produk.index')
            ->with('danger', 'Produk berhasil dihapus');
    }
}
