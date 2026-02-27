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
        Schema::table('astra_webcs', function (Blueprint $table) {
            $table->unique(
                ['kode_ahass', 'nomor_mesin', 'kpb_type', 'km', 'nomor_pkb'],
                'astra_webc_unique_index'
            );
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('astra_webcs', function (Blueprint $table) {
            $table->dropUnique('astra_webc_unique_index');
        });
    }
};
