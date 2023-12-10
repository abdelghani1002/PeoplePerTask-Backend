<?php

require "../../includes/connection.php";

$index_nav = "../";
$path = "../..";
?>

<!doctype html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="../../assets/dist/output.css" rel="stylesheet">
  <link href="../../assets/css/input.css" rel="stylesheet">
  <link rel="shortcut icon" href="../../assets/images/favicon.png" type="image/x-icon">
  <title>Search</title>
</head>

<body>

  <?php
  include '../../templates/header.php';
  ?>

  <div class="bg-slate-50 dark:bg-slate-700 px-6 flex justify-center items-center">
    <div class="container w-full max-h-full mx-auto bg-mainBlue rounded-lg px-10">
      <form>
        <h1 class="text-center font-bold dark:text-white text-4xl mb-10">Featured Projects</h1>
        <div class="sm:flex items-center bg-white rounded-full overflow-hidden p-2 px-5 justify-center border border-green-300">

          <input id="search" class="text-sm font-poppins font-medium text-gray-400 flex-grow" type="text" placeholder="Search project..." />

          <div class="ms:flex items-center justify-center px-6 rounded-full space-x-4 mx-auto ">
            <select id="Categories" name="subcategory" class="text-sm text-gray-800 font-poppins font-semibold outline-none border-2 px-8 py-2 rounded-full">
              <?php
              $sql = "SELECT * FROM subcategories WHERE category_id is not null";
              $result = mysqli_query($conn, $sql);

              while ($row = mysqli_fetch_assoc($result)) {

              ?>
                <option value="<?= $row['id'] ?>"><?= $row['name'] ?></option>";
              <?php
              }
              ?>
            </select>
            <button class="bg-custom-green text-white font-bold  rounded-full px-6 py-3 font-poppins">Search</button>
          </div>
        </div>
      </form>
    </div>
  </div>



  <section id="parent" class="flex justify-center items-center w-full">

    <ul class="w-full p-10">
      <?php
      $sql = 'SELECT p.id as p_id, p.title as title, p.description as p_description, p.duration, p.price, u.*
              FROM projects p
              INNER JOIN users u
              ON p.user_id = u.id';

      $res = mysqli_query($conn, $sql);

      if (mysqli_num_rows($res) > 0) :
        while ($row = mysqli_fetch_assoc($res)) :
          $diff = strtotime($row['duration']) - strtotime("now");
          $days = floor($diff / (60 * 60 * 24));
          $hours = gmdate("H", $diff);
          $minutes = gmdate("i", $diff);
          $seconds = gmdate("s", $diff);
          $ends_in = sprintf('%02d days %02d:%02d:%02d', $days, $hours, $minutes, $seconds);
      ?>
          <li class="flex justify-center w-full gap-6 rounded-xl border border-green-400 mb-5 drop-shadow-md shadow">
            <a href="../project/view.php?id=<?= $row['p_id'] ?>" class="flex flex-col rounded-md w-full">
              <div class="flex flex-row px-5 py-3 justify-between items-center">
                <div class="flex flex-row items-center">
                  <img class="w-12 h-12 rounded-full" src="<?= $path . $row['photo_src'] ?>" alt="poster">
                  <span class="px-2 text-sm">by <?= $row['fullName'] ?></span>
                </div>
                <div class="flex flex-row items-center">
                  $<?= $row['price'] ?>
                  <div class="ml-2 rounded-full aspect-square w-8 bg-stone-200 drop-shadow-md flex justify-center items-center"></div>
                </div>
              </div>

              <div class="px-5 py-0">
                <h3 class="font-bold text-lg"><?= $row['title'] ?></h3>
              </div>

              <div class="w-full px-5 py-2">
                <p><?= $row['p_description'] ?></p>
              </div>

              <div class="border-t border-gray-200 p-3 flex flex-row">
                
                <p class="text-xs">Ends in <em class="font-bold text-yellow-800"><?= $ends_in ?></em></p>
                
                <?php
                $sql = "SELECT count(*) as num_proposals from proposals where project_id = " . $row['p_id'];
                $num_proposals = mysqli_fetch_assoc(mysqli_query($conn, $sql))['num_proposals'];
                ?>
                <p class="px-4 text-xs"><?= $num_proposals ?> Proposals</p>
              </div>
            </a>
          </li>
      <?php endwhile;
      endif; ?>
    </ul>
  </section>


  <?php
  include '../../templates/footer.php';
  ?>
  <script src="../javascript/jquery.js"></script>
  <script src="../javascript/script.js"></script>
</body>

</html>