<?php

namespace App\Http\Controllers;

use App\Models\baju;
use Illuminate\Http\Request;

class BajuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dtbaju = baju::all();
        return view('admin.home', compact('dtbaju'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required',
            'ukuran' => 'required',
            'warna' => 'required',
            'stok' => 'required',
            'gambar' => 'image|mimes:jpg,png,jpeg,gif,svg',
        ]);
        $filename = $request->gambar->getClientOriginalName();
        $path = $request->gambar->storeAs('img', $filename, 'public');
        $baj = new baju();
        $baj->nama = $request->nama;
        $baj->deskripsi = $request->deskripsi;
        $baj->harga = $request->harga;
        $baj->ukuran = $request->ukuran;
        $baj->warna = $request->warna;
        $baj->stok = $request->stok;
        $baj->gambar = $path;
        $baj->save();



        // if ($request->hasFile('gambar')) {
        //     $request->file('gambar')->move('img/', $request->file('gambar')->getClientOriginalName());
        //     $baj->gambar = $request->file('gambar')->getClientOriginalName();
        //     $baj->save();
        // }

        return redirect('admin/home');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $baj = baju::findorfail($id);
        return view('admin/Edit', compact('baj'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // $baj = baju::findorfail($id);
        // $baj->update($request->all());

        $baj = baju::find($id);
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required',
            'ukuran' => 'required',
            'warna' => 'required',
            'stok' => 'required',
            'gambar' => 'image|mimes:jpg,png,jpeg,gif,svg',
        ]);
        $filename = $request->gambar->getClientOriginalName();
        $path = $request->gambar->storeAs('img', $filename, 'public');
        $baj->nama = $request->nama;
        $baj->deskripsi = $request->deskripsi;
        $baj->harga = $request->harga;
        $baj->ukuran = $request->ukuran;
        $baj->warna = $request->warna;
        $baj->stok = $request->stok;
        $baj->gambar = $path;
        $baj->save();


        return redirect('admin/home');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $baj = baju::findorfail($id);
        $baj->delete();
        return back();
    }
}
