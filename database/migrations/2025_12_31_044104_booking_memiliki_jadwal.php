<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('booking_memiliki_jadwal', function (Blueprint $table) {
            $table->unsignedInteger('id_jadwal')->unique();
            $table->unsignedInteger('id_booking')->index();
            $table->decimal('harga_aktivitas', 10, 0);
            $table->integer('jumlah_pengunjung');

            $table->foreign('id_jadwal')
                ->references('id_jadwal')
                ->on('jadwal');

            $table->foreign('id_booking')
                ->references('id_booking')
                ->on('booking')
                ->cascadeOnDelete();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('booking_memiliki_jadwal');
    }
};
