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
            // tambah dhash
            $table->char('dhash', 64)->nullable()->after('phash');

            // hapus ahash
            if (Schema::hasColumn('astra_webcs', 'ahash')) {
                $table->dropColumn('ahash');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('astra_webcs', function (Blueprint $table) {
            // rollback: tambah ahash lagi
            $table->char('ahash', 64)->nullable()->after('phash');

            // rollback: hapus dhash
            if (Schema::hasColumn('astra_webcs', 'dhash')) {
                $table->dropColumn('dhash');
            }
        });
    }
};
