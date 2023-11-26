<?php
require '../../DataBase/connection.php';

if (isset($_POST['id'])){
    $id = $_POST['id'];
    $sql = "DELETE FROM freelancers
            WHERE id = $id;";
    $res = mysqli_query($conn, $sql);
    if ($res)
        header("location:../statistics.php");
    mysqli_close($conn);
}