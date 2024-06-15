<?php

function sendMessage($inputString, $providedApiKey) {
    $expectedApiKey = '1999'; // Hardcoded API key
    $serverIP = 'ydegrees.pearlbuddy.com';
    $serverPort = '2024'; // Update this to the correct port if needed
    $providedApiKey = '1999'; // API key provided by the client
    $inputString = 'hello'; // Static input string
    
    // Validate API key
    if ($providedApiKey !== $expectedApiKey) {
        return ['error' => 'Invalid API key'];
    }

    // Construct the URL
    $url = "https://$serverIP:$serverPort/append?string=" . urlencode($inputString);

    // Set SSL context options
    $options = [
        "ssl" => [
            "verify_peer" => false,
            "verify_peer_name" => false,
        ],
    ];

    // Create context resource for the request
    $context = stream_context_create([
        "http" => [
            "method" => "GET",
            "header" => "Accept: application/json\r\n",
        ] + $options,
    ]);

    // Perform the HTTP GET request
    $response = file_get_contents($url, false, $context);

    // Check for errors
    if ($response === false) {
        $error = error_get_last();
        return ['error' => 'Error communicating with server: ' . $error['message']];
    }

    return ['response' => $response];
}

// Usage example with static input

$result = sendMessage($inputString, $providedApiKey);

if (isset($result['error'])) {
    echo json_encode(['error' => $result['error']]);
} else {
    echo json_encode(['response' => $result['response']]);
}
