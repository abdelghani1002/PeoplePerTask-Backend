<?php
require '../../DataBase/connection.php';

if (isset($_POST['id'])) {
        $id = $_POST['id'];
        $old_destination = mysqli_fetch_assoc(mysqli_query($conn, "SELECT `photo_src` from subcategories WHERE `id` = $id;"))['photo_src'];
        $sql = "DELETE FROM subcategories
            WHERE id = $id;";
        $res = mysqli_query($conn, $sql);
        if ($res) {
                if (file_exists("../" . $old_destination)) {
                        unlink("../" . $old_destination);
                }
                header("location:../CategoryManagement.php");
        }else{
                echo mysqli_connect_error();
        }
}
mysqli_close($conn);
