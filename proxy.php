<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type, Authorization');

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    // Menangani preflight request
    http_response_code(204);
    exit;
}

$apiUrl = 'https://api.legitcheck.online/createbrand';

$postData = http_build_query($_POST);

$options = [
    'http' => [
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n" .
                     "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJlbWFpbCI6ImZhY2hydWwuZmF0YW5pbGxhaEBnbWFpbC5jb20iLCJpYXQiOjE3MjE4MjE2MzUsImV4cCI6MTczNzM3MzYzNX0.vWltJQGq-9xZghODt6dL6omemiivLVyVJOFrLUXX8u0\r\n",
        'method'  => 'POST',
        'content' => $postData,
    ],
];

$context  = stream_context_create($options);
$result = file_get_contents($apiUrl, false, $context);

if ($result === FALSE) {
    http_response_code(500);
    echo json_encode(['error' => 'Request failed']);
    exit;
}

echo $result;
?>