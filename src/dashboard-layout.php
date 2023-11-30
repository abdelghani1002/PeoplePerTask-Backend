<?php 
session_start();

if (isset($_SESSION['message'])) {
    $message = $_SESSION['message'];
    $message_type = $_SESSION['message_type'];
    unset($_SESSION['message']);
    unset($_SESSION['message_type']);
}
$success_class = "text-red-800 bg-red-50";
$error_class = "text-green-800 bg-green-50";
?>
