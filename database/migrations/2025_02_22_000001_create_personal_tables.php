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
        // Tabel Profile (data diri)
        Schema::create('personal_profiles', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Nama lengkap
            $table->string('tagline')->nullable(); // Sapaan/tagline
            $table->text('about')->nullable(); // Tentang saya
            $table->string('photo')->nullable(); // Path foto
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('github')->nullable();
            $table->string('instagram')->nullable();
            $table->timestamps();
        });

        // Tabel Skills
        Schema::create('personal_skills', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Nama skill
            $table->integer('level')->default(0); // Level 0-100
            $table->string('category')->nullable(); // Kategori (programming, design, dll)
            $table->integer('order')->default(0); // Urutan tampil
            $table->timestamps();
        });

        // Tabel Educations
        Schema::create('personal_educations', function (Blueprint $table) {
            $table->id();
            $table->string('institution'); // Nama institusi
            $table->string('degree'); // Jenjang (SMA, S1, S2, dll)
            $table->string('major')->nullable(); // Jurusan
            $table->integer('start_year'); // Tahun masuk
            $table->integer('end_year')->nullable(); // Tahun lulus
            $table->boolean('is_current')->default(false); // Masih aktif
            $table->integer('order')->default(0);
            $table->timestamps();
        });

        // Tabel Portfolios
        Schema::create('personal_portfolios', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // Judul proyek
            $table->text('description')->nullable(); // Deskripsi
            $table->string('image')->nullable(); // Gambar/thumbnail
            $table->string('link')->nullable(); // Link proyek
            $table->string('category')->nullable(); // Kategori
            $table->integer('order')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personal_portfolios');
        Schema::dropIfExists('personal_educations');
        Schema::dropIfExists('personal_skills');
        Schema::dropIfExists('personal_profiles');
    }
};
