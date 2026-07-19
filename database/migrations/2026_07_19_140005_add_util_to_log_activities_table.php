<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * Menambahkan kolom `util` (character varying) ke tabel log_activities.
     * Digunakan untuk menyimpan informasi utilitas tambahan per log entry.
     */
    public function up(): void
    {
        Schema::table('log_activities', function (Blueprint $table) {
            $table->string('util')->nullable()->after('description');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('log_activities', function (Blueprint $table) {
            $table->dropColumn('util');
        });
    }
};
