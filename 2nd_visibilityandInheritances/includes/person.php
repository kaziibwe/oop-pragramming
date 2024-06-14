
<?php

// properties are like valuables on creating them inside the objects

// visibility  is public and private

// methods by private works inside the class will public  works out side the class

class Person{
    // private properties
    // if you have protected you can access class with in the same class  and another class its extended to or inherited to 
    protected $first="kaziibwe";
    private $last="alfred";
    private $age="90";


    // we define them with the valiable but on refrencing to them we use this 

    // this public method
    public function owner(){

        // access the $first propperty with in the owner method 
        $a = $this->first;
        return $a;
    }


  
}
// we can inherite  properties and methods from one class to another class





















// // Define the URL of the AI server
// $aiServerUrl = 'https://ydegrees.pearlbuddy.com:8090?string=test';

// // Initialize cURL session
// $curl = curl_init();

// // Set cURL options
// curl_setopt_array($curl, [
//     CURLOPT_URL => $aiServerUrl,
//     CURLOPT_RETURNTRANSFER => true,
//     CURLOPT_FOLLOWLOCATION => true,
//     CURLOPT_HTTPGET => true, // Use GET method
//     CURLOPT_SSL_VERIFYPEER => false, // Disable SSL verification (not recommended for production)
//     CURLOPT_TIMEOUT => 30, // Timeout after 30 seconds
// ]);

// // Execute cURL request
// $response = curl_exec($curl);

// // Check for errors
// if (curl_errno($curl)) {
//     $errorMessage = curl_error($curl);
//     $errorCode = curl_errno($curl);
//     curl_close($curl);
//     echo "cURL error ({$errorCode}): {$errorMessage}\n";
//     exit;
// }

// // Get HTTP status code
// $httpStatusCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);

// // Close cURL session
// curl_close($curl);

// if ($httpStatusCode !== 200) {
//     echo "HTTP error: Received status code {$httpStatusCode}\n";
//     exit;
// }

// // Output the response from the AI server
// echo "Response from AI server: \n";
// echo $response;



