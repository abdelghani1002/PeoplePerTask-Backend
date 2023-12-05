<?php
require "../../includes/connection.php";
session_start();
require "../validation.php";


if (isset($_POST['id'])) {

    if (!(empty($_POST["name"]) && empty($_POST["email"]) && empty($_POST["username"]) && empty($_POST["city"]))) {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $city_id = $_POST['city'];

        // name
        if (!is_valide("name", $name)) {
            redirect("./editForm.php", "Invalide name!", "error");
        }

        // username
        $res_username = is_valide("username", $username, $id);
        if ($res_username === "exists") {
            redirect("./editForm.php", "Username already exists!", "error");
            exit;
        }
        if ($res_username === false) {
            redirect("./editForm.php", "Invalide username!", "error");
            exit;
        }

        // email
        $res_email = is_valide('email', $email, $id);
        if ($res_email === "exists") {
            redirect("./editForm.php", "Email already exists!", "error");
            exit;
        }
        if ($res_email === false) {
            redirect("./editForm.php", "Invalide email!", "error");
            exit;
        }

        // password
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $sql = "UPDATE users
                SET 
                    `fullName` = ?,
                    `email` = ?,
                    `password` = ?,
                    `city_id` = ?,
                    `username` = ?
                WHERE
                    `id` = ?
                ;";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "sssisi", $name, $email, $hashed_password, $city_id, $username, $id);
        if (mysqli_stmt_execute($stmt)) {
            $_SESSION['message'] = "Freelancer has been updated Successfully";
            $_SESSION['message_type'] = "success";
            header("location:./index.php", 201);
        } else {
            $_SESSION['message'] = "Error in execute !";
            $_SESSION['message_type'] = "error";
            header("location:./index.php", 500);
        }
        mysqli_stmt_close($stmt);
    } else {
        $_SESSION['message'] = "Error : all fields are required !";
        $_SESSION['message_type'] = "error";
        header('location:./index.php', 400);
    }
}
mysqli_close($conn);
