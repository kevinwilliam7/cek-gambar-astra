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
        Schema::create('rekap_kpbs', function (Blueprint $table) {
            $table->id();
            $table->string('month');
            $table->string('md_code')->nullable();
            $table->string('md_name')->nullable();
            $table->string('ahass_code')->nullable();
            $table->string('ahass_name')->nullable();
            $table->string('type')->nullable();
            $table->string('frame')->nullable();
            $table->string('engine')->nullable();
            $table->string('payment_request')->nullable();
            $table->string('kpb')->nullable();
            $table->date('buy_date')->nullable();
            $table->string('service_id')->nullable();
            $table->string('km')->nullable();
            $table->date('service_date')->nullable();
            $table->string('claim_letter')->nullable();
            $table->date('received_date')->nullable();
            $table->date('upload_date')->nullable();
            $table->date('due_date')->nullable();
            $table->string('delay')->nullable();
            $table->date('ttpk_date')->nullable();
            $table->string('ttpk')->nullable();
            $table->string('status_description')->nullable();
            $table->string('unpaid_reason')->nullable();
            $table->string('dispensation')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rekap_kpbs');
    }
};
