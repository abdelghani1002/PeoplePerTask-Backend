<?php
session_start();
// Role validation
if (!isset($_SESSION['user']) || $_SESSION['user']['role'] != 'admin')
    header("Location:./index.php");

$path = ".";
include "./includes/connection.php";

// Number of freelancers
$sql_query = "SELECT count(*) as count from users where role = 'freelancer';";
$result = mysqli_query($conn, $sql_query);
$row = mysqli_fetch_assoc($result);
$freelancers_count = $row["count"];

// Number of incompleted projects
$sql_query = "select count(*) as count from projects where status = 'uncompleted';";
$result = mysqli_query($conn, $sql_query);
$row = mysqli_fetch_assoc($result);
$incompleted_projects_count = $row["count"];

// Revenue of freelancers
$sql_query = "select SUM(price) as revenue from projects where status = 'completed';";
$result = mysqli_query($conn, $sql_query);
$row = mysqli_fetch_assoc($result);
$revenue = $row['revenue'];

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
    <link rel="stylesheet" href="./assets/dist/output.css">
    <link rel="stylesheet" href="./assets/css/input.css">
    <link rel="icon" type="image/x-icon" href="./assets/images/favicon.png" />
    <title>Dashboard</title>
    <style>
        .main {
            height: 85.7%;
        }

        .statistics {
            background-color: rgb(55 65 81 / var(--tw-bg-opacity));
        }
    </style>
</head>

<body class="h-screen">
    <?php
    include './templates/header.php';
    ?>

    <main class="main flex flex-row w-full ">

        <?php include './templates/admin/navbar.php'; ?>

        <!-- Statistique section -->
        <div class="flex flex-col w-5/6 p-2">
            <h1 class="text-4xl text-center font-bold">DashBoard</h1>
            <div class=" flex justify-evenly gap-5 py-7">
                <div class="shadow-lg text-center w-2/5 bg-gray-300  flex flex-col gap-2 p-3">
                    <p class="font-bold text-4xl">
                        <?= $freelancers_count ?>
                    </p>
                    <h4 class="text-xl font-semibold ">Freelancers</h4>
                </div>
                <div class="shadow-lg text-center w-2/5 bg-gray-300  flex flex-col gap-2 p-3">
                    <p class="font-bold text-4xl">
                        <?= $incompleted_projects_count ?>
                    </p>
                    <h4 class="  text-xl font-semibold ">Uncompleted projects</h4>
                </div>
                <div class="shadow-lg text-center w-2/5 bg-gray-300  flex flex-col gap-2 p-3">
                    <p class="font-bold text-4xl"><?= $revenue ?> <small>$</small> </p>
                    <h4 class="  text-xl font-semibold ">Total Revenue</h4>
                </div>
                <div class="shadow-lg text-center w-2/5 bg-gray-300  flex flex-col  gap-2 p-3">
                    <p class="font-bold text-4xl">1,237</p>
                    <h4 class="  text-xl font-semibold"> New Customers</h4>
                </div>

            </div>
        </div>
        <!-- end Statistique section -->

    </main>



    <script src="./assets/javascript/jquery.js"></script>
    <script src="./assets/javascript/script.js"></script>
    <script src="./assets/javascript/dashboard.js"></script>
</body>

</html>