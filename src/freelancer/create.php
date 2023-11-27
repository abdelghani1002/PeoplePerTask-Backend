<?php
require '../../DataBase/connection.php';
session_start();

if (isset($_POST)) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $job = $_POST['job'];
    $city_id = $_POST['city'];
    $isFreelancer = 1;

    if (!(empty($name) && empty($email) && empty($password) && empty($job) && empty($city_id))) {
        $stmt = mysqli_prepare($conn, "INSERT into users(`fullName`, `email`, `password`, `job`, `city_id`, `isFreelancer`) values (?, ?, ?, ?, ?, ?)");
        mysqli_stmt_bind_param($stmt, "ssssii", $name, $email, $password, $job, $city_id, $isFreelancer);
        if (mysqli_stmt_execute($stmt)) {
            $_SESSION['message'] = "Freelancer has been created Successfully";
            $_SESSION['message_type'] = "success";
            header("location:../freelancers.php", 201);
        }else{
            $_SESSION['message'] = "Error in execute !";
            $_SESSION['message_type'] = "error";
            header("location:../freelancers.php", 500);
        }
        mysqli_stmt_close($stmt);
    }else{
        $_SESSION['message'] = "Error : all fields are required !";
        $_SESSION['message_type'] = "error";
        header('location:../freelancers.php', 400);
    }    
}
mysqli_close($conn);