<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LiveStat extends Model
{
    protected $table = 'live_stats';

    protected $fillable = [
        'live_visitors',
        'live_delivery',
        'live_payment',
        'live_otp',
    ];

    protected $casts = [
        'live_visitors' => 'integer',
        'live_delivery' => 'integer',
        'live_payment' => 'integer',
        'live_otp' => 'integer',
    ];
}
