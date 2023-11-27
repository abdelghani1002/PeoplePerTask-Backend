<?php
require '../../DataBase/connection.php';
session_start();

function redirect($message, $message_type, $res_code)
{
    $_SESSION['message'] = $message;
    $_SESSION['message_type'] = $message_type;
    header('location:./createForm.php', $res_code);
}

if (isset($_POST)) {

    $name = $_POST['name'];
    $slogan = $_POST['slogan'];


    if (!empty($name) && !empty($_FILES['photo'])) {
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

            $uploadFolder = '../images/categories/';

            $destination = $uploadFolder . $newFileName;
            move_uploaded_file($fileTmpName, "../" . $destination);

            // store
            $stmt = mysqli_prepare($conn, "INSERT into subcategories(`name`, `photo_src`, `slogan`) values (?, ?, ?)");
            mysqli_stmt_bind_param($stmt, "sss", $name, $destination, $slogan);
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
    } else {
        $message = "Error : all fields are required !";
        $message_type = "error";
        $res_code = 400;
    }
    redirect($message, $message_type, $res_code);
} else
    echo "nothing posted !";
mysqli_close($conn);
