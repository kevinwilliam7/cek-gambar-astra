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
        Schema::table('motors', function (Blueprint $table) {
            // Hapus primary key jika sebelumnya ada
            $table->dropPrimary();

            // Rename kolom 'order' menjadi 'id'
            $table->renameColumn('order', 'id');
        });

        Schema::table('motors', function (Blueprint $table) {
            // Ubah kolom menjadi auto increment primary key
            $table->bigIncrements('id')->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('motors', function (Blueprint $table) {
            $table->dropPrimary();

            // Rename 'id' kembali ke 'order'
            $table->renameColumn('id', 'order');

            // Ubah kolom menjadi integer biasa
            $table->integer('order')->change();
        });
    }
};
