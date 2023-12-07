<?php
session_start();
require '../../includes/connection.php';
$path = "../..";

// role validation
if(!isset($_SESSION['user'])
    || $_SESSION['user']['role'] != "admin")
    header("Location:" . $path . "/index.php");

if (isset($_SESSION['message'])) {
    $message = $_SESSION['message'];
    $message_type = $_SESSION['message_type'];
    unset($_SESSION['message']);
    unset($_SESSION['message_type']);
    $success_class = "text-red-800 bg-red-50";
    $error_class = "text-green-800 bg-green-50";
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
    <link rel="icon" type="image/x-icon" href="../../assets/images/favicon.png" />
    <title>Create</title>
</head>

<body class="bg-gray-100 h-100 flex flex-col">
    <div class="absolute p-5">
        <a href="<?=$_SERVER['HTTP_REFERER']?>" class="p-3 bg-zinc-400 text-emerald-200 rounded-xl">
            <- Back 
        </a>
    </div>

    <div class="w-1/3 m-auto h-100">
        <!-- Alert request message  -->
        <?php if (isset($message)) : ?>
            <div class="p-4 mb-4 text-sm text-center rounded-lg <?php $message_type == 'success' ? $success_class : $error_class ?>" role="alert">
                <span class="font-medium"><?= $message ?></span>
            </div>
        <?php endif;?>
        <form class="flex flex-col flex-grow w-100" action="./create.php" method="POST">
            <input class="py-2 px-1 m-3 w-100 bg-gray-200 rounded-md" type="text" name="name" id="name" placeholder="Full name">

            <input class="py-2 px-1 m-3 w-100 bg-gray-200 rounded-md" type="text" name="username" id="username" placeholder="User name">

            <input class="py-2 px-1 m-3 w-100 bg-gray-200 rounded-md" type="email" name="email" id="email" placeholder="Email">

            <input class="py-2 px-1 m-3 w-100 bg-gray-200 rounded-md" type="password" name="password" id="password" placeholder="Password">

            <select class="py-2 px-1 m-3 w-100 bg-gray-300 rounded-md" name="city" id="city">
                <option class="text-gray-300" disabled selected>Select city</option>

                <?php
                $sql = "SELECT * from regions;";
                $regions = mysqli_query($conn, $sql);
                if (mysqli_num_rows($regions) > 0) :
                    while ($row = mysqli_fetch_assoc($regions)) :
                        $region_id = $row['id'];
                        $region_name = $row['name'];
                ?>
                        <optgroup label="<?= $region_name ?>">
                            <?php
                            $sql = "SELECT * from cities where region_id = $region_id;";
                            $cities = mysqli_query($conn, $sql);

                            while ($city = mysqli_fetch_assoc($cities)) :
                                $city_id = $city['id'];
                                $city_name = $city['name'];
                            ?>
                                <option class="bg-gray-100" value="<?= $city_id ?>"> <?= $city_name ?> </option>
                            <?php
                            endwhile;
                            ?>
                        </optgroup>
                <?php
                    endwhile;
                endif;
                ?>

            </select>

            <input class="text-white py-2 px-1 mt-3 w-100 bg-blue-500 hover:bg-blue-600 cursor-pointer rounded-md w-2/3 m-auto " type="submit" name="btn" id="btn" value="Add Freelancer">
        </form>
        
        <?php 
        mysqli_close($conn); ?>
    </div>
</body>
</html>