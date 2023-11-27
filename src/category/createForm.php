<?php
require '../../DataBase/connection.php';
session_start();

if (isset($_SESSION['message'])) {
    $message = $_SESSION['message'];
    $message_type = $_SESSION['message_type'];
    unset($_SESSION['message']);
    unset($_SESSION['message_type']);
}

$success_class = "text-red-800 bg-red-50";
$error_class = "text-green-800 bg-green-50";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="../../dist/output.css">
    <title>Category-Create</title>
</head>

<body class="bg-gray-100 h-100 flex flex-col">
    <div class="absolute p-5">
        <a href="../CategoryManagement.php" class="p-3 bg-zinc-400 text-emerald-200  rounded-xl">
            <- Back </a>
    </div>

    <div class="w-1/3 m-auto h-100 mt-10">
        <form class="flex flex-col flex-grow w-100" action="./create.php" method="POST" enctype="multipart/form-data">

            <input class="py-2 px-1 m-3 w-100 bg-gray-200 rounded-md" type="text" name="name" id="name" placeholder="Name">

            <input class="py-2 px-1 m-3 w-100 bg-gray-200 rounded-md" type="file" name="photo" id="photo">

            <input class="py-2 px-1 m-3 w-100 bg-gray-200 rounded-md" type="text" name="slogan" id="slogan" placeholder="Slogan">

            <input class="py-2 px-1 mt-3 w-100 bg-blue-500 hover:bg-blue-600 cursor-pointer rounded-md w-2/3 m-auto " type="submit" name="btn" id="btn" value="Add Category">
        </form>

        <!-- Alert request message  -->
        <?php if (isset($message)) : ?>
            <div class="p-4 mb-4 text-sm text-center rounded-lg <?php $message_type == 'success' ? $success_class : $error_class ?>" role="alert">
                <span class="font-medium"><?= $message ?></span>
            </div>
        <?php endif;
        mysqli_close($conn); ?>
    </div>
</body>

</html>