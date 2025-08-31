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
        Schema::create('astra_webcs', function (Blueprint $table) {
            $table->id();
            $table->string('nama_region')->nullable();
            $table->string('nomor_pkb')->nullable();
            $table->string('nama_ahass')->nullable();
            $table->string('nomor_transaksi')->nullable();
            $table->string('kode_ahass')->nullable();
            $table->string('nama_customer')->nullable();
            $table->string('no_handphone')->nullable();
            $table->string('type_motor')->nullable();
            $table->string('nomor_mesin')->nullable();
            $table->string('no_polisi')->nullable();
            $table->string('kpb_type')->nullable();
            $table->string('km')->nullable();
            $table->string('tanggal_beli')->nullable();
            $table->string('tanggal_claim')->nullable();
            $table->text('filename')->nullable();
            $table->string('phash', 64)->nullable();
            $table->string('validitas')->nullable();
            $table->string('no_rangka')->nullable();
            $table->boolean('current_excel')->default(false);
            $table->boolean('elimination')->default(false);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('astra_webcs');
    }
};
