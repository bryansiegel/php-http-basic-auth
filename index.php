<?php
// Define the username and password
$username = '<username>';
$password = '<password>';

// Check if the Authorization header is present
if (!isset($_SERVER['PHP_AUTH_USER'])) {
    // Send headers to prompt the user for credentials
    header('WWW-Authenticate: Basic realm="My Protected Area"');
    header('HTTP/1.0 401 Unauthorized');
    echo 'Authorization required.';
    exit;
} else {
    // Check the provided credentials
    if ($_SERVER['PHP_AUTH_USER'] == $username && $_SERVER['PHP_AUTH_PW'] == $password) {
        // echo 'Welcome, authenticated user!';
    } else {
        // Send headers to prompt the user for credentials again
        header('WWW-Authenticate: Basic realm="My Protected Area"');
        header('HTTP/1.0 401 Unauthorized');
        echo 'Invalid credentials.';
        exit;
    }
}
?>