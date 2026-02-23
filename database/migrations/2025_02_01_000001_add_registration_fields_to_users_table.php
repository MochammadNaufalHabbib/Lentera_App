<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('education')->nullable()->after('email');
            $table->string('gender')->nullable()->after('education');
            $table->integer('age')->nullable()->after('gender');
            $table->string('otp_code')->nullable()->after('age');
            $table->timestamp('otp_expires_at')->nullable()->after('otp_code');
            $table->boolean('is_verified')->default(false)->after('otp_expires_at');
        });
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['education', 'gender', 'age', 'otp_code', 'otp_expires_at', 'is_verified']);
        });
    }
};
