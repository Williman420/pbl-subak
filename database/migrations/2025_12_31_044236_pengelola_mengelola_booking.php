<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('pengelola_mengelola_booking', function (Blueprint $table) {
            $table->unsignedInteger('id_booking')->unique();
            $table->unsignedInteger('id_pengelola')->unique();
            $table->dateTime('modified_date');

            $table->foreign('id_booking')
                ->references('id_booking')
                ->on('booking')
                ->cascadeOnDelete();

            $table->foreign('id_pengelola')
                ->references('id_pengelola')
                ->on('pengelola')
                ->cascadeOnDelete();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pengelola_mengelola_booking');
    }
};
