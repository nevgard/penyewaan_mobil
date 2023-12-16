<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mobil;

class PenyewaanController extends Controller
{
    public function index()
    {
        $mobils = Mobil::all();
        return view('daftar-mobil', compact('mobils'));
    }

    public function create()
    {
        return view('form-penyewaan');
    }

    public function store(Request $request)
    {
        // Validasi input $request

        // Simpan data penyewaan ke database

        return redirect('/daftar-mobil')->with('success', 'Penyewaan berhasil!');
    }
}
