<?php
require_once("./dashboard-layout.php");
require_once("../DataBase/connection.php");

?>

<!-- main -->
<div class="flex-grow flex flex-col pb-10">
    <!-- Categories -->
    <section class="flex justify-center flex-col p-2">
        <div class="flex flex-row py-2 items-center">
            <h3 class="my-3 mr-auto text-2xl font-bold text-cyan-800">List of Categories</h3>
            <a class="cursor-pointer text-white font-bold bg-custom-green rounded-xl p-2 h-10 hover:bg-custom-green+" 
                href="./category/createForm.php">
                + Add Category
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
            <table class="table-auto w-full text-center whitespace-no-wrap border-spacing-2">
                <thead>
                    <tr class="bg-gray-400">
                        <th class="py-3 border-r border-gray-400">ID</th>
                        <th class="py-3 border-r border-gray-400">Name</th>
                        <th class="py-3 border-r border-gray-400">Photo</th>
                        <th class="py-3 border-r border-gray-400">Slogan</th>
                        <th class="py-3 border-r border-gray-400">SupCategory</th>
                        <th class="py-3" colspan="2">
                            Manage
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT  *
                            FROM subcategories
                            where category_id is NULL
                        ;";
                    $res = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($res)) :
                        while ($row = mysqli_fetch_assoc($res)) :
                            $id = $row['id'];
                            $name = $row['name'];
                            $photo_src = $row['photo_src'];
                            $slogan = $row['slogan'];
                            $category_id = $row['category_id'];
                    ?>
                            <tr class="odd:bg-gray-200 even:bg-gray-300">
                                <td class="py-3 border border-r-2 border-white"> <?= $id ?> </td>
                                <td class="py-3 border border-r-2 border-white"> <?= $name ?> </td>
                                <td class="py-3 border border-r-2 border-white">
                                    <img class="w-12 m-auto" src="<?= $photo_src ?>" alt="category photo">
                                </td>
                                <td class="py-3 border border-r-2 border-white"> <?= $slogan ?> </td>
                                <td class="py-3 border border-r-2 border-white"> <?php if ($category_id) echo "Sub";
                                                                                    else echo "Sup"; ?> </td>
                                <td class="text-right border border-white">
                                    <form class="text-center" action="./category/delete.php" method="POST">
                                        <input class="hidden" type="text" name="id" id="id" value="<?= $id ?>">
                                        <button type="submit" class="hover:bg-red-500 hover:text-white text-red-500 border border-red-500 rounded-md p-2" onclick="return confirmDelete()">
                                            Delete
                                        </button>
                                    </form>
                                </td>
                                <td class="text-left border border-white">
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