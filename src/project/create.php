<?php
require '../../DataBase/connection.php';
session_start();

function redirect($message, $message_type, $res_code)
{
    $_SESSION['message'] = $message;
    $_SESSION['message_type'] = $message_type;
    header('location:./createForm.php', $res_code);
    exit;
}

function is_valid($key, $value)
{
    switch ($key) {
        case "title":
            if (preg_match("/[a-zA-Z ]{5, 60}/", $value)) {
                return true;
            }
            redirect("title Invalide", "error", 400);
            return false;
        case "description":
            if (preg_match("/[a-zA-Z ]{50, 200}/", $value)) {
                return true;
            }
            redirect("description Invalide", "error", 400);
            return false;
        case "price":
            if ($value>=0) {
                return true;
            }
            redirect("price Invalide", "error", 400);
            return false;
        case "deadline":
            if ($value !== "" /* && strtotime($value) */){
                return true;
            }
            redirect("deadline Invalide", "error", 400);
            return false;
        case "status":
            if ($value !== "k") {
                return true;
            }
            redirect("status Invalide", "error", 400);
            return false;
        case "subcategory":
            if (preg_match("/[a-zA-Z ]{5, 60}/", $value)) {
                return true;
            }
            redirect("subcategory Invalide", "error", 400);
            return false;
    }
}


if (isset($_POST)) {
    $title = trim($_POST['title']);
    $description = trim($_POST['description']);
    $price = trim($_POST['price']);
    $deadline_str = trim($_POST['deadline']);
    $status = trim($_POST['status']);
    $subcategory = trim($_POST['subcategory']);

    if (is_valid("title", $title) && is_valid("description", $description) && is_valid("price", $price) && is_valid("deadline", $deadline) && is_valid("status", $status) && is_valid($subcategory)) {
    } else {
        $message = "Error : all fields are required !";
        $message_type = "error";
        $res_code = 400;
    }

    redirect($message, $message_type, $res_code);
} else
    echo "nothing posted !";
mysqli_close($conn);
