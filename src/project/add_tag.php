<?php
session_start();
require "../../includes/connection.php";


function exists($name, $project_id)
{
    global $conn;
    $num = mysqli_num_rows(mysqli_query($conn, "SELECT t.name FROM project_tags pt
                                                INNER JOIN tags t
                                                ON pt.tag_id = t.id
                                                WHERE pt.project_id = $project_id
                                                AND t.name = '$name'"));
    if ($num == 0) {
        return false;
    }
    return true;
}

function is_valid_name($value)
{
    if (!preg_match("/^[a-zA-Z0-9 ]{2,}$/", $value)) {
        return false;
    }
    return true;
}



if (
    isset($_POST)
    && $_POST['tag_name'] !== ""
    && $_POST['project_id'] !== ""
    && is_numeric($_POST['project_id'])
) {
    $project_id = $_POST['project_id'];
    $tag_name = $_POST['tag_name'];

    /* Name validation */
    if (!is_valid_name($tag_name)) {
        $_SESSION['message'] = "Invalide tag name";
        $_SESSION['message_type'] = "error";
        header('location: ' . $_SERVER['HTTP_REFERER']);
        exit;
    }

    /* Not Exists validiation */
    if (exists($tag_name, $project_id)) {
        $_SESSION['message'] = "tag already exists.";
        $_SESSION['message_type'] = "error";
        header('location: ' . $_SERVER['HTTP_REFERER']);
        exit;
    }

    /* Create it if doesn't exists */
    $sql = "SELECT id FROM tags WHERE name = '$tag_name'";
    $res = mysqli_query($conn, $sql);
    if (mysqli_num_rows($res)>0) {
        $tag_id = mysqli_fetch_assoc($res)['id'];
    }else{
        mysqli_query($conn, "INSERT INTO tags(`name`) VALUES('$tag_name')");
        $res = mysqli_query($conn, $sql);
        $tag_id = mysqli_fetch_assoc($res)['id'];
    }

    $sql = "INSERT INTO project_tags(project_id, tag_id)
            VALUES (?, ?)
            ";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "ii", $project_id, $tag_id);
    if (mysqli_stmt_execute($stmt)) {
        $_SESSION['message'] = "tag added successfully.";
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
