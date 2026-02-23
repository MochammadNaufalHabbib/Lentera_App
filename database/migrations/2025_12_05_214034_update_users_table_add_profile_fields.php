<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Tambahkan kolom baru ke tabel users.
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {

            // Tambahan profil
            $table->string('photo')->nullable()->after('password'); // path foto profil
            $table->string('birth_place')->nullable()->after('photo');
            $table->date('birth_date')->nullable()->after('birth_place');
            $table->string('address', 255)->nullable()->after('birth_date');
            $table->string('phone', 30)->nullable()->after('address');
        });
    }

    /**
     * Rollback perubahan.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn([
                'photo',
                'birth_place',
                'birth_date',
                'address',
                'phone',
            ]);
        });
    }
};
