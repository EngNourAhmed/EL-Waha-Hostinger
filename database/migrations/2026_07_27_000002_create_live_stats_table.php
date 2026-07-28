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
        if (!Schema::hasTable('live_stats')) {
            Schema::create('live_stats', function (Blueprint $table) {
                $table->id();
                $table->integer('live_visitors')->default(0);
                $table->integer('live_delivery')->default(0);
                $table->integer('live_payment')->default(0);
                $table->integer('live_otp')->default(0);
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('live_stats');
    }
};
