<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penerbangan;
use App\Models\Kota;

class PenerbanganController extends Controller
{
    public function index()
    {        
        $penerbangans = Penerbangan::orderBy('waktu_keberangkatan', 'asc')->paginate(10); 

        $kotas = Kota::all();

        return view('penerbangan.index', compact('penerbangans', 'kotas'));
    }

    public function dashboard()
    {
        $penerbangans = Penerbangan::all();
        $kotas = Kota::all();

        return view('dashboard', compact('penerbangans', 'kotas'));
    }

    public function show($id)
    {
        try {
            $penerbangan = Penerbangan::findOrFail($id);

            return view('penerbangan.show', compact('penerbangan'));
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            abort(404, 'Penerbangan tidak ditemukan');
        }
    }

    public function search(Request $request)
    {
        $asal = $request->input('asal');
        $tujuan = $request->input('tujuan');
        $tanggal = $request->input('tanggal');

        $query = Penerbangan::query();

        if ($asal) {
            $query->where('asal', 'like', '%' . $asal . '%');
        }

        if ($tujuan) {
            $query->where('tujuan', 'like', '%' . $tujuan . '%');
        }

        if ($tanggal) {
            $query->whereDate('waktu_keberangkatan', $tanggal);
        }

        $hasilPencarian = $query->get();

        return response()->json($hasilPencarian);
    }

    public function create()
    {
        $kotas = Kota::all();
        return view('admin.dashboard', compact('kotas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode_penerbangan' => 'required|string|max:50',
            'asal' => 'required|string',
            'tujuan' => 'required|string',
            'tanggal_keberangkatan' => 'required|date',
            'jam_keberangkatan' => 'required',
            'harga' => 'required|integer|min:0',
        ]);

        try {
            $waktu_keberangkatan = $request->tanggal_keberangkatan . ' ' . $request->jam_keberangkatan;

            Penerbangan::create([
                'kode_penerbangan' => $request->kode_penerbangan,
                'asal' => $request->asal,
                'tujuan' => $request->tujuan,
                'waktu_keberangkatan' => $waktu_keberangkatan,
                'harga' => $request->harga,
            ]);

            return redirect('/admin/dashboard')->with('success', 'Jadwal penerbangan berhasil ditambahkan.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Gagal menambahkan jadwal: ' . $e->getMessage());
        }
    }

    public function edit($id)
    {
        $penerbangan = Penerbangan::find($id);
        $kotas = Kota::all();

        if (!$penerbangan) {
            return redirect('/admin/dashboard')->with('error', 'Data tidak ditemukan.');
        }

        return view('admin.penerbangan.edit', [
            'penerbangan' => $penerbangan,
            'kotas' => $kotas
        ]);
    }

    public function update(Request $request, $id)
    {
        $penerbangan = Penerbangan::find($id);
        if (!$penerbangan) {
            return redirect('/admin/dashboard')->with('error', 'Data tidak ditemukan.');
        }

        $request->validate([
            'kode_penerbangan' => 'required|string|max:50',
            'asal' => 'required|string',
            'tujuan' => 'required|string',
            'tanggal_keberangkatan' => 'required|date',
            'jam_keberangkatan' => 'required',
            'harga' => 'required|integer|min:0',
        ]);

        $waktu_keberangkatan = $request->tanggal_keberangkatan . ' ' . $request->jam_keberangkatan;

        $penerbangan->update([
            'kode_penerbangan' => $request->kode_penerbangan,
            'asal' => $request->asal,
            'tujuan' => $request->tujuan,
            'waktu_keberangkatan' => $waktu_keberangkatan,
            'harga' => $request->harga,
        ]);

        return redirect('/admin/dashboard')->with('success', 'Jadwal penerbangan berhasil diperbarui.');
    }

    public function delete(Request $request)
    {
        $penerbangan = Penerbangan::find($request->id);
        if ($penerbangan) {
            $penerbangan->delete();
            return redirect('/admin/penerbangan')->with('success', 'Data berhasil dihapus.');
        } else {
            return redirect('/admin/penerbangan')->with('error', 'Data tidak ditemukan.');
        }
    }
}
