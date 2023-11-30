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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/dist/output.css">
    <link rel="stylesheet" href="./assets/css/input.css">
    <link rel="icon" type="image/x-icon" href="../images/moroccoFlag.png" />
    <title>Dashboard</title>
</head>
<body>
    <?php
        include './templates/admin/header.php';
        include './templates/admin/navbar.php';
    ?>
</body>
</html>