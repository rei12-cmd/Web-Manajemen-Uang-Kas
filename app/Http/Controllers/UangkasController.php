<?php

namespace App\Http\Controllers;

use App\Models\uangkas;
use Illuminate\Http\Request;

class uangkasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $uangkas = uangkas::all(); // Ambil semua data dari tabel ungkas
        return view('uangkas.index', compact('uangkas'));
    }

    public function create()
    {
        return view('uangkas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_siswa' => 'required|string|max:255',
            'tgl_bayar' => 'required|date',
            'jumlah_bayar' => 'required|numeric',
        ]);

        uangkas::create([
            'nama_siswa' => $request->nama_siswa,
            'tgl_bayar' => $request->tgl_bayar,
            'jumlah_bayar' => $request->jumlah_bayar,
        ]);

        return redirect()->route('uangkas.index')->with('success', 'Data berhasil disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function detail($id)
    {
        $uangkas = uangkas::findOrFail($id);
        return view('uangkas.detail', compact('uangkas'));
    }

    public function edit($id)
    {
        $uangkas = uangkas::findOrFail($id);
        return view('uangkas.edit', compact('uangkas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_siswa' => 'required|string|max:255',
            'tgl_bayar' => 'required|date',
            'jumlah_bayar' => 'required|numeric',
        ]);

        $uangkas = uangkas::findOrFail($id);
        $uangkas->update([
            'nama_siswa' => $request->nama_siswa,
            'tgl_bayar' => $request->tgl_bayar,
            'jumlah_bayar' => $request->jumlah_bayar,
        ]);

        return redirect()->route('uangkas.index')->with('success', 'Data berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $uangkas = uangkas::findOrFail($id);
        $uangkas->delete();

        return redirect()->route('uangkas.index')->with('success', 'Data berhasil dihapus');
    }
}
