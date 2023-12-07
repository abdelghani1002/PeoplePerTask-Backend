<?php
session_start();
include "../../includes/connection.php";
$path = '../..';


if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT p.*, u.fullName as poster_name, u.photo_src, c.name as city, u.id as poster_id  FROM projects p
            JOIN users u
            ON p.user_id = u.id
            JOIN cities c
            ON u.city_id = c.id
            WHERE p.id = $id";
    $res = mysqli_query($conn, $sql);
    if (!$res) {
        echo "Not found.";
        exit;
    }
    $project = mysqli_fetch_assoc($res);
}

// get session message
if (isset($_SESSION['message'])) {
    $message = $_SESSION['message'];
    $message_type = $_SESSION['message_type'];
    unset($_SESSION['message']);
    unset($_SESSION['message_type']);
    $success_class = "text-green-400";
    $error_class = "text-red-400";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/dist/output.css">
    <link rel="stylesheet" href="../../assets/css/input.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Project-view</title>
</head>

<body class="dark:bg-slate-700">
    <?php include '../../templates/header.php'; ?>

    <div class="container p-5">
        <article class="flex bg-gray-200 transition shadow-xl p-3 dark:bg-slate-600 border-slate-700">
            <div class="hidden sm:block sm:basis-56">
                <img alt="Guitar" src="https://images.unsplash.com/photo-1609557927087-f9cf8e88de18?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1740&q=80" class="h-full w-full object-cover" />
            </div>

            <div class="flex flex-1 flex-row justify-between">
                <div class="w-full flex flex-col justify-between sm:p-6 border-r">
                    <div>
                        <div class="flex flex-row justify-between">
                            <h2 class="font-bold uppercase text-gray-900 dark:text-gray-200">
                                <?= $project['title'] ?>
                            </h2>
                            <div class="dark:text-gray-200">
                                Ends in
                                <strong class="dark:text-fuchsia-200">
                                    <?= $project['duration'] ?>
                                </strong>
                                hours
                            </div>
                        </div>

                        <p class="my-5 line-clamp-3 text-sm text-gray-700 dark:text-gray-200">
                            <?= $project['description'] ?>
                        </p>
                    </div>
                    <small class="dark:text-gray-300">Posted by</small>
                    <div class="flex flex-row justify-between items-center">
                        <div class="flex flex-row gap-x-2 items-center dark:text-gray-300">
                            <img class="w-12 h-w-12 rounded-full" src="<?= $path . $project['photo_src'] ?>" alt="Poster photo">
                            <div class="flex flex-col justify-center h-fit">
                                <h4 class="mb-0"><?= $project['poster_name'] ?></h4>
                                <p class="text-sm">
                                    <i class="material-icons">&#xe0c8;</i>
                                    <?= $project['city'] ?>
                                </p>
                            </div>
                        </div>
                        <div class="dark:text-gray-300 font-bold">
                            <?= $project['price'] ?> MAD
                        </div>
                    </div>
                </div>

                <?php
                if (isset($_SESSION['user']) && $_SESSION['user']['role'] === "freelancer") {
                ?>
                    <div class="flex flex-col justify-center h-full px-2">
                        <!-- Alert request message  -->
                        <?php if (isset($message)) : ?>
                            <div class="my-1 text-sm text-center rounded-lg" role="alert">
                                <span class="font-sm p-1 w-fit rounded-md <?php if ($message_type === 'success')  echo($success_class); else echo($error_class); ?>"><?= $message ?></span>
                            </div>
                        <?php endif; ?>

                        <form action="../proposal/create.php" method="POST">
                            <input type="hidden" name="freelancer_id" value="<?= $_SESSION['user']['id'] ?>">
                            <input type="hidden" name="project_id" value="<?= $project['id'] ?>">
                            <button class="block rounded-md bg-yellow-300 px-5 py-3 text-center text-xs font-bold uppercase text-gray-900 transition hover:bg-yellow-400">Send proposal</button>
                        </form>
                    </div>
                <?php
                }
                ?>
            </div>
        </article>
    </div>






    <script src="../../assets/javascript/jquery.js"></script>
    <script src="../../assets/javascript/script.js"></script>
</body>

</html>