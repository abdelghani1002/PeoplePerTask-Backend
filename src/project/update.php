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
    header("Location: " . $_SERVER['HTTP_REFERER']);
    exit;
}

function is_valid($key, $value)
{
    switch ($key) {
        case "title":
            if (preg_match("/^[a-zA-Z0-9.,!?()'\s]{5,60}$/", $value)) {
                return true;
            }
            redirect("title Invalide", "error");
            exit;
        case "description":
            if (preg_match("/^[a-zA-Z0-9.,!?()'\s]{5,600}$/", $value)) {
                return true;
            }
            redirect("description Invalide", "error");
            exit;
        case "price":
            if (is_numeric($value) && (float)$value >= 0) {
                return true;
            }
            redirect("price Invalide", "error");
            exit;
        case "deadline":
            if (strtotime($value) > strtotime('now')) {
                return true;
            }
            redirect("deadline Invalide", "error");
            exit;
        case "subcategory":
            if (is_numeric($value)) {
                return true;
            }
            redirect("subcategory Invalide", "error");
            exit;
    }
}

if (isset($_POST)) {
    $id = $_POST['id'];
    $title = trim($_POST['title']);
    $description = trim($_POST['description']);
    $price = trim($_POST['price']);
    $deadline_str = trim($_POST['deadline']);
    $subcategory = trim($_POST['subcategory']);
    $user_id = isset($_POST['user_id']) && $_POST['user_id'] != "" ? $_POST['user_id'] : $_SESSION['user']['id'];
    if (
        is_valid("title", $title)
        && is_valid("price", $price)
        && is_valid("deadline", $deadline_str)
        && is_valid("subcategory", $subcategory)
    ) {
        $sql = "UPDATE projects
                SET
                    `title` = ?,
                    `description` = ?,
                    `price` = ?,
                    `duration` = ?,
                    `user_id` = ?,
                    `subcategory_id` = ?
                WHERE id = $id
                ;";
        $stmt = mysqli_prepare($conn, $sql);
        $duration = date("Y-m-d h-i-s", strtotime($deadline_str));
        mysqli_stmt_bind_param($stmt, "ssdsii", $title, $description, $price, $duration, $user_id, $subcategory);
        if (!mysqli_stmt_execute($stmt)) {
            redirect("Server error: " . mysqli_stmt_error($stmt), "error");
            exit;
        }
        redirect("Project updated successfully.", "success");
        exit;
    }
} else
    echo "nothing posted !";
mysqli_close($conn);
