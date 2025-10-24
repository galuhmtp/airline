<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    protected $table = 'pemesanans';
    
    protected $fillable = [
        'user_id',
        'penerbangan_id',
        'nama_penumpang',
        'no_hp',
        'jumlah_tiket',
        'total_harga',
        'kode_booking',
        'status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function penerbangan()
    {
        return $this->belongsTo(Penerbangan::class);
    }
}