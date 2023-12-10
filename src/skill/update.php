<?php
session_start();
require '../../includes/connection.php';

// Role validation
if (!isset($_SESSION['user'])) {
    header("Location: " . $_SERVER['HTTP_REFERER']);
    exit;
}

function redirect($message, $message_type)
{
    $_SESSION['message'] = $message;
    $_SESSION['message_type'] = $message_type;
    header('location:./index.php');
    exit;
}

function exists($name, $id)
{
    global $conn;
    $res = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM skills WHERE name = '$name' and id <> $id"));
    if ($res != 0) {
        return false;
    }
    return true;
}

function is_valid_name($value)
{
    if (!preg_match("/^[a-zA-Z ]*$/", $value)) {
        return false;
    }
    return true;
}

if (isset($_POST)) {
    $id = trim($_POST['id']);
    $name = trim($_POST['name']);
    $subcategory = $_POST['subcategory'];

    if (!is_numeric($subcategory)) {
        redirect("Select a category", "error");
        exit;
    }

    if (!is_valid_name($name)) {
        redirect("name Invalide", "error");
        exit;
    } else {
        if (!exists($name, $id)) {
            redirect("Skill already exists", "error");
            exit;
        }
        $sql = "UPDATE skills
                SET
                    `name` = ?,
                    `subcategory_id` = ?
                WHERE id = $id
                ;";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "si", $name, $subcategory);
        if (!mysqli_stmt_execute($stmt)) {
            redirect("Server error: " . mysqli_stmt_error($stmt), "error");
            exit;
        }
        redirect("Skill updated successfully.", "success");
        exit;
    }
} else
    echo "nothing posted !";
mysqli_close($conn);
