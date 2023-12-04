<?php
require '../../includes/connection.php';
session_start();


// Role validation
if (!isset($_SESSION['user']) || $_SESSION['user']['role'] != 'admin')
    header("Location:../../index.php");

$path = "../..";

if (isset($_SESSION['message'])) {
    $message = $_SESSION['message'];
    $message_type = $_SESSION['message_type'];
    unset($_SESSION['message']);
    unset($_SESSION['message_type']);
    $success_class = "text-red-800 bg-red-50";
    $error_class = "text-green-800 bg-green-50";
}

if (isset($_POST) && !empty($_POST['id'])) {
    $id = $_POST['id'];
    $category = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * from subcategories where id = $id;"));
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/dist/output.css">
    <link rel="stylesheet" href="../../assets/css/input.css">
    <title>Category-Update</title>
</head>

<body class="bg-gray-100 h-100 flex flex-col">
    <div class="absolute p-5">
        <a href="./index.php" class="p-3 bg-zinc-400 text-emerald-200  rounded-xl">
            <- Back </a>
    </div>

    <div class="w-1/3 m-auto h-100 mt-10">
        <form class="border flex flex-col flex-grow w-100" action="./update.php" method="POST" enctype="multipart/form-data">

            <input class="py-2 px-1 m-3 w-100 bg-gray-200 rounded-md" type="text" name="name" id="name" placeholder="Name" value="<?= $category['name'] ?>">

            <img class="w-1/3 self-center" src="<?= $path . $category['photo_src'] ?>" alt="category Photo">
            <input class="py-2 px-1 m-3 w-100 bg-gray-200 rounded-md cursor-pointer" type="file" name="photo" id="photo">
            <small class="mx-3 text-xs text-gray-500 " id="file_input_help">JPEG, PNG, JPG, WEBP (MAX. 5Mo)</small>

            <input class="py-2 px-1 m-3 w-100 bg-gray-200 rounded-md" type="text" name="slogan" id="slogan" placeholder="Slogan" value="<?= $category['slogan'] ?>">

            <input class="hidden" type="number" name="id" id="id" value="<?= $id ?>">
            <input class="text-white py-2 px-1 mt-3 w-100 bg-blue-500 hover:bg-blue-600 cursor-pointer rounded-md w-2/3 m-auto " type="submit" name="btn" id="btn" value="Edit Category">
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