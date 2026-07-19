<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * Sama dengan cek_kpb_progress, digunakan untuk tracking progress
     * background job import Excel KPB Digital.
     */
    public function up(): void
    {
        Schema::create('cek_kpb_digital_progress', function (Blueprint $table) {
            $table->id();
            $table->integer('job_id')->unique();
            $table->string('file_name');
            $table->integer('progress')->default(0);
            $table->integer('total')->default(0);
            $table->string('status')->default('processing');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cek_kpb_digital_progress');
    }
};
