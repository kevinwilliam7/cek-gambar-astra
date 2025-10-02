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
        Schema::table('ahass', function (Blueprint $table) {
            $table->string('nama_ahass_ttpk')->nullable();
            $table->string('wilayah')->nullable();
            $table->string('jenis_dealer')->default('H123');
            $table->string('contact_person')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('ahass', function (Blueprint $table) {
            $table->dropColumn(['nama_ahass_ttpk', 'wilayah', 'jenis_dealer', 'contact_person']);
        });
    }
};
