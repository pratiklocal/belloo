<?php
header('Content-Type: application/json');
error_reporting(E_ALL);
ini_set('display_errors', 1);

$response = array(
    'status' => 'success',
    'message' => 'PHP is working correctly',
    'php_version' => PHP_VERSION,
    'server_software' => $_SERVER['SERVER_SOFTWARE']
);

echo json_encode($response);
?>