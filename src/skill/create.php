<?php
session_start();
require '../../includes/connection.php';

// Role validation
if (!isset($_SESSION['user'])) {
    header("Location:./index.php");
    exit;
}

function redirect($message, $message_type)
{
    $_SESSION['message'] = $message;
    $_SESSION['message_type'] = $message_type;
    header('location:./createForm.php');
    exit;
}

function exists($name) {
    global $conn;
    $res = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM skills WHERE name = '$name'"));
    if ($res != 0) {
        return false;
    }
    return true;
}

function is_valid_name($value) {
    if (!preg_match("/^[a-zA-Z ]*$/", $value)) {
        return false;
    }
    return true;
}

if (isset($_POST)) {
    $name = trim($_POST['name']);
    $subcategory = $_POST['subcategory'];

    if (!is_numeric($subcategory)) {
        redirect("Select a category", "error");
        exit;
    }

    if (!is_valid_name($name)) {
        redirect("name Invalide", "error");
        exit;
    }else{
        if (!exists($name)) {
            redirect("Skill already exists", "error");
            exit;
        }
        $sql = "INSERT INTO skills(`name`, `subcategory_id`)
                VALUES (?, ?)
            ";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "si", $name, $subcategory);
        if (!mysqli_stmt_execute($stmt)) {
            redirect("Server error: " . mysqli_stmt_error($stmt), "error");
            exit;
        }
        redirect("Skill created successfully.", "success");
        exit;        
    }
} else
    echo "nothing posted !";
mysqli_close($conn);
