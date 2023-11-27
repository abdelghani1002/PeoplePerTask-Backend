<?php
require "../../DataBase/connection.php";
session_start();

if (isset($_POST)){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $job = $_POST['job'];
    $city_id = $_POST['city'];

    if (!(empty($name) && empty($email) && empty($job) && empty($city_id))) {
        $sql = "UPDATE users
                SET 
                    fullName = ?,
                    email = ?,
                    job = ?,
                    city_id = ?
                WHERE
                    id = ?
                ";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "sssii", $name, $email, $job, $city_id, $id);
        if (mysqli_stmt_execute($stmt)) {
            $_SESSION['message'] = "Freelancer has been updated Successfully";
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