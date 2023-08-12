<?php
// Retrieve the password from the AJAX request
$password = $_POST['password'];

// Perform password validation checks
$capitalLetter = preg_match('/[A-Z]/', $password);
$smallLetter = preg_match('/[a-z]/', $password);
$lengthCheck = strlen($password) >= 8;
$specialChar = preg_match('/[!@#$%^&*(),.?":{}|<>]/', $password);
$number = preg_match('/\d/', $password);

// Prepare the response
$response = array(
  'capitalCheck' => $capitalLetter,
  'smallCheck' => $smallLetter,
  'lengthCheck' => $lengthCheck,
  'specialCharCheck' => $specialChar,
  'numberCheck' => $number
);

// Send the response as JSON
header('Content-Type: application/json');
echo json_encode($response);
?>