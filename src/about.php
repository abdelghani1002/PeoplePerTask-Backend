<?php
$index_nav = "../";
$path = "./";
?>
<!DOCTYPE html>
<html>

<head>
  <title>about</title>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="../assets/dist/output.css" rel="stylesheet" />
</head>

<body>
  <?php
  include '../templates/header.php';
  ?>
  <!-- start about section -->
  <section class="grid grid-cols-1 md:grid-cols-2">
    <div class="w-full px-12 py-10 ">
      <h1 class="text-7xl font-sans ">About us</h1>
      <p class="text-lg font-sans py-8 xl:text-2xl ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque ut similique, libero, ad impedit porro perferendis quasi nemo eum placeat iusto repellendus beatae quis quia minus officiis, blanditiis sapiente</p>
      <button class="bg-custom-green rounded-md p-4 pl-12 pr-12 ">Read More</button>
    </div>
    <div class=" mt-16 pr-10 ">
      <img src="../assets/images/about.svg" alt="image des collaborateurs">
    </div>
  </section>
  <!-- end about section -->

  <!-- start FAQ section -->
  <section>
    <div class="bg-slate-100 py-20">
      <h2 class="text-center text-6xl">FAQ</h2>
      <div class="flex bg-white rounded-md drop-shadow-lg justify-between mt-10 mx-10 ">
        <h2 class=" pl-7 pt-3 ">A propos de l'entreprise</h2>
        <button class=" btn_faq bg-custom-green rounded-md h-12 w-16 "><svg width="15" height="10" viewBox="0 0 42 25" class="ml-6 ">
            <path d="M3 3L21 21L39 3" stroke-width="7" stroke-linecap="round" />
          </svg>
        </button>

      </div>
      <div class=" answer hidden  bg-white rounded-md drop-shadow-lg justify-between mt-1 mx-10">
        <p class="p-9 text-lg">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora cupiditate corporis ad minima expedita? Consequatur velit dolore deleniti quas voluptatibus tempore voluptatum alias unde, explicabo earum quae repudiandae, ullam iure?</p>
      </div>
      <div class="flex bg-white rounded-md drop-shadow-lg justify-between mt-10 mx-10">
        <h2 class=" pl-7 pt-3 ">A propos de l'entreprise</h2>
        <button class=" btn_faq bg-custom-green rounded-md h-12 w-16 "><svg width="15" height="10" viewBox="0 0 42 25" class="ml-6 ">
            <path d="M3 3L21 21L39 3" stroke-width="7" stroke-linecap="round" />
          </svg>
        </button>

      </div>
      <div class="hidden answer  bg-white rounded-md drop-shadow-lg justify-between mt-1 mx-10">
        <p class="p-9 text-lg">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora cupiditate corporis ad minima expedita? Consequatur velit dolore deleniti quas voluptatibus tempore voluptatum alias unde, explicabo earum quae repudiandae, ullam iure?</p>
      </div>
      <div class="flex bg-white rounded-md drop-shadow-lg justify-between mt-10 mx-10">
        <h2 class=" pl-7  pt-3 ">A propos de l'entreprise</h2>
        <button class=" btn_faq bg-custom-green rounded-md h-12 w-16 "><svg width="15" height="10" viewBox="0 0 42 25" class="ml-6 ">
            <path d="M3 3L21 21L39 3" stroke-width="7" stroke-linecap="round" />
          </svg>
        </button>

      </div>
      <div class="hidden answer bg-white rounded-md drop-shadow-lg justify-between mt-1 mx-10">
        <p class="p-9 text-lg">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora cupiditate corporis ad minima expedita? Consequatur velit dolore deleniti quas voluptatibus tempore voluptatum alias unde, explicabo earum quae repudiandae, ullam iure?</p>
      </div>
    </div>
  </section>
  <!-- end FAQ section -->

  <?php
  include '../templates/footer.php';
  ?>
  <script src="../assets/javascript/jquery.js"></script>
  <script src="../assets/javascript/script.js"></script>
  <script src="../assets/javascript/about.js"></script>
</body>

</html>