<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('pembayaran', function (Blueprint $table) {
            $table->increments('id_pembayaran');
            $table->unsignedInteger('id_booking');
            $table->unsignedInteger('id_pengelola');
            $table->string('bukti_pembayaran');
            $table->date('tanggal_bayar');
            $table->decimal('jumlah_bayar', 10, 0);
            $table->enum('status_pembayaran', ['success', 'pending', 'failed']);
            $table->enum('metode_pembayaran', ['transfer', 'cash']);

            $table->foreign('id_booking')
                ->references('id_booking')
                ->on('booking')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();

            $table->foreign('id_pengelola')
                ->references('id_pengelola')
                ->on('pengelola')
                ->cascadeOnUpdate()
                ->nullOnDelete();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pembayaran');
    }
};
