<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kota extends Model
{
    protected $table = 'kotas';
    
    protected $fillable = [
        'nama_kota', 
        'kode_bandara',
        'created_at',
        'updated_at'
    ];
    
    // Jika Anda ingin menambahkan relasi dengan penerbangan
    public function penerbanganAsal()
    {
        return $this->hasMany(Penerbangan::class, 'rute_asal', 'nama_kota');
    }
    
    public function penerbanganTujuan()
    {
        return $this->hasMany(Penerbangan::class, 'rute_tujuan', 'nama_kota');
    }
}