<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('aktivitas', function (Blueprint $table) {
            $table->increments('id_aktivitas');
            $table->string('nama_aktivitas');
            $table->text('deskripsi');
            $table->integer('slot');
            $table->decimal('harga', 10, 0);
            $table->string('gambar_aktivitas');
            $table->date('start_date');
            $table->date('end_date');
            $table->enum('status_ketersediaan', ['available', 'not available']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('aktivitas');
    }
};
