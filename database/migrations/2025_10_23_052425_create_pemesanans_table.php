<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('pemesanans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('penerbangan_id')->constrained()->onDelete('cascade');
            $table->string('nama_penumpang'); 
            $table->string('no_hp'); 
            $table->integer('jumlah_tiket');
            $table->decimal('total_harga', 12, 2);
            $table->enum('status', ['pending', 'confirmed', 'cancelled'])->default('confirmed');
            $table->string('kode_booking')->unique();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pemesanans');
    }
};