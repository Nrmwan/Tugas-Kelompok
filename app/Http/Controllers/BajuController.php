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

        $data = baju::create([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'harga' => $request->harga,
            'ukuran' => $request->ukuran,
            'warna' => $request->warna,
            'stok' => $request->stok,
            'gambar' => $request->gambar
        ]);

        if ($request->hasFile('gambar')) {
            $request->file('gambar')->move('img/', $request->file('gambar')->getClientOriginalName());
            $data->gambar = $request->file('gambar')->getClientOriginalName();
            $data->save();
        }

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
        $baj = baju::findorfail($id);
        $baj->update($request->all());
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
