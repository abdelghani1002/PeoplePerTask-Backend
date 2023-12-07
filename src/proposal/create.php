<?php
session_start();
include "../../includes/connection.php";

if (!isset($_SESSION['user'])
    || $_SESSION['user']['role'] === 'client'
    || !isset($_POST['freelancer_id'])
    || !isset($_POST['project_id'])
) {
    header("Location: " . $_SERVER['HTTP_REFERER']);
    exit;
}

$freelancer_id = $_POST['freelancer_id']; 
$project_id = $_POST['project_id'];

$sql_check = "SELECT * from proposals
          WHERE project_id = ? and freelancer_id = ?";

$check_stmt = mysqli_prepare($conn, $sql_check);
mysqli_stmt_bind_param($check_stmt, "ii", $project_id, $freelancer_id);
mysqli_stmt_execute($check_stmt);
if (mysqli_num_rows(mysqli_stmt_get_result($check_stmt)) > 0){
    mysqli_stmt_close($check_stmt);
    $_SESSION['message'] = "You are already send one";
    $_SESSION['message_type'] = "error";
    header("Location: " . $_SERVER['HTTP_REFERER']);
    exit;
}
mysqli_stmt_close($check_stmt);



$sql = "INSERT INTO proposals(`freelancer_id`, `project_id`) values (?, ?);";
$stmt = mysqli_prepare($conn, $sql);
if ($stmt){
    mysqli_stmt_bind_param($stmt, "ii", $freelancer_id, $project_id);
    if(mysqli_stmt_execute($stmt)){
        mysqli_stmt_close($stmt);
        $_SESSION['message'] = "Proposal sended.";
        $_SESSION['message_type'] = "success";
        header("Location: " . $_SERVER['HTTP_REFERER']);
        exit;
    }
}