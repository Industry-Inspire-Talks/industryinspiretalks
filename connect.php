<?php

$response = new stdClass();
if (file_exists('env.php')) {
    include('env.php');
} 

// Create connection
$conn = new mysqli($_ENV['mysql']['host'], $_ENV['mysql']['username'], $_ENV['mysql']['password'], $_ENV['mysql']['database']);
// Check connection
if ($conn->connect_error) {
    $response->connection_status = "Connection failed: " . $conn->connect_error;
    $response->session_established = false;
    exit;
} else {
    $response->connection_status = "Connected";
    $response->session_established = true;
}

date_default_timezone_set('Asia/Kolkata');
$datetime = date("Y-m-d H:i:s");

