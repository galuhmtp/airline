<?php

namespace App\Http\Controllers;

use App\Models\Pemesanan;
use App\Models\Penerbangan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class PemesananController extends Controller
{
    
    public function create(Request $request)
    {
        $penerbangan_id = $request->query('penerbangan_id');
        
        if (!$penerbangan_id) {
            return redirect()->route('penerbangan.index')->with('error', 'Pilih penerbangan terlebih dahulu.');
        }

        $penerbangan = Penerbangan::find($penerbangan_id);
        
        if (!$penerbangan) {
            return redirect()->route('penerbangan.index')->with('error', 'Penerbangan tidak ditemukan.');
        }

        return view('pemesanan.create', compact('penerbangan'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'penerbangan_id' => 'required|exists:penerbangans,id',
            'nama_penumpang' => 'required|string|max:255',
            'no_hp' => 'required|string|max:15',
            'jumlah_tiket' => 'required|integer|min:1|max:10',
        ]);

        try {
            $penerbangan = Penerbangan::findOrFail($request->penerbangan_id);
            $total_harga = $penerbangan->harga * $request->jumlah_tiket;

            $kode_booking = 'WWDT-' . strtoupper(Str::random(6));

            $pemesanan = Pemesanan::create([
                'user_id' => Auth::id(),
                'penerbangan_id' => $request->penerbangan_id,
                'nama_penumpang' => $request->nama_penumpang,
                'no_hp' => $request->no_hp,
                'jumlah_tiket' => $request->jumlah_tiket,
                'total_harga' => $total_harga,
                'kode_booking' => $kode_booking,
                'status' => 'confirmed' 
            ]);

            
            return redirect()->route('pemesanan.tiket', $pemesanan->id)->with('success', 'Pemesanan berhasil dibuat!');

        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }

    public function index()
    {
        $pemesanans = Pemesanan::where('user_id', Auth::id())
            ->with('penerbangan')
            ->orderBy('created_at', 'desc')
            ->get();
            
        return view('pemesanan.index', compact('pemesanans'));
    }

    public function tiket($id)
    {
        $pemesanan = Pemesanan::with(['penerbangan', 'user'])
            ->where('user_id', Auth::id())
            ->findOrFail($id);
            
        return view('pemesanan.tiket', compact('pemesanan'));
    }

    public function cetakTiket($id)
    {
        $pemesanan = Pemesanan::with(['penerbangan', 'user'])
            ->where('user_id', Auth::id())
            ->findOrFail($id);
            
        
        return view('pemesanan.tiket', compact('pemesanan'));
    }
}