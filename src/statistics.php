<?php
require_once("./dashboard-layout.php");
require_once("../DataBase/connection.php");

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

    document.querySelector('.statistics').classList.add("active");
</script>
<script src="../javascript/jquery.js"></script>
<script src="../javascript/dashboard.js"></script>
</body>

</html>