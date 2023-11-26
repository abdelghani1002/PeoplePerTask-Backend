<?php
require "../../DataBase/connection.php";
session_start();

if (isset($_POST)) {
    $id = $_POST['id'];
    $sql = "SELECT `fullName`, `email`, `job`, `city_id` from users where `id` = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);
    if ($res = mysqli_stmt_get_result($stmt)) {
        $freelancer = mysqli_fetch_assoc($res);
        $old_name = $freelancer['fullName'];
        $old_email = $freelancer['email'];
        $old_job = $freelancer['job'];
        $old_city_id = $freelancer['city_id'];
    }
    mysqli_stmt_close($stmt);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../input.css">
    <link rel="stylesheet" href="../../dist/output.css">
    <title>Edit</title>
</head>

<body class="bg-gray-100 h-100 flex flex-col">
    <div class="absolute p-5">
        <a href="../statistics.php" class="p-3 bg-zinc-400 text-emerald-200  rounded-xl">
            <- Back </a>
    </div>

    <div class="w-1/3 m-auto h-100">
        <form class="flex flex-col flex-grow w-100" action="./update.php" method="POST">
            <input class="py-2 px-1 m-3 w-100 bg-gray-200 rounded-md" type="text" name="name" id="name" value="<?= $old_name ?>">

            <input class="py-2 px-1 m-3 w-100 bg-gray-200 rounded-md" type="email" name="email" id="email" value="<?= $old_email ?>">

            <input class="py-2 px-1 m-3 w-100 bg-gray-200 rounded-md" type="password" name="password" id="password">

            <input class="py-2 px-1 m-3 w-100 bg-gray-200 rounded-md" type="text" name="job" id="job" value="<?= $old_job ?>">

            <select class="py-2 px-1 m-3 w-100 bg-gray-300 rounded-md" name="city" id="city">

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
                                <option class="bg-gray-100" value="<?= $city_id ?>" <?php
                                                                                    if ($city_id == $old_city_id) :
                                                                                        echo "selected";
                                                                                    endif;
                                                                                    ?>>
                                    <?= $city_name ?>
                                </option>
                            <?php
                            endwhile;
                            ?>
                        </optgroup>
                <?php
                    endwhile;
                endif;
                ?>

            </select>
            <input class="hidden" type="number" name="id" id="id" value="<?= $id ?>">
            <input class="py-2 px-1 mt-3 w-100 bg-green-500 hover:bg-green-600 cursor-pointer rounded-md w-2/3 m-auto " type="submit" name="btn" id="btn" value="Edit Freelancer">
        </form>
    </div>
</body>

</html>