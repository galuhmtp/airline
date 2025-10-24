<?php

namespace App\Http\Controllers;

use App\Models\Kota;
use App\Models\Penerbangan; 

class AdminDashboardController extends Controller
{
    public function index()
    {
        $kotas = Kota::all();
        $penerbangans = Penerbangan::all(); 
        return view('admin.dashboard', compact('kotas', 'penerbangans'));
    }

    
}