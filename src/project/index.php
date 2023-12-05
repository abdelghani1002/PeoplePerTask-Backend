<?php
session_start();
$path = "../..";
include "../../includes/connection.php";

// Role validation
if (!isset($_SESSION['user']) || $_SESSION['user']['role'] != 'admin')
    header("Location:../../index.php");

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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/dist/output.css">
    <link rel="stylesheet" href="../../assets/css/input.css">
    <link rel="icon" type="image/x-icon" href="../../assets/images/favicon.png" />
    <title>Dashboard</title>
    <style>
        .main {
            height: 85.7%;
        }

        .projects {
            background-color: rgb(55 65 81 / var(--tw-bg-opacity));
        }
    </style>
</head>

<body class="h-screen">
    <?php
    include '../../templates/header.php';
    ?>

    <main class="main flex flex-row w-full">

        <?php include '../../templates/admin/navbar.php'; ?>

        <!-- Projects -->
        <section class="flex flex-col px-2 w-5/6">
            <div class="flex flex-row items-center py-1">
                <h3 class="mr-auto text-2xl font-bold text-cyan-800">List of Projects</h3>
                <a class="cursor-pointer text-white font-bold bg-blue-600 rounded-xl p-2 h-10 hover:bg-blue-600" href="./createForm.php">
                    + Add Project
                </a>
            </div>
            <div class="flex flex-col">

                <!-- Alert request message  -->
                <?php if (isset($message)) : ?>
                    <div class="p-4 mb-4 text-sm text-center rounded-lg <?php $message_type == 'success' ? $success_class : $error_class ?>" role="alert">
                        <span class="font-medium"><?= $message ?></span>
                    </div>
                <?php endif; ?>

                <!-- Table -->
                <table class="table-auto w-full text-sm whitespace-no-wrap border-spacing-2">
                    <thead>
                        <tr class="bg-gray-400">
                            <th class="p-1 border-r border-gray-400">ID</th>
                            <th class="p-1 border-r border-gray-400">Poster</th>
                            <th class="p-1 border-r border-gray-400">Title</th>
                            <th class="p-1 border-r border-gray-400">Price</th>
                            <th class="p-1 border-r border-gray-400">Duration</th>
                            <th class="p-1 border-r border-gray-400">Status</th>
                            <th class="p-1 border-r border-gray-400">Category</th>
                            <th class="p-1 border-r border-gray-400">Hired freelancer</th>
                            <th class="p-1" colspan="2">
                                Manage
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT  p.id       AS `id`
                                    ,`title`
                                    ,`price`
                                    ,`duration`
                                    ,p.`status`
                                    ,u.`fullName` AS poster_name
                                    ,u.`photo_src` as poster_photo_src
                                    ,u2.`username` as hired_freelancer
                                    ,u2.`photo_src` as freelancer_photo_src
                                    ,s.`name` as subcategory
                                FROM projects p
                                INNER JOIN users u
                                ON p.user_id = u.id
                                INNER JOIN subcategories s
                                ON s.id = p.subcategory_id
                                INNER JOIN users u2 
                                ON p.`hired_freelancer_id` = u2.`id`
                                ;";
                        $res = mysqli_query($conn, $sql);
                        if (mysqli_num_rows($res)) :
                            while ($row = mysqli_fetch_assoc($res)) :
                                $id = $row['id'];
                                $title = $row['title'];
                                $price = $row['price'];
                                $duration = $row['duration'];
                                $status = $row['status'];
                                $poster_name = $row['poster_name'];
                                $poster_photo_src = $row['poster_photo_src'];
                                $hired_freelancer = $row['hired_freelancer'];
                                $freelancer_photo_src = $row['freelancer_photo_src'];
                                $subcategory = $row['subcategory'];
                        ?>
                                <tr class="odd:bg-gray-200 even:bg-gray-300">
                                    <td class="p-1 text-center border-r border-white">
                                        <a href="<?= "./view.php?id=" . $id ?>" class="p-1  rounded-full border border-sky-500 text-sky-500 text-xl hover:py-0 hover:text-2xl">
                                            +
                                        </a>
                                    </td>
                                    <td class="p-1 border-r border-white flex flex-row items-center gap-x-2">
                                        <img class="w-7 h-7 rounded-full" src="<?= $path . $poster_photo_src ?>" alt="Poster photo">
                                        <div><?= $poster_name ?></div>
                                    </td>
                                    <td class="p-1 border-r border-white"> <?= $title ?> </td>
                                    <td class="p-1 border-r border-white"> <?= $price ?> </td>
                                    <td class="p-1 border-r border-white"> <?= $duration ?> </td>
                                    <td class="p-1 border-r border-white"> <?= $status ?> </td>
                                    <td class="p-1 border-r border-white"> <?= $subcategory ?> </td>

                                    <?php if ($hired_freelancer) { ?>
                                        <td class="p-1 border-r border-white flex flex-row items-center gap-x-2">
                                            <img class="w-7 h-7 rounded-full" src="<?= $path . $freelancer_photo_src ?>" alt="Freelancer photo">
                                            <div><?= $hired_freelancer ?></div>
                                        </td>
                                    <?php
                                    } else {
                                    ?>
                                        <td class="p-1 h-full border-r border-white flex flex-col justify-center">
                                            <div class="relative w-full h-full mx-auto">
                                                <!-- Assigned a freelancer -->
                                                <button class="top-0 assigne-btn p-2 text-white bg-blue-500 rounded-md hover:bg-blue-600">
                                                    Assigne a freelancer
                                                </button>

                                                <div class="d-none flex flex-row gap-x-2">
                                                    <select class="freelancers-select top-9 z-50 left-0 float-left p-2 bg-gray-200 rounded-md" name="freelancer" id="freelancer">
                                                        <option class="d-none" value="" selected disabled>Select a freelancer</option>
                                                        <?php
                                                        $sql2 = "SELECT * from users WHERE `role` = 'freelancer';";
                                                        $freelancers = mysqli_query($conn, $sql2);
                                                        if (mysqli_num_rows($freelancers) > 0) {
                                                            while ($freelancer = mysqli_fetch_assoc($freelancers)) :
                                                                $freelancer_id = $freelancer['id'];
                                                                $freelancer_name = $freelancer['username'];
                                                                $freelancer_photo_src = ['freelancer_photo_src'];
                                                        ?>
                                                                <option class="bg-gray-100 <?="bg-[url('". $path . $freelancer_photo_src ."')] cover"?>" value="<?= $freelancer_id ?>">
                                                                    <?= $freelancer_name ?>
                                                                </option>
                                                            <?php
                                                            endwhile;
                                                            ?>
                                                        <?php
                                                        } else {
                                                            echo "<p> No freelancer available </p>";
                                                        }
                                                        ?>
                                                    </select>
                                                    <form action="./assigne.php" method="POST">
                                                        <input class="assigned-freelancer" type="hidden" name="freelancer_id">
                                                        <input type="hidden" name="project_id" value="<?=$id?>">
                                                        <button class="hover:bg-sky-900 bg-sky-300 text-sky-900 border rounded-md p-2 border-sky-900 hover:text-white">
                                                            Save
                                                        </button>
                                                    </form>
                                                </div>

                                            </div>
                                        </td>
                                    <?php
                                    }
                                    ?>

                                    <td class="text-right border-r border-white">
                                        <form class="text-center" action="../delete.php" method="POST">
                                            <input type="hidden" name="id" id="id" value="<?= $id ?>">
                                            <input type="hidden" name="entity" id="entity" value="project">
                                            <button type="submit" class="hover:bg-red-500 hover:text-white text-red-500 border border-red-500 rounded-md p-2" onclick="return confirmDelete()">
                                                Delete
                                            </button>
                                        </form>
                                    </td>
                                    <td class="text-left border-r border-white">
                                        <form class="text-center" action="./editForm.php" method="post">
                                            <input type="hidden" name="id" id="id" value="<?= $id ?>">
                                            <button type="submit" class="hover:bg-custom-green hover:text-white text-custom-green++ border border-custom-green rounded-md p-2">
                                                Update
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                        <?php
                            endwhile;
                        endif;
                        ?>
                    </tbody>
                </table>
            </div>
        </section>
        <!-- end Categories -->

    </main>


    <script src="../../assets/javascript/jquery.js"></script>
    <script src="../../assets/javascript/script.js"></script>
    <script src="../../assets/javascript/dashboard.js"></script>
    <script>
        function confirmDelete() {
            var confirmation = confirm(`Are you sure you want to delete it!`);
            return confirmation;
        }

        $(document).ready(function() {
            $(".assigne-btn").click(function() {
                $(this).next().toggleClass('d-none').click();
            });
            
            $(".freelancers-select").change(function () {
                // Get the selected freelancer ID from the data attribute
                const selectedFreelancerId = $(this).val();
                console.log(selectedFreelancerId);
    
                // Set the value of the hidden input field
                $(".assigned-freelancer").val(selectedFreelancerId);
            });
        });


    </script>

</body>

</html>