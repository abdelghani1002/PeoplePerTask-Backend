<?php
session_start();
require '../includes/connection.php';
require './validation.php';
$path = "..";

function sign_up()
{
    global $conn, $path;

    $fullname = trim($_POST['fullName']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $confirmpassword = trim($_POST['confirmpassword']);
    $city_id = $_POST['city_id'];
    $role = $_POST['role'];
    $role === "client" ? $username = NULL : $username = trim($_POST['username']);

    // Inputs Validation and filtering
    if (empty($fullname) || empty($email) || empty($password) || empty($confirmpassword) || empty($city_id) || empty($username)) {
        $_SESSION['message'] = "Please fill in all the required fields.";
        header("Location:" . $path . '/src/authForm.php?form=sign_up');
        return;
    }
    
    // Validate name
    if (!preg_match("/^[a-zA-Z ]*$/", $fullname)) {
        $_SESSION['message'] = "Invalide name.";
        header("Location:" . $path . '/src/authForm.php?form=sign_up');
        return;
    }

    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['message'] = "Invalid email format.";
        header("Location:" . $path . '/src/authForm.php?form=sign_up');
        return;
    }

    // Email already exists
    $check_email = "SELECT email FROM users WHERE email = ?";
    $stmt_email = mysqli_prepare($conn, $check_email);
    mysqli_stmt_bind_param($stmt_email, 's', $email);
    mysqli_stmt_execute($stmt_email);
    $res_email = mysqli_stmt_get_result($stmt_email);
    if ($res_email && mysqli_num_rows($res_email) == 1) {
        mysqli_stmt_close($stmt_email);
        $_SESSION['message'] = "Email already exists. try to sign up with an other email.";
        header("Location:" . $path . '/src/authForm.php?form=sign_up');
        return;
    }

    if($username !== NULL){
        if (is_valide('username', $username) === 'exists'){
                $_SESSION['message'] = "username alraedy exists";
                $_SESSION['message_type'] = "error";
                header("Location: " . $_SERVER['HTTP_REFERER']);
                exit;
        }
        if (!is_valide('username', $username)) {
                $_SESSION['message'] = "username invalide";
                $_SESSION['message_type'] = "error";
                header("Location: " . $_SERVER['HTTP_REFERER']);
                exit;
        }
    }

    // Validate password length (you can adjust the length based on your requirements)
    // if (strlen($password) < 8) {
    //     $_SESSION['message'] = "Password must be at least 8 characters long.";
    //     header("Location:" . $path . '/src/authForm.php?form=sign_up');
    //     return;
    // }

    // Check if password and confirm password match
    if ($password !== $confirmpassword) {
        $_SESSION['message'] = "Password and Confirm Password do not match.";
        header("Location:" . $path . '/src/authForm.php?form=sign_up');
        return;
    }

    // Create the new user
    $sql = "INSERT INTO users(fullName, email, password, role, username, city_id)
            Values (?, ?, ?, ?, ?, ?)
            ;";

    $stmt = mysqli_prepare($conn, $sql);

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "sssssi", $fullname, $email, $hashed_password, $role, $username, $city_id);
    $res = mysqli_stmt_execute($stmt);
    if (!$res) {
        $_SESSION['message'] = "request Invalide";
        header("Location:" . $path . '/src/authForm.php?form=sign_up');
        return;
    }
    $user_info_sql = "SELECT * FROM users WHERE email = '$email'";
    $res = mysqli_query($conn, $user_info_sql);
    $_SESSION['user'] = mysqli_fetch_assoc($res);
    mysqli_stmt_close($stmt);
    $role === 'client' ? header('location:' . $path . '/index.php') : header('location:' . $path . '/src/freelancer/profile.php?id=' . $_SESSION['user']['id']);
}

function login()
{
    global $conn, $path;

    if (!isset($_POST['email']) || !isset($_POST['password'])) {
        $_SESSION['message'] = "Please fill in all the required fields.";
        header("Location:" . $path . '/src/authForm.php?form=login');
        return;
    }

    $input_email = trim($_POST['email']);
    if (!filter_var($input_email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['message'] = "Invalid email.";
        header("Location:" . $path . '/src/authForm.php?form=login');
        return;
    }

    $check_email = "SELECT email FROM users WHERE email = ?";
    $stmt_email = mysqli_prepare($conn, $check_email);
    mysqli_stmt_bind_param($stmt_email, 's', $input_email);
    mysqli_stmt_execute($stmt_email);
    $res_email = mysqli_stmt_get_result($stmt_email);
    if (!$res_email || mysqli_num_rows($res_email) !== 1) {
        mysqli_stmt_close($stmt_email);
        $_SESSION['message'] = "Email doesn't exist. try to sign up first.";
        header("Location:" . $path . '/src/authForm.php?form=login');
        return;
    }

    $input_password = $_POST['password'];
    $check_password = "SELECT password as hashed_password FROM users WHERE email = ?;";
    $stmt_password = mysqli_prepare($conn, $check_password);
    mysqli_stmt_bind_param($stmt_password, 's', $input_email);
    mysqli_stmt_execute($stmt_password);
    $res_password = mysqli_stmt_get_result($stmt_password);
    if (!$res_password || !password_verify($input_password, mysqli_fetch_assoc($res_password)['hashed_password'])) {
        mysqli_stmt_close($stmt_password);
        $_SESSION['message'] = "Password Incorrect.";
        header("Location:" . $path . '/src/authForm.php?form=login');
        return;
    }

    // user logined.

    $res_user = mysqli_query($conn, "SELECT * FROM users WHERE email='$input_email'");
    $_SESSION['user'] = mysqli_fetch_assoc($res_user);
    switch ($_SESSION['user']['role']) {
        case "freelancer":
            header('location:' . $path . '/src/freelancer/profile.php?id=' . $_SESSION['user']['id']);
            break;
        case "admin":
            header('location:' . $path . '/dashboard.php');
            break;
        default:
            header('location:' . $path . '/index.php');
            break;
    }
    return;
}

function logout()
{
    global $path;
    setcookie('old_email', $_SESSION['user']['email']);
    unset($_SESSION['user']);
    header('location:' . $path . '/index.php');
}

if (isset($_POST)) {
    // User infos
    if (!isset($_GET['func'])) {
        echo "Error: method GET doesn't match any function.!";
        exit;
    }

    switch ($_GET['func']) {
        case 'sign_up':
            sign_up();
            break;
        case 'login':
            login();
            break;
        case 'logout':
            logout();
            break;
    }
}

mysqli_close($conn);
