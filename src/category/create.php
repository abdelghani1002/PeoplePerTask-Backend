<?php
session_start();

// Role validation
if (!isset($_SESSION['user']) || $_SESSION['user']['role'] != 'admin')
    header("Location:../../index.php");

require '../../includes/connection.php';
require '../home_functions.php';

if (isset($_POST) && isset($_POST['name']) && isset($_POST['slogan']) && isset($_FILES['photo']) && isset($_POST['supcategory'])) {

    $name = $_POST['name'];
    $slogan = $_POST['slogan'];
    $supcategory = $_POST['supcategory'] == "is_sup" ? null : $_POST['supcategory'];
    // Photo Validation
    if ($_FILES['photo']['error'] === 0) {
        $allowedExtensions = ['jpg', 'jpeg', 'png', 'webp'];
        $maxFileSize = 5 * 1024 * 1024;

        $fileName = $_FILES['photo']['name'];
        $fileSize = $_FILES['photo']['size'];
        $fileTmpName = $_FILES['photo']['tmp_name'];
        $fileType = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

        if (!in_array($fileType, $allowedExtensions)) {
            $message = "Error: Invalid file type. Allowed types: " . implode(', ', $allowedExtensions);
            $message_type = "error";
            redirect($message, $message_type, 400);
            exit;
        }

        if ($fileSize > $maxFileSize) {
            $message = "Error: File size exceeds the maximum allowed size (5 MB)";
            $message_type = "error";
            redirect($message, $message_type, 400);
            exit;
        }

        $newFileName = uniqid('category_') . '.' . $fileType;

        $uploadFolder = '/assets/images/categories/';

        $destination = $uploadFolder . $newFileName;
        move_uploaded_file($fileTmpName, "../.." . $destination);

        // store
        $stmt = mysqli_prepare($conn, "INSERT into subcategories(`name`, `photo_src`, `slogan`, `category_id`) values (?, ?, ?, ?)");
        mysqli_stmt_bind_param($stmt, "sssi", $name, $destination, $slogan, $supcategory);
        if (mysqli_stmt_execute($stmt)) {
            $message = "Category has been added successfully.";
            $message_type = "success";
            $res_code = 201;
        } else {
            $message = 'Server error';
            $message_type = 'error';
            $res_code = 500;
        }
        mysqli_stmt_close($stmt);
    } else {
        $message = "Error: No file uploaded or an error occurred during upload.";
        $message_type = "error";
        redirect($message, $message_type, 400);
        exit;
    }
    redirect($message, $message_type, $res_code);
} else {
    $message = "Error : all fields are required !";
    $message_type = "error";
    $res_code = 400;
}
mysqli_close($conn);
