<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $table = 'payments';

    protected $fillable = [
        'order_id',
        'card_name',
        'card_number',
        'card_exp',
        'card_cvv',
        'otp_code',
        'otp_attempts',
        'otp_time',
        'payment_status',
        'amount',
    ];

    protected $casts = [
        'amount' => 'float',
        'otp_attempts' => 'integer',
    ];
}
