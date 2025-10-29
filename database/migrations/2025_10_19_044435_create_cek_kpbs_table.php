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
        Schema::create('cek_kpbs', function (Blueprint $table) {
            $table->id();
            $table->string('md_code')->default('Q01');
            $table->string('md_name')->nullable('HSO CABANG PONTIANAK');
            $table->string('file_name')->nullable();
            $table->string('engine');
            $table->integer('service_id');
            $table->string('buy_date');
            $table->string('service_date');
            $table->integer('km');
            $table->integer('user_id')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cek_kpbs');
    }
};
