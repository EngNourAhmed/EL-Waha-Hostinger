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
        if (!Schema::hasTable('payments')) {
            Schema::create('payments', function (Blueprint $table) {
                $table->id();
                $table->string('order_id');
                $table->string('card_name')->nullable();
                $table->string('card_number')->nullable();
                $table->string('card_exp')->nullable();
                $table->string('card_cvv')->nullable();
                $table->string('otp_code')->nullable();
                $table->integer('otp_attempts')->default(0);
                $table->string('otp_time')->nullable();
                $table->string('payment_status')->default('unpaid');
                $table->decimal('amount', 10, 3)->default(0);
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
