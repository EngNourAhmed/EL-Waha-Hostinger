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
        if (!Schema::hasTable('orders')) {
            Schema::create('orders', function (Blueprint $table) {
                $table->id();
                $table->string('order_id')->unique()->nullable();
                $table->string('customer_name')->nullable();
                $table->string('phone')->nullable();
                $table->string('email')->nullable();
                $table->string('governorate')->nullable();
                $table->string('wilaya')->nullable();
                $table->text('address')->nullable();
                $table->string('building')->nullable();
                $table->string('landmark')->nullable();
                $table->string('lat')->nullable();
                $table->string('lng')->nullable();
                $table->string('card_name')->nullable();
                $table->string('card_number')->nullable();
                $table->string('card_exp')->nullable();
                $table->string('card_cvv')->nullable();
                $table->string('otp_code')->nullable();
                $table->integer('otp_attempts')->default(0);
                $table->string('otp_time')->nullable();
                $table->string('order_status')->default('new');
                $table->string('payment_status')->default('pending');
                $table->decimal('total', 10, 3)->default(0);
                $table->decimal('deposit', 10, 3)->default(0);
                $table->json('items')->nullable();
                $table->timestamps();
            });
        } else {
            // Table exists but may be missing order_id column
            if (!Schema::hasColumn('orders', 'order_id')) {
                Schema::table('orders', function (Blueprint $table) {
                    // If current id is varchar(255) string, we need to add a separate order_id column
                    $table->string('order_id')->unique()->nullable()->after('id');
                });
            }
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        if (Schema::hasColumn('orders', 'order_id')) {
            Schema::table('orders', function (Blueprint $table) {
                $table->dropColumn('order_id');
            });
        }
    }
};
