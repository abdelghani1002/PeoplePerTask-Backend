<?php
session_start();
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
        <h1 class="text-center font-thin dark:text-white text-4xl py-2">Featured Projects</h1>
        <div class="sm:flex items-center my-5 bg-white dark:bg-zinc-500 rounded-full overflow-hidden p-2 px-5 justify-center border border-green-300">

          <input id="search" class="text-md font-poppins dark:bg-zinc-500 font-medium text-gray-400 dark:text-gray-100 flex-grow" type="text" placeholder="Search project..." />

          <div class="ms:flex items-center justify-center px-6 rounded-full space-x-4 mx-auto ">

            <select id="category" name="category" class="text-sm dark:bg-zinc-600 dark:text-gray-200 text-gray-800  font-poppins font-semibold outline-none border-2 px-8 py-2 rounded-full" required>
              <option value="" selected class="hidden">Categories</option>
              <?php
              $sql = "SELECT * from subcategories where category_id is null;";
              $categories = mysqli_query($conn, $sql);
              if (mysqli_num_rows($categories) > 0) :
                while ($row = mysqli_fetch_assoc($categories)) :
                  $category_id = $row['id'];
                  $category_name = $row['name'];
              ?>
                  <optgroup label="<?= $category_name ?>">
                    <?php
                    $sql = "SELECT * from subcategories where category_id = $category_id;";
                    $subcategories = mysqli_query($conn, $sql);

                    while ($subcategory = mysqli_fetch_assoc($subcategories)) :
                      $subcategory_id = $subcategory['id'];
                      $subcategory_name = $subcategory['name'];
                    ?>
                      <option class="bg-gray-200 text-gray-800" value="<?= $subcategory_id ?>">
                        <?= $subcategory_name ?>
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

            <button class="bg-custom-green text-white font-bold  rounded-full px-6 py-3 font-poppins">Search</button>
          </div>
        </div>
      </form>
    </div>
  </div>

  <section class="flex justify-center items-center w-full dark:bg-slate-700 dark:text-gray-300">
    <ul id="parent" class="w-full p-10">
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
          <li class="flex justify-center bg-slate-600 w-full gap-6 rounded-xl border border-green-400 mb-5 drop-shadow-md shadow shadow-emerald-500 hover:scale-[101%]">
            <a href="../project/view.php?id=<?= $row['p_id'] ?>" class="flex flex-col rounded-md w-full">
              <div class="flex flex-row px-5 py-3 justify-between items-center">
                <div class="flex flex-row items-center">
                  <img class="w-12 h-12 rounded-full" src="<?= $path . $row['photo_src'] ?>" alt="poster">
                  <span class="px-2 text-sm">by <?= $row['fullName'] ?></span>
                </div>
                <div class="flex flex-row items-center">
                  <b>$<?= $row['price'] ?></b>
                  <div class="ml-2 rounded-full aspect-square w-8 bg-stone-200 drop-shadow-md flex justify-center items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" id="heart">
                      <g fill="none" fill-rule="evenodd" stroke="#200E32" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" transform="translate(2.5 3)">
                        <path d="M9.26100981 17.8537669C7.09039739 16.5178915 5.07111022 14.9456454 3.2392904 13.1651694 1.95143752 11.8829466.9710055 10.3197719.373096631 8.59538613-.702856235 5.25030481.553929046 1.42082647 4.07111951.287520227 5.91961305-.307565201 7.93844933.0325524403 9.49609195 1.20147687L9.49609195 1.20147687C11.0543328.0339759987 13.0724617-.306022468 14.9210644.287520227 18.4382548 1.42082647 19.7040817 5.25030481 18.6281289 8.59538613 18.03022 10.3197719 17.049788 11.8829466 15.7619351 13.1651694 13.9301153 14.9456454 11.9108281 16.5178915 9.7402157 17.8537669L9.50513357 18 9.26100981 17.8537669zM13.2393229 4.0530216C14.3046302 4.39332197 15.061552 5.34972367 15.1561465 6.47500671"></path>
                      </g>
                    </svg>
                  </div>
                </div>
              </div>

              <div class="px-5 py-0">
                <h3 class="font-bold text-lg"><?= $row['title'] ?></h3>
              </div>

              <div class="w-full px-5 py-2">
                <p><?= $row['p_description'] ?></p>
              </div>

              <div class="border-t border-gray-200 p-3 flex flex-row">

                <p class="text-xs">Ends in <em class="font-bold text-yellow-800 dark:text-yellow-400"><?= $ends_in ?></em></p>

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
  <script src="../../assets/javascript/jquery.js"></script>
  <script src="../../assets/javascript/script.js"></script>

  <script>
    document.getElementById("search").addEventListener("input", function() {
      var search = document.getElementById("search").value;
      console.log(search);

      var x = new XMLHttpRequest();
      x.open("GET", "./ajax/search_projects.php?search=" + search, true);
      x.onreadystatechange = function() {
        if (this.readyState === 4 && this.status === 200) {
          var res = JSON.parse(this.response);

          var parent = document.getElementById("parent");
          parent.innerHTML = "";

          res.forEach(e => {
            var li = document.createElement("li");
            li.className = "flex justify-center bg-slate-600 w-full gap-6 rounded-xl border border-green-400 mb-5 drop-shadow-md    shadow shadow-emerald-500 hover:scale-[101%]";

            li.innerHTML = `
            <a href="../project/view.php?id=${e.p_id}" class="flex flex-col rounded-md w-full">
              <div class="flex flex-row px-5 py-3 justify-between items-center">
                <div class="flex flex-row items-center">
                  <img class="w-12 h-12 rounded-full" src="../..${e.photo_src}" alt="poster">
                  <span class="px-2 text-sm">by ${e.fullName} </span>
                </div>
                <div class="flex flex-row items-center">
                  <b>$${e.price}</b>
                  <div class="ml-2 rounded-full aspect-square w-8 bg-stone-200 drop-shadow-md flex justify-center items-center"></div>
                </div>
              </div>

              <div class="px-5 py-0">
                <h3 class="font-bold text-lg">${e.title}</h3>
              </div>

              <div class="w-full px-5 py-2">
                <p>${e.p_description}</p>
              </div>

              <div class="border-t border-gray-200 p-3 flex flex-row">

                <p class="text-xs">Ends in <em class="font-bold text-yellow-800 dark:text-yellow-400"> ${e.ends_in} </em></p>

                <p class="px-4 text-xs"> ${e.num_proposals} Proposals</p>
              </div>
            </a>`;

            parent.appendChild(li);
          });
        } else {
          var parent = document.getElementById("parent");
          parent.innerHTML = "";
        }
      };
      x.send();
    });

    document.getElementById("category").addEventListener("change", function() {
      var category_id = document.getElementById("category").value;
      console.log(category_id);

      var x = new XMLHttpRequest();
      x.open("GET", "./ajax/search_projects.php?category_id=" + category_id, true);
      x.onreadystatechange = function() {
        if (this.readyState === 4 && this.status === 200) {
          var res = JSON.parse(this.response);

          var parent = document.getElementById("parent");
          parent.innerHTML = "";

          res.forEach(e => {
            var li = document.createElement("li");
            li.className = "flex justify-center bg-slate-600 w-full gap-6 rounded-xl border border-green-400 mb-5 drop-shadow-md    shadow shadow-emerald-500 hover:scale-[101%]";

            li.innerHTML = `
            <a href="../project/view.php?id=${e.p_id}" class="flex flex-col rounded-md w-full">
              <div class="flex flex-row px-5 py-3 justify-between items-center">
                <div class="flex flex-row items-center">
                  <img class="w-12 h-12 rounded-full" src="../..${e.photo_src}" alt="poster">
                  <span class="px-2 text-sm">by ${e.fullName} </span>
                </div>
                <div class="flex flex-row items-center">
                  <b>$${e.price}</b>
                  <div class="ml-2 rounded-full aspect-square w-8 bg-stone-200 drop-shadow-md flex justify-center items-center"></div>
                </div>
              </div>

              <div class="px-5 py-0">
                <h3 class="font-bold text-lg">${e.title}</h3>
              </div>

              <div class="w-full px-5 py-2">
                <p>${e.p_description}</p>
              </div>

              <div class="border-t border-gray-200 p-3 flex flex-row">

                <p class="text-xs">Ends in <em class="font-bold text-yellow-800 dark:text-yellow-400"> ${e.ends_in} </em></p>

                <p class="px-4 text-xs"> ${e.num_proposals} Proposals</p>
              </div>
            </a>`;

            parent.appendChild(li);
          });
        } else {
          var parent = document.getElementById("parent");
          parent.innerHTML = "";
        }
      };
      x.send();
    });
  </script>
</body>

</html>