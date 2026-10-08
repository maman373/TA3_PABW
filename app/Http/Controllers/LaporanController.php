<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporanController extends Controller
{
    // Data contoh laporan (tanpa database)
    private function dataLaporan()
    {
        return [
            ['nama' => 'Budi Santoso', 'lokasi' => 'Dayeuhkolot', 'tinggi' => 85],
            ['nama' => 'Siti Aminah', 'lokasi' => 'Baleendah', 'tinggi' => 50],
            ['nama' => 'Asep Sunandar', 'lokasi' => 'Bojongsoang', 'tinggi' => 20],
            ['nama' => 'Rina Marlina', 'lokasi' => 'Rancaekek', 'tinggi' => 30],
        ];
    }

    // Halaman form pelaporan
    public function create()
    {
        return view('laporan.create');
    }

    // Memproses form (POST) lalu menampilkan halaman konfirmasi
    public function store(Request $request)
    {
        $data = $request->validate([
            'nama'   => 'required|string|max:100',
            'lokasi' => 'required|string|max:150',
            'tinggi' => 'required|numeric|min:0',
        ]);

        return view('laporan.konfirmasi', ['laporan' => $data]);
    }

    // Halaman daftar laporan
    public function index()
    {
        $laporans = $this->dataLaporan();

        return view('laporan.index', compact('laporans'));
    }
}
