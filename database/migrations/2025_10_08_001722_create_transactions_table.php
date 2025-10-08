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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->string('order_sn');
            $table->string('wallet_before')->nullable();
            $table->string('transfer_amount');
            $table->string('ip')->nullable();
            $table->tinyInteger('status');
            $table->tinyInteger('payment_type')->nullable();
            $table->string('currency')->nullable();
            $table->string('remark')->nullable();
            $table->string('payment_proof')->nullable();
            $table->json('additional_data')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
