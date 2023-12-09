<?php
session_start();


// role validation
if (!isset($_SESSION['user']) || $_SESSION['user'] == 'freelancer') {
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit;
}

include "../../includes/connection.php";

if (
    isset($_POST['project_id'])
    && isset($_POST['freelancer_id'])
    && is_numeric($_POST['freelancer_id'])
    && is_numeric($_POST['project_id'])
) {
    $freelancer_id = $_POST['freelancer_id'];
    $project_id = $_POST['project_id'];

    $sql = "UPDATE projects
            SET
                `hired_freelancer_id` = $freelancer_id,
                `status` = 'inprogress'
            WHERE
                `id` = $project_id
            ;";

    $res = mysqli_query($conn, $sql);
    if ($res) {
        $_SESSION['message'] = "Assigned successfully";
        $_SESSION['message_type'] = "success";
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit;
    }
}

$_SESSION['message'] = "Echec !!";
$_SESSION['message_type'] = "success";
header('Location: ' . $_SERVER['HTTP_REFERER']);

mysqli_close($conn);