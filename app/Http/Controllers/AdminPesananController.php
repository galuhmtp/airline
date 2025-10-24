<?php

namespace App\Http\Controllers;

use App\Models\Pemesanan;
use Illuminate\Http\Request;

class AdminPesananController extends Controller
{
    
    public function index()
    {
        $pemesanans = Pemesanan::with(['user', 'penerbangan'])
            ->orderBy('created_at', 'desc')
            ->get();
            
        return view('admin.pesanan', compact('pemesanans'));
    }

   
    public function show($id)
    {
        $pemesanan = Pemesanan::with(['user', 'penerbangan'])
            ->findOrFail($id);
            
        return view('admin.pesanan-detail', compact('pemesanan'));
    }

    
    public function updateStatus(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|in:pending,confirmed,cancelled'
        ]);

        $pemesanan = Pemesanan::findOrFail($id);
        $pemesanan->update([
            'status' => $request->status
        ]);

        return redirect()->back()->with('success', 'Status pesanan berhasil diupdate!');
    }

   
    public function destroy($id)
    {
        $pemesanan = Pemesanan::findOrFail($id);
        $pemesanan->delete();

        return redirect()->route('admin.pesanan')->with('success', 'Pesanan berhasil dihapus!');
    }
}