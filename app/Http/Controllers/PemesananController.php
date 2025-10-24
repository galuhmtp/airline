<?php

namespace App\Http\Controllers;

use App\Models\Pemesanan;
use App\Models\Penerbangan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class PemesananController extends Controller
{
    // Menampilkan form pemesanan
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

    // Menyimpan data pemesanan
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

            // Generate kode booking unik
            $kode_booking = 'WWDT-' . strtoupper(Str::random(6));

            $pemesanan = Pemesanan::create([
                'user_id' => Auth::id(),
                'penerbangan_id' => $request->penerbangan_id,
                'nama_penumpang' => $request->nama_penumpang,
                'no_hp' => $request->no_hp,
                'jumlah_tiket' => $request->jumlah_tiket,
                'total_harga' => $total_harga,
                'kode_booking' => $kode_booking,
                'status' => 'confirmed' // Langsung confirmed untuk simplicity
            ]);

            // Redirect ke halaman cetak tiket
            return redirect()->route('pemesanan.tiket', $pemesanan->id)->with('success', 'Pemesanan berhasil dibuat!');

        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }

    // Menampilkan daftar pemesanan user
    public function index()
    {
        $pemesanans = Pemesanan::where('user_id', Auth::id())
            ->with('penerbangan')
            ->orderBy('created_at', 'desc')
            ->get();
            
        return view('pemesanan.index', compact('pemesanans'));
    }

    // Halaman cetak tiket
    public function tiket($id)
    {
        $pemesanan = Pemesanan::with(['penerbangan', 'user'])
            ->where('user_id', Auth::id())
            ->findOrFail($id);
            
        return view('pemesanan.tiket', compact('pemesanan'));
    }

    // Cetak tiket (PDF)
    public function cetakTiket($id)
    {
        $pemesanan = Pemesanan::with(['penerbangan', 'user'])
            ->where('user_id', Auth::id())
            ->findOrFail($id);
            
        // Untuk PDF, Anda bisa menggunakan package seperti dompdf
        // return view('pemesanan.cetak-pdf', compact('pemesanan'));
        
        // Sementara kita kembalikan view biasa dulu
        return view('pemesanan.tiket', compact('pemesanan'));
    }
}