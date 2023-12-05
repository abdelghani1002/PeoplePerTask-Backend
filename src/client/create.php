<?php
session_start();
require '../../includes/connection.php';
require '../validation.php';

if (isset($_POST)) {
    if (!(empty($_POST['name']) && empty($_POST['email']) && empty($_POST['password']) && empty($_POST['city']))) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $city_id = $_POST['city'];

        // name
        if (!is_valide("name", $name)) {
            redirect("./createForm.php", "Invalide name!", "error");
        }

        // email
        $res_email = is_valide('email', $email);
        if ($res_email === "exists") {
            redirect("./createForm.php", "Email already exists!", "error");
            exit;
        }
        if ($res_email === false) {
            redirect("./createForm.php", "Invalide email!", "error");
            exit;
        }

        // password
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $stmt = mysqli_prepare($conn, "INSERT into users(`fullName`, `email`, `password`, `city_id`) values (?, ?, ?, ?)");
        mysqli_stmt_bind_param($stmt, "sssi", $name, $email, $hashed_password, $city_id);
        if (mysqli_stmt_execute($stmt)) {
            $_SESSION['message'] = "Client has been created Successfully";
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
