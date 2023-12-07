<?php
require("../includes/connection.php");
session_start();

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" href="../assets/css/login.css">
</head>

<body>
  <div class="login_container">
    <div class="containers">
      <input type="checkbox" id="flip">

      <div class="cover">

        <div class="front">
          <img class="backImg" src="../assets/images/th.jpg" alt="not found">
          <div class="text">
            <span class="text-1">Every new friend is a <br> new adventure</span>
            <span class="text-2">Let's get connected</span>
          </div>
        </div>

        <div class="back">
          <img class="backImg" src="../assets/images/th.jpg" alt="not found">
          <div class="text">
            <span class="text-1">Complete miles of journey <br> with one step</span>
            <span class="text-2">Let's get started</span>
          </div>
        </div>

      </div>

      <div class="forms">
        <div class="form-content">

          <!-- Log in -->

          <div class="login-form">
            <div class="title">
              Login
            </div>

            <?php
            if (isset($_SESSION["message"]) && isset($_GET['form']) && $_GET['form'] === 'login') {
              echo $_SESSION["message"];
              unset($_SESSION['message']);
            }
            ?>

            <form id="login-form" action="<?= $_ENV["PROJECT_DIR"] . '/src/auth.php?func=login' ?>" method="post">
              <div class="input-boxes">
                <div class="input-box">
                  <i class="fas fa-envelope"></i>
                  <input type="text" name="email" placeholder="Enter your email" required
                        value="<?php if (isset($_COOKIE['old_email'])) echo $_COOKIE['old_email'];
                                    else null  ?>">
                </div>
                <div class="input-box">
                  <i class="fas fa-lock"></i>
                  <input type="password" name="password" placeholder="Enter your password" required>
                </div>
                <div class="text"><a href="#">Forgot password?</a></div>
                <div class="button input-box">
                  <input type="submit" name="login" value="Sumbit">
                </div>
                <div class="text sign-up-text">Don't have an account? <label for="flip">Signup now</label></div>
              </div>
            </form>
          </div>

          <!-- Sign up -->

          <div class="signup-form">
            <div class="title">
              Sign up
            </div>

            <?php
            if (isset($_SESSION["message"]) && isset($_GET['form']) && $_GET['form'] === 'sign_up') {
              echo $_SESSION["message"];
              unset($_SESSION['message']);
            }
            ?>

            <form id="sign-up-form" action="<?= $_ENV["PROJECT_DIR"] . '/src/auth.php?func=sign_up' ?>" method="post">
              <div class="input-boxes">

                <div class="input-box">
                  <i class="fas fa-user"></i>
                  <input name="fullName" type="text" placeholder="Enter your name" required>
                </div>

                <div class="input-box">
                  <i class="fas fa-envelope"></i>
                  <input type="email" name="email" placeholder="Enter your email" required>
                </div>

                <div class="input-box">
                  <i class="fas fa-lock"></i>
                  <input type="password" name="password" placeholder="Enter your password" required>
                </div>

                <div class="input-box">
                  <i class="fas fa-lock"></i>
                  <input type="password" name="confirmpassword" placeholder="Confirm password" required>
                </div>

                <div class="input-box">
                  <select class="w-full" name="region" id="region" required>
                    <option class="text-gray-300" disabled selected>Select Region</option>

                    <?php
                    $sql = "SELECT * from regions;";
                    $regions = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($regions) > 0) :
                      while ($row = mysqli_fetch_assoc($regions)) :
                        $region_id = $row['id'];
                        $region_name = $row['name'];

                    ?>
                        <option class="bg-gray-100" value="<?= $region_id ?>"> <?= $region_name ?>
                        </option>


                    <?php
                      endwhile;
                    endif;
                    ?>

                  </select>
                </div>

                <div class="input-box">
                  <select class="w-full" name="city_id" id="city" required>
                    <option class="text-gray-300" disabled selected>Select city</option>

                    <?php
                    $sql = "SELECT * from regions;";
                    $regions = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($regions) > 0) :
                      while ($row = mysqli_fetch_assoc($regions)) :
                        $region_id = $row['id'];
                        $region_name = $row['name'];
                    ?>
                        <optgroup label="<?= $region_name ?>">
                          <?php
                          $sql = "SELECT * from cities where region_id = $region_id;";
                          $cities = mysqli_query($conn, $sql);

                          while ($city = mysqli_fetch_assoc($cities)) :
                            $city_id = $city['id'];
                            $city_name = $city['name'];
                          ?>
                            <option class="bg-gray-100" value="<?= $city_id ?>"> <?= $city_name ?> </option>
                          <?php
                          endwhile;
                          ?>
                        </optgroup>
                    <?php
                      endwhile;
                    endif;
                    mysqli_close($conn);
                    ?>

                  </select>
                </div>

                <div id="username-field" class="hidden">
                  <i class="fas fa-user"></i>
                  <input type="text" name="username" placeholder="Enter username">
                </div>

                <div class="button input-box">
                  <input type="submit" name="register" value="Sing up">
                </div>

                <div class="text sign-up-text">Already have an account?
                  <label for="flip">
                    Login now
                  </label>
                </div>

              </div>
            </form>

          </div>

        </div>
      </div>
    </div>
  </div>


  <script src="../assets/javascript/jquery.js"></script>
  <script>
    // 1) get URL and switch between sign up and login
    // 2) get region cities async
    // 3) switch radio
    $(document).ready(function() {
      $("#sign-up-form").change(() => {
        if (document.getElementById("radio-freelancer").checked) {
          document.getElementById("username-field").classList.remove("d-none");
        }
      })
    })
  </script>

</body>

</html>