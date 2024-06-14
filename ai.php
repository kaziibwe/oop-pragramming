<?php
// Define the URL of the AI server
$aiServerUrl = 'https://ydegrees.pearlbuddy.com:2024?string=test';
// echo  $aiServerUrl ;
// Initialize cURL session
$curl = curl_init();

// Set cURL options
curl_setopt_array($curl, [
    CURLOPT_URL => $aiServerUrl,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTPGET => true, // Use GET method
    CURLOPT_SSL_VERIFYPEER => false, // Disable SSL verification (not recommended for production)
    CURLOPT_TIMEOUT => 30, // Timeout after 30 seconds
]);

// Execute cURL request
$response = curl_exec($curl);

// Check for errors
if (curl_errno($curl)) {
    $errorMessage = curl_error($curl);
    $errorCode = curl_errno($curl);
    curl_close($curl);
    echo "cURL error ({$errorCode}): {$errorMessage}\n";
    exit;
}

// Get HTTP status code
$httpStatusCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);

// Close cURL session
curl_close($curl);

if ($httpStatusCode !== 200) {
    echo "HTTP error: Received status code {$httpStatusCode}\n";
    exit;
}

// Output the response from the AI server
echo "Response from AI server: \n";
echo $response;
