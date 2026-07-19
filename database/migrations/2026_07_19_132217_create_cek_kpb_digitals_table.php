<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * Sama dengan tabel cek_kpbs, dengan tambahan kolom ai_generated (jsonb)
     * untuk menyimpan hasil analisis AI per baris data KPB Digital.
     */
    public function up(): void
    {
        Schema::create('cek_kpb_digitals', function (Blueprint $table) {
            $table->id();
            $table->string('md_code')->default('Q01');
            $table->string('md_name')->default('HSO CABANG PONTIANAK');
            $table->string('file_name')->nullable();
            $table->string('engine');
            $table->integer('service_id');
            $table->string('buy_date');
            $table->string('service_date');
            $table->integer('km');
            $table->integer('user_id')->nullable();

            // Kolom khusus KPB Digital: menyimpan return/output dari AI
            // Tipe jsonb agar bisa disimpan sebagai JSON terstruktur dan di-query secara efisien di PostgreSQL
            $table->jsonb('ai_generated')->nullable()->comment('Hasil analisis / return value dari AI untuk baris ini');

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cek_kpb_digitals');
    }
};
