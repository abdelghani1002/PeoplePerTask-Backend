<?php
require_once("./dashboard-layout.php");
require_once("../DataBase/connection.php");

?>

<!-- main -->
<div class="flex-grow flex flex-col pb-10 w-4/5">
    <!-- Projects -->
    <section class="flex justify-center flex-col p-2">
        <div class="flex flex-row py-2 items-center">
            <h3 class="my-3 mr-auto text-2xl font-bold text-cyan-800">List of Projects</h3>
            <a class="cursor-pointer text-white font-bold bg-blue-600 rounded-xl p-2 h-10 hover:bg-blue-600" href="./project/createForm.php">
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
                        <th class="p-1 border-r border-gray-400">Description</th>
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
                                    ,`description`
                                    ,`price`
                                    ,`duration`
                                    ,p.`status`
                                    ,u.`fullName` AS poster_name
                                    ,u.`photo_src` as poster_photo_src
                                    ,s.`name` as subcategory
                            FROM projects p
                            INNER JOIN users u
                            ON p.user_id = u.id
                            INNER JOIN subcategories s
                            ON s.id = p.subcategory_id
                        ;";
                    $res = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($res)) :
                        while ($row = mysqli_fetch_assoc($res)) :
                            $id = $row['id'];
                            $title = $row['title'];
                            $description = $row['description'];
                            $price = $row['price'];
                            $duration = $row['duration'];
                            $status = $row['status'];
                            $poster_name = $row['poster_name'];
                            $poster_photo_src = $row['poster_photo_src'];
                            $subcategory = $row['subcategory'];
                    ?>
                            <tr class="odd:bg-gray-200 even:bg-gray-300">
                                <td class="p-1 text-center border-r border-white"> <?= $id ?> </td>
                                <td class="p-1 border-r border-white flex flex-row items-center gap-x-2">
                                    <img class="w-7 h-7 rounded-full" src="<?= $poster_photo_src ?>" alt="Poster photo">
                                    <div><?= $poster_name ?></div>
                                </td>
                                <td class="p-1 border-r border-white"> <?= $title ?> </td>
                                <td class="p-1 border-r border-white"> <?= $description ?> </td>
                                <td class="p-1 border-r border-white"> <?= $duration ?> </td>
                                <td class="p-1 border-r border-white"> <?= $duration ?> </td>
                                <td class="p-1 border-r border-white"> <?= $status ?> </td>
                                <td class="p-1 border-r border-white"> <?= $subcategory ?> </td>
                                <td class="p-1 border-r border-white flex flex-row items-center gap-x-2">
                                    <img class="w-7 h-7 rounded-full" src="<?= $poster_photo_src ?>" alt="Poster photo">
                                    <div><?= $poster_name ?></div>
                                </td>
                                <td class="text-right border-r border-white">
                                    <form class="text-center" action="./category/delete.php" method="POST">
                                        <input class="hidden" type="text" name="id" id="id" value="<?= $id ?>">
                                        <button type="submit" class="hover:bg-red-500 hover:text-white text-red-500 border border-red-500 rounded-md p-2" onclick="return confirmDelete()">
                                            Delete
                                        </button>
                                    </form>
                                </td>
                                <td class="text-left border-r border-white">
                                    <form class="text-center" action="./category/editForm.php" method="post">
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
    <!-- end Categories -->
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