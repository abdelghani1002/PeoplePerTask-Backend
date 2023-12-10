<?php 
session_start();
include '../includes/connection.php';
require './home_functions.php';

if (!isset($_SESSION['user'])
    || !isset($_POST) 
    || !isset($_POST['entity']) 
    || !isset($_POST['id'])){
    header("Location:../index");
    exit;
}

$entity = $_POST['entity'];
$id = $_POST['id'];
$entity === "tag" ? $table = "project_tags" : $table = "freelancer_skills";

$sql = "DELETE FROM $table WHERE " . $entity . "_id = $id";
$res = mysqli_query($conn, $sql);
if ($res){
    redirect("$entity deleted succesfully.", "success", $_SERVER['HTTP_REFERER']);
    exit;
}
redirect("Server error : " . mysqli_error($conn), "error", $_SERVER['HTTP_REFERER']);
mysqli_close($conn);