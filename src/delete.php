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
$entity == "freelancer" || $entity == "client" ? $table = "users" : $table = $entity . "s";
$id = $_POST['id'];

$sql = "DELETE FROM $table WHERE id = $id";
$res = mysqli_query($conn, $sql);
$entity == "subcategorie" ? $entity = "category" : null;
if ($res){
    redirect("$entity deleted succesfully.", "success", 200, "./$entity/index.php");
    exit;
}
redirect("Server error : " . mysqli_error($conn), "error", 500, "./$entity/index.php");
mysqli_close($conn);