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
            <a class="cursor-pointer text-white font-bold bg-blue-600 rounded-xl p-2 h-10 hover:bg-blue-700" href="./category/createForm.php">
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
            <table class="table-auto w-full whitespace-no-wrap border-spacing-2">
                <thead>
                    <tr class="bg-gray-400">
                        <th class="py-2 border-r border-gray-400">ID</th>
                        <th class="py-2 border-r border-gray-400">Name</th>
                        <th class="py-2 border-r border-gray-400">Photo</th>
                        <th class="py-2 border-r border-gray-400">Slogan</th>
                        <th class="py-2 border-r border-gray-400">Sub categories</th>
                        <th class="py-2" colspan="2">
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
                    ?>
                            <tr class="odd:bg-gray-200 even:bg-gray-300">
                                <td class="py-2 text-center border border-r border-white"> <?= $id ?> </td>
                                <td class="py-2 pl-1 border border-r border-white"> <?= $name ?> </td>
                                <td class="py-2 border border-r border-white">
                                    <img class="w-12 m-auto" src="<?= $photo_src ?>" alt="category photo">
                                </td>
                                <td class="py-2 pl-1 border border-r border-white"> <?= $slogan ?> </td>

                                <td class="py-2 h-100 flex flex-col justify-start">
                                    <ul class="flex flex-col justify-start gap-2">
                                        <?php
                                        $sub_sql = "SELECT `id`, `name` FROM subcategories
                                                where
                                                    `category_id` = $id
                                                ;";
                                        $sub_res = mysqli_query($conn, $sub_sql);
                                        if (mysqli_num_rows($sub_res) > 0) :
                                            while ($sub_row = mysqli_fetch_assoc($sub_res)) :
                                                $subcategory_id = $sub_row['id'];
                                                $subcategory_name = $sub_row['name'];
                                        ?>
                                                <li class="bg-zinc-200 flex flex-row justify-between items-center p-1">
                                                    <div class="font-medium">
                                                        <?= $subcategory_name ?>
                                                    </div>
                                                    <div class="flex flex-row items-center gap-x-2">
                                                        <form action="./category/delete.php" method="post">
                                                            <input type="number" name="id" id="id" class="hidden" value="<?= $subcategory_id ?>">
                                                            <button onclick="return confirmDelete()">
                                                                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                                                                    <path class="fill-red-600" d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z" />
                                                                </svg>
                                                            </button>
                                                        </form>
                                                        <form action="./category/editForm.php" method="post">
                                                            <input type="number" name="id" id="id" class="hidden" value="<?= $subcategory_id ?>">
                                                            <button class="p-1 rounded-full w-4 h-4">
                                                                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                                                                    <path class="fill-green-600" d="M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.7 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0 107 0 160V416c0 53 43 96 96 96H352c53 0 96-43 96-96V320c0-17.7-14.3-32-32-32s-32 14.3-32 32v96c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h96c17.7 0 32-14.3 32-32s-14.3-32-32-32H96z" />
                                                                </svg>
                                                            </button>
                                                        </form>
                                                    </div>
                                                </li>
                                        <?php
                                            endwhile;
                                        endif;
                                        ?>
                                    </ul>
                                </td>

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