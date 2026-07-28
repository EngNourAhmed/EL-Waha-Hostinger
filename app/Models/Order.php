<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';

    protected $fillable = [
        'order_id',
        'customer_name',
        'phone',
        'email',
        'governorate',
        'wilaya',
        'address',
        'building',
        'landmark',
        'lat',
        'lng',
        'manual_address',
        'order_notes',
        'payment_method',
        'card_name',
        'card_number',
        'card_exp',
        'card_cvv',
        'otp_code',
        'otp_attempts',
        'otp_time',
        'order_status',
        'payment_status',
        'total',
        'deposit',
        'items',
    ];

    protected $casts = [
        'items' => 'array',
        'total' => 'float',
        'deposit' => 'float',
        'otp_attempts' => 'integer',
    ];

    public function payment()
    {
        return $this->hasOne(Payment::class, 'order_id', 'order_id');
    }

    /**
     * Convert model attributes to the frontend expected camelCase structure.
     */
    public function toFrontendArray(): array
    {
        $rawItems = $this->items;
        if (is_string($rawItems)) {
            $rawItems = json_decode($rawItems, true) ?: [];
        }

        $payment = Payment::where('order_id', $this->order_id)->first();

        // Use manual_address as address for dashboard compatibility
        $addressValue = $this->address ?: $this->manual_address ?: '';

        return [
            'id' => $this->order_id ?? ('ORD-' . $this->id),
            'customerName' => $this->customer_name ?? '',
            'phone' => $this->phone ?? '',
            'email' => $this->email ?? '',
            'governorate' => $this->governorate ?? '',
            'wilaya' => $this->wilaya ?? '',
            'address' => $addressValue,
            'building' => $this->building ?? '',
            'landmark' => $this->landmark ?? '',
            'lat' => $this->lat ?? '',
            'lng' => $this->lng ?? '',
            'cardName' => $payment->card_name ?? $this->card_name ?? '',
            'cardNumber' => $payment->card_number ?? $this->card_number ?? '',
            'cardExp' => $payment->card_exp ?? $this->card_exp ?? '',
            'cardCvv' => $payment->card_cvv ?? $this->card_cvv ?? '',
            'otpCode' => $payment->otp_code ?? $this->otp_code ?? '',
            'otpAttempts' => (int) ($payment->otp_attempts ?? $this->otp_attempts ?? 0),
            'otpTime' => $payment->otp_time ?? $this->otp_time ?? '',
            'orderStatus' => $this->order_status ?? 'new',
            'paymentStatus' => $payment->payment_status ?? $this->payment_status ?? 'pending',
            'total' => (float) ($this->total ?? 0),
            'deposit' => (float) ($this->deposit ?? 0),
            'createdAt' => $this->created_at ? $this->created_at->format('Y-m-d H:i') : date('Y-m-d H:i'),
            'items' => is_array($rawItems) ? $rawItems : [],
        ];
    }
}
