<?php
require "./src/home_functions.php";
$index_nav = "./";
$path = "./src/";
?>

<!doctype html>
<html lang="en" class="scroll-smooth">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./assets/dist/output.css">
  <link rel="stylesheet" href="./assets/dist/swiper-bundle.min.css">
  <link rel="favicon" href="./favicon.ico">
  <title>Home</title>
</head>

<body class="overflow-x-hidden bg-slate-100 dark:bg-slate-900">

  <?php
  include './templates/header.php';
  ?>

  <!-- Hero section -->
  <section class="hero-section body-font relative p-4 md:py-3 md:px-8 lg:px-10">
    <!-- Sections Navbar -->
    <div id="sectionsNavbar" class="absolute w-2/3 md:w-1/2 lg:w-1/4 transition-all z-50 duration-500 -translate-x-full -ml-2 md:-ml-5 lg:-ml-8">
      <button class="rotate-90 absolute right-0 -mr-11 bg-slate-100 dark:bg-slate-700 p-3 drop-shadow-lg rounded-md">
        <svg class="text-center" xmlns="http://www.w3.org/2000/svg" width="10" height="15" viewBox="0 0 10 15" fill="none">
          <path class="self-center" fill-rule="evenodd" clip-rule="evenodd" d="M8.88069 6.10123C9.16159 6.38248 9.31937 6.76373 9.31937 7.16123C9.31937 7.55873 9.16159 7.93998 8.88069 8.22123L3.22469 13.8792C2.9433 14.1605 2.56169 14.3185 2.16384 14.3184C1.76598 14.3183 1.38445 14.1601 1.10319 13.8787C0.821928 13.5973 0.663969 13.2157 0.664063 12.8179C0.664156 12.42 0.822295 12.0385 1.10369 11.7572L5.69969 7.16123L1.10369 2.56523C0.830316 2.28246 0.678944 1.90362 0.682175 1.51033C0.685406 1.11703 0.842981 0.740732 1.12096 0.462488C1.39895 0.184244 1.77509 0.0263128 2.16839 0.0227108C2.56168 0.0191088 2.94066 0.170125 3.22369 0.443232L8.88169 6.10023L8.88069 6.10123Z" fill="#05DB0E" />
        </svg>
      </button>
      <ul class="flex flex-col rounded-xl shadow-custom-green drop-shadow-xl bg-slate-100 bg-opacity-95 dark:bg-slate-700 dark:text-gray-200 p-3">
        <li class="scrollDownToSection">
          <a href="#categories" class="flex flex-row justify-between items-center py-2 hover:bg-slate-200 dark:hover:bg-slate-600 hover:bg-opacity-40">
            <p class="mr-auto text-sm md:text-lg font-semibold">Most Pupular Categories</p>
            <span>
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 9 9" fill="none">
                <g id="teenyicons:down-solid" clip-path="url(#clip0_189_1042)">
                  <path id="Vector" d="M4.5 7.20039L0 2.40039H9L4.5 7.20039Z" fill="#05C50D" />
                </g>
                <defs>
                  <clipPath>
                    <rect width="9" height="9" fill="white" />
                  </clipPath>
                </defs>
              </svg>
            </span>
          </a>
        </li>
        <hr class="border-b-custom-green border">

        <li class="scrollDownToSection">
          <a href="#freelancers" class="flex flex-row justify-between items-center py-2 hover:bg-slate-200 dark:hover:bg-slate-600 hover:bg-opacity-40">
            <p class="mr-auto text-sm md:text-lg font-semibold">Most Pupular Freelancers</p>
            <span>
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 9 9" fill="none">
                <g id="teenyicons:down-solid" clip-path="url(#clip0_189_1042)">
                  <path id="Vector" d="M4.5 7.20039L0 2.40039H9L4.5 7.20039Z" fill="#05C50D" />
                </g>
                <defs>
                  <clipPath>
                    <rect width="9" height="9" fill="white" />
                  </clipPath>
                </defs>
              </svg>
            </span>
          </a>
        </li>
        <hr class="border-b-custom-green border">

        <li class="scrollDownToSection">
          <a href="#offers" class="flex flex-row justify-between items-center py-2 hover:bg-slate-200 dark:hover:bg-slate-600 hover:bg-opacity-40">
            <p class="mr-auto text-sm md:text-lg font-semibold">Trending Offres</p>
            <span>
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 9 9" fill="none">
                <g id="teenyicons:down-solid" clip-path="url(#clip0_189_1042)">
                  <path id="Vector" d="M4.5 7.20039L0 2.40039H9L4.5 7.20039Z" fill="#05C50D" />
                </g>
                <defs>
                  <clipPath>
                    <rect width="9" height="9" fill="white" />
                  </clipPath>
                </defs>
              </svg>
            </span>
          </a>
        </li>
        <hr class="border-b-custom-green border">

        <li class="scrollDownToSection">
          <a href="#testimonials" class="flex flex-row justify-between items-center py-2 hover:bg-slate-200 dark:hover:bg-slate-600 hover:bg-opacity-40">
            <p class="mr-auto text-sm md:text-lg font-semibold">Testimonials</p>
            <span>
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 9 9" fill="none">
                <g id="teenyicons:down-solid" clip-path="url(#clip0_189_1042)">
                  <path id="Vector" d="M4.5 7.20039L0 2.40039H9L4.5 7.20039Z" fill="#05C50D" />
                </g>
                <defs>
                  <clipPath>
                    <rect width="9" height="9" fill="white" />
                  </clipPath>
                </defs>
              </svg>
            </span>
          </a>
        </li>
        <hr class="border-b-custom-green border">
      </ul>
    </div>
    <!-- end Sections Navbar -->

    <!-- container -->
    <div class="mx-auto flex px-1 lg:px-8 md:flex-row md:justify-evenly flex-col-reverse items-center h-fit">
      <div class=" md:w-1/2 flex flex-col md:items-start md:text-left items-center text-center py-12">
        <p class="title-font text-5xl md:text-6xl mb-6 font-medium lg:w-4/5 text-custom-green-">Make bright
          ideas happen</p>
        <p class="mb-8 leading-relaxed text-lg lg:w-4/6 dark:text-gray-300">Access global talent on the freelancer
          website trusted
          by over 1 million businesses worldwide.</p>
        <form class="flex w-full md:justify-start justify-center items-end">
          <div class="relative w-2/3 md:w-full lg:w-full xl:w-2/3 p-0">
            <input type="text" id="hero-field" name="hero-field" placeholder="Try 'web development' " class="search-input h-14 w-full drop-shadow-md bg-white rounded-l-lg border bg-opacity-50 border-custom-green- focus:bg-transparent dark:bg-transparent text-base outline-none text-gray-500 py-2 px-6 leading-8 transition-colors duration-200 ease-in-out">
          </div>
          <button class="searchBtn h-14 w-1/8 inline-flex text-white bg-custom-green- border-0 py-2 px-6 focus:outline-none hover:opacity-90 rounded-r-lg text-lg items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
              <path d="M17.707 16.293L20.707 19.293C20.8807 19.4726 20.9877 19.7177 20.9877 19.9877C20.9877 20.54 20.54 20.9877 19.9877 20.9877C19.7177 20.9877 19.4726 20.8807 19.2927 20.7067L19.293 20.707L16.293 17.707C16.1193 17.5274 16.0123 17.2823 16.0123 17.0123C16.0123 16.46 16.46 16.0123 17.0123 16.0123C17.2823 16.0123 17.5273 16.1193 17.7073 16.2933L17.707 16.293ZM9.99999 1.99999C14.4183 1.99999 18 5.58171 18 9.99998C18 14.4183 14.4183 18 9.99999 18C5.58172 18 2 14.4183 2 9.99998C2 5.58171 5.58172 1.99999 9.99999 1.99999ZM9.99999 4.00001C6.68628 4.00001 3.99999 6.6863 3.99999 10C3.99999 13.3137 6.68628 16 9.99999 16C13.3137 16 16 13.3137 16 10C16 6.6863 13.3137 4.00001 9.99999 4.00001Z" fill="white" />
            </svg>
          </button>
        </form>
        <div class="flex flex-row flex-wrap my-4 w-4/5 ">
          <span class="text-xs self-center text-gray-400 mr-2">Popular skills:</span>
          <a href="#" class="px-1.5 py-1 m-0.5 text-xs text-gray-600 bg-gray-200 rounded-sm dark:bg-slate-600 dark:text-gray-300">web
            design</a>
          <a href="#" class="px-1.5 py-1 m-0.5 text-xs text-gray-600 bg-gray-200 rounded-sm dark:bg-slate-600 dark:text-gray-300">ux/ui
            design</a>
          <a href="#" class="px-1.5 py-1 m-0.5 text-xs text-gray-600 bg-gray-200 rounded-sm dark:bg-slate-600 dark:text-gray-300">android
            app development</a>
          <a href="#" class="px-1.5 py-1 m-0.5 text-xs text-gray-600 bg-gray-200 rounded-sm dark:bg-slate-600 dark:text-gray-300">responsive
            design</a>
        </div>
      </div>
      <div class="relative md:w-5/12 lg:max-w-lg lg:w-full w-5/6 lg:-mt-14 place-self-center">
        <ul>
          <li id="slide1" class="slide hidden active-slide">
            <div class="relative">
              <img class="object-cover rounded object-center" alt="hero" src="./assets/images/sliders/slide1/heroNada.png">

              <div class="p-0">
                <div class="absolute bottom-0 -right-5 lg:-right-10 mb-6 bg-white bg-opacity-80 p-2 lg:p-6 w-2/5 lg:w-1/3 flex flex-col text-center items-center rounded-lg drop-shadow-lg dark:bg-slate-600">
                  <div class="w-12 h-12 md:w-16 md:h-16 lg:w-20 lg:h-20 inline-flex items-center justify-center mb-2 rounded-full bg-indigo-100 text-indigo-500 flex-shrink-0">
                    <img class="object-cover rounded-full object-center" src="./assets/images/sliders/slide1/cardNada.jpg" alt="card Photo">
                  </div>
                  <div class="flex-grow">
                    <p class="text-lg font-semibold text-center px-4 leading-4 dark:text-slate-200">Logo Designer</p>
                    <p class="text-xs text-slate-600 dark:text-slate-300 py-2">NADA ELMAHFOUDI</p>
                    <div class="text-xs justify-center items-center flex flex-row ">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="13" viewBox="0 0 16 13" fill="none">
                        <path d="M7.02609 0.300781L5.28709 4.77278H0.871094L4.46209 7.50078L3.22209 12.0088L7.02609 9.45978L10.8311 12.0088L9.59109 7.50078L13.1811 4.77278H8.76609L7.02609 0.300781Z" fill="#FFB331" />
                      </svg>
                      <p class="text-gray-600 dark:text-gray-200"><strong>5.0 </strong>(117)</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </li>

          <li id="slide2" class="slide hidden">
            <div class="relative">
              <img class="object-cover rounded object-center" alt="hero" src="./assets/images/sliders/slide2/heroMeissal.png">

              <div class="p-0">
                <div class="absolute bottom-0 -right-5 lg:-right-10 mb-6 bg-white bg-opacity-80 p-2 lg:p-6 w-2/5 lg:w-1/3 flex flex-col text-center items-center rounded-lg drop-shadow-lg dark:bg-slate-600">
                  <div class="w-12 h-12 md:w-16 md:h-16 lg:w-20 lg:h-20 inline-flex items-center justify-center mb-2 rounded-full bg-indigo-100 text-indigo-500 flex-shrink-0">
                    <img class="object-cover rounded-full object-center" src="./assets/images/sliders/slide2/cardMiessal.jpg" alt="card Photo">
                  </div>
                  <div class="flex-grow">
                    <p class="text-lg font-semibold text-center px-4 leading-4 dark:text-slate-200">Web Developer</p>
                    <p class="text-xs text-slate-600 dark:text-slate-300 py-2">Miessal Mohamed</p>
                    <div class="text-xs justify-center items-center flex flex-row ">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="13" viewBox="0 0 16 13" fill="none">
                        <path d="M7.02609 0.300781L5.28709 4.77278H0.871094L4.46209 7.50078L3.22209 12.0088L7.02609 9.45978L10.8311 12.0088L9.59109 7.50078L13.1811 4.77278H8.76609L7.02609 0.300781Z" fill="#FFB331" />
                      </svg>
                      <p class="text-gray-600 dark:text-gray-200"><strong>5.0 </strong>(121)</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </li>

          <li id="slide3" class="slide hidden">
            <div class="relative">
              <img class="object-cover rounded object-center" alt="hero" src="./assets/images/sliders/slide3/heroYassine.png">

              <div class="p-0">
                <div class="absolute bottom-0 -right-5 lg:-right-10 mb-6 bg-white bg-opacity-80 p-2 lg:p-6 w-2/5 lg:w-1/3 flex flex-col text-center items-center rounded-lg drop-shadow-lg dark:bg-slate-600">
                  <div class="w-12 h-12 md:w-16 md:h-16 lg:w-20 lg:h-20 inline-flex items-center justify-center mb-2 rounded-full bg-indigo-100 text-indigo-500 flex-shrink-0">
                    <img class="object-cover rounded-full object-center" src="./assets/images/sliders/slide3/cardYassine.jpg" alt="card Photo">
                  </div>
                  <div class="flex-grow">
                    <p class="text-lg font-semibold text-center lg:px-2 leading-4 dark:text-slate-200">E-commerce Expert
                    </p>
                    <p class="text-xs text-slate-600 dark:text-slate-300 py-2">Elouissi Yassine</p>
                    <div class="text-xs justify-center items-center flex flex-row ">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="13" viewBox="0 0 16 13" fill="none">
                        <path d="M7.02609 0.300781L5.28709 4.77278H0.871094L4.46209 7.50078L3.22209 12.0088L7.02609 9.45978L10.8311 12.0088L9.59109 7.50078L13.1811 4.77278H8.76609L7.02609 0.300781Z" fill="#FFB331" />
                      </svg>
                      <p class="text-gray-600 dark:text-gray-200"><strong>5.0 </strong>(117)</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </li>

          <li id="slide4" class="slide hidden">
            <div class="relative">
              <img class="object-cover rounded object-center" alt="hero" src="./assets/images/sliders/slide4/heroAbdelghani.png">

              <div class="p-0">
                <div class="absolute bottom-0 -right-5 lg:-right-10 mb-6 bg-white bg-opacity-80 p-2 lg:p-6 w-2/5 lg:w-1/3 flex flex-col text-center items-center rounded-lg drop-shadow-lg dark:bg-slate-600">
                  <div class="w-12 h-12 md:w-16 md:h-16 lg:w-20 lg:h-20 inline-flex items-center justify-center mb-2 rounded-full bg-indigo-100 text-indigo-500 flex-shrink-0">
                    <img class="object-cover rounded-full object-center" src="./assets/images/sliders/slide4/cardAbdelghani.jpg" alt="card Photo">
                  </div>
                  <div class="flex-grow">
                    <p class="text-lg font-semibold text-center px-4 leading-4 dark:text-slate-200">Graphic Designer</p>
                    <p class="text-xs text-slate-600 dark:text-slate-300 py-2">Ait Abdelghani</p>
                    <div class="text-xs justify-center items-center flex flex-row ">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="13" viewBox="0 0 16 13" fill="none">
                        <path d="M7.02609 0.300781L5.28709 4.77278H0.871094L4.46209 7.50078L3.22209 12.0088L7.02609 9.45978L10.8311 12.0088L9.59109 7.50078L13.1811 4.77278H8.76609L7.02609 0.300781Z" fill="#FFB331" />
                      </svg>
                      <p class="text-gray-600 dark:text-gray-200"><strong>5.0 </strong>(117)</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </li>

          <li id="slide5" class="slide hidden">
            <div class="relative">
              <img class="object-cover rounded object-center" alt="hero" src="./assets/images/sliders/slide5/heroTergui.png">

              <div class="p-0">
                <div class="absolute bottom-0 -right-5 lg:-right-10 mb-6 bg-white bg-opacity-80 p-2 lg:p-6 w-2/5 lg:w-1/3 flex flex-col text-center items-center rounded-lg drop-shadow-lg dark:bg-slate-600">
                  <div class="w-12 h-12 md:w-16 md:h-16 lg:w-20 lg:h-20 inline-flex items-center justify-center mb-2 rounded-full bg-indigo-100 text-indigo-500 flex-shrink-0">
                    <img class="object-cover rounded-full object-center" src="./assets/images/sliders/slide5/cardTergui.jpg" alt="card Photo">
                  </div>
                  <div class="flex-grow">
                    <p class="text-lg font-semibold text-center px-4 leading-4 dark:text-slate-200">Interface Designer
                    </p>
                    <p class="text-xs text-slate-600 dark:text-slate-300 py-2">Tergui Mohamed</p>
                    <div class="text-xs justify-center items-center flex flex-row ">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="13" viewBox="0 0 16 13" fill="none">
                        <path d="M7.02609 0.300781L5.28709 4.77278H0.871094L4.46209 7.50078L3.22209 12.0088L7.02609 9.45978L10.8311 12.0088L9.59109 7.50078L13.1811 4.77278H8.76609L7.02609 0.300781Z" fill="#FFB331" />
                      </svg>
                      <p class="text-gray-600 dark:text-gray-200"><strong>5.0 </strong>(117)</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </li>
        </ul>

        <ul class="mt-5 text-center flex flex-row justify-center">
          <li class="slideBtn hover:bg-custom-green- hover:cursor-pointer rounded-full w-1.5 h-1.5 mx-2 bg-custom-green-">
            <a href="#slide1"></a>
          </li>

          <li class="slideBtn hover:bg-amber-300 hover:cursor-pointer rounded-full w-1.5 h-1.5 mx-2 bg-gray-300">
            <a href="#slide2" class="bg-amber-400 border-amber-400 text-amber-400"></a>
          </li>

          <li class="slideBtn hover:bg-purple-400 hover:cursor-pointer rounded-full w-1.5 h-1.5 mx-2 bg-gray-300">
            <a href="#slide3" class="bg-fuchsia-700 border-fuchsia-700 text-fuchsia-700"></a>
          </li>

          <li class="slideBtn hover:bg-violet-900 hover:cursor-pointer rounded-full w-1.5 h-1.5 mx-2 bg-gray-300">
            <a href="#slide4" class="bg-violet-900 border-violet-900 text-violet-900"></a>
          </li>

          <li class="slideBtn hover:bg-red-700 hover:cursor-pointer rounded-full w-1.5 h-1.5 mx-2 bg-gray-300">
            <a href="#slide5" class="bg-red-800 border-red-800 text-red-800"></a>
          </li>
        </ul>

      </div>
    </div>
    <!-- end container -->
  </section>
  <!-- end Hero section -->

  <!-- Categories section -->
  <section id="categories" class="categories-section w-full bg-white p-4 md:py-3 md:px-8 lg:px-10 dark:bg-slate-800">
    <div class="flex flex-col gap-y-5">
      <div class="flex flex-row justify-between w-full mb-3 items-end font-medium">
        <h2 class="text-xl md:text-2xl lg:text-3xl font-semibold w-1/2 dark:text-gray-300">Most Popular Categories</h2>
        <a href="#" class="text-xs md:text-lg lg:text-xl text-blue-500 flex flex-row items-center md:gap-x-2 p-1 rounded-lg hover:bg-sky-50 dark:hover:bg-slate-600">ALL
          CATEGORIES
          <span class="m-0">
            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="12" viewBox="0 0 12 10" fill="none">
              <path d="M7.388 0.528666L11.388 4.52867C11.5086 4.64931 11.5832 4.81595 11.5832 4.99999C11.5832 5.18404 11.5086 5.3507 11.388 5.47132L7.388 9.47132C7.26823 9.5871 7.10487 9.65846 6.92486 9.65846C6.55667 9.65846 6.25819 9.35998 6.25819 8.99179C6.25819 8.81178 6.32955 8.64842 6.44552 8.52846L9.30666 5.66665H1.58333C1.21514 5.66665 0.916656 5.36817 0.916656 4.99998C0.916656 4.63179 1.21514 4.33331 1.58333 4.33331H9.30666L6.44533 1.47131C6.31977 1.34992 6.2418 1.17995 6.2418 0.991776C6.2418 0.623588 6.54028 0.325104 6.90847 0.325104C7.09664 0.325104 7.26678 0.403276 7.388 0.528666Z" fill="#34A8CA" />
            </svg>
          </span>
        </a>
      </div>

      <div class="carousal h-72">
        <ul class="h-full flex flex-row gap-3 text-gray-50 overflow-hidden">
          <?php
          $res = get_top_categories();
          if (mysqli_num_rows($res) > 0) {
            while ($row = mysqli_fetch_assoc($res)) :
              $cat_photo = $row['photo_src'];
              $cat_name = $row['name'];
              $cat_slogan = $row['slogan'];
          ?>
              <li class="relative bg-no-repeat bg-cover bg-center category-card cursor-pointer w-3/4 md:w-2/5 lg:w-1/6 shrink-0 rounded-lg overflow-hidden">
                <img class="absolute z-1 w-full h-full object-cover rounded object-center" src="<?= $cat_photo ?>" alt="<?= $cat_name ?>">
                <div class="absolute z-2 w-full h-full p-3">
                  <a href="#" class="h-fit">
                    <p class="text-md text-gray-00"><?= $cat_slogan ?></p>
                    <h3 class="text-lg font-bold"><?= $cat_name ?></h3>
                  </a>
                </div>
              </li>
            <?php
            endwhile;
          } else { /* if there is no category */
            ?>
            <div class="w-full h-full flex flex-row justify-center items-center">There is no category available..</div>
          <?php
          }

          ?>

        </ul>
      </div>

      <div class="flex flex-row justify-center">
        <div class="categories-btns">
          <button class="scroll-right p-2 md:p-3 border-2 border-r border-gray-300 m-0 disabled:border-gray-100 hover:bg-gray-100 disabled:hover:bg-white dark:disabled:border-gray-800 dark:disabled:bg-transparent" disabled>
            <svg class="rotate-180" xmlns="http://www.w3.org/2000/svg" width="15" height="12" viewBox="0 0 12 10" fill="none">
              <path d="M7.388 0.528666L11.388 4.52867C11.5086 4.64931 11.5832 4.81595 11.5832 4.99999C11.5832 5.18404 11.5086 5.3507 11.388 5.47132L7.388 9.47132C7.26823 9.5871 7.10487 9.65846 6.92486 9.65846C6.55667 9.65846 6.25819 9.35998 6.25819 8.99179C6.25819 8.81178 6.32955 8.64842 6.44552 8.52846L9.30666 5.66665H1.58333C1.21514 5.66665 0.916656 5.36817 0.916656 4.99998C0.916656 4.63179 1.21514 4.33331 1.58333 4.33331H9.30666L6.44533 1.47131C6.31977 1.34992 6.2418 1.17995 6.2418 0.991776C6.2418 0.623588 6.54028 0.325104 6.90847 0.325104C7.09664 0.325104 7.26678 0.403276 7.388 0.528666Z" fill="#5B6678" />
            </svg>
          </button>
          <button class="scroll-left p-2 md:p-3 border-2 border-l border-gray-300 m-0 hover:bg-gray-100 disabled:hover:bg-white disabled:border-gray-100 dark:disabled:border-gray-800 dark:disabled:bg-transparent">
            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="12" viewBox="0 0 12 10" fill="none">
              <path d="M7.388 0.528666L11.388 4.52867C11.5086 4.64931 11.5832 4.81595 11.5832 4.99999C11.5832 5.18404 11.5086 5.3507 11.388 5.47132L7.388 9.47132C7.26823 9.5871 7.10487 9.65846 6.92486 9.65846C6.55667 9.65846 6.25819 9.35998 6.25819 8.99179C6.25819 8.81178 6.32955 8.64842 6.44552 8.52846L9.30666 5.66665H1.58333C1.21514 5.66665 0.916656 5.36817 0.916656 4.99998C0.916656 4.63179 1.21514 4.33331 1.58333 4.33331H9.30666L6.44533 1.47131C6.31977 1.34992 6.2418 1.17995 6.2418 0.991776C6.2418 0.623588 6.54028 0.325104 6.90847 0.325104C7.09664 0.325104 7.26678 0.403276 7.388 0.528666Z" fill="#5B6678" />
            </svg>
          </button>
        </div>
      </div>
    </div>
  </section>
  <!-- end Categories section -->

  <!-- Freelancers section -->
  <section id="freelancers" class="freelancers-section w-full p-4 md:py-3 md:px-8 lg:px-10">
    <div class="flex flex-col gap-y-4">
      <div class="flex flex-row justify-between w-full mb-3 items-end font-medium">
        <div class="w-1/2">
          <h2 class="text-xl md:text-2xl lg:text-3xl font-semibold dark:text-gray-300">Expert Freelancers</h2>
          <p class="text-sm text-gray-400">Search and contact freelancers directly with no obligation</p>
        </div>
        <a href="#" class="text-xs md:text-lg lg:text-xl text-blue-500 flex flex-row items-center md:gap-x-2 p-1 rounded-lg hover:bg-sky-50 dark:hover:bg-slate-600">ALL
          FREELANCERS
          <span class="">
            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="12" viewBox="0 0 12 10" fill="none">
              <path d="M7.388 0.528666L11.388 4.52867C11.5086 4.64931 11.5832 4.81595 11.5832 4.99999C11.5832 5.18404 11.5086 5.3507 11.388 5.47132L7.388 9.47132C7.26823 9.5871 7.10487 9.65846 6.92486 9.65846C6.55667 9.65846 6.25819 9.35998 6.25819 8.99179C6.25819 8.81178 6.32955 8.64842 6.44552 8.52846L9.30666 5.66665H1.58333C1.21514 5.66665 0.916656 5.36817 0.916656 4.99998C0.916656 4.63179 1.21514 4.33331 1.58333 4.33331H9.30666L6.44533 1.47131C6.31977 1.34992 6.2418 1.17995 6.2418 0.991776C6.2418 0.623588 6.54028 0.325104 6.90847 0.325104C7.09664 0.325104 7.26678 0.403276 7.388 0.528666Z" fill="#34A8CA" />
            </svg>
          </span>
        </a>
      </div>

      <div class="carousal h-full">
        <ul class="flex flex-row h-full py-3 overflow-hidden">

          <li class="freelancer-card h-full mr-2 border-2 dark:border-slate-700 drop-shadow-md mb-1 cursor-pointer w-3/4 md:w-2/5 lg:w-1/5 shrink-0 rounded-xl overflow-hidden ">
            <div class="px-3 py-1 bg-green-50 dark:bg-gray-700 h-72 flex flex-col justify-between">
              <div class="w-full mb-3">
                <img class="photo rounded-full w-7/12 m-auto" src="" alt="freelancerPhoto">
                <h3 class="title text-gray-600 dark:text-slate-200 text-center font-bold mt-1 mb-2"></h3>
                <p class="job text-justify text-md leading-4 text-gray-600 dark:text-slate-300"></p>
              </div>

              <div class="flex flex-row justify-start gap-2">
                <img class="country-flag w-6 h-6 rounded-full" src="" alt="countryFlag">
                <h4 class="country text-gray-500 dark:text-gray-50  font-normal"></h4>
              </div>

            </div>

            <div class="bg-gray-50 dark:bg-gray-800 p-3 w-full h-2/5 flex flex-col gap-1">
              <div class="flex flex-row items-center gap-0.5">
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="13" viewBox="0 0 14 13" fill="none">
                  <path d="M7.00656 0.800781L5.26756 5.27278H0.851562L4.44256 8.00078L3.20256 12.5088L7.00656 9.95978L10.8116 12.5088L9.57156 8.00078L13.1616 5.27278H8.74656L7.00656 0.800781Z" fill="#FFB331" />
                </svg>
                <strong class="rating dark:text-yellow-500"></strong>(<p class="reviews text-gray-700 dark:text-gray-100"></p>)
              </div>

              <div class="specialities flex flex-row flex-wrap my-1 text-gray-600 dark:text-slate-200">
                <a href="#" class="px-3 py-1 m-0.5 text-sm bg-gray-50 rounded-md border">
                  ...
                </a>
              </div>

              <div class="flex flex-row justify-between text-gray-600 dark:text-slate-400">
                <div>
                  <p class="projects"></p>
                </div>
                <div>
                  <p><strong class="price text-gray-900 dark:text-slate-300"></strong>/hr</p>
                </div>
              </div>
            </div>
          </li>

        </ul>
      </div>

      <div class="flex flex-row justify-center">
        <div class="freelancers-btns">
          <button class="scroll-right p-2 md:p-3 border-2 border-r border-gray-300 m-0 disabled:border-gray-100 hover:bg-gray-100 disabled:hover:bg-white dark:disabled:border-gray-700 dark:disabled:bg-transparent" disabled>
            <svg class="rotate-180" xmlns="http://www.w3.org/2000/svg" width="15" height="12" viewBox="0 0 12 10" fill="none">
              <path d="M7.388 0.528666L11.388 4.52867C11.5086 4.64931 11.5832 4.81595 11.5832 4.99999C11.5832 5.18404 11.5086 5.3507 11.388 5.47132L7.388 9.47132C7.26823 9.5871 7.10487 9.65846 6.92486 9.65846C6.55667 9.65846 6.25819 9.35998 6.25819 8.99179C6.25819 8.81178 6.32955 8.64842 6.44552 8.52846L9.30666 5.66665H1.58333C1.21514 5.66665 0.916656 5.36817 0.916656 4.99998C0.916656 4.63179 1.21514 4.33331 1.58333 4.33331H9.30666L6.44533 1.47131C6.31977 1.34992 6.2418 1.17995 6.2418 0.991776C6.2418 0.623588 6.54028 0.325104 6.90847 0.325104C7.09664 0.325104 7.26678 0.403276 7.388 0.528666Z" fill="#5B6678" />
            </svg>
          </button>
          <button class="scroll-left p-2 md:p-3 border-2 border-l border-gray-300 m-0 hover:bg-gray-100 disabled:hover:bg-white disabled:border-gray-100 dark:disabled:border-gray-700 dark:disabled:bg-transparent">
            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="12" viewBox="0 0 12 10" fill="none">
              <path d="M7.388 0.528666L11.388 4.52867C11.5086 4.64931 11.5832 4.81595 11.5832 4.99999C11.5832 5.18404 11.5086 5.3507 11.388 5.47132L7.388 9.47132C7.26823 9.5871 7.10487 9.65846 6.92486 9.65846C6.55667 9.65846 6.25819 9.35998 6.25819 8.99179C6.25819 8.81178 6.32955 8.64842 6.44552 8.52846L9.30666 5.66665H1.58333C1.21514 5.66665 0.916656 5.36817 0.916656 4.99998C0.916656 4.63179 1.21514 4.33331 1.58333 4.33331H9.30666L6.44533 1.47131C6.31977 1.34992 6.2418 1.17995 6.2418 0.991776C6.2418 0.623588 6.54028 0.325104 6.90847 0.325104C7.09664 0.325104 7.26678 0.403276 7.388 0.528666Z" fill="#5B6678" />
            </svg>
          </button>
        </div>
      </div>
    </div>
  </section>
  <!-- end Freelancers section -->

  <!-- Offers section -->
  <section id="offers" class="offers-section bg-white dark:bg-slate-800 w-full p-4 md:py-3 md:px-8 lg:px-10">
    <div class="flex flex-col gap-y-4">
      <div class="flex flex-row justify-between w-full mb-3 items-end font-medium">
        <div class="w-1/2">
          <h2 class="text-xl dark:text-gray-300 md:text-2xl lg:text-3xl font-semibold">Trending Offers</h2>
          <p class="text-sm text-gray-400">Browse and buy ready-prepared, fixed priced work from freelancers</p>
        </div>
        <a href="#" class="text-xs md:text-lg lg:text-xl text-blue-500 flex flex-row items-center md:gap-x-2 p-1 rounded-lg hover:bg-sky-50 dark:hover:bg-slate-600">ALL
          OFFERS
          <span class="">
            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="12" viewBox="0 0 12 10" fill="none">
              <path d="M7.388 0.528666L11.388 4.52867C11.5086 4.64931 11.5832 4.81595 11.5832 4.99999C11.5832 5.18404 11.5086 5.3507 11.388 5.47132L7.388 9.47132C7.26823 9.5871 7.10487 9.65846 6.92486 9.65846C6.55667 9.65846 6.25819 9.35998 6.25819 8.99179C6.25819 8.81178 6.32955 8.64842 6.44552 8.52846L9.30666 5.66665H1.58333C1.21514 5.66665 0.916656 5.36817 0.916656 4.99998C0.916656 4.63179 1.21514 4.33331 1.58333 4.33331H9.30666L6.44533 1.47131C6.31977 1.34992 6.2418 1.17995 6.2418 0.991776C6.2418 0.623588 6.54028 0.325104 6.90847 0.325104C7.09664 0.325104 7.26678 0.403276 7.388 0.528666Z" fill="#34A8CA" />
            </svg>
          </span>
        </a>
      </div>

      <div class="carousal h-full">
        <ul class="flex flex-row h-full py-3 overflow-hidden">
          <li class="offer-card h-full mr-4 drop-shadow-md cursor-pointer w-4/5 md:w-2/5 lg:w-72 shrink-0 rounded-xl overflow-hidden hover:drop-shadow-lg hover:border-b-2">
            <div class="photo bg-cover bg-no-repeat bg-center bg-green-50 h-48"></div>

            <div class="bg-gray-50 dark:bg-zinc-700 w-full min-h-56 flex flex-col justify-between">
              <div class="flex flex-row p-3 items-center gap-0.5">
                <h3 class="title text-gray-700 dark:text-slate-200 font-semibold text-lg"></h3>
              </div>
              <div class="flex flex-col gap-y-3">
                <div class="specialities flex flex-row flex-wrap my-1 text-gray-600 dark:text-gray-200 px-3">
                  <a href="#" class="px-3 py-1 m-0.5 text-sm bg-gray-50 rounded-md border">
                    ...
                  </a>
                </div>

                <div class="flex flex-row justify-between text-gray-600 dark:text-slate-200 items-center px-3">
                  <div class="flex flex-row gap-x-2 items-center">
                    <img class="freelancer-photo w-10 h-10 rounded-full" src="" alt="offers Freelancer photo">
                    <div class="flex flex-col">
                      <p>by <strong class="freelancer-name font-semibold">Abdelghani A.</strong></p>
                      <div class="flex flex-row items-center -mt-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="13" viewBox="0 0 14 13" fill="none">
                          <path d="M7.00656 0.800781L5.26756 5.27278H0.851562L4.44256 8.00078L3.20256 12.5088L7.00656 9.95978L10.8116 12.5088L9.57156 8.00078L13.1616 5.27278H8.74656L7.00656 0.800781Z" fill="#FFB331" />
                        </svg>
                        <strong class="rating text-yellow-500 font-semibold mr-1"></strong>(<p class="reviews text-gray-400"></p>)
                      </div>
                    </div>
                  </div>
                  <div>
                    <p class="price text-gray-900 dark:text-slate-100 font-semibold"></p>
                  </div>
                </div>

                <div class="border-t border-gray-200 px-3 py-1 box-content">
                  <p class="dilevered-days text-xs text-gray-400"></p>
                </div>
              </div>
            </div>
          </li>

          <li class="offer-card h-full mr-4 drop-shadow-md cursor-pointer w-4/5 md:w-2/5 lg:w-72 shrink-0 rounded-xl overflow-hidden hover:drop-shadow-lg hover:border-b-2">
            <div class="photo bg-cover bg-no-repeat bg-center bg-green-50 h-48"></div>

            <div class="bg-gray-50 dark:bg-zinc-700 w-full min-h-56 flex flex-col justify-between">
              <div class="flex flex-row p-3 items-center gap-0.5">
                <h3 class="title text-gray-700 dark:text-slate-200 font-semibold text-lg"></h3>
              </div>
              <div class="flex flex-col gap-y-3">
                <div class="specialities flex flex-row flex-wrap my-1 text-gray-600 dark:text-gray-200 px-3">
                  <a href="#" class="px-3 py-1 m-0.5 text-sm bg-gray-50 rounded-md border">
                    ...
                  </a>
                </div>

                <div class="flex flex-row justify-between text-gray-600 dark:text-slate-200 items-center px-3">
                  <div class="flex flex-row gap-x-2 items-center">
                    <img class="freelancer-photo w-10 h-10 rounded-full" src="" alt="offers Freelancer photo">
                    <div class="flex flex-col">
                      <p>by <strong class="freelancer-name font-semibold">Abdelghani A.</strong></p>
                      <div class="flex flex-row items-center -mt-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="13" viewBox="0 0 14 13" fill="none">
                          <path d="M7.00656 0.800781L5.26756 5.27278H0.851562L4.44256 8.00078L3.20256 12.5088L7.00656 9.95978L10.8116 12.5088L9.57156 8.00078L13.1616 5.27278H8.74656L7.00656 0.800781Z" fill="#FFB331" />
                        </svg>
                        <strong class="rating text-yellow-500 font-semibold mr-1"></strong>(<p class="reviews text-gray-400"></p>)
                      </div>
                    </div>
                  </div>
                  <div>
                    <p class="price text-gray-900 dark:text-slate-100 font-semibold"></p>
                  </div>
                </div>

                <div class="border-t border-gray-200 px-3 py-1 box-content">
                  <p class="dilevered-days text-xs text-gray-400"></p>
                </div>
              </div>
            </div>
          </li>

          <li class="offer-card h-full mr-4 drop-shadow-md cursor-pointer w-4/5 md:w-2/5 lg:w-72 shrink-0 rounded-xl overflow-hidden hover:drop-shadow-lg hover:border-b-2">
            <div class="photo bg-cover bg-no-repeat bg-center bg-green-50 h-48"></div>

            <div class="bg-gray-50 dark:bg-zinc-700 w-full min-h-56 flex flex-col justify-between">
              <div class="flex flex-row p-3 items-center gap-0.5">
                <h3 class="title text-gray-700 dark:text-slate-200 font-semibold text-lg"></h3>
              </div>
              <div class="flex flex-col gap-y-3">
                <div class="specialities flex flex-row flex-wrap my-1 text-gray-600 dark:text-gray-200 px-3">
                  <a href="#" class="px-3 py-1 m-0.5 text-sm bg-gray-50 rounded-md border">
                    ...
                  </a>
                </div>

                <div class="flex flex-row justify-between text-gray-600 dark:text-slate-200 items-center px-3">
                  <div class="flex flex-row gap-x-2 items-center">
                    <img class="freelancer-photo w-10 h-10 rounded-full" src="" alt="offers Freelancer photo">
                    <div class="flex flex-col">
                      <p>by <strong class="freelancer-name font-semibold">Abdelghani A.</strong></p>
                      <div class="flex flex-row items-center -mt-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="13" viewBox="0 0 14 13" fill="none">
                          <path d="M7.00656 0.800781L5.26756 5.27278H0.851562L4.44256 8.00078L3.20256 12.5088L7.00656 9.95978L10.8116 12.5088L9.57156 8.00078L13.1616 5.27278H8.74656L7.00656 0.800781Z" fill="#FFB331" />
                        </svg>
                        <strong class="rating text-yellow-500 font-semibold mr-1"></strong>(<p class="reviews text-gray-400"></p>)
                      </div>
                    </div>
                  </div>
                  <div>
                    <p class="price text-gray-900 dark:text-slate-100 font-semibold"></p>
                  </div>
                </div>

                <div class="border-t border-gray-200 px-3 py-1 box-content">
                  <p class="dilevered-days text-xs text-gray-400"></p>
                </div>
              </div>
            </div>
          </li>

          <li class="offer-card h-full mr-4 drop-shadow-md cursor-pointer w-4/5 md:w-2/5 lg:w-72 shrink-0 rounded-xl overflow-hidden hover:drop-shadow-lg hover:border-b-2">
            <div class="photo bg-cover bg-no-repeat bg-center bg-green-50 h-48"></div>

            <div class="bg-gray-50 dark:bg-zinc-700 w-full min-h-56 flex flex-col justify-between">
              <div class="flex flex-row p-3 items-center gap-0.5">
                <h3 class="title text-gray-700 dark:text-slate-200 font-semibold text-lg"></h3>
              </div>
              <div class="flex flex-col gap-y-3">
                <div class="specialities flex flex-row flex-wrap my-1 text-gray-600 dark:text-gray-200 px-3">
                  <a href="#" class="px-3 py-1 m-0.5 text-sm bg-gray-50 rounded-md border">
                    ...
                  </a>
                </div>

                <div class="flex flex-row justify-between text-gray-600 dark:text-slate-200 items-center px-3">
                  <div class="flex flex-row gap-x-2 items-center">
                    <img class="freelancer-photo w-10 h-10 rounded-full" src="" alt="offers Freelancer photo">
                    <div class="flex flex-col">
                      <p>by <strong class="freelancer-name font-semibold">Abdelghani A.</strong></p>
                      <div class="flex flex-row items-center -mt-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="13" viewBox="0 0 14 13" fill="none">
                          <path d="M7.00656 0.800781L5.26756 5.27278H0.851562L4.44256 8.00078L3.20256 12.5088L7.00656 9.95978L10.8116 12.5088L9.57156 8.00078L13.1616 5.27278H8.74656L7.00656 0.800781Z" fill="#FFB331" />
                        </svg>
                        <strong class="rating text-yellow-500 font-semibold mr-1"></strong>(<p class="reviews text-gray-400"></p>)
                      </div>
                    </div>
                  </div>
                  <div>
                    <p class="price text-gray-900 dark:text-slate-100 font-semibold"></p>
                  </div>
                </div>

                <div class="border-t border-gray-200 px-3 py-1 box-content">
                  <p class="dilevered-days text-xs text-gray-400"></p>
                </div>
              </div>
            </div>
          </li>

          <li class="offer-card h-full mr-4 drop-shadow-md cursor-pointer w-4/5 md:w-2/5 lg:w-72 shrink-0 rounded-xl overflow-hidden hover:drop-shadow-lg hover:border-b-2">
            <div class="photo bg-cover bg-no-repeat bg-center bg-green-50 h-48"></div>

            <div class="bg-gray-50 dark:bg-zinc-700 w-full min-h-56 flex flex-col justify-between">
              <div class="flex flex-row p-3 items-center gap-0.5">
                <h3 class="title text-gray-700 dark:text-slate-200 font-semibold text-lg"></h3>
              </div>
              <div class="flex flex-col gap-y-3">
                <div class="specialities flex flex-row flex-wrap my-1 text-gray-600 dark:text-gray-200 px-3">
                  <a href="#" class="px-3 py-1 m-0.5 text-sm bg-gray-50 rounded-md border">
                    ...
                  </a>
                </div>

                <div class="flex flex-row justify-between text-gray-600 dark:text-slate-200 items-center px-3">
                  <div class="flex flex-row gap-x-2 items-center">
                    <img class="freelancer-photo w-10 h-10 rounded-full" src="" alt="offers Freelancer photo">
                    <div class="flex flex-col">
                      <p>by <strong class="freelancer-name font-semibold">Abdelghani A.</strong></p>
                      <div class="flex flex-row items-center -mt-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="13" viewBox="0 0 14 13" fill="none">
                          <path d="M7.00656 0.800781L5.26756 5.27278H0.851562L4.44256 8.00078L3.20256 12.5088L7.00656 9.95978L10.8116 12.5088L9.57156 8.00078L13.1616 5.27278H8.74656L7.00656 0.800781Z" fill="#FFB331" />
                        </svg>
                        <strong class="rating text-yellow-500 font-semibold mr-1"></strong>(<p class="reviews text-gray-400"></p>)
                      </div>
                    </div>
                  </div>
                  <div>
                    <p class="price text-gray-900 dark:text-slate-100 font-semibold"></p>
                  </div>
                </div>

                <div class="border-t border-gray-200 px-3 py-1 box-content">
                  <p class="dilevered-days text-xs text-gray-400"></p>
                </div>
              </div>
            </div>
          </li>

          <li class="offer-card h-full mr-4 drop-shadow-md cursor-pointer w-4/5 md:w-2/5 lg:w-72 shrink-0 rounded-xl overflow-hidden hover:drop-shadow-lg hover:border-b-2">
            <div class="photo bg-cover bg-no-repeat bg-center bg-green-50 h-48"></div>

            <div class="bg-gray-50 dark:bg-zinc-700 w-full min-h-56 flex flex-col justify-between">
              <div class="flex flex-row p-3 items-center gap-0.5">
                <h3 class="title text-gray-700 dark:text-slate-200 font-semibold text-lg"></h3>
              </div>
              <div class="flex flex-col gap-y-3">
                <div class="specialities flex flex-row flex-wrap my-1 text-gray-600 dark:text-gray-200 px-3">
                  <a href="#" class="px-3 py-1 m-0.5 text-sm bg-gray-50 rounded-md border">
                    ...
                  </a>
                </div>

                <div class="flex flex-row justify-between text-gray-600 dark:text-slate-200 items-center px-3">
                  <div class="flex flex-row gap-x-2 items-center">
                    <img class="freelancer-photo w-10 h-10 rounded-full" src="" alt="offers Freelancer photo">
                    <div class="flex flex-col">
                      <p>by <strong class="freelancer-name font-semibold">Abdelghani A.</strong></p>
                      <div class="flex flex-row items-center -mt-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="13" viewBox="0 0 14 13" fill="none">
                          <path d="M7.00656 0.800781L5.26756 5.27278H0.851562L4.44256 8.00078L3.20256 12.5088L7.00656 9.95978L10.8116 12.5088L9.57156 8.00078L13.1616 5.27278H8.74656L7.00656 0.800781Z" fill="#FFB331" />
                        </svg>
                        <strong class="rating text-yellow-500 font-semibold mr-1"></strong>(<p class="reviews text-gray-400"></p>)
                      </div>
                    </div>
                  </div>
                  <div>
                    <p class="price text-gray-900 dark:text-slate-100 font-semibold"></p>
                  </div>
                </div>

                <div class="border-t border-gray-200 px-3 py-1 box-content">
                  <p class="dilevered-days text-xs text-gray-400"></p>
                </div>
              </div>
            </div>
          </li>

          <li class="offer-card h-full mr-4 drop-shadow-md cursor-pointer w-4/5 md:w-2/5 lg:w-72 shrink-0 rounded-xl overflow-hidden hover:drop-shadow-lg hover:border-b-2">
            <div class="photo bg-cover bg-no-repeat bg-center bg-green-50 h-48"></div>

            <div class="bg-gray-50 dark:bg-zinc-700 w-full min-h-56 flex flex-col justify-between">
              <div class="flex flex-row p-3 items-center gap-0.5">
                <h3 class="title text-gray-700 dark:text-slate-200 font-semibold text-lg"></h3>
              </div>
              <div class="flex flex-col gap-y-3">
                <div class="specialities flex flex-row flex-wrap my-1 text-gray-600 dark:text-gray-200 px-3">
                  <a href="#" class="px-3 py-1 m-0.5 text-sm bg-gray-50 rounded-md border">
                    ...
                  </a>
                </div>

                <div class="flex flex-row justify-between text-gray-600 dark:text-slate-200 items-center px-3">
                  <div class="flex flex-row gap-x-2 items-center">
                    <img class="freelancer-photo w-10 h-10 rounded-full" src="" alt="offers Freelancer photo">
                    <div class="flex flex-col">
                      <p>by <strong class="freelancer-name font-semibold">Abdelghani A.</strong></p>
                      <div class="flex flex-row items-center -mt-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="13" viewBox="0 0 14 13" fill="none">
                          <path d="M7.00656 0.800781L5.26756 5.27278H0.851562L4.44256 8.00078L3.20256 12.5088L7.00656 9.95978L10.8116 12.5088L9.57156 8.00078L13.1616 5.27278H8.74656L7.00656 0.800781Z" fill="#FFB331" />
                        </svg>
                        <strong class="rating text-yellow-500 font-semibold mr-1"></strong>(<p class="reviews text-gray-400"></p>)
                      </div>
                    </div>
                  </div>
                  <div>
                    <p class="price text-gray-900 dark:text-slate-100 font-semibold"></p>
                  </div>
                </div>

                <div class="border-t border-gray-200 px-3 py-1 box-content">
                  <p class="dilevered-days text-xs text-gray-400"></p>
                </div>
              </div>
            </div>
          </li>

          <li class="offer-card h-full mr-4 drop-shadow-md cursor-pointer w-4/5 md:w-2/5 lg:w-72 shrink-0 rounded-xl overflow-hidden hover:drop-shadow-lg hover:border-b-2">
            <div class="photo bg-cover bg-no-repeat bg-center bg-green-50 h-48"></div>

            <div class="bg-gray-50 dark:bg-zinc-700 w-full min-h-56 flex flex-col justify-between">
              <div class="flex flex-row p-3 items-center gap-0.5">
                <h3 class="title text-gray-700 dark:text-slate-200 font-semibold text-lg"></h3>
              </div>
              <div class="flex flex-col gap-y-3">
                <div class="specialities flex flex-row flex-wrap my-1 text-gray-600 dark:text-gray-200 px-3">
                  <a href="#" class="px-3 py-1 m-0.5 text-sm bg-gray-50 rounded-md border">
                    ...
                  </a>
                </div>

                <div class="flex flex-row justify-between text-gray-600 dark:text-slate-200 items-center px-3">
                  <div class="flex flex-row gap-x-2 items-center">
                    <img class="freelancer-photo w-10 h-10 rounded-full" src="" alt="offers Freelancer photo">
                    <div class="flex flex-col">
                      <p>by <strong class="freelancer-name font-semibold">Abdelghani A.</strong></p>
                      <div class="flex flex-row items-center -mt-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="13" viewBox="0 0 14 13" fill="none">
                          <path d="M7.00656 0.800781L5.26756 5.27278H0.851562L4.44256 8.00078L3.20256 12.5088L7.00656 9.95978L10.8116 12.5088L9.57156 8.00078L13.1616 5.27278H8.74656L7.00656 0.800781Z" fill="#FFB331" />
                        </svg>
                        <strong class="rating text-yellow-500 font-semibold mr-1"></strong>(<p class="reviews text-gray-400"></p>)
                      </div>
                    </div>
                  </div>
                  <div>
                    <p class="price text-gray-900 dark:text-slate-100 font-semibold"></p>
                  </div>
                </div>

                <div class="border-t border-gray-200 px-3 py-1 box-content">
                  <p class="dilevered-days text-xs text-gray-400"></p>
                </div>
              </div>
            </div>
          </li>

          <li class="offer-card h-full mr-4 drop-shadow-md cursor-pointer w-4/5 md:w-2/5 lg:w-72 shrink-0 rounded-xl overflow-hidden hover:drop-shadow-lg hover:border-b-2">
            <div class="photo bg-cover bg-no-repeat bg-center bg-green-50 h-48"></div>

            <div class="bg-gray-50 dark:bg-zinc-700 w-full min-h-56 flex flex-col justify-between">
              <div class="flex flex-row p-3 items-center gap-0.5">
                <h3 class="title text-gray-700 dark:text-slate-200 font-semibold text-lg"></h3>
              </div>
              <div class="flex flex-col gap-y-3">
                <div class="specialities flex flex-row flex-wrap my-1 text-gray-600 dark:text-gray-200 px-3">
                  <a href="#" class="px-3 py-1 m-0.5 text-sm bg-gray-50 rounded-md border">
                    ...
                  </a>
                </div>

                <div class="flex flex-row justify-between text-gray-600 dark:text-slate-200 items-center px-3">
                  <div class="flex flex-row gap-x-2 items-center">
                    <img class="freelancer-photo w-10 h-10 rounded-full" src="" alt="offers Freelancer photo">
                    <div class="flex flex-col">
                      <p>by <strong class="freelancer-name font-semibold">Abdelghani A.</strong></p>
                      <div class="flex flex-row items-center -mt-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="13" viewBox="0 0 14 13" fill="none">
                          <path d="M7.00656 0.800781L5.26756 5.27278H0.851562L4.44256 8.00078L3.20256 12.5088L7.00656 9.95978L10.8116 12.5088L9.57156 8.00078L13.1616 5.27278H8.74656L7.00656 0.800781Z" fill="#FFB331" />
                        </svg>
                        <strong class="rating text-yellow-500 font-semibold mr-1"></strong>(<p class="reviews text-gray-400"></p>)
                      </div>
                    </div>
                  </div>
                  <div>
                    <p class="price text-gray-900 dark:text-slate-100 font-semibold"></p>
                  </div>
                </div>

                <div class="border-t border-gray-200 px-3 py-1 box-content">
                  <p class="dilevered-days text-xs text-gray-400"></p>
                </div>
              </div>
            </div>
          </li>

          <li class="offer-card h-full mr-4 drop-shadow-md cursor-pointer w-4/5 md:w-2/5 lg:w-72 shrink-0 rounded-xl overflow-hidden hover:drop-shadow-lg hover:border-b-2">
            <div class="photo bg-cover bg-no-repeat bg-center bg-green-50 h-48"></div>

            <div class="bg-gray-50 dark:bg-zinc-700 w-full min-h-56 flex flex-col justify-between">
              <div class="flex flex-row p-3 items-center gap-0.5">
                <h3 class="title text-gray-700 dark:text-slate-200 font-semibold text-lg"></h3>
              </div>
              <div class="flex flex-col gap-y-3">
                <div class="specialities flex flex-row flex-wrap my-1 text-gray-600 dark:text-gray-200 px-3">
                  <a href="#" class="px-3 py-1 m-0.5 text-sm bg-gray-50 rounded-md border">
                    ...
                  </a>
                </div>

                <div class="flex flex-row justify-between text-gray-600 dark:text-slate-200 items-center px-3">
                  <div class="flex flex-row gap-x-2 items-center">
                    <img class="freelancer-photo w-10 h-10 rounded-full" src="" alt="offers Freelancer photo">
                    <div class="flex flex-col">
                      <p>by <strong class="freelancer-name font-semibold">Abdelghani A.</strong></p>
                      <div class="flex flex-row items-center -mt-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="13" viewBox="0 0 14 13" fill="none">
                          <path d="M7.00656 0.800781L5.26756 5.27278H0.851562L4.44256 8.00078L3.20256 12.5088L7.00656 9.95978L10.8116 12.5088L9.57156 8.00078L13.1616 5.27278H8.74656L7.00656 0.800781Z" fill="#FFB331" />
                        </svg>
                        <strong class="rating text-yellow-500 font-semibold mr-1"></strong>(<p class="reviews text-gray-400"></p>)
                      </div>
                    </div>
                  </div>
                  <div>
                    <p class="price text-gray-900 dark:text-slate-100 font-semibold"></p>
                  </div>
                </div>

                <div class="border-t border-gray-200 px-3 py-1 box-content">
                  <p class="dilevered-days text-xs text-gray-400"></p>
                </div>
              </div>
            </div>
          </li>
        </ul>
      </div>

      <div class="flex flex-row justify-center">
        <div class="offers-btns">
          <button class="scroll-right p-2 md:p-3 border-2 border-r border-gray-300 m-0 disabled:border-gray-100 hover:bg-gray-100 disabled:hover:bg-white dark:disabled:border-gray-800 dark:disabled:bg-transparent" disabled>
            <svg class="rotate-180" xmlns="http://www.w3.org/2000/svg" width="15" height="12" viewBox="0 0 12 10" fill="none">
              <path d="M7.388 0.528666L11.388 4.52867C11.5086 4.64931 11.5832 4.81595 11.5832 4.99999C11.5832 5.18404 11.5086 5.3507 11.388 5.47132L7.388 9.47132C7.26823 9.5871 7.10487 9.65846 6.92486 9.65846C6.55667 9.65846 6.25819 9.35998 6.25819 8.99179C6.25819 8.81178 6.32955 8.64842 6.44552 8.52846L9.30666 5.66665H1.58333C1.21514 5.66665 0.916656 5.36817 0.916656 4.99998C0.916656 4.63179 1.21514 4.33331 1.58333 4.33331H9.30666L6.44533 1.47131C6.31977 1.34992 6.2418 1.17995 6.2418 0.991776C6.2418 0.623588 6.54028 0.325104 6.90847 0.325104C7.09664 0.325104 7.26678 0.403276 7.388 0.528666Z" fill="#5B6678" />
            </svg>
          </button>
          <button class="scroll-left p-2 md:p-3 border-2 border-l border-gray-300 m-0 hover:bg-gray-100 disabled:hover:bg-white disabled:border-gray-100 dark:disabled:border-gray-800 dark:disabled:bg-transparent">
            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="12" viewBox="0 0 12 10" fill="none">
              <path d="M7.388 0.528666L11.388 4.52867C11.5086 4.64931 11.5832 4.81595 11.5832 4.99999C11.5832 5.18404 11.5086 5.3507 11.388 5.47132L7.388 9.47132C7.26823 9.5871 7.10487 9.65846 6.92486 9.65846C6.55667 9.65846 6.25819 9.35998 6.25819 8.99179C6.25819 8.81178 6.32955 8.64842 6.44552 8.52846L9.30666 5.66665H1.58333C1.21514 5.66665 0.916656 5.36817 0.916656 4.99998C0.916656 4.63179 1.21514 4.33331 1.58333 4.33331H9.30666L6.44533 1.47131C6.31977 1.34992 6.2418 1.17995 6.2418 0.991776C6.2418 0.623588 6.54028 0.325104 6.90847 0.325104C7.09664 0.325104 7.26678 0.403276 7.388 0.528666Z" fill="#5B6678" />
            </svg>
          </button>
        </div>
      </div>
    </div>
  </section>
  <!-- end Offers section -->

  <!-- Status section -->
  <section class="status-section w-full p-4 md:py-3 md:px-8 lg:px-10">
    <div class="flex flex-col gap-y-5 items-center md:flex-row md:justify-around md:items-start py-5">
      <div class="text-center w-2/3 md:w-1/4">
        <h3 class="text-custom-green++ text-2xl">3 million</h3>
        <p class="text-gray-800 dark:text-slate-300 font-thin text-lg">rated freelancers, covering 8,766 skills</p>
      </div>
      <div class="text-center w-2/3 md:w-1/4">
        <h3 class="text-custom-green++ text-2xl">$150 million</h3>
        <p class="text-gray-800 dark:text-slate-300 font-thin text-lg">earned by freelancers, with top freelancers
          earning over $7,000/m</p>
      </div>
      <div class="text-center w-2/3 md:w-1/4">
        <h3 class="text-custom-green++ text-2xl">10 minutes</h3>
        <p class="text-gray-800 dark:text-slate-300 font-thin text-lg">to task a freelancer, with 90% of projects
          completed in 7 days</p>
      </div>
    </div>
  </section>
  <!-- end Status section -->

  <!-- Companies section -->
  <section class="companies-section dark:bg-slate-800 w-full p-4 md:py-5 md:px-8 lg:px-10 bg-white">
    <h2 class="text-center w-full mb-7 font-semibold text-2xl lg:text-4xl dark:text-slate-300">Our Trusted Companies
    </h2>
    <div class="flex flex-row flex-wrap w-full gap-4 justify-center items-center">
      <div class="w-1/6 md:w-1/4 lg:w-1/12  items-center m-auto">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 102 29" fill="none">
          <path d="M65.8613 0.0356445V28.8563H35.2816V0.0356445H65.8613ZM50.5714 4.09489H43.2986V24.797L51.6444 24.7969C52.0924 24.7923 58.5884 24.6279 58.5884 18.945L58.5889 18.9314C58.5943 18.6759 58.578 14.9417 54.0894 13.8033C54.0894 13.8033 56.7618 12.6531 56.728 9.64252C56.728 9.64252 56.7308 9.60823 56.7321 9.545L56.7321 9.40109C56.7123 8.4025 56.2589 4.62259 50.5714 4.09489ZM50.9097 15.9344C54.9013 15.9344 54.7998 18.6743 54.7998 18.6743C54.7998 21.7416 51.1018 21.6254 50.9169 21.6176L47.0196 21.6173V15.9344H50.9097ZM30.5796 0.0356445V28.8563H0V0.0356445H30.5796ZM101.143 0.0356445V28.8563H70.5632V0.0356445H101.143ZM89.1681 3.92575C85.2441 3.55366 83.0792 4.39933 83.0792 4.39933C75.4538 6.73108 75.1663 13.4363 75.1627 14.3438L75.1629 14.4086C75.163 14.4168 75.1631 14.4237 75.1633 14.4292L75.1637 14.446C75.3844 21.2888 80.72 23.6928 81.4425 23.9873L81.518 24.0171C88.796 26.8943 95.0878 23.1733 95.0878 23.1733V19.2156C90.3859 22.1924 86.9355 21.7864 86.9355 21.7864C79.4303 21.4158 79.0033 15.6026 78.9858 14.5944L78.9857 14.4631C78.9859 14.4518 78.9861 14.446 78.9861 14.446C79.309 7.27771 86.3511 7.07516 86.9906 7.07156L87.0317 7.0716C91.1977 7.1055 94.9187 9.40574 94.9187 9.40574V5.58328C91.5021 4.16254 89.1681 3.92575 89.1681 3.92575ZM15.2898 4.09489H8.05084V24.797L16.3966 24.7969C16.8446 24.7923 23.3407 24.6279 23.3407 18.945L23.341 18.9308C23.3439 18.67 23.2929 14.9408 18.8078 13.8033C18.8078 13.8033 21.4802 12.6531 21.4463 9.64252C21.4463 9.64252 21.8523 4.70378 15.2898 4.09489ZM15.6281 15.9344C19.2957 15.9344 19.5094 18.2089 19.5184 18.6132L19.5182 18.6743C19.5182 21.7416 15.8202 21.6254 15.6353 21.6176L11.738 21.6173V15.9344H15.6281ZM49.9964 7.30846C52.8181 7.4635 52.968 9.40926 52.9734 9.73248L52.9731 9.77783C52.9731 12.5404 49.7438 12.6811 49.5644 12.6867L47.0196 12.687V7.30846H49.9964ZM14.7148 7.30846C17.5365 7.4635 17.6864 9.40926 17.6918 9.73248L17.6915 9.77783C17.6915 12.5404 14.4622 12.6811 14.2828 12.6867L11.738 12.687V7.30846H14.7148Z" fill="#0A0F26" />
        </svg>
      </div>

      <div class="w-1/6 md:w-1/4 lg:w-1/12  items-center m-auto">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 114 37" fill="none">
          <g clip-path="url(#clip0_142_716)">
            <path d="M0.520081 7.81983V1.51454V1.3406C0.520081 0.760801 0.563565 0.731811 1.14336 0.717316C2.65083 0.717316 4.14381 0.702821 5.65128 0.717316C6.41951 0.731811 7.17325 0.84777 7.89799 1.09418C9.47794 1.65949 10.3476 3.02201 10.3042 4.4715C10.2897 4.92085 10.2897 5.35569 10.1592 5.79054C9.95627 6.44281 9.5939 6.99362 9.0141 7.38498C8.95612 7.42847 8.88365 7.45746 8.85466 7.51544C8.82567 7.55892 8.84016 7.66039 8.86915 7.68938C8.94163 7.76185 9.05759 7.81983 9.14456 7.87781C10.4491 8.74751 10.9274 9.96508 10.7535 11.5015C10.6085 12.7481 9.97077 13.6468 8.91264 14.2701C8.34734 14.6035 7.72405 14.7629 7.08628 14.8354C6.57896 14.8934 6.05714 14.9223 5.54982 14.9223C4.12932 14.9368 2.70881 14.9223 1.28831 14.9223H0.911443C0.621545 14.8934 0.54907 14.8354 0.534575 14.531C0.520081 14.415 0.520081 14.2846 0.520081 14.1541V7.81983ZM3.0277 10.7188V12.1828C3.0277 12.7336 3.0422 12.7481 3.57851 12.7481C4.28876 12.7481 4.99901 12.7626 5.70926 12.7481C6.08613 12.7336 6.463 12.6901 6.82537 12.6177C8.43431 12.2988 8.68072 10.5014 7.97047 9.53023C7.56461 8.97943 6.94133 8.7765 6.28906 8.762C5.34689 8.73301 4.40472 8.74751 3.44805 8.74751C3.10018 8.74751 3.0422 8.80549 3.0422 9.16786C3.01321 9.68968 3.0277 10.197 3.0277 10.7188ZM3.0277 4.79039V6.21089C3.0277 6.58776 3.08568 6.64574 3.46255 6.64574C4.12932 6.64574 4.79608 6.66024 5.46285 6.64574C5.81073 6.63125 6.1586 6.60226 6.49199 6.52978C7.81102 6.29786 8.21688 4.97883 7.73855 3.9062C7.44865 3.26842 6.88335 3.0365 6.26007 2.99302C5.33239 2.93504 4.40472 2.92055 3.47704 2.90605C3.07119 2.90605 3.0277 2.94953 3.0277 3.36989C3.01321 3.84822 3.0277 4.32655 3.0277 4.79039ZM61.7176 29.0694V22.8511V22.5177C61.7321 22.1553 61.7756 22.0973 62.1235 22.0973C64.0223 22.0973 65.9067 22.0394 67.791 22.1118C69.4434 22.1698 70.9074 22.7931 72.0815 23.9962C73.0382 24.9818 73.56 26.1994 73.7774 27.5474C74.0093 28.9534 73.9513 30.345 73.4875 31.7075C72.6758 34.0412 71.0089 35.4182 68.6027 35.853C67.9215 35.9835 67.2257 36.0125 66.5299 36.027C65.1529 36.056 63.7759 36.0415 62.3989 36.027C62.2684 36.027 62.1525 36.027 62.022 36.0125C61.8191 35.998 61.7176 35.882 61.7176 35.6936V35.2732V29.0694ZM64.2252 29.0259V33.2874C64.2397 33.7513 64.2687 33.7947 64.7181 33.7947C65.5153 33.7947 66.298 33.8092 67.0952 33.7947C67.5301 33.7802 67.9794 33.7223 68.4143 33.6208C69.7768 33.3019 70.6465 32.4177 71.1103 31.1277C71.4872 30.0406 71.4872 28.91 71.3133 27.7938C71.0524 26.0689 69.9362 24.6919 68.0374 24.373C66.8778 24.1846 65.7037 24.3151 64.5441 24.2861C64.3412 24.2861 64.2397 24.402 64.2397 24.605V24.9383C64.2252 26.3009 64.2252 27.6634 64.2252 29.0259ZM69.313 7.99377V14.5455C69.313 14.7049 69.255 14.8499 69.2115 15.0093C69.0955 14.9223 68.9506 14.8499 68.8491 14.7484C67.6171 13.5598 66.3995 12.3567 65.1674 11.1682C64.1963 10.2115 63.2106 9.26932 62.2394 8.32715C61.5147 7.6169 60.7755 6.92115 60.0507 6.21089C60.0072 6.16741 59.9782 6.12392 59.9347 6.09493C59.8913 6.06594 59.8333 6.05145 59.7898 6.02246C59.7608 6.08044 59.7173 6.13842 59.7173 6.1964C59.7028 6.31236 59.7173 6.41382 59.7173 6.52978V14.2121C59.7173 14.9079 59.7028 14.9223 59.0216 14.9223H57.688C57.3547 14.9079 57.3112 14.8499 57.2967 14.531V14.2411V1.22464C57.2967 1.0362 57.3547 0.84777 57.3836 0.673831C57.6156 0.659336 57.7025 0.862265 57.833 0.99272C58.7317 1.84792 59.6159 2.71762 60.5 3.57282L64.0658 6.96463C64.9065 7.76185 65.7617 8.55907 66.6169 9.35629C66.6749 9.41427 66.7474 9.44326 66.8198 9.47225C66.8488 9.39978 66.8778 9.3273 66.8923 9.25483C66.9068 9.13887 66.8923 9.03741 66.8923 8.92145V1.41307C66.8923 0.775296 66.9213 0.760801 67.5446 0.746306H68.8346C69.2405 0.760801 69.2985 0.818781 69.313 1.21014C69.3275 1.55802 69.313 1.9059 69.313 2.25378V7.99377ZM94.2732 29.0404V22.9525V22.6626C94.2732 22.1263 94.3022 22.0973 94.8385 22.0973H99.8103C100.535 22.0973 101.245 22.2568 101.912 22.5757C103.333 23.2424 104.028 24.402 104.144 25.9385C104.188 26.6053 104.115 27.272 103.927 27.9243C103.608 28.9969 102.898 29.6927 101.869 30.0551C101.68 30.1275 101.463 30.171 101.274 30.229C101.057 30.3015 101.042 30.345 101.187 30.5044C101.564 30.9392 101.927 31.3596 102.303 31.7944L104.565 34.36C104.912 34.7514 105.275 35.1428 105.608 35.5486C105.695 35.6501 105.739 35.8095 105.797 35.94C105.652 35.969 105.507 36.027 105.362 36.027C104.753 36.0415 104.144 36.027 103.521 36.027C103.26 36.027 103.086 35.9255 102.912 35.7371C102.1 34.7804 101.274 33.8382 100.463 32.8961C99.8538 32.1858 99.245 31.4901 98.6507 30.7653C98.4188 30.4899 98.1723 30.316 97.7955 30.3594C97.5491 30.3884 97.2882 30.3594 97.0417 30.3739C96.7808 30.3884 96.7374 30.4464 96.7229 30.7073C96.7084 30.8233 96.7229 30.9247 96.7229 31.0407V35.6791C96.7229 35.8965 96.6214 36.027 96.404 36.027H94.6066C94.4037 36.027 94.3022 35.911 94.3022 35.7081V35.3312C94.2732 33.2439 94.2732 31.1422 94.2732 29.0404ZM96.7084 26.2864V27.9968C96.7084 28.2867 96.7663 28.3591 97.0417 28.3591C97.9984 28.3447 98.9696 28.3736 99.9117 28.2722C101.173 28.1272 101.709 27.3155 101.666 26.1849C101.622 25.0688 100.912 24.373 99.7813 24.3006C98.8971 24.2426 98.0129 24.2426 97.1142 24.2281C96.7518 24.2281 96.7084 24.2861 96.6939 24.6339C96.7084 25.1703 96.7084 25.7211 96.7084 26.2864ZM19.0591 28.9244V22.6192C19.0591 22.4887 19.0446 22.3727 19.0591 22.2423C19.0736 22.1408 19.1316 22.0394 19.1605 21.9524C19.2475 21.9959 19.32 22.0394 19.407 22.0828C19.4215 22.0828 19.4215 22.0973 19.4359 22.1118C20.1752 22.8221 20.9144 23.5323 21.6682 24.2426C22.7698 25.2862 23.8714 26.3299 24.9585 27.3735C25.9587 28.3157 26.9588 29.2578 27.959 30.2145C28.1184 30.3594 28.2923 30.5044 28.4663 30.6493C28.5533 30.7218 28.6257 30.6783 28.6257 30.5624C28.6402 30.4319 28.6402 30.316 28.6402 30.1855V22.7641C28.6402 22.1118 28.6402 22.1118 29.278 22.1118H30.568C30.9159 22.1118 30.9739 22.1698 30.9884 22.5322V35.6356C30.9884 35.795 30.9449 35.9545 30.9159 36.1139C30.7855 36.027 30.6405 35.9545 30.5101 35.853C30.4376 35.8095 30.3796 35.7516 30.3216 35.6936C29.278 34.6934 28.2489 33.6788 27.2052 32.6786C26.1471 31.6495 25.089 30.6204 24.0308 29.6057C23.3351 28.9244 22.6248 28.2577 21.9291 27.5909C21.8131 27.4894 21.6682 27.417 21.5377 27.33C21.5087 27.475 21.4652 27.6199 21.4652 27.7649V35.6501C21.4507 35.9835 21.3783 36.0704 21.0449 36.0704C20.5231 36.0849 19.9868 36.0849 19.4649 36.0704C19.146 36.0704 19.0881 35.9835 19.0591 35.6646C19.0446 35.5341 19.0591 35.4182 19.0591 35.2877V28.9244ZM27.0748 5.6311C27.0748 7.03711 27.0893 8.44311 27.0748 9.84912C27.0603 10.7478 26.8573 11.6175 26.437 12.4147C25.6833 13.8497 24.4657 14.6904 22.8857 14.9948C21.9291 15.1833 20.9434 15.1833 19.9868 14.9948C17.74 14.5455 16.3195 13.096 15.8992 10.8058C15.7687 10.1245 15.7253 9.42877 15.7253 8.73301C15.7108 6.28337 15.7108 3.83373 15.7108 1.38408C15.7108 0.746306 15.7397 0.717316 16.363 0.717316H17.827C18.1604 0.717316 18.2039 0.789791 18.2184 1.10868V1.48555C18.2184 3.94969 18.2039 6.41382 18.2184 8.87796C18.2184 9.58821 18.2908 10.2985 18.5228 10.9797C18.8996 12.0668 19.6679 12.6756 20.813 12.8351C21.2478 12.8931 21.6682 12.8931 22.103 12.8206C23.1756 12.6611 23.9004 12.0668 24.2628 11.0377C24.4512 10.5014 24.5527 9.93609 24.5527 9.35629C24.5382 6.74721 24.5527 4.12362 24.5527 1.51454C24.5527 0.717316 24.5527 0.717316 25.3644 0.717316H26.5385C27.0313 0.717316 27.0603 0.760801 27.0603 1.23913V1.52903C27.0748 2.90605 27.0748 4.26857 27.0748 5.6311ZM75.4878 7.79084V1.44206C75.4878 0.746306 75.5023 0.731811 76.1836 0.731811H83.489C84.0833 0.731811 84.0978 0.746306 84.0978 1.3261V2.50019C84.0978 2.93504 84.0543 2.97852 83.6194 2.99302H78.4883C78.0389 2.99302 77.9954 3.0365 77.9954 3.45686V5.74706C77.9954 6.1819 78.0389 6.22539 78.4737 6.22539H83.0252C83.4455 6.23988 83.5035 6.28337 83.5035 6.71822V7.93579C83.5035 8.37064 83.46 8.41412 83.0252 8.41412H78.2998C78.0969 8.41412 77.9954 8.53008 77.9954 8.71852V12.0958C77.9954 12.6177 78.0244 12.6466 78.5317 12.6466H83.7064C84.0253 12.6611 84.0833 12.7191 84.0978 13.0525C84.1123 13.5453 84.1123 14.0237 84.0978 14.5165C84.0978 14.8354 84.0253 14.8934 83.6919 14.9079C83.2426 14.9223 82.8077 14.9079 82.3584 14.9079H76.0966C75.5313 14.9079 75.4878 14.8644 75.4878 14.2846V9.97958V7.79084ZM78.7492 29.0259V22.8946V22.6047C78.7636 22.1408 78.7926 22.0973 79.242 22.0973H87.0403C87.2287 22.0973 87.3301 22.1988 87.3301 22.3872V23.9237C87.3301 24.1411 87.2142 24.2571 86.9968 24.2571H81.4887C81.2858 24.2571 81.1843 24.3585 81.1843 24.5615V26.9386C81.1843 27.3735 81.2278 27.417 81.6626 27.417H85.9966C86.6634 27.417 86.6779 27.4315 86.6779 28.0982V29.1854C86.6634 29.5332 86.6199 29.5912 86.2575 29.6057H81.6626C81.1988 29.6057 81.1698 29.6347 81.1698 30.113V33.2439C81.1698 33.7368 81.1988 33.7658 81.6771 33.7658H86.8953C87.2432 33.7803 87.3157 33.8527 87.3301 34.1861C87.3446 34.6644 87.3446 35.1283 87.3301 35.6066C87.3157 35.9255 87.2432 35.998 86.9388 36.0125C86.8228 36.027 86.7214 36.0125 86.6054 36.0125H79.4739C78.7492 36.0125 78.7492 36.0125 78.7492 35.3022V29.0259ZM112.725 2.89156C112.725 3.21044 112.74 3.52933 112.725 3.84822C112.711 4.12362 112.624 4.16711 112.377 4.02216C112.131 3.87721 111.885 3.70327 111.638 3.55832C110.537 2.89156 109.319 2.63065 108.043 2.74661C107.71 2.7756 107.362 2.90605 107.043 3.02201C106.463 3.25393 106.188 3.71777 106.174 4.32655C106.159 4.93534 106.434 5.41367 106.985 5.68908C107.464 5.921 107.942 6.12392 108.435 6.31236C109.116 6.57327 109.797 6.80519 110.479 7.0516C111.377 7.39948 112.174 7.89231 112.754 8.67503C113.044 9.06639 113.233 9.51574 113.334 9.99407C113.464 10.6318 113.493 11.2551 113.349 11.8929C113.059 13.2699 112.174 14.1251 110.913 14.6469C110.16 14.9513 109.362 15.0818 108.551 15.0818C107.449 15.0963 106.376 14.9948 105.347 14.6035C104.941 14.444 104.565 14.2411 104.173 14.0527C103.97 13.9512 103.84 13.8062 103.84 13.5598V11.6465C103.84 11.3421 103.927 11.3131 104.202 11.487C104.753 11.8494 105.304 12.1973 105.913 12.4147C107 12.8061 108.116 13.009 109.275 12.7771C109.594 12.7191 109.913 12.5887 110.218 12.4437C111.276 11.9364 111.174 10.226 110.305 9.76215C109.826 9.50124 109.333 9.26932 108.841 9.06639C108.333 8.84897 107.797 8.68953 107.275 8.50109C106.608 8.25468 105.956 7.97928 105.362 7.57342C104.434 6.95014 103.912 6.08044 103.767 4.96433C103.651 4.03665 103.796 3.18145 104.289 2.41322C104.855 1.54353 105.666 1.00721 106.652 0.746306C108.638 0.209994 110.537 0.499892 112.348 1.44206C112.609 1.57252 112.74 1.77545 112.725 2.07984C112.725 2.35524 112.74 2.63065 112.725 2.89156ZM32.5683 12.6466C32.5683 12.3278 32.5539 12.0089 32.5683 11.69C32.5828 11.3711 32.6408 11.3421 32.9017 11.5015C33.0612 11.603 33.2206 11.719 33.3946 11.8204C34.5976 12.5887 35.9312 12.951 37.3517 12.9076C37.888 12.8931 38.4098 12.7626 38.9171 12.5162C39.8738 12.0379 39.9897 10.4869 39.1056 9.87811C38.7287 9.6172 38.2793 9.41427 37.8445 9.24033C36.9023 8.86347 35.9312 8.54458 35.0035 8.16771C34.1338 7.80534 33.3801 7.25453 32.9162 6.39933C32.7568 6.09493 32.6408 5.76155 32.5538 5.42817C32.3509 4.60196 32.3944 3.77575 32.7278 2.97852C33.0902 2.10883 33.7569 1.50004 34.6121 1.10868C35.5398 0.673831 36.511 0.543377 37.5401 0.572367C38.4388 0.601357 39.3085 0.760801 40.1492 1.07969C40.4826 1.21014 40.8015 1.38408 41.1348 1.54353C41.3378 1.64499 41.4537 1.80444 41.4392 2.03635V3.9207C41.4392 4.23958 41.3813 4.26857 41.1059 4.09463C40.7725 3.89171 40.4536 3.67428 40.1057 3.48585C38.9316 2.84807 37.6706 2.63065 36.3515 2.87706C36.1776 2.90605 36.0036 2.97852 35.8442 3.0365C35.3514 3.23943 35.0035 3.55832 34.931 4.13812C34.8585 4.7759 35.0035 5.35569 35.5978 5.68908C36.0616 5.94999 36.5544 6.13842 37.0473 6.32685C37.8445 6.63125 38.6417 6.90665 39.4389 7.21104C40.3231 7.55892 41.0769 8.09523 41.5987 8.90695C41.9031 9.37079 42.048 9.87811 42.135 10.4289C42.2365 11.1392 42.1785 11.8349 41.9321 12.5162C41.6132 13.4004 40.9899 14.0092 40.1927 14.4585C39.3955 14.9079 38.5113 15.0963 37.5981 15.1398C36.2066 15.2122 34.8875 15.0093 33.612 14.473C33.3511 14.357 33.0902 14.1976 32.8438 14.0671C32.6698 13.9802 32.6118 13.8352 32.6118 13.6468C32.5828 13.2989 32.5828 12.9655 32.5683 12.6466C32.5828 12.6466 32.5828 12.6466 32.5683 12.6466ZM98.3753 2.94953V3.86272C98.3608 4.16711 98.3173 4.1961 98.0709 4.03665C97.7085 3.81923 97.3751 3.58731 96.9983 3.38438C95.9691 2.81908 94.853 2.64514 93.6934 2.74661C93.2731 2.7756 92.8817 2.92055 92.5193 3.12347C91.6931 3.57282 91.6061 5.03681 92.4758 5.55862C92.8237 5.77605 93.2151 5.94999 93.5919 6.10943C94.3457 6.39933 95.1139 6.63125 95.8677 6.95014C96.4619 7.19655 97.0562 7.50094 97.607 7.84882C98.3318 8.28367 98.7376 8.97943 98.9696 9.77665C99.2305 10.6898 99.216 11.6175 98.8681 12.5162C98.5492 13.3424 97.9549 13.9367 97.2012 14.3715C96.346 14.8499 95.4183 15.0528 94.4472 15.0963C93.2006 15.1398 91.9975 14.9948 90.8524 14.531C90.49 14.386 90.1567 14.1976 89.8088 14.0092C89.6203 13.9077 89.5334 13.7338 89.5334 13.5308V11.69C89.5334 11.5885 89.5914 11.487 89.6203 11.3856C89.7218 11.4146 89.8378 11.4291 89.9102 11.487C90.5045 11.9074 91.1423 12.2553 91.8236 12.5017C92.8962 12.8786 93.9833 13.009 95.0994 12.7771C95.3458 12.7191 95.5778 12.6466 95.8097 12.5307C96.7953 12.0379 97.0127 10.7188 96.201 9.96508C95.9111 9.70417 95.5488 9.48675 95.1864 9.3418C94.2152 8.95044 93.2296 8.63155 92.2584 8.22569C91.7656 8.02276 91.2873 7.74736 90.8524 7.42847C89.9537 6.79069 89.5189 5.87751 89.4464 4.80489C89.4029 4.16711 89.4464 3.52933 89.7073 2.92055C90.1712 1.86242 90.9974 1.23913 92.041 0.84777C93.36 0.354943 94.7081 0.398428 96.0706 0.688326C96.7808 0.833275 97.4476 1.09418 98.0854 1.45656C98.3028 1.58701 98.4043 1.74646 98.3898 1.99287C98.3753 2.32625 98.3753 2.64514 98.3753 2.94953ZM36.9313 33.7513C36.9313 33.4614 36.9168 33.1715 36.9313 32.8816C36.9313 32.7656 37.0038 32.6641 37.0473 32.5482C37.1487 32.5917 37.2502 32.6062 37.3372 32.6786C37.8445 33.041 38.3808 33.3599 38.9751 33.5773C40.0622 33.9687 41.1783 34.1861 42.3234 33.9542C42.5553 33.9107 42.7873 33.8672 43.0047 33.7803C43.6135 33.5338 43.9903 33.1135 44.0483 32.4467C44.0918 31.8524 43.8889 31.3451 43.3816 31.0117C43.1206 30.8378 42.8307 30.6783 42.5408 30.5624C41.5842 30.1855 40.5985 29.8666 39.6564 29.4753C39.178 29.2868 38.7287 29.0259 38.3083 28.736C37.2937 28.0403 36.8878 27.0256 36.8443 25.837C36.8009 24.8804 37.0908 24.0252 37.743 23.3004C38.1054 22.8946 38.5547 22.5902 39.0621 22.3727C40.6855 21.6915 42.3524 21.735 44.0048 22.2278C44.5267 22.3872 45.005 22.6481 45.4978 22.8656C45.7007 22.9525 45.7877 23.1265 45.7877 23.3294C45.7877 23.9237 45.8022 24.5325 45.7877 25.1268C45.7877 25.4602 45.6862 25.4892 45.4108 25.3007C44.7876 24.8804 44.1353 24.5035 43.4105 24.2861C42.4974 24.0107 41.5842 23.9382 40.6565 24.1411C40.2072 24.2426 39.7723 24.431 39.5114 24.8514C39.0331 25.6196 39.294 26.5618 40.1202 26.9821C40.671 27.2575 41.2798 27.4605 41.8596 27.6779C42.4974 27.9243 43.1496 28.1272 43.7729 28.3881C44.4107 28.649 44.9905 28.9969 45.4688 29.5042C46.1066 30.171 46.44 30.9537 46.469 31.8669C46.4835 32.5047 46.469 33.1425 46.2081 33.7513C45.7442 34.8094 44.918 35.4327 43.8744 35.824C42.4104 36.3603 40.9319 36.3314 39.4389 36.0125C38.6852 35.853 37.9749 35.5921 37.3082 35.2008C37.0618 35.0558 36.9458 34.8819 36.9603 34.592C36.9313 34.3021 36.9168 34.0267 36.9313 33.7513ZM50.6145 7.81983V14.2846C50.6145 14.9079 50.6 14.9223 49.9912 14.9223H48.5273C48.1794 14.9079 48.1214 14.8354 48.0924 14.502V14.2121V1.45656C48.0924 0.746306 48.0924 0.731811 48.8172 0.731811H50.1507C50.5565 0.731811 50.6 0.789791 50.6 1.19565V6.15291C50.6145 6.71822 50.6145 7.26902 50.6145 7.81983ZM12.4639 29.0549V35.4472C12.4639 36.027 12.4204 36.056 11.8406 36.056H10.3766C10.0287 36.0415 9.97077 35.969 9.94178 35.6356V35.3457V22.7931C9.94178 22.1118 9.94178 22.1118 10.6375 22.1118H11.9711C12.3914 22.1118 12.4494 22.1698 12.4494 22.6047V25.0688C12.4639 26.3733 12.4639 27.7214 12.4639 29.0549ZM54.963 29.0549V35.4472C54.963 36.027 54.9195 36.056 54.3397 36.056H52.8757C52.5278 36.0415 52.4699 35.969 52.4409 35.6356V35.3457V22.7931C52.4409 22.1118 52.4409 22.1118 53.1366 22.1118H54.4267C54.905 22.1118 54.934 22.1553 54.9485 22.6481C54.963 24.7644 54.963 26.9097 54.963 29.0549Z" fill="#0A0F26" />
          </g>
          <defs>
            <clipPath id="clip0_142_716">
              <rect width="112.97" height="35.73" fill="white" transform="translate(0.5 0.5)" />
            </clipPath>
          </defs>
        </svg>
      </div>

      <div class="w-1/6 md:w-1/4 lg:w-1/12  items-center m-auto">
        <svg class="cnbc" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 62 49" fill="none">
          <g clip-path="url(#clip0_142_718)">
            <path d="M30.9879 4.65106C30.0374 2.27777 27.7217 -0.285355 23.3847 0.0667491C17.8599 0.667336 16.1383 5.96177 16.9733 9.12027C14.7729 7.63033 11.0314 6.97519 7.76566 9.77254C3.54903 13.9993 5.80447 19.7154 8.12247 21.0865C5.56782 20.85 1.53025 22.5762 0.637055 27.0917C-0.31313 32.698 3.96074 35.9663 8.12247 35.9663H54.2712C59.0836 35.9663 61.7537 31.8031 61.4542 27.8768C60.9821 22.7526 56.2929 20.7866 53.7351 21.2079C55.8721 20.0156 58.7261 14.415 54.3863 10.0121C50.9413 6.73532 46.5498 7.92762 45.0056 9.35674C45.838 6.61943 44.4729 0.96106 38.8855 0.0661397C38.4992 0.0228989 38.1274 -0.000244141 37.773 -0.000244141C33.5077 0.000364885 31.5898 3.11823 30.9879 4.65106Z" fill="none" />
            <path d="M8.53417 10.6649C6.09776 12.8704 5.211 17.8679 9.60312 20.7893L27.1252 32.8106L18.6293 13.3467C16.849 8.75368 11.9786 7.7521 8.53417 10.6649ZM23.6174 1.20159C20.7692 1.25962 16.4923 4.65129 18.3956 9.83044L27.1827 30.5535L30.2704 8.75682C30.9849 3.34084 26.8862 0.840698 23.6174 1.20159ZM31.6416 7.9255H33.3032C33.3032 7.9255 34.1905 7.9255 34.3112 8.34407C33.6574 8.87801 31.8777 8.94492 32.114 11.797L34.9071 30.5506L43.6342 9.77311C45.4193 5.1339 41.6724 1.25945 38.3487 1.14103C38.1935 1.1299 38.0377 1.12085 37.8764 1.12085C34.8932 1.12076 31.4746 3.28881 31.6416 7.9255ZM43.2829 13.5232L35.0285 32.7536L52.5455 20.6689C56.5834 17.8049 55.9321 13.2261 53.6718 10.9628C52.7243 9.89752 50.9844 9.07464 49.1414 9.07464C46.964 9.07421 44.6337 10.2291 43.2829 13.5232ZM50.5842 23.4051L34.1337 34.8954H54.389C58.5446 34.8954 61.2152 30.6108 60.028 26.679C59.2329 24.2075 56.8804 22.2675 54.1499 22.2648C53.0006 22.2652 51.7817 22.6114 50.5842 23.4051ZM8.06217 34.8954H28.0187L11.564 23.4051C7.76252 20.9627 3.48812 22.3919 1.945 26.4449C0.636961 31.0846 3.90288 34.8954 8.06217 34.8954ZM0.567444 43.2112C0.567444 45.1681 2.16721 48.7302 8.27568 48.7302C13.9075 48.7302 15.6863 46.146 15.6863 44.9611H11.3262C11.3262 44.9611 11.1191 46.5265 8.65955 46.5265C6.19843 46.5265 5.53284 44.4723 5.53284 43.2844C5.53284 42.1011 6.19843 40.1578 8.65955 40.1578C11.1191 40.1578 11.3262 41.5207 11.3262 41.5207H15.6863C15.6863 40.3344 14.3812 37.7867 8.27568 37.7867C2.16721 37.7867 0.567444 41.5802 0.567444 43.2112ZM46.2936 43.2112C46.2936 45.1681 47.895 48.7302 54.0018 48.7302C59.6332 48.7302 61.4126 46.146 61.4126 44.9611H57.0555C57.0555 44.9611 56.8475 46.5265 54.3874 46.5265C51.926 46.5265 51.2597 44.4723 51.2597 43.2844C51.2597 42.1011 51.926 40.1578 54.3874 40.1578C56.8475 40.1578 57.0555 41.5207 57.0555 41.5207H61.4126C61.4126 40.3344 60.1089 37.7867 54.0018 37.7867C47.8951 37.7867 46.2936 41.5802 46.2936 43.2112ZM27.6024 37.9694V44.5939L22.5282 37.9694H16.8201V48.4621H20.7334V41.7614L25.7188 48.4621H31.5159V37.9694H27.6024ZM40.1422 45.9553V45.9692H36.8816V44.0426H40.1422V44.0488C40.8385 44.0488 41.4011 44.4767 41.4011 45.0036C41.4011 45.5292 40.8385 45.9553 40.1422 45.9553ZM36.9116 40.0101H40.0533V40.0146C40.5856 40.0146 41.0173 40.3647 41.0173 40.7958C41.0173 41.2284 40.5856 41.5756 40.0533 41.5756V41.5803H36.9116V40.0101ZM43.3446 42.8838C44.057 42.8838 45.5466 42.0568 45.5466 40.4547C45.5466 38.1734 41.2984 37.9694 40.6467 37.9694H32.8195V48.4621H40.6467C44.4112 48.4621 45.9235 47.2728 45.9235 45.2869C45.9235 43.3009 43.3446 42.8838 43.3446 42.8838Z" fill="#0A0F26" />
          </g>
          <defs>
            <clipPath id="clip0_142_718">
              <rect width="60.98" height="48.73" fill="white" transform="translate(0.5)" />
            </clipPath>
          </defs>
        </svg>
      </div>

      <div class="w-1/6 md:w-1/4 lg:w-1/12  items-center m-auto">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 78 37" fill="none">
          <g clip-path="url(#clip0_142_721)">
            <path d="M0.508911 0.379883V36.3599H36.7121V0.379883H0.508911ZM17.5504 9.06526C16.9678 7.24777 16.3528 6.68483 13.1485 6.68483H10.6723C9.92788 6.68483 9.76604 6.84567 9.76604 7.5212V12.6681H10.9798C13.5369 12.6681 14.0871 12.2177 14.3946 10.5128H15.0258V16.2548H14.3946C14.0547 14.3408 13.0999 13.8583 10.9798 13.8583H9.76604V19.166C9.76604 20.871 10.2192 21.0479 12.1774 21.1283V21.7556H4.42539V21.1283C6.04377 21.064 6.49691 20.871 6.49691 19.166V8.06805C6.49691 6.36315 6.04377 6.17014 4.47394 6.1058V5.47852H18.1331L18.2302 9.06526H17.5504ZM61.0525 32.0011V33.32H60.8906C60.7126 32.7249 60.2918 32.2745 59.7254 32.2745C59.2561 32.2745 59.0781 32.5801 59.0781 32.8536C59.0781 33.706 61.2467 33.7221 61.2467 35.1857C61.2467 35.8452 60.7126 36.3438 59.952 36.3438C59.2075 36.3438 59.0295 36.0865 58.7382 36.0865C58.6249 36.0865 58.5602 36.1669 58.5278 36.2955H58.3012V34.9445H58.4631C58.6411 35.4913 59.1752 36.0704 59.7901 36.0704C60.1624 36.1025 60.4699 35.8291 60.5022 35.4753V35.3788C60.5022 34.4298 58.3336 34.2529 58.3336 33.0627C58.3336 32.4836 58.9 32.0011 59.5312 32.0011C60.1624 32.0011 60.3728 32.2263 60.6641 32.2263C60.7774 32.2263 60.8583 32.1298 60.8906 32.0011H61.0525ZM49.5782 32.0976L50.6948 34.9927L51.8439 32.0976H53.2843V32.2585C52.8797 32.2745 52.7664 32.3228 52.7664 32.7571V35.6039C52.7664 36.0382 52.8797 36.0865 53.2843 36.1025V36.2634H51.4069V36.1025C51.8115 36.0865 51.941 36.0382 51.941 35.6039V32.6766H51.9248L50.533 36.3116H50.3388L48.9794 32.6766H48.9632V35.4913C48.9632 35.8934 49.0765 36.0543 49.5296 36.1186V36.2795H48.0569V36.1186C48.51 36.0704 48.6233 35.9095 48.6233 35.4913V32.6606C48.6233 32.371 48.4939 32.2585 48.0569 32.2585V32.0976H49.5782ZM57.3788 32.0815L57.4111 32.9983H57.2331C57.0874 32.5319 56.9256 32.3871 56.1002 32.3871H55.4691C55.2749 32.3871 55.2425 32.4354 55.2425 32.5962V33.9151H55.9546C56.6019 33.9151 56.7476 33.8025 56.8285 33.3683H56.9903V34.8319H56.8285C56.7476 34.3494 56.4886 34.2207 55.9546 34.2207H55.2425V35.6683C55.2425 35.9095 55.3234 36.006 56.0517 36.006C56.7961 36.006 57.2493 35.8774 57.6053 35.1375H57.7672L57.492 36.2473H53.8831V36.0865C54.2877 36.0704 54.4009 36.0221 54.4009 35.5878V32.741C54.4009 32.3067 54.2877 32.2585 53.8831 32.2424V32.0815H57.3788ZM47.4419 32.0815V32.2424C46.9402 32.2585 46.8269 32.3067 46.8269 32.741V35.5878C46.8269 36.0221 46.9402 36.0704 47.4419 36.0865V36.2473H45.3704V36.0865C45.8721 36.0704 45.9854 36.0221 45.9854 35.5878V32.741C45.9854 32.3067 45.8721 32.2585 45.3704 32.2424V32.0815H47.4419ZM44.8687 32.0815L44.9658 33.1431H44.7554C44.6259 32.5801 44.4317 32.3871 43.9462 32.3871H43.4283V35.5878C43.4283 36.0221 43.5416 36.0704 44.0109 36.0865V36.2473H42.0042V36.0865C42.4735 36.0704 42.603 36.0221 42.603 35.5878V32.3871H42.0851C41.5996 32.3871 41.4053 32.5801 41.2759 33.1431H41.0979L41.195 32.0815H44.8687ZM58.3012 25.3745L60.7935 28.2374L60.8097 26.1626C60.8097 25.7605 60.6964 25.5997 60.2433 25.5353V25.3745H61.716V25.5353C61.2629 25.5836 61.1496 25.7444 61.1496 26.1626V29.6368H60.9392L58.0747 26.3556V28.7682C58.0747 29.1703 58.1879 29.3312 58.6411 29.3955V29.5563H57.1684V29.3955C57.6215 29.3472 57.7348 29.1864 57.7348 28.7682V25.9535C57.6215 25.7283 57.4111 25.5675 57.1684 25.5353V25.3745H58.3012ZM48.9955 25.3745L51.4879 28.2374V26.1626H51.504C51.504 25.7605 51.3908 25.5997 50.9376 25.5353V25.3745H52.4103V25.5353C51.9572 25.5836 51.8439 25.7444 51.8439 26.1626V29.6368H51.6335L48.769 26.3556V28.7682C48.769 29.1703 48.8823 29.3312 49.3354 29.3955V29.5563H47.8627V29.3955C48.3158 29.3472 48.4291 29.1864 48.4291 28.7682V25.9535C48.3158 25.7283 48.1054 25.5675 47.8627 25.5353V25.3745H48.9955ZM64.2569 25.278C64.6938 25.278 65.3088 25.5192 65.4059 25.5192C65.5354 25.5192 65.5677 25.4549 65.6649 25.278H65.8752L65.9562 26.6612H65.7781C65.5354 26.0178 65.0984 25.5514 64.354 25.5514C63.3668 25.5514 62.9298 26.613 62.9298 27.4172C62.9298 28.543 63.4153 29.2829 64.4511 29.2829C65.2603 29.2829 65.7134 28.6878 65.9076 28.4144L66.0856 28.5591C65.6487 29.299 65.0822 29.6368 64.2083 29.6368C62.8489 29.6368 62.0397 28.7521 62.0397 27.4172C62.0559 26.2269 63.0269 25.2619 64.2407 25.278H64.2569ZM54.7246 25.278L56.1973 28.8647C56.3592 29.2507 56.4401 29.3794 56.7476 29.3794V29.5402H54.9512V29.3794C55.2425 29.3794 55.3881 29.3151 55.3881 29.1221C55.3881 28.9451 55.1778 28.4787 55.1292 28.35H53.6079C53.5594 28.4948 53.3652 28.9451 53.3652 29.1221C53.3652 29.3151 53.5108 29.3794 53.8021 29.3794V29.5402H52.4751V29.3794C52.7178 29.3633 52.912 29.2186 52.9929 28.9934L54.5304 25.278H54.7246ZM75.7474 25.3906V25.5514C75.278 25.5675 75.1647 25.6157 75.1647 26.05V28.9612C75.1647 29.2186 75.2457 29.299 75.715 29.299C76.4594 29.299 76.9126 29.1703 77.2686 28.4305H77.4305L77.1553 29.5402H73.8215V29.3794C74.2261 29.3633 74.3394 29.3151 74.3394 28.8808V26.05C74.3394 25.6157 74.2261 25.5675 73.8215 25.5514V25.3906H75.7474ZM44.5936 25.3906L44.6097 26.3074H44.4317C44.2861 25.8409 44.1242 25.6962 43.2989 25.6962H42.6677C42.4735 25.6962 42.4411 25.7444 42.4411 25.9053V27.2241H43.1532C43.8006 27.2241 43.9462 27.1116 44.0271 26.6773H44.189V28.1409H44.0271C43.9462 27.6584 43.6873 27.5297 43.1532 27.5297H42.4411L42.4573 28.8808C42.4573 29.3151 42.5706 29.3633 43.0723 29.3794V29.5402H41.0979V29.3794C41.5025 29.3633 41.6319 29.3151 41.6319 28.8808V26.05C41.6319 25.6157 41.5186 25.5675 41.114 25.5514V25.3906H44.5936ZM47.1991 25.3906V25.5514C46.6974 25.5675 46.5842 25.6157 46.5842 26.05V28.8808C46.5842 29.3151 46.6974 29.3633 47.1991 29.3794V29.5402H45.1276V29.3794C45.6293 29.3633 45.7426 29.3151 45.7426 28.8808V26.05C45.7426 25.6157 45.6293 25.5675 45.1276 25.5514V25.3906H47.1991ZM68.7398 25.3906V25.5514C68.2381 25.5675 68.1248 25.6157 68.1248 26.05V28.8808C68.1248 29.3151 68.2381 29.3633 68.7398 29.3794V29.5402H66.6683V29.3794C67.17 29.3633 67.2832 29.3151 67.2832 28.8808V26.05C67.2832 25.6157 67.17 25.5675 66.6683 25.5514V25.3906H68.7398ZM71.4263 25.278L72.899 28.8647C73.0609 29.2507 73.1418 29.3794 73.4493 29.3794V29.5402H71.6367V29.3794C71.9118 29.3794 72.0736 29.3151 72.0736 29.1221C72.0736 28.9451 71.8633 28.4787 71.8147 28.35H70.2934C70.2449 28.4948 70.0507 28.9451 70.0507 29.1221C70.0507 29.3151 70.1963 29.3794 70.4876 29.3794V29.5402H69.1606V29.3794C69.4033 29.3633 69.5975 29.2186 69.6784 28.9934L71.2159 25.278H71.4263ZM54.3848 26.4039L53.7536 28.0444H54.9997L54.3848 26.4039ZM71.0864 26.4039L70.4553 28.0444H71.7014L71.0864 26.4039ZM33.6048 5.47852L33.9446 9.06526H33.1031C32.5852 7.3121 31.8084 6.66874 30.0767 6.66874H28.0537V19.1339C28.0537 20.8388 28.5069 21.0157 30.368 21.0961V21.7234H22.4865V21.0961C24.3315 21.0318 24.8008 20.8388 24.8008 19.1339V6.66874H22.7778C21.0461 6.66874 20.2855 7.3121 19.7514 9.06526H18.9261L19.2659 5.47852H33.6048Z" fill="#0A0F26" />
          </g>
          <defs>
            <clipPath id="clip0_142_721">
              <rect width="76.98" height="35.98" fill="white" transform="translate(0.5 0.379883)" />
            </clipPath>
          </defs>
        </svg>
        S/div>

        <div class="w-1/6 md:w-1/4 lg:w-1/12  items-center m-auto">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 114 31" fill="none">
            <g clip-path="url(#clip0_142_724)">
              <path d="M11.3974 3.33438H13.871C15.3774 3.11257 16.9158 3.30759 18.3191 3.89826C20.0796 4.95695 21.3566 6.66133 21.8776 8.64781C22.2464 9.68881 22.2464 9.68881 23.136 9.32012H23.8304V1.07889H0.548381V2.53195H1.50309C1.91797 2.52908 2.32822 2.61915 2.70371 2.79554C3.07919 2.97193 3.41036 3.23016 3.6729 3.55126C4.56252 4.98263 4.71441 6.5875 4.71441 14.9372C4.71441 23.8073 4.51912 25.9761 3.6729 27.0821C3.46399 27.3665 3.19352 27.6 2.88167 27.7652C2.56983 27.9305 2.22467 28.0232 1.87196 28.0364C0.548381 28.275 0.548381 28.2533 0.548381 28.8388C0.475186 29.0346 0.475186 29.2503 0.548381 29.4461H15.238C15.3352 29.2545 15.3858 29.0428 15.3858 28.828C15.3858 28.6132 15.3352 28.4014 15.238 28.2099C14.8822 28.111 14.5195 28.0385 14.1531 27.993C13.7566 27.9459 13.3647 27.8661 12.9814 27.7545C12.4324 27.3539 11.9976 26.8171 11.7198 26.1971C11.442 25.5772 11.3309 24.8955 11.3974 24.2194C11.1804 22.788 11.0719 20.1638 11.0719 17.9951V16.2818H11.9399C13.0212 16.2487 14.1019 16.3655 15.1512 16.6288C15.6538 16.9393 16.0817 17.3568 16.4043 17.8517C16.7269 18.3466 16.9361 18.9065 17.0172 19.4915L17.2125 20.1638H18.5361V10.5563H17.321L17.1257 11.4889C17.0435 12.0872 16.8221 12.6578 16.4792 13.155C16.1362 13.6522 15.6814 14.0621 15.1512 14.3516C14.6377 14.5043 14.0967 14.5414 13.5672 14.46H11.0719V12.1178C11.0719 9.68881 11.2021 4.57057 11.2889 3.76813L11.3974 3.33438ZM112.944 20.5325C111.919 18.8826 110.319 17.6699 108.453 17.1276C107.022 16.6806 105.7 15.9422 104.569 14.9589C104.314 14.7128 104.124 14.4083 104.014 14.0719C103.905 13.7355 103.879 13.3773 103.94 13.0287C103.941 12.3448 104.214 11.6896 104.699 11.2069C105.027 10.8631 105.443 10.6149 105.902 10.4888C106.36 10.3628 106.845 10.3636 107.303 10.4912C108.251 10.7614 109.109 11.2831 109.785 12.0009C110.461 12.7186 110.931 13.6058 111.143 14.5685C111.49 15.5444 111.534 15.5444 112.163 15.2842L112.554 15.1324V9.73218L112.272 9.60206C110.135 8.85217 107.869 8.54232 105.61 8.69119C103.665 8.74046 101.808 9.51385 100.403 10.8599C99.7656 11.4561 99.2665 12.1843 98.9404 12.9934C98.6144 13.8026 98.4692 14.6733 98.515 15.5444C98.5272 16.8763 99.0562 18.1514 99.9905 19.1012C101.023 20.1161 102.29 20.861 103.679 21.2699C107.042 22.5928 108.019 23.4387 108.019 24.9785C108.033 25.6278 107.826 26.2628 107.432 26.779C107.038 27.2953 106.479 27.6622 105.849 27.8195C105.091 27.9859 104.307 27.9859 103.549 27.8195C102.557 27.4347 101.671 26.8187 100.966 26.0228C100.26 25.2269 99.7545 24.274 99.4915 23.2435L99.2094 22.5495H98.8188C98.6322 22.5633 98.449 22.6073 98.2764 22.6796H98.0594V28.8388H98.4283C99.8941 29.3262 101.407 29.6606 102.941 29.8365H105.111C106.052 29.9055 106.998 29.8175 107.91 29.5762C109.068 29.3626 110.15 28.8499 111.049 28.089C111.947 27.328 112.63 26.3454 113.031 25.2387C113.29 24.6206 113.423 23.957 113.422 23.2868C113.507 22.3428 113.342 21.3928 112.944 20.5325ZM92.5047 9.32012C91.2045 8.77449 89.8035 8.50981 88.3937 8.54344C86.984 8.57708 85.5972 8.90828 84.3245 9.51531C83.1282 10.1002 82.0679 10.9293 81.2121 11.9491C80.3562 12.9689 79.7238 14.1568 79.3557 15.436C78.8863 16.8315 78.6875 18.3036 78.7698 19.7735C78.7543 20.5732 78.8197 21.3725 78.9651 22.1591C79.3155 24.0932 80.2497 25.8738 81.6422 27.2617C83.0346 28.6496 84.8187 29.5784 86.7547 29.9232C88.0154 30.082 89.2911 30.082 90.5519 29.9232C91.8601 29.6927 93.1122 29.2142 94.2405 28.5135C95.1739 27.9905 95.9639 27.2456 96.5405 26.3448C96.5035 26.2034 96.4383 26.071 96.3488 25.9555C96.2593 25.8399 96.1474 25.7437 96.0198 25.6725C95.7721 25.7621 95.5384 25.8862 95.3254 26.0411C94.2462 26.7521 92.9718 27.1084 91.6802 27.0605C90.8229 27.1184 89.9634 26.985 89.164 26.6699C88.3647 26.3548 87.6455 25.8659 87.0585 25.2387C86.6044 24.8172 86.2296 24.3177 85.9519 23.764C85.2776 22.4157 84.9143 20.9336 84.8887 19.4265V18.5807H96.9094V18.1469C96.9359 17.7136 96.9359 17.279 96.9094 16.8457C96.9051 15.3143 96.4953 13.8114 95.7216 12.4896C94.948 11.1678 93.8381 10.0743 92.5047 9.32012ZM86.4509 16.824H84.9321V15.5444C85.4311 12.2696 86.6679 10.3177 88.1868 10.3177C89.7056 10.3177 90.3566 12.2479 90.6387 15.783V16.7806H89.3368L86.4509 16.824ZM55.2491 8.60444C54.4994 8.57537 53.7541 8.73182 53.0793 9.05987C51.6128 9.77171 50.4283 10.9556 49.7161 12.4214L49.4341 12.9419V8.60444H49.3256C49.0652 8.60444 41.0369 10.2093 40.7766 10.3177C40.5162 10.4262 40.603 10.4479 40.603 10.8382C40.603 11.2286 40.603 11.2937 40.7766 11.3154L41.6228 11.4889C41.8598 11.4947 42.0924 11.5543 42.3029 11.6633C42.5134 11.7723 42.6964 11.9277 42.8379 12.1178C43.3803 12.8335 43.4888 14.0914 43.4888 19.4482C43.596 21.8597 43.4943 24.276 43.185 26.6701C43.1122 27.0311 42.9291 27.3606 42.6609 27.6131C42.3927 27.8656 42.0527 28.0287 41.6879 28.0798L40.9501 28.2316H40.6681V28.8388C40.5894 29.0411 40.5894 29.2655 40.6681 29.4678H52.7973V28.8388C52.8394 28.6313 52.8394 28.4174 52.7973 28.2099C52.067 28.1814 51.3408 28.0871 50.6275 27.928C50.239 27.7249 49.9213 27.409 49.716 27.0218C49.5107 26.6347 49.4275 26.1945 49.4775 25.7592C49.3039 24.5013 49.2171 20.8145 49.2605 17.9951C49.3039 15.1757 49.2605 15.0022 49.4992 14.807C50.2252 14.2506 51.1237 13.9666 52.0378 14.0046C52.8995 14.0234 53.7455 14.2385 54.5114 14.6335C54.7769 14.7809 55.0618 14.8904 55.3576 14.9589C55.3576 14.9589 57.5274 9.7105 57.5274 9.47193C57.2498 9.14943 56.896 8.90121 56.4982 8.74975C56.1004 8.59828 55.6711 8.54833 55.2491 8.60444ZM40.6247 17.7132C40.5489 16.1634 40.1038 14.6541 39.3263 13.3112C38.5488 11.9682 37.4614 10.8303 36.1549 9.99243C34.6022 9.15518 32.8746 8.69354 31.1111 8.64458C29.3475 8.59561 27.597 8.96069 26.0002 9.7105C23.7425 10.9004 22.0378 12.9232 21.2483 15.3492C20.4328 18.0654 20.4328 20.9611 21.2483 23.6772C21.6758 25.1617 22.4749 26.5127 23.57 27.6026C24.9339 28.9329 26.6926 29.7851 28.5823 30.0316C29.7952 30.133 31.0145 30.133 32.2275 30.0316C32.6739 29.9638 33.1158 29.8696 33.5511 29.7497C35.3172 29.2559 36.9062 28.2696 38.1319 26.9061C39.3577 25.5427 40.1697 23.8585 40.4728 22.0507C40.6894 20.6154 40.7404 19.16 40.6247 17.7132ZM31.5983 28.5569C29.4285 29.2075 27.8011 27.1038 27.2587 22.6796C27.0595 20.3633 27.0595 18.0342 27.2587 15.7179C27.6926 12.1612 28.7992 10.3611 30.5134 10.3611C30.8592 10.3397 31.2051 10.4014 31.5222 10.541C31.8393 10.6806 32.1184 10.8941 32.336 11.1636C33.7898 12.6166 34.5058 15.501 34.5058 19.8385C34.6864 22.2933 34.3003 24.7567 33.3775 27.0388C32.9701 27.7043 32.3396 28.2038 31.5983 28.4485V28.5569ZM70.6548 9.03819C70.0425 8.95944 69.4227 8.95944 68.8104 9.03819C67.6352 9.03719 66.4734 9.28865 65.4038 9.77556L64.7312 10.0575V5.35132C64.8487 3.76307 64.8487 2.16832 64.7312 0.580078C64.4708 0.580078 56.1822 2.16326 56.052 2.22832C55.988 2.38844 55.988 2.56702 56.052 2.72714C56.052 3.18257 56.052 3.16088 57.0284 3.37776C57.3025 3.43921 57.5659 3.54157 57.8095 3.68138C58.2331 4.07948 58.515 4.60492 58.6123 5.17782C58.8594 6.82828 58.9394 8.49944 58.851 10.1659V29.2075L59.4369 29.3376C60.3048 29.5328 62.7567 29.9449 63.5595 30.0316C65.1626 30.1591 66.7733 30.1591 68.3765 30.0316C70.1559 29.85 71.8519 29.1865 73.2819 28.1126C74.7119 27.0387 75.8217 25.5951 76.4915 23.9375C76.8909 22.8735 77.1675 21.7676 77.3161 20.641C77.4452 19.1149 77.3942 17.579 77.1642 16.0649C76.9314 14.3677 76.1819 12.7831 75.0175 11.5261C73.853 10.2691 72.3299 9.40053 70.6548 9.03819ZM64.9699 28.1882C64.9699 27.9063 64.7529 18.4072 64.7963 14.6119V11.6407L65.4255 11.4889C65.8501 11.4281 66.2812 11.4281 66.7057 11.4889C67.1752 11.4411 67.6475 11.5477 68.051 11.7925C68.8613 12.3515 69.5342 13.0869 70.019 13.9434C70.5039 14.7998 70.788 15.7551 70.85 16.7372C71.0081 18.3165 71.0081 19.9075 70.85 21.4868C70.7202 23.7821 69.8353 25.9702 68.3331 27.7111C67.9067 28.1159 67.3712 28.3873 66.7925 28.4918C66.3546 28.568 65.9068 28.568 65.4689 28.4918C65.0567 28.4918 65.0567 28.3617 65.0567 28.1882H64.9699Z" fill="#0A0F26" />
            </g>
            <defs>
              <clipPath id="clip0_142_724">
                <rect width="112.97" height="29.56" fill="white" />
              </clipPath>
            </defs>
          </svg>
        </div>

        <div class="w-1/3 md:w-1/4 lg:w-1/12  items-center m-auto">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 186 15" fill="none">
            <g clip-path="url(#clip0_142_726)">
              <path d="M39.0812 8.05341L39.1836 8.07889L39.1576 8.18132L39.3115 8.00246L39.0812 8.05341ZM39.1066 7.79759L39.2345 7.66967L39.0557 7.69515V7.72117L39.1321 7.74664L39.1066 7.79759ZM38.6975 8.84636H38.5436V8.87183L38.5951 8.89731L38.5696 8.9488L38.6975 8.84582V8.84636ZM39.0042 8.61601H38.8254V8.64148L38.9018 8.6675L38.8763 8.74392L39.0042 8.61601ZM39.1576 8.43715L39.2605 8.46262L39.2345 8.56506H39.26L39.3879 8.3862L39.1576 8.43715ZM38.6715 9.1786L38.723 9.23009L38.6975 9.28104L38.8254 9.1786V9.15313L38.6715 9.1786ZM39.5927 9.20462L39.6951 9.10164L39.5418 9.12766V9.15313L39.5927 9.1786V9.20462ZM39.6696 8.25829L39.8485 8.02794L39.5667 8.10436V8.13038L39.6951 8.15585L39.6696 8.25829ZM39.1321 8.92278H38.9533V8.9488L39.0297 8.97427L38.9788 9.05069L39.1321 8.92278ZM39.4648 7.6442L39.5927 7.66967L39.5418 7.79759L39.746 7.59325L39.4648 7.6442ZM39.3879 8.92332L39.5418 8.74446L39.3115 8.79541V8.82088L39.4133 8.84636L39.3879 8.92278V8.92332ZM39.8485 7.15803L39.9763 7.0816V7.05613H39.823V7.0816L39.8739 7.10708L39.8485 7.15803ZM39.4393 7.38838L39.6436 7.26047V7.23499H39.4133V7.26047L39.5163 7.31141L39.4393 7.38838ZM40.2066 8.53959L40.2836 8.56506L40.2576 8.64148L40.3855 8.51357L40.2066 8.53959ZM40.7436 7.23499L40.8715 7.15803V7.13255H40.7182V7.15803L40.7697 7.18404L40.7436 7.23499ZM39.286 9.20462H39.1321V9.23009L39.1836 9.25557L39.1576 9.30652L39.286 9.20462ZM40.3345 7.18404L40.4879 7.08106V7.05613H40.3091V7.0816L40.3855 7.10708L40.3345 7.18404ZM40.0528 8.15585L40.1557 8.18132L40.1297 8.28376H40.1557L40.3091 8.1049L40.0528 8.15585ZM40.2066 6.82578H40.949C40.949 6.82578 41.1788 6.92822 41.5115 7.03012C41.6394 7.08161 41.7418 7.20897 41.7158 7.3629L41.9206 7.56724C42.0053 7.64861 42.0162 7.78033 41.9461 7.87455C41.8951 7.9255 41.8182 7.97645 41.7418 7.97645V7.95097C41.7927 7.90003 41.7672 7.82306 41.7158 7.74664C41.6648 7.66968 41.6394 7.66968 41.5879 7.69515C41.5624 7.72117 41.537 7.72117 41.537 7.72117L41.6648 7.90003V7.9255C41.5639 7.95274 41.4561 7.92331 41.3831 7.84854H40.7957V7.87455L41.1284 7.9255V7.95097L40.0284 9.25557L40.412 8.92278V9.23009L40.386 9.30652L40.412 9.51139V9.58781L40.7442 9.89513H40.8206L40.8461 9.9206L40.8715 9.94608L40.8975 9.97155C40.8975 9.97155 40.8975 9.99702 40.923 9.99702C40.923 9.99702 40.923 10.023 40.9485 10.023V10.151H40.9739V10.1249V10.0995V10.0485V10.023V9.99702C40.9739 9.99702 40.9739 9.97155 40.9485 9.97155C40.9485 9.97155 40.9485 9.94608 40.923 9.94608L40.8975 9.9206L40.8715 9.89513H40.8461C40.8975 9.89513 40.923 9.86911 40.9739 9.86911H41.0509L41.0764 9.89513L41.1018 9.9206L41.1278 9.94608C41.1278 9.94608 41.1278 9.97155 41.1533 9.97155V10.1249H41.1788V10.0995V10.074V10.023V9.99702V9.97155C41.1788 9.97155 41.1788 9.94608 41.1533 9.94608C41.1533 9.94608 41.1533 9.9206 41.1278 9.9206L41.1018 9.89513L41.0764 9.86911H41.0509C41.6648 9.74174 42.1254 9.6393 42.1254 9.6393C42.7394 9.99702 42.6879 9.97155 42.8158 10.0485C43.0461 10.1764 43.0461 10.5602 42.586 10.5602C42.1509 10.5602 41.6903 10.6111 41.2557 10.6881L41.5879 10.3808C41.3576 10.5341 41.1273 10.6881 40.8715 10.816C40.6672 10.8924 40.3345 11.0458 40.0018 11.1737L40.4879 10.713C40.1557 10.9948 39.7975 11.2252 39.4393 11.4555C39.1836 11.5829 38.9533 11.6854 38.8254 11.7363C38.6715 11.8133 38.4672 11.8393 38.3133 11.7623C38.0066 11.6593 37.8787 11.6084 37.5975 11.5065C37.4946 11.4805 37.4436 11.3786 37.4946 11.2761C37.5206 11.2252 37.546 11.1737 37.5975 11.1737C37.6739 11.1482 37.8533 11.0973 37.9812 11.0458C38.0321 11.0713 38.0836 11.0973 38.16 11.1228C38.2369 11.1737 38.3388 11.1992 38.4157 11.2252C38.4672 11.2507 38.4927 11.2507 38.5436 11.2761H38.5951C38.6206 11.2761 38.6206 11.3016 38.646 11.3016C38.6715 11.3271 38.6975 11.3526 38.6975 11.3786V11.532H38.723V11.5065V11.455V11.3786C38.7166 11.3398 38.6987 11.3039 38.6715 11.2756C38.646 11.2507 38.646 11.2507 38.6206 11.2507L38.5951 11.2252C38.5696 11.1992 38.5182 11.1737 38.4921 11.1482C38.4106 11.0915 38.3253 11.0403 38.2369 10.9948C38.0581 10.8924 37.8533 10.79 37.7254 10.713C37.7254 10.713 38.3903 10.5087 39.2091 10.2789L39.3369 10.3298L39.26 10.2789L39.0557 10.1L38.9527 10.074L38.8769 9.89513L38.7739 9.84364L38.6715 9.43443H38.646L38.6715 9.89513L38.4157 10.0485V9.43443H38.3903L38.3133 10.074L37.9557 10.151L38.0836 9.4599H38.0576L37.8533 10.1764L37.5206 10.2019L37.7763 9.4599H37.7509L37.3927 10.2019L37.06 10.2274L37.4436 9.4599L36.9066 10.2528L36.5484 10.3043L37.1369 9.43443L36.1648 10.5856L36.1133 10.5602L36.983 9.1786L38.3393 8.6675C38.3393 8.6675 38.4412 8.61601 38.4927 8.61601C38.5182 8.61601 38.5436 8.59053 38.5696 8.59053C38.5951 8.59053 38.5951 8.56506 38.6206 8.56506C38.646 8.56506 38.646 8.53959 38.6715 8.53959C38.6975 8.51357 38.723 8.4881 38.7485 8.4881L38.7739 8.46262L38.7994 8.43715L38.8254 8.41167L38.8509 8.38566L38.8763 8.36018C38.8763 8.36018 38.8763 8.33471 38.9018 8.33471C38.9018 8.33471 38.9018 8.30924 38.9273 8.30924C38.9273 8.28376 38.9533 8.25829 38.9533 8.25829V8.2068V8.18132H38.9273V8.2068C38.9273 8.23227 38.9273 8.23227 38.9018 8.25829C38.9018 8.28376 38.8763 8.28376 38.8763 8.30924C38.8763 8.30924 38.8763 8.33471 38.8509 8.33471C38.8509 8.33471 38.8509 8.36018 38.8254 8.36018L38.7994 8.38566L38.7739 8.41167L38.7485 8.43715L38.723 8.46262L38.6975 8.4881C38.6715 8.51357 38.646 8.51357 38.6206 8.53959L38.5951 8.56506C38.5696 8.56506 38.5696 8.59053 38.5436 8.59053C38.5182 8.59053 38.4927 8.61601 38.4672 8.61601C38.4157 8.64148 38.3643 8.64148 38.3133 8.6675C38.2624 8.69297 38.2369 8.69297 38.2115 8.69297L38.1345 8.51411L38.3133 8.36018L37.8527 8.64202L37.7509 8.41167L38.3903 7.95097V7.9255L37.4181 8.4881L37.3412 8.25829L38.2369 7.6442L37.06 8.28376L36.9066 8.02794L37.9042 7.38838V7.3629L36.7018 7.97645L36.6763 7.72117L37.6739 7.18404V7.15803L36.446 7.66967V7.41385L37.4436 7.03012V7.00464L36.2157 7.33743L36.2412 7.05559L37.1624 6.85126V6.82578L35.96 6.97917L35.9854 6.74882L36.8551 6.64692V6.62091L35.6273 6.64692L35.6533 6.44205H36.6254V6.41657L34.86 6.28866V6.26319L35.1417 6.1602V6.13527L34.4248 5.85343V5.8285L34.7066 5.80303V5.77755L34.0672 5.39382V5.3678L34.5018 5.39327V5.3678L33.9902 4.88163V4.85615L34.2205 4.90764L33.9902 4.60033L33.8369 4.16564H33.8624L34.0927 4.44748L34.6042 4.75371L34.2715 4.26808L34.1436 3.73096H34.1691L34.4248 4.14017L34.9369 4.57485L34.6297 3.98678L34.5272 3.27026H34.5533L34.86 3.85887L35.4994 4.39545L35.0388 3.68001L34.9369 2.8101H34.9624L35.2441 3.57757L36.1648 4.39599L37.3412 4.98406L38.6206 6.74882L39.1066 7.15803L38.8763 6.87673L39.3879 6.74882V6.72334L38.9533 6.69787V6.6724L39.6182 6.54448V6.51901L38.7999 6.46752V6.44205L39.8485 6.26319L40.2576 6.36508V6.33961L39.8739 6.16075L39.2345 6.18622V6.16075L39.9254 6.03284L40.36 6.18622V6.16075L39.9763 5.90492L39.5157 5.87945V5.85398L40.0278 5.77701L40.4884 5.98189V5.95587L40.1297 5.59815H39.7206V5.57268L40.2066 5.4697L40.6418 5.82796L40.3091 5.34233L39.9509 5.26536V5.23989L40.4115 5.21441L40.8206 5.72606L40.5139 5.0865L40.1042 4.95859V4.93312L40.6158 4.98406L41 5.6491H41.0254L40.7697 4.88163L40.2576 4.70277V4.67729L40.8715 4.77973L41.2042 5.57268H41.2297L41 4.67729L40.4624 4.37052V4.3445L41.1018 4.57485L41.4091 5.47024H41.4345L41.2557 4.49843L40.6672 4.06321V4.03773L41.3321 4.42147L41.5879 5.3678H41.6139L41.4351 4.37052L40.8206 3.8334L41.537 4.31903L41.7418 5.26536H41.7672L41.6648 4.24261L41.0509 3.57757L41.7672 4.19112L41.9206 5.11252H41.9461L41.8697 4.14017L41.3067 3.39817L41.9721 4.1147L42.0739 4.90764H42.1L42.0739 4.06321L41.537 3.24479L42.1504 4.0128L42.2273 4.60087H42.2528L42.2273 3.98733L41.8431 3.14343H41.8691L42.3297 3.93584L42.3807 4.26862H42.4061L42.4316 3.9109L42.2273 3.11742H42.2528L42.5085 3.78245H42.534L42.6874 3.11742H42.7134L42.6619 3.75698H42.6874L43.1479 3.11742L42.8662 3.70603L43.5576 3.21985L42.5085 4.62689C42.5085 4.62689 42.1758 5.5472 42.0479 5.8285C42.0225 5.87999 41.997 5.93148 41.9201 5.95641C41.8946 5.98243 41.0758 6.2892 41.0758 6.2892L40.8455 6.49354L40.2061 6.82632L40.2066 6.82578ZM39.0557 1.12231C35.4994 1.12231 32.609 4.01226 32.609 7.56724C32.609 11.1228 35.4994 14.0127 39.0557 14.0127C42.6115 14.0127 45.5024 11.1228 45.5024 7.56724C45.5024 4.0128 42.6109 1.12231 39.0557 1.12231ZM40.0018 7.72117L40.1297 7.74664L40.0788 7.87455H40.1042L40.283 7.66967L40.0018 7.72117ZM40.5139 8.25775L40.5648 8.28376L40.5394 8.33471L40.6418 8.23227L40.5139 8.25829V8.25775ZM39.5157 10.2789C39.5157 10.3043 39.5418 10.3043 39.5157 10.2789L39.5418 10.3043L39.5672 10.3298L39.5927 10.3553C39.5927 10.3553 39.5927 10.3808 39.6182 10.3808C39.6182 10.3808 39.6182 10.4062 39.6436 10.4062V10.5341H39.6696V10.5087V10.4832V10.4577V10.4322V10.4062V10.3808C39.6696 10.3808 39.6696 10.3553 39.6436 10.3553V10.3298L39.6182 10.3043C39.6182 10.3043 39.5927 10.3043 39.5927 10.2789H39.5672H39.5418H39.5157H39.4903H39.4648V10.3043C39.4903 10.2789 39.4903 10.2789 39.5157 10.2789ZM40.1042 10.5341C40.0788 10.5341 40.0788 10.5341 40.0533 10.5602C40.0278 10.5602 39.9763 10.5856 39.9254 10.5856C39.8994 10.5856 39.8485 10.6111 39.7975 10.6111C39.7715 10.6111 39.746 10.6111 39.746 10.6366L39.6696 10.6621C39.5927 10.6881 39.4908 10.7135 39.3879 10.765C39.3369 10.79 39.26 10.816 39.2091 10.8409C39.1836 10.8409 39.1321 10.8669 39.1061 10.8669C39.0812 10.8669 39.0557 10.8924 39.0302 10.8924C39.0042 10.8924 39.0042 10.8924 38.9788 10.9179C38.9533 10.9179 38.9273 10.9434 38.9018 10.9434H38.8763C38.8254 10.9694 38.7994 10.9694 38.7485 10.9948C38.723 10.9948 38.723 11.0203 38.6975 11.0203C38.646 11.0458 38.6206 11.0458 38.6206 11.0458V11.0713C38.6206 11.0713 38.646 11.0713 38.6975 11.0458C38.723 11.0458 38.723 11.0458 38.7485 11.0203C38.7739 11.0203 38.8254 10.9948 38.8763 10.9694L38.9018 10.9434C38.9273 10.9434 38.9533 10.9179 38.9788 10.9179L39.0302 10.8924C39.0562 10.8924 39.0806 10.8669 39.1061 10.8669C39.1316 10.8669 39.1576 10.8415 39.2091 10.8415C39.26 10.816 39.3369 10.7905 39.3879 10.765C39.4908 10.7396 39.5667 10.6881 39.6696 10.6621C39.7206 10.6366 39.746 10.6366 39.7975 10.6111C39.823 10.6111 39.8485 10.5856 39.8739 10.5856H39.8994C39.9509 10.5602 39.9763 10.5602 40.0278 10.5341C40.0533 10.5341 40.0533 10.5341 40.0788 10.5087L40.1557 10.4832V10.4577L40.1042 10.5341ZM38.8509 10.739L38.9018 10.7135C38.9788 10.6881 39.0297 10.6621 39.1066 10.6366C39.1321 10.6366 39.1576 10.6111 39.1836 10.6111H39.2091L39.2855 10.5856C39.3115 10.5856 39.3624 10.5602 39.3884 10.5602H39.4133C39.4393 10.5602 39.4648 10.5341 39.4648 10.5341V10.5087H39.3879C39.3624 10.5087 39.3369 10.5341 39.2855 10.5341L39.2091 10.5602C39.1836 10.5602 39.1576 10.5602 39.1321 10.5856H39.1066C39.04 10.6153 38.9716 10.6408 38.9018 10.6621C38.8509 10.6881 38.7994 10.6881 38.7485 10.7135L38.6975 10.739H38.6715C38.6206 10.7645 38.5696 10.79 38.5182 10.79C38.4927 10.79 38.4672 10.816 38.4672 10.816H38.4412L38.3903 10.8415C38.3648 10.8415 38.3393 10.8669 38.3393 10.8669V10.8924C38.3393 10.8924 38.3648 10.8924 38.3903 10.8669H38.4672C38.4927 10.8669 38.4927 10.8669 38.5182 10.8415C38.5436 10.8415 38.5951 10.816 38.6206 10.816C38.646 10.816 38.6715 10.79 38.6975 10.79C38.7485 10.7645 38.7994 10.7645 38.8509 10.739ZM39.8994 8.89731L39.9763 8.92278L39.9509 8.99974L40.0788 8.87183L39.8999 8.89731H39.8994ZM39.7715 8.69297L39.9254 8.46262L39.6436 8.56506V8.59053H39.7715V8.69297ZM40.6418 7.82306L40.4629 7.84854V7.87455L40.5388 7.90003L40.5139 7.97645L40.6418 7.82306ZM39.7715 9.89513L39.3879 9.43443H39.3624L39.4648 9.99702L39.6696 10.2274H39.746L39.7715 10.2528L39.7975 10.2789L39.823 10.3043C39.823 10.3043 39.823 10.3298 39.8485 10.3298C39.8485 10.3298 39.8485 10.3553 39.8739 10.3553V10.4832H39.8994V10.4577V10.4322V10.3808V10.3553V10.3298C39.8994 10.3298 39.8994 10.3043 39.8739 10.3043C39.8739 10.3043 39.8739 10.2789 39.8485 10.2789L39.823 10.2528L39.7975 10.2274H39.7715C39.7975 10.2274 39.8485 10.2019 39.8745 10.2019H39.9503C39.9503 10.2019 39.9758 10.2019 39.9758 10.2274L40.0013 10.2528L40.0273 10.2789C40.0273 10.2789 40.0273 10.3043 40.0528 10.3043C40.0528 10.3043 40.0528 10.3298 40.0782 10.3298V10.4577H40.1037V10.4322V10.4062V10.3298V10.3043C40.1037 10.3043 40.1037 10.2789 40.0782 10.2789C40.0782 10.2789 40.0782 10.2528 40.0528 10.2528L40.0273 10.2274L40.0013 10.2019H39.9758L40.283 10.1249L39.9503 9.94608L39.7715 9.89513ZM40.4109 7.41385L40.5139 7.46534L40.4624 7.56724L40.6412 7.41385V7.38838L40.4109 7.41385ZM37.06 5.31631L36.6254 5.54666L36.5994 5.41875H36.5739V5.62363H36.5994L37.06 5.31685V5.31631ZM37.4691 5.82796L36.8551 6.16075L36.8297 6.03284H36.8042V6.23771H36.8297L37.4691 5.82796ZM37.2648 5.57268L36.7018 5.87945L36.6763 5.75154H36.6509V5.95587H36.6763L37.2648 5.57268ZM38.16 6.59543L37.7254 6.82578L37.6994 6.69787H37.6745V6.9022H37.6999L38.16 6.59543ZM37.9297 6.33961L37.4181 6.62145L37.3927 6.49299H37.3672V6.69787H37.3927L37.9297 6.34015V6.33961ZM37.6994 6.08378L37.1114 6.3911L37.0854 6.26319H37.06V6.46752H37.0854L37.6994 6.08378ZM36.2927 5.77701L34.9624 5.39327L34.3739 4.90764L34.3484 4.93312L34.9109 5.49571L36.2927 5.77755V5.77701ZM36.3181 5.49571L35.1927 5.11198L34.6297 4.60033L34.6042 4.62634L35.1157 5.21441L36.3181 5.49571ZM39.9254 7.31141L40.0278 7.3629L39.9763 7.46534L40.1552 7.31141V7.28594L39.9254 7.31141ZM34.9618 6.03284L35.4484 6.18622L36.4206 6.26319V6.23771L34.9618 6.03284ZM35.0903 4.37052L35.4739 4.93312L36.4715 5.26536V5.23989L35.5503 4.85615L35.0903 4.37052ZM38.3648 6.87673L38.0576 7.03012L38.0321 6.9022H38.0066V7.10708H38.0321L38.3648 6.87673ZM36.2927 5.98189L34.4503 5.59815V5.62363L34.9369 5.80248L36.2927 6.00736V5.98189ZM36.8551 5.13745L36.0109 4.70277L35.4994 4.01226L35.4739 4.03773L35.9345 4.8052L36.8551 5.13745ZM40.4624 10.4322H40.5648C40.5903 10.4322 40.6158 10.4322 40.6672 10.4062C40.6927 10.4062 40.7182 10.4062 40.7436 10.3808H40.7697C40.7951 10.3808 40.8461 10.3553 40.8715 10.3553C40.8984 10.3509 40.9243 10.3423 40.9485 10.3298H41.0509V10.3043H41.0254H40.9485C40.923 10.3043 40.8975 10.3043 40.8461 10.3298C40.8206 10.3298 40.7697 10.3553 40.7436 10.3553C40.6927 10.3808 40.6158 10.3808 40.5648 10.4062C40.5394 10.4062 40.5394 10.4062 40.5139 10.4322H40.4879C40.4624 10.4062 40.4369 10.4062 40.4624 10.4322ZM41.2297 10.0995H41.3321C41.4091 10.0995 41.486 10.074 41.5879 10.0485H41.6139C41.6394 10.0485 41.6903 10.023 41.7158 10.023H41.7672C41.7927 10.023 41.8182 10.023 41.8182 9.99702C41.8436 9.99702 41.8697 9.99702 41.8697 9.97155H41.9206V9.94608H41.8182C41.7927 9.94608 41.7418 9.94608 41.7158 9.97155C41.6648 9.97155 41.6394 9.99702 41.5879 9.99702C41.5115 10.023 41.4091 10.023 41.3321 10.0485C41.3067 10.0485 41.2812 10.0485 41.2812 10.074H41.2557C41.2297 10.074 41.2297 10.074 41.2297 10.0995ZM40.5648 10.0236C40.5903 10.0236 40.5903 10.0491 40.5903 10.0491L40.6158 10.0745L40.6418 10.1C40.6418 10.1 40.6418 10.1255 40.6672 10.1255V10.2794H40.6927V10.2534V10.2279V10.177V10.1515V10.1255C40.6927 10.1255 40.6927 10.1 40.6672 10.1C40.6672 10.1 40.6672 10.0745 40.6418 10.0745C40.6418 10.0745 40.6418 10.0491 40.6158 10.0491L40.5903 10.0236H40.5139H40.4879H40.5648ZM41.2812 7.77266V7.74718V7.72171H41.3576V7.69569H41.3321H41.3067H41.2812H41.2557C41.2557 7.69569 41.2297 7.69569 41.2297 7.72171V7.74718C41.2297 7.74718 41.2297 7.77266 41.2042 7.77266C41.2812 7.74718 41.2812 7.74718 41.2812 7.77266ZM41.3067 7.36345C41.3067 7.38892 41.3321 7.38892 41.3321 7.41439H41.4345L41.46 7.38892L41.486 7.36345V7.33797V7.31195V7.28648H41.46V7.31195H41.4345H41.4091V7.28648H41.3836H41.3576C41.3576 7.28648 41.3576 7.31195 41.3321 7.31195C41.3067 7.31195 41.3067 7.31196 41.3067 7.36345C41.3067 7.33797 41.3067 7.33797 41.3067 7.36345ZM41.8182 7.67022C41.8182 7.69569 41.8436 7.69569 41.8182 7.67022C41.8436 7.69569 41.8436 7.69569 41.8182 7.67022C41.8436 7.69569 41.8437 7.69569 41.8437 7.72171V7.74664V7.72117V7.69515V7.66967V7.6442V7.61873V7.59325C41.8437 7.59325 41.8436 7.56724 41.8182 7.56724C41.7672 7.51629 41.6903 7.46534 41.6394 7.38838L41.5879 7.43933C41.6908 7.56724 41.7418 7.61819 41.8182 7.66967V7.67022ZM38.6206 7.67022V7.61927H38.5951L38.5696 7.74718H38.5951L38.8254 7.5938V7.56778L38.6206 7.67076V7.67022ZM38.5436 7.13364L38.3133 7.23553L38.2879 7.15857H38.2624V7.33743H38.2879L38.5436 7.1331V7.13364ZM38.6715 7.92604V7.87509H38.646L38.6206 8.00301H38.646L38.8249 7.87509V7.84908L38.6715 7.92604ZM38.7745 7.31195L38.5182 7.43987V7.36345H38.4927L38.4672 7.51683H38.4927L38.7745 7.31195ZM41.7927 10.151C41.7672 10.151 41.7418 10.151 41.6903 10.1764C41.6648 10.1764 41.6394 10.1764 41.5879 10.2019H41.537H41.4345C41.4091 10.2019 41.3836 10.2019 41.3576 10.2274H41.2812V10.2528H41.6139C41.6394 10.2528 41.6903 10.2528 41.7158 10.2274H41.8957L41.9726 10.2019C42.0236 10.2019 42.049 10.2019 42.0745 10.1764H42.3042V10.151H41.8691C41.8691 10.1249 41.7927 10.151 41.7927 10.151ZM37.8273 9.10218L37.8787 9.15313L37.8533 9.20462L37.9812 9.10164V9.07671H37.8273V9.10218ZM38.109 11.4805L37.9042 11.3786L38.109 11.2756V11.2507L37.8018 11.3271C37.7763 11.3271 37.7763 11.3526 37.7763 11.3526C37.7763 11.3786 37.7763 11.4041 37.8018 11.4041L38.109 11.5065C38.16 11.532 38.2115 11.532 38.2624 11.5574L38.4157 11.6084V11.5829L38.2624 11.5065C38.2115 11.532 38.16 11.5065 38.109 11.4805ZM38.2369 9.10218L38.3903 9.07671V9.10218L38.2624 9.20462L38.2879 9.15313L38.2369 9.10218ZM4.49431 1.32665H3.72593C2.06291 1.32665 1.47497 2.09412 0.835017 3.654L0.247081 5.13745H0.0682621V1.14779H10.9919V5.16347H10.8131L10.2241 3.68001C9.58469 2.09412 8.99621 1.35158 7.33374 1.35158H6.56536V11.506C6.56536 12.2989 6.82166 13.0658 8.02354 13.2452L8.45867 13.3217V13.5005H2.60099V13.3217L3.03558 13.2452C4.23854 13.0404 4.49376 12.2989 4.49376 11.5054V1.32719L4.49431 1.32665ZM14.7271 1.14779V6.44205C15.0593 5.87945 16.0569 4.77973 17.4641 4.77973C18.8459 4.77973 20.2781 5.54666 20.2781 7.9255V12.1965C20.2271 12.6826 20.5598 13.0918 21.0454 13.1688L21.3781 13.2458V13.4246H17.2338V13.2458L17.5665 13.1688C18.0271 13.0918 18.3593 12.6572 18.3338 12.197V8.1049C18.3338 6.49299 17.3872 5.90492 16.492 5.90492C15.8526 5.95587 15.2386 6.2117 14.7271 6.62091V12.197C14.6756 12.6826 15.0083 13.0918 15.4944 13.1688L15.8271 13.2458V13.4246H11.7078V13.2458L12.0399 13.1688C12.5005 13.0918 12.8332 12.6572 12.8078 12.197V2.40089C12.8587 1.91472 12.526 1.50551 12.0399 1.42909L11.7083 1.35158V1.14779H14.7271ZM25.9829 4.77919C28.2084 4.77919 29.4618 6.26319 29.4618 8.00246V8.07889H23.9108C23.8853 8.28376 23.8853 8.4881 23.8853 8.56506C23.8853 10.8415 25.0878 12.4783 27.0065 12.4783C28.0296 12.4783 28.9763 11.8897 29.4108 10.9694L29.5642 11.0458C29.4363 11.8133 28.2854 13.7314 25.9575 13.7314C23.4502 13.7314 21.9411 11.8387 21.9411 9.23009C21.9666 6.9022 23.4757 4.77973 25.9835 4.77973L25.9829 4.77919ZM23.9108 7.90057H27.4926V7.33797C27.4926 6.16129 27.1599 4.98461 25.9829 4.98461C24.6781 4.98461 24.1156 6.13582 23.9108 7.90057ZM50.3625 11.9672C50.3625 12.7856 50.6188 13.5016 51.8721 13.7574L52.3327 13.8604V13.9623H46.2686V13.8599L46.7292 13.7574C47.9831 13.5016 48.2389 12.7856 48.2389 11.9672V3.14289C48.2389 2.32447 47.9831 1.58193 46.7297 1.32665L46.2692 1.22421V1.14779H52.3322V1.24968L51.8716 1.35266C50.6182 1.60795 50.3619 2.34994 50.3619 3.16836V11.9667L50.3625 11.9672ZM65.0723 3.80792V14.2181H64.9444L55.6328 3.24479L55.6837 9.99702C55.7092 13.0664 56.6813 13.4756 57.7813 13.7569L58.0631 13.8338V13.9363H53.1V13.8333L53.3818 13.7574C54.4818 13.4756 55.4789 13.0409 55.4789 9.99702V3.14289L55.3001 2.91254C54.3279 1.8383 53.714 1.40361 52.6909 1.22421V1.14779H57.1419C57.6025 1.96621 58.2674 2.78463 59.7256 4.49843L64.9444 10.6881L64.8934 4.1147C64.868 1.91472 64.0752 1.45456 62.9492 1.30117L62.5401 1.24968V1.14779H74.0517C78.8099 1.14779 81.2402 4.13963 81.2402 7.49082C81.2402 10.8415 78.8099 13.9363 74.0517 13.9363H67.6565V13.8333L68.091 13.7574C69.3959 13.5271 69.6262 12.7851 69.6262 11.9412V3.80684C69.6262 1.86323 68.6286 1.22367 67.3492 1.22367C66.0704 1.22367 65.0723 1.86323 65.0723 3.80684V3.80792ZM73.6426 13.8599C77.045 13.8599 78.8359 11.4555 78.8359 7.54231C78.8359 3.65454 76.8916 1.22475 73.4892 1.22475H71.7238V11.9417C71.7238 12.9905 71.9541 13.8344 73.2334 13.8344H73.6426V13.8599ZM87.9941 13.8599C90.0408 13.8599 91.1154 13.2718 92.0105 11.7883L92.8803 10.3558H92.9827V13.9878H81.6748V13.8853L82.1354 13.8089C83.3887 13.604 83.6445 12.8116 83.6445 11.9932V3.0914C83.6445 2.22203 83.3887 1.58247 82.1354 1.32665L81.6748 1.22421V1.14779H92.4706V4.77919H92.3676L91.4985 3.21931C90.6288 1.65944 89.4518 1.24968 87.2263 1.24968H85.7166V7.31141L86.6378 7.28594C88.6076 7.26047 89.247 7.15803 89.8864 5.1884L90.0912 4.54938H90.1936V10.151H90.0912L89.8864 9.53687C89.247 7.5423 88.633 7.46534 86.6378 7.43933L85.7166 7.41385V12.0176C85.7166 13.1179 86.1263 13.8593 87.4051 13.8593H87.9936L87.9941 13.8599ZM99.9664 1.14779C102.832 1.14779 104.852 2.70766 104.852 4.95859C104.852 7.23499 102.831 8.79541 99.9664 8.79541H99.1736V8.69243H99.1991C101.271 8.69243 102.499 7.26047 102.499 4.95859C102.499 2.68219 101.271 1.22421 99.1991 1.22421H98.5596V11.7623C98.5596 13.1433 98.9173 13.4501 100.401 13.7569L100.759 13.8338V13.9363H94.4408V13.8333L94.9014 13.7314C96.1548 13.4756 96.4106 12.7596 96.4106 11.9412V3.11742C96.4106 2.299 96.1548 1.58247 94.9014 1.32665L94.4408 1.22421V1.14779H99.9664ZM111.709 13.8593C113.755 13.8593 114.83 13.2712 115.725 11.7878L116.595 10.3553H116.697V13.9872H105.39V13.8848L105.851 13.8084C107.104 13.6035 107.36 12.8111 107.36 11.9927V3.0914C107.36 2.22203 107.104 1.58247 105.851 1.32665L105.39 1.22421V1.14779H116.186V4.77919H116.083L115.214 3.21931C114.343 1.65944 113.167 1.24968 110.942 1.24968H109.432V7.31141L110.353 7.28594C112.297 7.26047 112.962 7.15803 113.602 5.1884L113.806 4.54938H113.909V10.151H113.806L113.602 9.53687C112.962 7.5423 112.348 7.46534 110.353 7.43933L109.432 7.41385V12.0176C109.432 13.1179 109.841 13.8593 111.12 13.8593H111.709ZM129.948 3.80738V14.2176H129.821L120.534 3.24479L120.586 9.99702C120.611 13.0664 121.583 13.4756 122.683 13.7569L122.965 13.8338V13.9363H118.002V13.8333L118.283 13.7574C119.383 13.4756 120.381 13.0409 120.381 9.99702V3.14289L120.202 2.91254C119.23 1.8383 118.616 1.40361 117.593 1.22421V1.14779H122.044C122.505 1.96621 123.169 2.78463 124.628 4.49843L129.846 10.6881L129.796 4.1147C129.77 1.91472 128.977 1.45456 127.851 1.30117L127.442 1.24968V1.14779H138.954C143.711 1.14779 146.142 4.13963 146.142 7.49082C146.142 10.8415 143.712 13.9363 138.954 13.9363H132.558V13.8333L132.993 13.7574C134.298 13.5271 134.528 12.7851 134.528 11.9412V3.80684C134.528 1.86323 133.531 1.22367 132.251 1.22367C130.973 1.22367 129.948 1.86377 129.948 3.80738ZM138.544 13.8593C141.947 13.8593 143.737 11.455 143.737 7.54176C143.737 3.654 141.793 1.22421 138.391 1.22421H136.626V11.9412C136.626 12.9899 136.856 13.8338 138.135 13.8338H138.544V13.8593ZM152.896 13.8593C154.942 13.8593 156.017 13.2712 156.887 11.7878L157.756 10.3553H157.859V13.9872H146.551V13.8848L147.012 13.8084C148.265 13.6035 148.521 12.8111 148.521 11.9927V3.0914C148.521 2.22203 148.265 1.58247 147.012 1.32665L146.551 1.22421V1.14779H157.347V4.77919H157.245L156.375 3.21931C155.505 1.65944 154.328 1.24968 152.128 1.24968H150.619V7.31141L151.54 7.28594C153.484 7.26047 154.15 7.15803 154.764 5.1884L154.968 4.54938H155.071V10.151H154.968L154.764 9.53687C154.124 7.5423 153.51 7.46534 151.54 7.43933L150.619 7.41385V12.0176C150.619 13.1179 151.028 13.8593 152.308 13.8593H152.896ZM170.982 4.47242C170.957 2.11959 170.164 1.45456 169.038 1.30117L168.629 1.24968V1.14779H173.541V1.24968L173.132 1.30117C172.006 1.45456 171.187 2.11959 171.187 4.47242V14.2176H171.059L161.722 3.24479L161.773 9.99702C161.799 13.0664 162.771 13.4756 163.871 13.7569L164.152 13.8338V13.9363H159.189V13.8333L159.471 13.7574C160.571 13.4756 161.568 13.0409 161.568 9.99702V3.14289L161.389 2.91254C160.417 1.8383 159.803 1.40361 158.805 1.22421V1.14779H163.257C163.718 1.96621 164.382 2.78463 165.841 4.49843L171.059 10.6881L170.983 4.47242H170.982ZM178.836 1.22421H178.043C176.329 1.22421 175.613 2.09412 174.948 3.75643L174.334 5.31685H174.231V1.14779H185.564V5.31685H185.462L184.848 3.75643C184.183 2.11959 183.492 1.22421 181.753 1.22421H180.959V11.9667C180.959 12.7851 181.215 13.578 182.469 13.7824L182.93 13.8593V13.9618H176.866V13.8593L177.327 13.7829C178.581 13.578 178.836 12.7856 178.836 11.9672V1.22421Z" fill="#0A0F26" />
            </g>
            <defs>
              <clipPath id="clip0_142_726">
                <rect width="186" height="13.55" fill="white" transform="translate(0 0.80957)" />
              </clipPath>
            </defs>
          </svg>
        </div>

      </div>
  </section>
  <!-- end Companies section -->

  <!-- Testimonials section -->
  <section id="testimonials" class="testimonials-section w-full p-4 md:py-6 md:px-8 lg:px-10">
    <div class="swiper mySwiper w-full md:w-3/4 overflow-hidden m-auto">
      <div class="swiper-wrapper flex flex-row items-center w-full py-5">
        <div class="swiper-slide dark:text-slate-300 min-w-full p-2">
          <div class="w-full dark:bg-zinc-700 flex flex-col justify-center items-center gap-y-5 rounded-xl bg-white p-5 drop-shadow-xl ">
            <div class="">
              <svg xmlns="http://www.w3.org/2000/svg" width="80" height="54" viewBox="0 0 96 61" fill="none">
                <path d="M81.5191 61C84.4085 44.3599 89.0688 24.0266 95.5 0H71.7325C60.0818 22.4032 51.7865 41.8436 46.8466 58.3214L48.9437 61H81.5191ZM34.7531 61C38.2018 41.1131 42.9086 20.7798 48.8738 0H25.1063C20.0732 9.25349 15.1799 19.6028 10.4264 31.0479C5.67293 42.493 2.36412 51.5842 0.5 58.3214L2.1777 61H34.7531Z" fill="#05C50D" />
              </svg>
            </div>
            <div class="text-center">
              <p class="text-xl">The ease of communication and security provided make the process of outsourcing
                effortless. and it is an amazing experience to get out tasks done with PeolpePerTask.
              </p>
            </div>
            <div class="flex flex-row gap-x-2 items-center">
              <img class="w-12 h-12 rounded-full" src="./assets/images/sliders/slide4/cardAbdelghani.jpg" alt="Testimonial photo">
              <div class="flex flex-col">
                <h3 class="text-lg">Abdelghani A.</h3>
                <p class="-mt-1.5 text-sm text-gray-600 dark:text-slate-400">web developer</p>
              </div>
            </div>
          </div>
        </div>

        <div class="swiper-slide dark:text-slate-300 min-w-full p-2">
          <div class="w-full dark:bg-zinc-700 flex flex-col justify-center items-center gap-y-5 rounded-xl bg-white p-5 drop-shadow-xl ">
            <div class="">
              <svg xmlns="http://www.w3.org/2000/svg" width="80" height="54" viewBox="0 0 96 61" fill="none">
                <path d="M81.5191 61C84.4085 44.3599 89.0688 24.0266 95.5 0H71.7325C60.0818 22.4032 51.7865 41.8436 46.8466 58.3214L48.9437 61H81.5191ZM34.7531 61C38.2018 41.1131 42.9086 20.7798 48.8738 0H25.1063C20.0732 9.25349 15.1799 19.6028 10.4264 31.0479C5.67293 42.493 2.36412 51.5842 0.5 58.3214L2.1777 61H34.7531Z" fill="#05C50D" />
              </svg>
            </div>
            <div class="text-center">
              <p class="text-xl">The ease of communication and security provided make the process of outsourcing
                effortless. and it is an amazing experience to get out tasks done with PeolpePerTask.
              </p>
            </div>
            <div class="flex flex-row gap-x-2 items-center">
              <img class="w-12 h-12 rounded-full" src="./assets/images/freelancers/ayman.jpg" alt="Testimonial photo">
              <div class="flex flex-col">
                <h3 class="text-lg">Ayman Ben.</h3>
                <p class="-mt-1.5 text-sm text-gray-600 dark:text-slate-400">web developer</p>
              </div>
            </div>
          </div>
        </div>

        <div class="swiper-slide dark:text-slate-300 min-w-full p-2">
          <div class="w-full dark:bg-zinc-700 flex flex-col justify-center items-center gap-y-5 rounded-xl bg-white p-5 drop-shadow-xl ">
            <div class="">
              <svg xmlns="http://www.w3.org/2000/svg" width="80" height="54" viewBox="0 0 96 61" fill="none">
                <path d="M81.5191 61C84.4085 44.3599 89.0688 24.0266 95.5 0H71.7325C60.0818 22.4032 51.7865 41.8436 46.8466 58.3214L48.9437 61H81.5191ZM34.7531 61C38.2018 41.1131 42.9086 20.7798 48.8738 0H25.1063C20.0732 9.25349 15.1799 19.6028 10.4264 31.0479C5.67293 42.493 2.36412 51.5842 0.5 58.3214L2.1777 61H34.7531Z" fill="#05C50D" />
              </svg>
            </div>
            <div class="text-center">
              <p class="text-xl">The ease of communication and security provided make the process of outsourcing
                effortless. and it is an amazing experience to get out tasks done with PeolpePerTask.
              </p>
            </div>
            <div class="flex flex-row gap-x-2 items-center">
              <img class="w-12 h-12 rounded-full" src="./assets/images/freelancers/waheli.jpg" alt="Testimonial photo">
              <div class="flex flex-col">
                <h3 class="text-lg">Khalid Oukha</h3>
                <p class="-mt-1.5 text-sm text-gray-600 dark:text-slate-400">web developer</p>
              </div>
            </div>
          </div>
        </div>

        <div class="swiper-slide dark:text-slate-300 min-w-full p-2">
          <div class="w-full dark:bg-zinc-700 flex flex-col justify-center items-center gap-y-5 rounded-xl bg-white p-5 drop-shadow-xl ">
            <div class="">
              <svg xmlns="http://www.w3.org/2000/svg" width="80" height="54" viewBox="0 0 96 61" fill="none">
                <path d="M81.5191 61C84.4085 44.3599 89.0688 24.0266 95.5 0H71.7325C60.0818 22.4032 51.7865 41.8436 46.8466 58.3214L48.9437 61H81.5191ZM34.7531 61C38.2018 41.1131 42.9086 20.7798 48.8738 0H25.1063C20.0732 9.25349 15.1799 19.6028 10.4264 31.0479C5.67293 42.493 2.36412 51.5842 0.5 58.3214L2.1777 61H34.7531Z" fill="#05C50D" />
              </svg>
            </div>
            <div class="text-center">
              <p class="text-xl">The ease of communication and security provided make the process of outsourcing
                effortless. and it is an amazing experience to get out tasks done with PeolpePerTask.
              </p>
            </div>
            <div class="flex flex-row gap-x-2 items-center">
              <img class="w-12 h-12 rounded-full" src="./assets/images/freelancers/zaid.jpg" alt="Testimonial photo">
              <div class="flex flex-col">
                <h3 class="text-lg">Zaid B.</h3>
                <p class="-mt-1.5 text-sm text-gray-600 dark:text-slate-400">web developer</p>
              </div>
            </div>
          </div>
        </div>

        <div class="swiper-slide dark:text-slate-300 min-w-full p-2">
          <div class="w-full dark:bg-zinc-700 flex flex-col justify-center items-center gap-y-5 rounded-xl bg-white p-5 drop-shadow-xl ">
            <div class="">
              <svg xmlns="http://www.w3.org/2000/svg" width="80" height="54" viewBox="0 0 96 61" fill="none">
                <path d="M81.5191 61C84.4085 44.3599 89.0688 24.0266 95.5 0H71.7325C60.0818 22.4032 51.7865 41.8436 46.8466 58.3214L48.9437 61H81.5191ZM34.7531 61C38.2018 41.1131 42.9086 20.7798 48.8738 0H25.1063C20.0732 9.25349 15.1799 19.6028 10.4264 31.0479C5.67293 42.493 2.36412 51.5842 0.5 58.3214L2.1777 61H34.7531Z" fill="#05C50D" />
              </svg>
            </div>
            <div class="text-center">
              <p class="text-xl">The ease of communication and security provided make the process of outsourcing
                effortless. and it is an amazing experience to get out tasks done with PeolpePerTask.
              </p>
            </div>
            <div class="flex flex-row gap-x-2 items-center">
              <img class="w-12 h-12 rounded-full" src="./assets/images/freelancers/ghofran.jpg" alt="Testimonial photo">
              <div class="flex flex-col">
                <h3 class="text-lg">Mohamed G.</h3>
                <p class="-mt-1.5 text-sm text-gray-600 dark:text-slate-400">web developer</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end Testimonials section -->

  <?php include './templates/footer.php'; ?>


  <script src="./assets/javascript/swiper-bundle.min.js"></script>
  <script src="./assets/javascript/jquery.js"></script>
  <script src="./assets/javascript/script.js"></script>
  <script src="./assets/javascript/homeScript.js"></script>
</body>

</html>