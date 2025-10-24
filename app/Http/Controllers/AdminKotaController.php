<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kota;

class AdminKotaController extends Controller
{
    public function index()
    {
        $kotas = Kota::all();
        return view('admin.kota', compact('kotas'));
    }

    public function store(Request $request)
    {
        // Tidak ada validasi - bebas input apa saja
        try {
            Kota::create([
                'nama_kota' => $request->nama_kota,
                'kode_bandara' => $request->kode_bandara
            ]);
            return redirect()->route('admin.kota.index')->with('success', 'Kota berhasil ditambahkan!');
        } catch (\Exception $e) {
            return redirect()->route('admin.kota.index')->with('error', 'Gagal menambahkan kota: ' . $e->getMessage());
        }
    }

    public function destroy($id)
    {
        Kota::findOrFail($id)->delete();
        return redirect()->route('admin.kota.index');
    }
}