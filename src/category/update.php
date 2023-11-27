<?php
require '../../DataBase/connection.php';
session_start();

function redirect($message, $message_type, $res_code)
{
    global $conn;
    $_SESSION['message'] = $message;
    $_SESSION['message_type'] = $message_type;
    mysqli_close($conn);
    header('location:../CategoryManagement.php', $res_code);
}

if (isset($_POST) && $_POST['id']) {
    $id = $_POST['id'];
    $old_destination = mysqli_fetch_assoc(mysqli_query($conn, "SELECT `photo_src` from subcategories WHERE `id` = $id;"))['photo_src'];
    $name = $_POST['name'];
    $slogan = $_POST['slogan'];

    if (!empty($name)) {
        // Photo Validation
        if (!empty($_FILES['photo']) && $_FILES['photo']['error'] === 0) {

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

            $new_destination = $uploadFolder . $newFileName;

            if (move_uploaded_file($fileTmpName, "../" . $new_destination)){
                unlink("../" . $old_destination);
            }
            
            // Update query with photo
            $sql = "UPDATE subcategories
                    SET
                        `name` = ?,
                        `photo_src` = ?,
                        `slogan` = ?
                    WHERE
                        `id` = ?;
                    ";
            $params = array($name, $new_destination, $slogan, $id);
            $types = "sssi";
        } else {
            // Update name and slogan
            $sql = "UPDATE subcategories
                    SET
                        `name` = ?,
                        `slogan` = ?
                    where
                        `id` = ?;
                    ";
            $params = array($name, $slogan, $id);
            $types = "ssi";
        }

        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, $types, ...$params);
        if (mysqli_stmt_execute($stmt)) {
            $message = "Category has been updated successfully.";
            $message_type = "success";
            $res_code = 200;
        } else {
            $message = 'Server error';
            $message_type = 'error';
            $res_code = 500;
        }
        mysqli_stmt_close($stmt);
    } else {
        $message = "Error : Fields are required !";
        $message_type = "error";
        $res_code = 400;
    }
    redirect($message, $message_type, $res_code);
} else
    echo "nothing posted !";