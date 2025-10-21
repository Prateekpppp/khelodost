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
        Schema::create('sportook_bets', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->string('betId');
            $table->string('marketId');
            $table->string('wallet_before');
            $table->string('bet_amount');
            $table->string('ip')->nullable();
            $table->tinyInteger('status');
            $table->string('marketId');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sportook_bets');
    }
};
