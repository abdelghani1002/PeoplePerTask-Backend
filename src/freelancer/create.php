<?php
session_start();
require '../../includes/connection.php';
require '../validation.php';

if (isset($_POST)) {
    if (!(empty($_POST['name']) && empty($_POST['email']) && empty($_POST['password']) && empty($_POST['city']))) {
        $name = $_POST['name'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $city_id = $_POST['city'];
        $role = "freelancer";

        // name
        if (!is_valide("name", $name)) {
            redirect("./createForm.php", "Invalide name!", "error");
        }

        // username
        $res_valide = is_valide("username", $username);
        if ($res_valide === "exists") {
            redirect("./createForm.php", "Username already exists!", "error");
            exit;
        }
        if (!$res_valide) {
            redirect("./createForm.php", "Invalide username!", "error");
            exit;
        }

        // email
        $res_email = is_valide('email', $email);
        if ($res_email === "exists") {
            redirect("./createForm.php", "Email already exists!", "error");
            exit;
        }
        if ($res_valide === false) {
            redirect("./createForm.php", "Invalide email!", "error");
            exit;
        }

        // password
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $stmt = mysqli_prepare($conn, "INSERT into users(`fullName`, `email`, `password`, `city_id`, `role`, `username`) values (?, ?, ?, ?, ?, ?)");
        mysqli_stmt_bind_param($stmt, "sssiss", $name, $email, $hashed_password, $city_id, $role, $username);
        if (mysqli_stmt_execute($stmt)) {
            $_SESSION['message'] = "Freelancer has been created Successfully";
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
