<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('artikel', function (Blueprint $table) {
            $table->increments('id_artikel');
            $table->unsignedInteger('id_pengelola');
            $table->string('judul');
            $table->date('tanggal_pembuatan');
            $table->string('gambar_aktivitas')->nullable();
            $table->timestamp('modified_date')->useCurrent()->useCurrentOnUpdate();
            $table->text('isi_artikel');

            $table->foreign('id_pengelola')
                ->references('id_pengelola')
                ->on('pengelola')
                ->cascadeOnUpdate()
                ->restrictOnDelete();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('artikel');
    }
};
