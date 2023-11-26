<?php
session_start();
require_once("./dashboard-layout.php");
require_once("../DataBase/connection.php");

if (isset($_SESSION['message'])) {
    $message = $_SESSION['message'];
    $message_type = $_SESSION['message_type'];
    unset($_SESSION['message']);
    unset($_SESSION['message_type']);
}
$success_class = "text-red-800 bg-red-50";
$error_class = "text-green-800 bg-green-50";

// Number of freelancers
$sql_query = "select count(*) as count from users where isFreelancer = 1;";
$result = mysqli_query($conn, $sql_query);
$row = mysqli_fetch_assoc($result);
$freelancers_count = $row["count"];

// Number of incompleted projects
$sql_query = "select count(*) as count from projects where status = 'incompleted';";
$result = mysqli_query($conn, $sql_query);
$row = mysqli_fetch_assoc($result);
$incompleted_projects_count = $row["count"];

// Revenue of freelancers
$sql_query = "select SUM(price) as revenue from projects where status = 'completed';";
$result = mysqli_query($conn, $sql_query);
$row = mysqli_fetch_assoc($result);
$revenue = $row['revenue'];

// 

?>

<!-- main -->
<div class="flex-grow flex flex-col pb-10">
    <!-- Statistique section -->
    <section class="flex flex-col">
        <h1 class="text-4xl text-center font-bold">DashBoard</h1>
        <section class=" flex justify-evenly gap-5 py-7">
            <div class="shadow-lg text-center w-2/5 bg-gray-300  flex flex-col gap-2 p-3">
                <p class="font-bold text-4xl">
                    <?= $freelancers_count ?>
                </p>
                <h4 class="  text-xl font-semibold ">Freelancers </h4>
            </div>
            <div class="shadow-lg text-center w-2/5 bg-gray-300  flex flex-col gap-2 p-3">
                <p class="font-bold text-4xl">
                    <?= $incompleted_projects_count ?>
                </p>
                <h4 class="  text-xl font-semibold ">Incompleted projects</h4>
            </div>
            <div class="shadow-lg text-center w-2/5 bg-gray-300  flex flex-col gap-2 p-3">
                <p class="font-bold text-4xl"><?= $revenue ?> <small>$</small> </p>
                <h4 class="  text-xl font-semibold ">Total Revenue</h4>
            </div>
            <div class="shadow-lg text-center w-2/5 bg-gray-300  flex flex-col  gap-2 p-3">
                <p class="font-bold text-4xl">1,237</p>
                <h4 class="  text-xl font-semibold"> New Customers</h4>
            </div>

        </section>

    </section>
    <!-- end Statistique section -->

    <!-- Freelancers -->
    <section class="flex justify-center flex-col p-2">
        <div class="flex flex-row py-2 items-center">
            <h3 class="my-3 mr-auto text-2xl font-bold text-cyan-800">List of Freelancers</h3>
            <a class="cursor-pointer text-white font-bold bg-custom-green rounded-xl p-2 h-10 hover:bg-custom-green+" href="./freelancer/createForm.php">+ Add freelancer</a>
        </div>
        <div class="flex flex-col">

            <!-- Alert request message  -->
            <?php if (isset($message)) : ?>
                <div class="p-4 mb-4 text-sm text-center rounded-lg <?php $message_type == 'success' ? $success_class : $error_class ?>" role="alert">
                    <span class="font-medium"><?= $message ?></span>
                </div>
            <?php endif; ?>

            <!-- Table -->
            <table class="table-auto w-full text-center whitespace-no-wrap border-spacing-2">
                <thead>
                    <tr class="bg-gray-400">
                        <th class="py-3 border-r border-gray-400">ID</th>
                        <th class="py-3 border-r border-gray-400">Name</th>
                        <th class="py-3 border-r border-gray-400">Email</th>
                        <th class="py-3 border-r border-gray-400">Job</th>
                        <th class="py-3 border-r border-gray-400">City</th>
                        <th class="py-3" colspan="2">
                            Manage
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT  users.id     AS id
                                    ,`fullName`   AS name
                                    ,email
                                    ,job
                                    ,cities.name  AS city
                                    ,regions.name AS region
                            FROM users 
                            INNER JOIN cities
                            ON users.city_id = cities.id
                            INNER JOIN regions
                            ON cities.region_id = regions.id order by id;
                        ";
                    $res = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($res)) :
                        while ($row = mysqli_fetch_assoc($res)) :
                            $id = $row['id'];
                            $name = $row['name'];
                            $email = $row['email'];
                            $job = $row['job'];
                            $city = $row['city'];
                    ?>
                            <tr class="odd:bg-gray-200 even:bg-gray-300">
                                <td class="py-3 border border-r-2 border-white"> <?= $id ?> </td>
                                <td class="py-3 border border-r-2 border-white"> <?= $name ?> </td>
                                <td class="py-3 border border-r-2 border-white"> <?= $email ?> </td>
                                <td class="py-3 border border-r-2 border-white"> <?= $job ?> </td>
                                <td class="py-3 border border-r-2 border-white"> <?= $city ?> </td>
                                <td class="text-right">
                                    <form class="pr-1" action="./freelancer/delete.php" method="POST">
                                        <input class="hidden" type="text" name="id" id="id" value="<?= $id ?>">
                                        <button type="submit" class="hover:bg-red-500 hover:text-white text-red-500 border border-red-500 rounded-md p-2" onclick="return confirmDelete()">
                                            Delete
                                        </button>
                                    </form>
                                </td>
                                <td class="text-left">
                                    <form class="pl-1" action="./freelancer/editForm.php" method="post">
                                        <input class="hidden" type="text" name="id" id="id" value="<?= $id ?>">
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

    <section class="flex justify-center gap-8 flex-col p-2">
        <h3 class="text-center text-xl font-bold"> Users By City</h3>
        <div class="flex flex-col border  ">
            <ul class="flex justify-around  bg-gray-300 py-3">
                <li class="font-bold">CITY</li>
                <li class="font-bold">TOTAL USERS</li>
            </ul>
            <ul class="flex justify-around text-center bg-gray-50 py-3">
                <li class="w-1/2">khouribga</li>
                <li class="w-1/2">10050K</li>
            </ul>
            <ul class="flex justify-around text-center bg-gray-50 py-3">
                <li class="w-1/2">casablanca</li>
                <li class="w-1/2">100K</li>
            </ul>
            <ul class="flex justify-around text-center bg-gray-50 py-3">
                <li class="w-1/2">youssoufia</li>
                <li class="w-1/2">10050K</li>
            </ul>
            <ul class="flex justify-around text-center bg-gray-50 py-3">
                <li class="w-1/2">safi</li>
                <li class="w-1/2">100K</li>
            </ul>

        </div>
    </section>
</div>
<!-- end main -->

</div> <!-- close div container -->

<?php
mysqli_close($conn);
?>

<script>
    function confirmDelete() {
        var confirmation = confirm(`Are you sure you want to delete it!`);
        return confirmation;
    }
</script>
<script src="../javascript/jquery.js"></script>
<script src="../javascript/dashboard.js"></script>
</body>

</html>