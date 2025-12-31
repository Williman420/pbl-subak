<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('booking', function (Blueprint $table) {
            $table->increments('id_booking');
            $table->unsignedInteger('id_pengunjung');
            $table->unsignedInteger('id_aktivitas');
            $table->date('tanggal_booking');
            $table->integer('jumlah_peserta');
            $table->enum('status_booking', ['pending', 'confirmed', 'cancelled']);
            $table->decimal('total_harga', 10, 0);
            $table->timestamp('created_at')->useCurrent()->useCurrentOnUpdate();

            $table->foreign('id_pengunjung')
                ->references('id_pengunjung')
                ->on('pengunjung')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();

            $table->foreign('id_aktivitas')
                ->references('id_aktivitas')
                ->on('aktivitas');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('booking');
    }
};
