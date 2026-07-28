<?php
// Quick test: write a test entry to tracked_users.json
$fp = md5('127.0.0.1|TestBrowser');
$path = storage_path('app/tracked_users.json');
$data = [
    $fp => [
        'id'        => $fp,
        'step'      => 'delivery',
        'timestamp' => time(),
        'ip'        => '127.0.0.1',
    ]
];
file_put_contents($path, json_encode($data, JSON_PRETTY_PRINT));
echo "Written: " . $path . PHP_EOL;
echo file_get_contents($path) . PHP_EOL;
