<?php
require_once("./dashboard-layout.php");
require_once("../DataBase/connection.php");

?>

<!-- main -->
<div class="flex-grow flex flex-col pb-10">
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
            <table class="table-auto w-full whitespace-no-wrap border-spacing-2">
                <thead>
                    <tr class="bg-gray-400 text-center">
                        <th class="py-2 border-r border-gray-200">ID</th>
                        <th class="py-2 border-r border-gray-200">Name</th>
                        <th class="py-2 border-r border-gray-200">Email</th>
                        <th class="py-2 border-r border-gray-200">Job</th>
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
                                    ,job
                                    ,users.photo_src AS photo_src
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
                            $photo_src = $row['photo_src'];
                            $city = $row['city'];
                    ?>
                            <tr class="odd:bg-gray-200 even:bg-gray-300">
                                <td class="p-2 border border-r-2 border-white text-center"> <?= $id ?> </td>
                                <td class="p-2 border border-r-2 border-white flex flex-row items-center gap-x-2">
                                    <img class="w-10 h-10 rounded-full" src="<?= $photo_src ?>" alt="freelancer photo">
                                    <div><?= $name ?></div>
                                </td>
                                <td class="p-2 border border-r-2 border-white"> <?= $email ?> </td>
                                <td class="p-2 border border-r-2 border-white"> <?= $job ?> </td>
                                <td class="p-2 border border-r-2 border-white"> <?= $city ?> </td>
                                <td class="text-right border border-white">
                                    <form class="pr-1" action="./freelancer/delete.php" method="POST">
                                        <input class="hidden" type="text" name="id" id="id" value="<?= $id ?>">
                                        <button type="submit" class="hover:bg-red-500 hover:text-white text-red-500 border border-red-500 rounded-md p-2" onclick="return confirmDelete()">
                                            Delete
                                        </button>
                                    </form>
                                </td>
                                <td class="text-left border border-white">
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