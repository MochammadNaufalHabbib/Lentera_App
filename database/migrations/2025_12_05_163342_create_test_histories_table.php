<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('test_histories', function (Blueprint $table) {
            $table->id();

            // User yang mengerjakan tes
            $table->unsignedBigInteger('user_id');

            // Skor RIASEC
            $table->integer('R')->default(0);
            $table->integer('I')->default(0);
            $table->integer('A')->default(0);
            $table->integer('S')->default(0);
            $table->integer('E')->default(0);
            $table->integer('C')->default(0);

            // Tipe utama + tipe kedua (hasil analisis)
            $table->string('primary_type');     // contoh: R, I, A, S, E, C
            $table->string('secondary_type');   // contoh: A, I, S, dll

            // Daftar rekomendasi pekerjaan
            // Disimpan sebagai JSON (array)
            $table->json('recommendations');

            $table->timestamps();

            // Relasi ke tabel users
            $table->foreign('user_id')
                  ->references('id')
                  ->on('users')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('test_histories');
    }
};
