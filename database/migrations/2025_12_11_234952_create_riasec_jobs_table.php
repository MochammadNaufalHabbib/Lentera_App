<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('riasec_jobs', function (Blueprint $table) {
            $table->id();
            $table->string('code');      // contoh: R, RI, RIA
            $table->string('job_name');  // nama pekerjaan
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('riasec_jobs');
    }

};
