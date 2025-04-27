<?php
session_start();
header('Content-Type: application/json');

$response = [
    'profile_picture' => $_SESSION['profile_picture'] ?? null
];

echo json_encode($response);
