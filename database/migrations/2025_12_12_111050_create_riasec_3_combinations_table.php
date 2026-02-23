<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('riasec_3_combinations', function (Blueprint $table) {
            $table->id();
            $table->string('code', 3); // misal RIA, RIS, SEC, dst
            $table->string('job_name');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('riasec_3_combinations');
    }
};
