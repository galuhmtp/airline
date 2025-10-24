<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penerbangan extends Model
{
    use HasFactory;

    protected $table = 'penerbangans';
    
    // Gunakan nama kolom sesuai dengan database aktual
    protected $fillable = [
        'kode_penerbangan', // atau 'Node_penerbangan' jika itu yang sebenarnya
        'asal', 
        'tujuan',
        'waktu_keberangkatan', // atau 'waku_keberangkatan' jika itu yang sebenarnya
        'harga',
        'created_at',
        'updated_at'
    ];

    protected $casts = [
        'waktu_keberangkatan' => 'datetime',
        'harga' => 'integer'
    ];
}