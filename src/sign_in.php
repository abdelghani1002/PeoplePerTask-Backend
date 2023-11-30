<?php
$index_nav = "../";
$path = "./";
?>
<!doctype html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="../assets/dist/output.css" rel="stylesheet">
  <link rel="stylesheet" href="../assets/css/input.css">
  <title>Log in</title>
</head>

<body>
  <?php include '../templates/header.php'; ?>

  <div class="form">
    <ul class="tab-group">
      <li class="tab active">
        <a class="no-underline transition duration-500 ease-in-out  bg-teal-500 hover:bg-teal-500" href="#signup">Sign
          Up</a>
      </li>
      <li class="tab ">
        <a class="no-underline  transition duration-500 ease-in-out  bg-teal-500 hover:bg-teal-500" href="#login">Log
          In</a>
      </li>
    </ul>

    <div class="tab-content">
      <div id="signup">
        <h1 class="text-center text-gray-400 font-light mb-10 text-2xl font-sans">
          Sign Up for Free</h1>

        <form action="/" method="post">
          <div class=" flex top-row relative">
            <div class=" relative mb-10 w-1/2 mr-4">
              <label class="block">
                First Name<span class="text-teal-500 ml-2">*</span>
              </label>
              <input class="text-black block w-full h-fit py-1 px-2 border border-gray-300 rounded-none transition duration-250 bg-white" type="text" required autocomplete="off" />
            </div>
            <div class="relative mb-10 w-1/2">
              <label class="block">
                Last Name<span class="text-teal-500 ml-2">*</span>
              </label>
              <input class="text-black block w-full h-fit py-1 px-2 border border-gray-300 rounded-none transition duration-250 bg-white" type="text" required autocomplete="off" />
            </div>
          </div>


          <div class="relative mb-10">
            <label>
              Email Address<span class="text-teal-500 ml-2">*</span>
            </label>
            <input class="text-black block w-full h-fit py-1 px-2 border border-gray-300 rounded-none transition duration-250 bg-white" type="email" required autocomplete="off" />
          </div>

          <div class="relative mb-10">
            <label>
              Set A Password<span class="text-teal-500 ml-2">*</span>
            </label>
            <input class="text-black block w-full h-fit py-1 px-2 border border-gray-300 rounded-none transition duration-250 bg-white" type="text" required autocomplete="off" />
          </div>
          <button type="submit" class="w-full bg-teal-500 hover:bg-custom-green text-white border-0 rounded-none focus:outline-none uppercase tracking-wide font-semibold py-4 px-0 text-base transition-all duration-500 ease-in-out">
            Join
          </button>

        </form>

      </div>

      <div id="login">
        <h1 class="text-center text-gray-400 font-light mb-10 text-2xl font-sans">
          Welcome Back!</h1>

        <form action="/" method="post">

          <div class="relative mb-10">
            <label>
              Email Address<span class="text-teal-500 ml-2">*</span>
            </label>
            <input class="text-black block w-full h-fit py-1 px-2 border border-gray-300 rounded-none transition duration-250 bg-white" type="email" required autocomplete="off" />
          </div>

          <div class="relative mb-10">
            <label>
              Password<span class="text-teal-500 ml-2">*</span>
            </label>
            <input class="text-black block w-full h-fit py-1 px-2 border border-gray-300 rounded-none transition duration-250 bg-white" type="password" required autocomplete="off" />
          </div>
          <button type="submit" class="w-full bg-teal-500 text-white border-0 rounded-none hover:bg-custom-green focus:outline-none uppercase tracking-wide font-semibold py-4 px-0 text-base transition-all duration-500 ease-in-out">
            Log in
          </button>

        </form>

      </div>
    </div>

  </div>

  <?php include '../templates/footer.php'; ?>

  <script src="../assets/javascript/form.js"></script>
  <script src="../assets/javascript/jquery.js"></script>
  <script src="../assets/javascript/script.js"></script>
</body>

</html>