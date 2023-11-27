<?php
require '../../DataBase/connection.php';

if (isset($_POST['id'])){
    $id = $_POST['id'];
    $sql = "DELETE FROM subcategories
            WHERE id = $id;";
    $res = mysqli_query($conn, $sql);
    if ($res)
        header("location:../CategoryManagement.php");
}
mysqli_close($conn);