<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penerbangan extends Model
{
    use HasFactory;

    protected $table = 'penerbangans';
    
    
    protected $fillable = [
        'kode_penerbangan', 
        'asal', 
        'tujuan',
        'waktu_keberangkatan', 
        'harga',
        'created_at',
        'updated_at'
    ];

    protected $casts = [
        'waktu_keberangkatan' => 'datetime',
        'harga' => 'integer'
    ];
}