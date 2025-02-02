<?php

namespace App\Http\Controllers;

use App\Models\Uangkas;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Ambil semua data dari tabel uangkas
        $dataUangkas = Uangkas::all();

        // Hitung total siswa, total transaksi, dan jumlah transaksi
        $totalSiswa = Uangkas::distinct('nama_siswa')->count('nama_siswa');
        $totalTransaksi = Uangkas::count();
        $jumlahTransaksi = Uangkas::sum('jumlah_bayar');

        // Kirim data ke view
        return view('homes.index', compact('dataUangkas', 'totalSiswa', 'totalTransaksi', 'jumlahTransaksi'));
    }
}
