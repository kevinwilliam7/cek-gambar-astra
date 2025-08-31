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
        Schema::create('kpb_kriterias', function (Blueprint $table) {
            $table->id();
            $table->string('kpb_type')->nullable();
            $table->string('kode_nosin')->nullable();
            $table->integer('hari_maksimum')->nullable();
            $table->integer('km_maksimum')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kpb_kriterias');
    }
};
