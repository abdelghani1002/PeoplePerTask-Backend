<?php
session_start();
include "../../includes/connection.php";
$path = '../..';


if (isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "SELECT * FROM projects WHERE id = $id";
    $res = mysqli_query($conn, $sql);
    if(!$res){
        echo "Not found.";
        exit; 
    }
    $project = mysqli_fetch_assoc($res);
    var_dump($project);
}











