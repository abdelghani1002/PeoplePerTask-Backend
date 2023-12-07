<?php
session_start();
$path = "../..";
include "../../includes/connection.php";
include "../home_functions.php";

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

        .clients {
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

        <!-- Freelancers -->
        <section class="flex flex-col px-2 w-5/6">
            <div class="flex flex-row items-center">
                <h3 class="my-3 mr-auto text-2xl font-bold text-cyan-800">List of Clients (<small><?= get_clients_count() ?></small>)</h3>
                <a class="cursor-pointer text-white font-bold bg-blue-600 rounded-xl p-2 h-10 hover:bg-blue-600"
                    href="./createForm.php">
                    + Add Client
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
                <table class="table-auto w-full whitespace-no-wrap border-spacing-2">
                    <thead>
                        <tr class="bg-gray-400 text-center">
                            <th class="py-2 border-r border-gray-200">Details</th>
                            <th class="py-2 border-r border-gray-200">Name</th>
                            <th class="py-2 border-r border-gray-200">Email</th>
                            <th class="py-2 border-r border-gray-200">City</th>
                            <th class="py-2" colspan="2">
                                Manage
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT  users.id     AS id
                                        ,`fullName`   AS name
                                        ,email
                                        ,users.photo_src AS photo_src
                                        ,cities.name  AS city
                                FROM users
                                LEFT JOIN cities
                                ON users.city_id = cities.id
                                WHERE `role` = 'client'
                                order by id
                            ;";
                        $res = mysqli_query($conn, $sql);
                        if (mysqli_num_rows($res)) :
                            while ($row = mysqli_fetch_assoc($res)) :
                                $id = $row['id'];
                                $name = $row['name'];
                                $email = $row['email'];
                                $photo_src = $row['photo_src'];
                                $city = $row['city'];
                        ?>
                                <tr class="odd:bg-gray-200 even:bg-gray-300">
                                    <td class="p-2 border-r border-white text-center">
                                        <a class="p-1.5 rounded-lg text-green-700 font-bold border border-emerald-500 hover:bg-emerald-500 hover:text-white"
                                            href="<?= $path . "/src/client/profile.php?id=" . $id ?>">
                                            +
                                        </a>
                                    </td>
                                    <td class="p-2 border-r border-white flex flex-row items-center gap-x-2">
                                        <img class="w-10 h-10 rounded-full" src="<?= $path . $photo_src ?>" alt="client photo">
                                        <div class="flex flex-row justify-between w-full">
                                            <div><?= $name ?></div>
                                        </div>
                                    </td>
                                    <td class="p-2 border-r border-white"> <?= $email ?> </td>
                                    <td class="p-2 border-r border-white"> <?= $city ?> </td>
                                    <td class="text-right border-r border-white center">
                                        <form class="text-center" action="../delete.php" method="POST">
                                            <input type="hidden" name="id" id="id" value="<?= $id ?>">
                                            <input type="hidden" name="entity" id="entity" value="client">
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
        <!-- end Freelancers -->

    </main>


    <script>
        function confirmDelete() {
            var confirmation = confirm(`Are you sure you want to delete it!`);
            return confirmation;
        }
    </script>
    <script src="../../assets/javascript/jquery.js"></script>
    <script src="../../assets/javascript/script.js"></script>
    <script src="../../assets/javascript/dashboard.js"></script>
</body>

</html>