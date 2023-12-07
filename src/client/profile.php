<?php
session_start();

$path = "../..";
include '../../includes/connection.php';

isset($_GET['id']) ? $user_id = $_GET['id'] : exit;

$sql = "SELECT users.*, count(projects.id) AS posted_projects, projects.*
        FROM users
        INNER JOIN projects
        ON projects.user_id = users.`id`
        WHERE users.`id` = $user_id
        ;";
$client = mysqli_fetch_assoc(mysqli_query($conn, $sql));

$sql2 = "SELECT cities.name as city, cities.region_id, regions.name as region
        FROM users
        INNER JOIN cities ON users.city_id = cities.id
        INNER JOIN regions ON cities.region_id = regions.id
        WHERE users.id = $user_id;
        ";
$location = mysqli_fetch_assoc(mysqli_query($conn, $sql2));
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/dist/output.css">
    <link rel="stylesheet" href="/assets/css/input.css">
    <style>
        .d-none{
            display: none !important;
        }
    </style>
    <link rel="icon" type="image/x-icon" href="../../assets/images/favicon.png" />
    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
    <title>Profile</title>
</head>

<body class="h-screen">
    <?php include $path . "/templates/header.php"; ?>
    <main class="profile-page">
        <section class="relative block h-500-px">
            <div class="absolute top-0 w-full h-full bg-center bg-cover" style="
            background-image: url('https://images.unsplash.com/photo-1499336315816-097655dcfbda?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=2710&amp;q=80');
          ">
                <span id="blackOverlay" class="w-full h-full absolute opacity-50 bg-black"></span>
            </div>
            <div class="top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden h-70-px" style="transform: translateZ(0px)">
                <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" y="0">
                    <polygon class="text-blueGray-200 fill-current" points="2560 0 2560 100 0 100"></polygon>
                </svg>
            </div>
        </section>
        <section class="relative py-16 bg-blueGray-200 bg-green-300">
            <div class="container mx-auto px-4">
                <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-xl rounded-lg -mt-96">
                    <div class="px-6">
                        <div class="flex flex-wrap justify-center">
                            <div class="w-full lg:w-3/12 px-4 lg:order-2 flex justify-center">
                                <div class="">
                                    <img alt="..." src="<?= $path . $client['photo_src'] ?>" class="shadow-xl rounded-full h-auto align-middle border-none -mt-20 max-w-150-px">
                                </div>
                            </div>
                            <?php if (!empty($client)) {
                                if (
                                    $_SESSION['user']['role'] == 'client'
                                    && $_SESSION['user']['id'] == $user_id
                                ) {
                            ?>
                                    <div class="w-full lg:w-4/12 px-4 lg:order-3 lg:text-right lg:self-center">
                                        <a class="py-6 px-3 mt-32 sm:mt-0" href="../project/createForm.php">
                                            <button class="bg-blue-500 active:bg-blue-600 uppercase text-white font-bold hover:shadow-md shadow text-xs px-4 py-2 rounded outline-none focus:outline-none sm:mr-2 mb-1 ease-linear transition-all duration-150">
                                                Post Project
                                            </button>
                                        </a>
                                    </div>
                                <?php
                                } else if ($_SESSION['user']['role'] == 'admin') {
                                ?>
                                    <div class="w-full lg:w-4/12 px-4 lg:order-3 lg:text-right lg:self-center">
                                        <form class="py-6 px-3 mt-32 sm:mt-0" action="../delete.php" method="POST">
                                            <input type="hidden" name="id" value="<?= $user_id ?>">
                                            <input type="hidden" name="entity" value="client">

                                            <button class="bg-red-500 active:bg-pink-600 uppercase text-white font-bold hover:shadow-md shadow text-xs px-4 py-2 rounded outline-none focus:outline-none sm:mr-2 mb-1 ease-linear transition-all duration-150" type="submit" onclick="return confirmDelete()">
                                                Remove
                                            </button>
                                        </form>
                                    </div>
                                <?php
                                }
                            } else {
                                ?>
                                <div class="w-full lg:w-4/12 px-4 lg:order-3 lg:text-right lg:self-center">
                                    <div class="py-6 px-3 mt-32 sm:mt-0">
                                        <button class="bg-cyan-500 active:bg-cyan-600 cursor-pointer uppercase text-white font-bold hover:shadow-md shadow text-xs px-4 py-2 rounded outline-none focus:outline-none sm:mr-2 mb-1 ease-linear transition-all duration-150">
                                            Connect
                                        </button>
                                    </div>
                                </div>
                            <?php
                            }
                            ?>
                            <div class="w-full lg:w-4/12 px-4 lg:order-1">
                                <div class="flex justify-centerlg:pt-4 ">
                                    <div class="mr-4 p-3 text-center">
                                        <span class="text-xl font-bold block uppercase tracking-wide text-blueGray-600"><?= $client['posted_projects'] ?></span><span class="text-sm text-blueGray-400">Posted projects</span>
                                    </div>
                                    <div class="mr-4 p-3 text-center">
                                        <span class="text-xl font-bold block tracking-wide text-blueGray-600"><?= $client['email'] ?></span><span class="text-sm text-blueGray-400"></span>
                                    </div>
                                    <div class="lg:mr-4 p-3 text-center">
                                        <span class="text-xl font-bold block tracking-wide text-blueGray-600"><?= $client['role'] ?></span><span class="text-sm text-blueGray-400">Rating</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="text-center">
                            <h3 class="text-4xl font-semibold leading-normal text-blueGray-700">
                                <?= $client['fullName'] ?>
                            </h3>
                            <div class="text-sm leading-normal mt-0 mb-2 text-blueGray-400 font-bold uppercase">
                                <i class="fas fa-map-marker-alt mr-2 text-lg text-blueGray-400"></i>
                                <?= $location['city'] . ", " . $location['region'] ?>
                            </div>
                        </div>

                        <?php if (
                            isset($_SESSION['user'])
                            && $_SESSION['user']['role'] !== "freelancer"
                        ) : ?>
                            <div class="py-10 border-t border-blueGray-200 text-center">
                                <div class="flex flex-wrap justify-center">
                                    <!-- Table -->
                                    <table class="table-auto w-full text-sm whitespace-no-wrap border-spacing-2">
                                        <thead>
                                            <tr class="bg-gray-400">
                                                <th class="p-1 border-r border-gray-400">Details</th>
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
                                            $sql = "SELECT  p.`id`
                                                        ,`title`
                                                        ,`price`
                                                        ,`duration`
                                                        ,p.`status`
                                                        ,u.`username` as hired_freelancer
                                                        ,u.`photo_src` as freelancer_photo_src
                                                        ,s.`name` as subcategory
                                                    FROM projects p
                                                    INNER JOIN subcategories s
                                                    ON s.id = p.subcategory_id
                                                    LEFT JOIN users u 
                                                    ON p.`hired_freelancer_id` = u.`id`
                                                    WHERE p.`user_id` = $user_id
                                                    ORDER BY hired_freelancer
                                                    ;";
                                            $res = mysqli_query($conn, $sql);
                                            if (mysqli_num_rows($res)) :
                                                while ($row = mysqli_fetch_assoc($res)) :
                                                    $id = $row['id'];
                                                    $title = $row['title'];
                                                    $price = $row['price'];
                                                    $duration = $row['duration'];
                                                    $status = $row['status'];
                                                    $hired_freelancer = $row['hired_freelancer'];
                                                    $freelancer_photo_src = $row['freelancer_photo_src'];
                                                    $subcategory = $row['subcategory'];
                                            ?>
                                                    <tr class="odd:bg-gray-200 even:bg-gray-300">
                                                        <td class="p-1 text-center border-r border-white">
                                                            <a href="<?= "../project/view.php?id=" . $id ?>" class="p-1  rounded-full border border-sky-500 text-sky-500 text-xl hover:py-0 hover:text-2xl">
                                                                +
                                                            </a>
                                                        </td>
                                                        <td class="p-1 border-r border-white"> <?= $title ?> </td>
                                                        <td class="p-1 border-r border-white"> <?= $price ?> </td>
                                                        <td class="p-1 border-r border-white"> <?= $duration ?> </td>
                                                        <td class="p-1 border-r border-white"> <?= $status ?> </td>
                                                        <td class="p-1 border-r border-white"> <?= $subcategory ?> </td>

                                                        <?php if (isset($hired_freelancer)) { ?>
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
                                                                                    <option class="bg-gray-100 <?= "bg-[url('" . $path . $freelancer_photo_src . "')] cover" ?>" value="<?= $freelancer_id ?>">
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
                                                                        <form action="../project/assigne.php" method="POST">
                                                                            <input class="assigned-freelancer" type="hidden" name="freelancer_id">
                                                                            <input type="hidden" name="project_id" value="<?= $id ?>">
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
                                                            <form class="text-center" action="../project/editForm.php" method="post">
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
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>
    </main>



    <script src="../../assets/javascript/jquery.js"></script>
    <script src="../../assets/javascript/script.js"></script>
    <script>
        function confirmDelete() {
            var confirmation = confirm(`Are you sure you want to delete it!`);
            return confirmation;
        }

        $(document).ready(function() {
            $(".assigne-btn").click(function() {
                $(this).next().toggleClass('d-none').click();
            });

            $(".freelancers-select").change(function() {
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