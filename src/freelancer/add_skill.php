<?php
session_start();
require "../../includes/connection.php";

if (
    isset($_POST)
    && $_POST['skill_id'] !== "" && is_numeric($_POST['skill_id'])
    && $_POST['freelancer_id'] !== "" && is_numeric($_POST['freelancer_id'])
) {
    $freelancer_id = $_POST['freelancer_id'];
    $skill_id = $_POST['skill_id'];
    $sql = "INSERT INTO freelancer_skills(freelancer_id, skill_id)
            VALUES (?, ?)
            ";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "ii", $freelancer_id, $skill_id);
    if (mysqli_stmt_execute($stmt)) {
        $_SESSION['message'] = "Skill added successfully.";
        $_SESSION['message_type'] = "success";
        header('location: ' . $_SERVER['HTTP_REFERER']);
        exit;
    }
    $_SESSION['message'] = "Echec : " . mysqli_error($conn);
    $_SESSION['message_type'] = "error";
    header('location: ' . $_SERVER['HTTP_REFERER']);
    exit;
}
$_SESSION['message'] = "Error : Invalide inputs";
$_SESSION['message_type'] = "error";
header('location: ' . $_SERVER['HTTP_REFERER']);
exit;
