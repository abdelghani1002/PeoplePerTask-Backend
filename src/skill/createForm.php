<?php
session_start();
require '../../includes/connection.php';

$path = "../..";

// Role validation
if (!isset($_SESSION['user']) || $_SESSION['user']['role'] != "admin") {
    header("Location:./index.php");
    exit;
}

// get session message
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
    <title>Skill-Create</title>
</head>

<body class="bg-gray-100 h-100 flex flex-col">
    <div class="absolute p-5">
        <a href="./index.php" class="p-3 bg-zinc-400 text-emerald-200  rounded-xl">
            <- Back </a>
    </div>

    <div class="w-1/3 m-auto h-100 mt-10">
        <!-- Alert request message  -->
        <?php if (isset($message)) : ?>
            <div class="p-1 text-sm text-center rounded-lg" role="alert">
                <span class="font-medium <?php $message_type == 'success' ? $success_class : $error_class ?>"><?= $message ?></span>
            </div>
        <?php endif; ?>
        <form class="text-gray-900 border bg-gray-400 py-2 rounded-xl flex flex-col flex-grow w-100" action="./create.php" method="POST">
            <input class="py-2 px-1 m-3 w-100 bg-gray-200 placeholder:text-gray-600 rounded-md" type="text" name="name" id="name" placeholder="name" required>
            
            <select class="py-2 px-1 m-3 w-100 bg-gray-200 rounded-md text-gray-600" name="subcategory" id="subcategory" >
                <option class="" value="" selected>Select Category</option>

                <?php
                $sql = "SELECT * from subcategories where category_id is null;";
                $categories = mysqli_query($conn, $sql);
                if (mysqli_num_rows($categories) > 0) :
                    while ($row = mysqli_fetch_assoc($categories)) :
                        $category_id = $row['id'];
                        $category_name = $row['name'];
                ?>
                        <optgroup label="<?= $category_name ?>">
                            <?php
                            $sql = "SELECT * from subcategories where category_id = $category_id;";
                            $subcategories = mysqli_query($conn, $sql);

                            while ($subcategory = mysqli_fetch_assoc($subcategories)) :
                                $subcategory_id = $subcategory['id'];
                                $subcategory_name = $subcategory['name'];
                            ?>
                                <option class="bg-gray-200 text-gray-800" value="<?= $subcategory_id ?>">
                                    <?= $subcategory_name ?>
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

            <input class="text-white py-2 px-1 mt-3 w-100 bg-blue-500 hover:bg-blue-600 cursor-pointer rounded-md w-2/3 m-auto " type="submit" name="btn" id="btn" value="Add Skill">
        </form>

    </div>
    <?php mysqli_close($conn); ?>
</body>

</html>