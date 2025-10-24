<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('pemesanans', function (Blueprint $table) {
            if (!Schema::hasColumn('pemesanans', 'nama_penumpang')) {
                $table->string('nama_penumpang')->after('penerbangan_id');
            }
            
            if (!Schema::hasColumn('pemesanans', 'no_hp')) {
                $table->string('no_hp')->after('nama_penumpang');
            }
            
            if (!Schema::hasColumn('pemesanans', 'status')) {
                $table->enum('status', ['pending', 'confirmed', 'cancelled'])->default('confirmed')->after('total_harga');
            }
            
            if (!Schema::hasColumn('pemesanans', 'kode_booking')) {
                $table->string('kode_booking')->unique()->after('status');
            }
        });
    }

    public function down()
    {
        Schema::table('pemesanans', function (Blueprint $table) {
            // Hapus kolom jika rollback
            $table->dropColumn(['nama_penumpang', 'no_hp', 'status', 'kode_booking']);
        });
    }
};