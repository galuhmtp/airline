<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::select('id', 'name', 'email', 'role', 'email_verified_at', 'created_at')
                    ->orderBy('created_at', 'desc')
                    ->get();
                    
        return view('admin.users', compact('users'));
    }

    // Tambahkan method destroy untuk delete user
    public function destroy(Request $request)
    {
        // Prevent user from deleting themselves
        if ($request->id == auth()->id()) {
            return redirect()->route('admin.users')->with('error', 'Tidak bisa menghapus akun sendiri!');
        }

        $user = User::find($request->id);
        
        if (!$user) {
            return redirect()->route('admin.users')->with('error', 'User tidak ditemukan!');
        }

        $user->delete();

        return redirect()->route('admin.users')->with('success', 'User berhasil dihapus!');
    }
}