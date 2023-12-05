<?php
session_start();


function redirect(){
    if (!isset($_SESSION['user']))
        header("location:index");
    else 
        $_SESSION['user']['role'] == 'admin' ? 
            header("location:./index.php")
        :
            header("location:src/client/profile");
}

// role validation
if(!isset($_SESSION['user']) || $_SESSION['user'] == 'freelancer'){
    header("location:index.php");
    exit;
}

include "../../includes/connection.php";

if(isset($_POST['project_id'])
    && isset($_POST['freelancer_id'])
    && $_POST['freelancer_id'] != ""){
    $freelancer_id = $_POST['freelancer_id'];
    $project_id = $_POST['project_id'];
    if(!(is_numeric($freelancer_id) && is_numeric($project_id))){
        header("Location:./index.php");
        exit;
    }
    $sql = "UPDATE projects
            SET
                `hired_freelancer_id` = $freelancer_id
            WHERE
                `id` = $project_id
            ;";
    $res = mysqli_query($conn, $sql);
    if($res){
        redirect();
        exit;
    }
    echo mysqli_error($conn);
}else{

}