<?php

function is_valide($key, $value, $id=-1)
{
    global $conn;
    switch ($key) {
        case 'name':
            if (!preg_match("/^[a-zA-Z ]*$/", $value)) {
                return false;
            }
            return true;
        case 'username':
            if (!preg_match("/^[a-zA-Z0-9 ]*$/", $value)) {
                return false;
            }
            if (mysqli_num_rows(mysqli_query($conn, "SELECT * FROM users WHERE `username` = '$value' and `id` <> $id;")) == 1) {
                return "exists";
            }
            return true;
        case 'email':
            if (!filter_var($value, FILTER_VALIDATE_EMAIL)) {
                return false;
            }
            if (mysqli_num_rows(mysqli_query($conn, "SELECT * FROM users WHERE `email` = '$value' and `id` <> $id;")) == 1) {
                return "exists";
            }
            return true;

        case '':

            return true;
        case '':

            return true;
        case '':

            return true;
        case '':

            return true;
    }
}

function redirect($path, $message, $message_type)
{
    $_SESSION['message'] = $message;
    $_SESSION['message_type'] = $message_type;
    header("Location:" . $path);
}
