<?php
session_start();

$path = "../..";
include '../../includes/connection.php';

$_GET['id'] ? $id = $_GET['id'] : exit;
$sql = "SELECT users.*, COUNT(projects.id) AS project_count
        FROM users
        LEFT JOIN projects ON users.id = projects.user_id
        WHERE users.id = $id
        GROUP BY users.id;
        ";
$freelancer = mysqli_fetch_assoc(mysqli_query($conn, $sql));

$sql2 = "SELECT cities.name as city, cities.region_id, regions.name as region
        FROM users
        INNER JOIN cities ON users.city_id = cities.id
        INNER JOIN regions ON cities.region_id = regions.id
        WHERE users.id = $id;
        ";
$location = mysqli_fetch_assoc(mysqli_query($conn, $sql2));

if (isset($_SESSION['message'])) {
    $message = $_SESSION['message'];
    $message_type = $_SESSION['message_type'];
    unset($_SESSION['message']);
    unset($_SESSION['message_type']);
    $success_class = "text-green-700";
    $error_class = "text-red-700";
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
    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
    <style>
        .d-none {
            display: none !important;
        }
    </style>
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
        <section class="relative py-16 bg-blueGray-200 bg-green-300 dark:bg-slate-600">
            <div class="container mx-auto px-4">
                <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-xl rounded-lg -mt-96">
                    <div class="px-6">
                        <div class="flex flex-wrap justify-center">
                            <div class="w-full lg:w-3/12 px-4 lg:order-2 flex flex-col items-center justify-center">
                                <div class="">
                                    <img alt="..." src="<?= $path . $freelancer['photo_src'] ?>" class="shadow-xl rounded-full h-auto align-middle border-none -mt-20 max-w-150-px">
                                </div>
                                <h3 class="text-4xl font-semibold leading-normal text-blueGray-700">
                                    <?= $freelancer['username'] ?>
                                </h3>
                                <div class="text-sm leading-normal text-blueGray-400">
                                    <i class="fas fa-map-marker-alt mr-2 text-lg text-blueGray-400"></i>
                                    <?= $location['city'] . ", " . $location['region'] ?>
                                </div>
                            </div>
                            <?php if (isset($_SESSION['user'])) {
                                if (
                                    $_SESSION['user']['role'] == 'freelancer'
                                    && isset($id)
                                    && $_SESSION['user']['id'] == $id
                                ) { ?>
                                    <div class="w-full lg:w-4/12 px-4 lg:order-3 lg:text-right lg:self-center">
                                        <div class="py-6 px-3 mt-32 sm:mt-0">
                                            <a class="bg-pink-500 active:bg-pink-600 uppercase text-white font-bold hover:shadow-md shadow text-xs px-4 py-2 rounded outline-none focus:outline-none sm:mr-2 mb-1 ease-linear transition-all duration-150" type="button" href="<?= $path . "/src/offer/createForm.php" ?>">
                                                Add Offer
                                            </a>
                                        </div>
                                    </div>
                                <?php
                                } else if ($_SESSION['user']['role'] == 'admin') {
                                ?>
                                    <div class="w-full lg:w-4/12 px-4 lg:order-3 lg:text-right lg:self-center">
                                        <form class="py-6 px-3 mt-32 sm:mt-0" action="../delete.php" method="POST">
                                            <input type="hidden" name="id" value="<?= $id ?>">
                                            <input type="hidden" name="entity" value="freelancer">

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
                                        <a class="bg-cyan-500 active:bg-cyan-600 cursor-pointer uppercase text-white font-bold hover:shadow-md shadow text-xs px-4 py-2 rounded outline-none focus:outline-none sm:mr-2 mb-1 ease-linear transition-all duration-150" type="button">
                                            Connect
                                        </a>
                                    </div>
                                </div>
                            <?php
                            }
                            ?>
                            <div class="w-full lg:w-4/12 px-4 lg:order-1">
                                <div class="flex justify-centerlg:pt-4 ">
                                    <div class="mr-4 p-3 text-center">
                                        <span class="text-xl font-bold block uppercase tracking-wide text-blueGray-600"><?= $freelancer['reviews'] ?></span><span class="text-sm text-blueGray-400">Reviews</span>
                                    </div>
                                    <div class="mr-4 p-3 text-center">
                                        <span class="text-xl font-bold block uppercase tracking-wide text-blueGray-600"><?= $freelancer['project_count'] ?></span><span class="text-sm text-blueGray-400">Done projects</span>
                                    </div>
                                    <div class="lg:mr-4 p-3 text-center">
                                        <span class="text-xl font-bold block uppercase tracking-wide text-blueGray-600"><?= $freelancer['rating'] ?></span><span class="text-sm text-blueGray-400">Rating</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="p-4">
                            <h2 class="font-bold">Skills</h2>
                            <div class="flex flex-wrap">
                                <?php
                                $sql = "SELECT s.name as name
                                            FROM freelancer_skills fs
                                            INNER JOIN skills s
                                            ON fs.skill_id = s.id
                                            WHERE fs.freelancer_id = " . $freelancer['id'];
                                $res = mysqli_query($conn, $sql);
                                if (mysqli_num_rows($res) > 0) {
                                    while ($skill = mysqli_fetch_assoc($res)) :
                                ?>
                                        <span href="#" class="px-1.5 py-1 m-0.5 h-fit text-gray-700 bg-gray-200 rounded-sm">
                                            <?= $skill['name'] ?>
                                        </span>
                                    <?php
                                    endwhile;
                                }

                                if (
                                    $_SESSION['user']['id'] === $freelancer['id']
                                    || $_SESSION['user']['role'] === 'admin'
                                ) {
                                    ?>
                                    <button id="add-skill-btn" class="p-2 m-0.5 text-bold text-gray-100 bg-cyan-600 rounded-md">
                                        + Add skill
                                    </button>
                                <?php
                                }
                                ?>
                            </div>
                            <!-- Alert request message  -->
                            <?php if (isset($message)) : ?>
                                <div class="p-1 text-sm text-center rounded-lg" role="alert">
                                    <span class="font-medium <?php if($message_type == 'success') echo($success_class); else echo($error_class); ?>">
                                        <?= $message ?>
                                    </span>
                                </div>
                            <?php endif; ?>
                            <!-- Add skill form -->
                            <div id="add-skill-form" class="hidden w-1/3 m-auto h-100 mt-10">
                                <form class="text-gray-900 border bg-gray-400 py-2 rounded-xl flex flex-col flex-grow w-100" action="./add_skill.php" method="POST">
                                    <select class="py-2 px-1 m-3 w-100 bg-gray-200 rounded-md text-gray-600" name="skill_id" id="skill">
                                        <option class="hidden" value="" selected>Select Skill</option>

                                        <?php
                                        $sql = "SELECT 
                                                    c.id AS category_id,
                                                    c.name AS category_name
                                                FROM subcategories c
                                                JOIN skills s 
                                                    ON c.id = s.subcategory_id
                                                WHERE s.id NOT IN (
                                                    SELECT skill_id
                                                    FROM freelancer_skills
                                                    WHERE freelancer_id = " . $freelancer['id']
                                            . ')';

                                        $categories = mysqli_query($conn, $sql);
                                        if (mysqli_num_rows($categories) > 0) :
                                            while ($row = mysqli_fetch_assoc($categories)) :
                                                $category_id = $row['category_id'];
                                                $category_name = $row['category_name'];
                                        ?>
                                                <optgroup label="<?= $category_name ?>">
                                                    <?php
                                                    $sql = "SELECT 
                                                                s.id as skill_id,
                                                                s.name as skill_name
                                                            FROM skills s
                                                            WHERE s.subcategory_id = $category_id
                                                            AND
                                                                s.id not in (
                                                                    SELECT skill_id FROM freelancer_skills fs
                                                                    WHERE freelancer_id =" . $freelancer['id']
                                                        . ")";
                                                    $skills = mysqli_query($conn, $sql);

                                                    while ($skill = mysqli_fetch_assoc($skills)) :
                                                        $skill_id = $skill['skill_id'];
                                                        $skill_name = $skill['skill_name'];
                                                    ?>
                                                        <option class="bg-gray-200 text-gray-800" value="<?= $skill_id ?>">
                                                            <?= $skill_name ?>
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
                                    <input type="hidden" name="freelancer_id" id="freelancer_id" value="<?= $id ?>">
                                    <input class="text-white py-2 px-1 mt-3 w-100 bg-blue-500 hover:bg-blue-600 cursor-pointer rounded-md w-2/3 m-auto " type="submit" value="Add Skill">
                                </form>
                            </div>


                            <!-- Freelancer assigned projects  -->
                            <div class="py-10 border-t border-blueGray-200 ">
                                <h2 class="font-bold text-xl py-1">My Assigned projects</h2>
                                <div class="flex flex-wrap justify-center text-center">
                                    <table class="table-auto w-full text-sm whitespace-no-wrap border-spacing-2">
                                        <thead>
                                            <tr class="bg-gray-400">
                                                <th class="p-1 border-r border-gray-400 w-2/12">Poster</th>
                                                <th class="p-1 border-r border-gray-400">Title</th>
                                                <th class="p-1 border-r border-gray-400">Price</th>
                                                <th class="p-1 border-r border-gray-400">Duration</th>
                                                <th class="p-1 border-r border-gray-400">Category</th>
                                                <th class="p-1 border-r border-gray-400">Details</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $query = "SELECT  
                                                        p.`id` as project_id
                                                        ,`title`
                                                        ,`price`
                                                        ,`duration`
                                                        ,u.`fullName` AS poster_name
                                                        ,u.`photo_src` as poster_photo_src
                                                        ,s.`name` as subcategory
                                                    FROM projects p
                                                    INNER JOIN subcategories s
                                                    ON s.id = p.subcategory_id
                                                    INNER JOIN users u
                                                    ON p.`user_id` = u.`id`
                                                    WHERE p.`hired_freelancer_id` = " . $freelancer['id'];
                                            $res = mysqli_query($conn, $query);
                                            if (mysqli_num_rows($res)) :
                                                while ($row = mysqli_fetch_assoc($res)) :
                                                    $project_id = $row['project_id'];
                                                    $title = $row['title'];
                                                    $price = $row['price'];
                                                    $duration = $row['duration'];
                                                    $poster_name = $row['poster_name'];
                                                    $poster_photo_src = $row['poster_photo_src'];
                                                    $subcategory = $row['subcategory'];
                                            ?>
                                                    <tr class="odd:bg-gray-200 even:bg-gray-300">
                                                        <td class="p-1 border-r border-white flex flex-row items-center gap-x-2">
                                                            <img class="w-7 h-7 rounded-full" src="<?= $path . $poster_photo_src ?>" alt="Poster photo">
                                                            <div><?= $poster_name ?></div>
                                                        </td>
                                                        <td class="p-1 border-r border-white"> <?= $title ?> </td>
                                                        <td class="p-1 border-r border-white font-semibold"> <?= $price ?> $</td>
                                                        <td class="p-1 border-r border-white"> <?= $duration ?> </td>
                                                        <td class="p-1 border-r border-white font-semibold"> <?= $subcategory ?> </td>
                                                        <td class="p-1 border-r border-white">
                                                            <a class="p-1.5 rounded-lg text-green-700 font-bold border border-emerald-500 hover:bg-emerald-500 hover:text-white" href="<?= $path . "/src/project/view.php?id=" . $project_id ?>">
                                                                + show more
                                                            </a>
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


                            <!-- Projects with No assigned freelancer -->

                            <div class="py-10 border-t border-blueGray-200">
                                <h2 class="font-bold text-xl py-1">Projects with no hired freelancer</h2>
                                <div class="flex flex-wrap justify-center text-center">
                                    <table class="table-auto w-full text-sm whitespace-no-wrap border-spacing-2">
                                        <thead>
                                            <tr class="bg-gray-400">
                                                <th class="p-1 border-r border-gray-400 w-2/12">Poster</th>
                                                <th class="p-1 border-r border-gray-400">Title</th>
                                                <th class="p-1 border-r border-gray-400">Price</th>
                                                <th class="p-1 border-r border-gray-400">Duration</th>
                                                <th class="p-1 border-r border-gray-400">Category</th>
                                                <th class="p-1 border-r border-gray-400">Details</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $query = "SELECT  
                                                        p.`id` as project_id
                                                        ,`title`
                                                        ,`price`
                                                        ,`duration`
                                                        ,u.`fullName` AS poster_name
                                                        ,u.`photo_src` as poster_photo_src
                                                        ,s.`name` as subcategory
                                                    FROM projects p
                                                    INNER JOIN subcategories s
                                                    ON s.id = p.subcategory_id
                                                    INNER JOIN users u
                                                    ON p.`user_id` = u.`id`
                                                    WHERE p.`hired_freelancer_id` IS NULL
                                                    ;";
                                            $res = mysqli_query($conn, $query);
                                            if (mysqli_num_rows($res)) :
                                                while ($row = mysqli_fetch_assoc($res)) :
                                                    $project_id = $row['project_id'];
                                                    $title = $row['title'];
                                                    $price = $row['price'];
                                                    $duration = $row['duration'];
                                                    // $diff
                                                    $poster_name = $row['poster_name'];
                                                    $poster_photo_src = $row['poster_photo_src'];
                                                    $subcategory = $row['subcategory'];
                                            ?>
                                                    <tr class="odd:bg-gray-200 even:bg-gray-300">
                                                        <td class="p-1 border-r border-white flex flex-row items-center gap-x-2">
                                                            <img class="w-7 h-7 rounded-full" src="<?= $path . $poster_photo_src ?>" alt="Poster photo">
                                                            <div><?= $poster_name ?></div>
                                                        </td>
                                                        <td class="p-1 border-r border-white"> <?= $title ?> </td>
                                                        <td class="p-1 border-r border-white font-semibold"> <?= $price ?> $</td>
                                                        <td class="p-1 border-r border-white"> <?= $duration ?> </td>
                                                        <td class="p-1 border-r border-white font-semibold"> <?= $subcategory ?> </td>
                                                        <td class="p-1 border-r border-white">
                                                            <a class="p-1.5 rounded-lg text-green-700 font-bold border border-emerald-500 hover:bg-emerald-500 hover:text-white" href="<?= $path . "/src/project/view.php?id=" . $project_id ?>">
                                                                + show more
                                                            </a>
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

        $('#add-skill-btn').click(function() {
            $('#add-skill-form').toggleClass("hidden")
        })
    </script>
</body>

</html>