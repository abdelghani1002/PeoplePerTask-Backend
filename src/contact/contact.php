<?php
$index_nav = "../";
$path = "./";
?>

<!doctype html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="../../assets/dist/output.css" rel="stylesheet">
  <title>Contact</title>
</head>

<body>

  <?php
  include '../../templates/header.php';
  ?>


  <div class="grid grid-cols-1 mb-6 md:grid-cols-2 ">
    <div class="flex flex-col  items-center">
      <h1 class="font-serif font-semibold text-4xl md:text-[45px] text-black text-center mt-10">
        Contact US
      </h1>

      <form class="flex flex-col justify-start w-9/12 sm:9/12 md:w-11/12 lg:w-9/12"
            action="./send.php" method="POST">
        <div class="w-full my-10">
          <div class="mt-2 flex flex-col">
            <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Name</label>  
            <input id="name" name="name" type="text" autocomplete="name" placeholder=" Name"
              class=" bg-gray-200 w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-white  sm:text-sm sm:leading-6">
          </div>
        </div>

        <div class="w-full mb-10">
          <div class="mt-2 flex flex-col">
            <label for="name" class="text-sm font-medium leading-6 text-gray-900">Name</label>  
            <input id="phone" name="phone" type="text" autocomplete="phone" placeholder=" Phone Number"
              class="  bg-gray-200  w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-white  sm:text-sm sm:leading-6">
          </div>
        </div>

        <div class="w-full mb-10">
          <div class="mt-2 flex flex-col">
            <label for="email" class="text-sm font-medium leading-6 text-gray-900">Email address</label>  
            <input id="email" name="email" type="mail" autocomplete="email" placeholder=" Email"
              class=" bg-gray-200 w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-white  sm:text-sm sm:leading-6">
          </div>
        </div>

        <div class="w-full mb-10">
          <div class="mt-2 flex flex-col">
            <label for="email" class="text-sm font-medium leading-6 text-gray-900">Email address</label>  
            <input id="message" name="message" type="message" autocomplete="message" placeholder="Message"
              class="bg-gray-200 w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-white sm:text-sm sm:leading-6 h-44">
          </div>
        </div>

        <button
          class=" mx-auto h-11 w-40 inline-block rounded px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] bg-green-500">
          Send
        </button>

      </form>

    </div>

    <div class="flex flex-col justify-center items-center ">
      <div class="w-full h-full hidden  md:block lg:block xl:block">
        <img src="../../assets/images/undraw_creation_re_d1mi.svg" alt="image" class=" h-3/5 mt-32">
      </div>
    </div>
  </div>

  <?php
  include '../../templates/footer.php';
  ?>

  <script src="../../assets/javascript/jquery.js"></script>
  <script src="../../assets/javascript/script.js"></script>
</body>

</html>

unsn ssjt lanj fegs
unsn ssjt lanj fegs
unsn ssjt lanj fegs