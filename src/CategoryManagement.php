<!doctype html>
<html>

<head>
    <title>dashboard</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../dist/output.css" rel="stylesheet">
</head>

<body class="overflow-x-hidden">
    <header class="flex justify-end h-12 px-8 py-1 gap-1 ">
        <svg class=" self-center mr-3 flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path
                d="m17.418 3.623-.018-.008a6.713 6.713 0 0 0-2.4-.569V2h1a1 1 0 1 0 0-2h-2a1 1 0 0 0-1 1v2H9.89A6.977 6.977 0 0 1 12 8v5h-2V8A5 5 0 1 0 0 8v6a1 1 0 0 0 1 1h8v4a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-4h6a1 1 0 0 0 1-1V8a5 5 0 0 0-2.582-4.377ZM6 12H4a1 1 0 0 1 0-2h2a1 1 0 0 1 0 2Z" />
        </svg>
        <img class="h-auto  rounded-full" src="../images/845-1697015855.jpg" alt="admin">
        <span class="text-lg self-center ">mohamed tergui</span>
    </header>
    <div class="flex flex-row justify-start">

        <div class="lg:w-72 sm:h-full h-screen">

            <span id="btn_sidebar" class=" cursor-pointer rounded-full shadow-md absolute lg:hidden top-3/4 -left-2">
                <svg width="33" height="33" viewBox="0 0 27 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g style="mix-blend-mode:darken">
                        <ellipse cx="13.5" cy="14" rx="13.5" ry="14" fill="#05C50D" />
                    </g>
                    <path d="M9 7L18 14L9 20" stroke="white" stroke-width="2" />
                </svg>

            </span>
            <!-- side bar -->
            <div id="sidebar"
                class="  fixed top-0 left-0 z-40 w-72 sm:h-full h-screen transition-transform -translate-x-full lg:translate-x-0"
                aria-label="Sidebar">
                <div class=" h-full px-3 py-4 overflow-y-auto bg-custom-green dark:bg-gray-800">
                    <span id="close_btn_side_bar"
                        class="rounded-full shadow-md lg:hidden fixed top-3/4 left-56 cursor-pointer">
                        <svg width="29" height="28" viewBox="0 0 29 28 " fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g style="mix-blend-mode:darken">
                                <ellipse cx="14.5" cy="14" rx="14.5" ry="14" transform="matrix(-1 0 0 1 29 0)"
                                    fill="#05C50D" />
                            </g>
                            <path d="M19.332 7L9.66536 14L19.332 20" stroke="white" stroke-width="2" />
                        </svg>

                    </span>
                    <div class="  self-center m-auto flex   lg:m-0 sm:m-3 ">
                        <span class="bg-white rounded-full p-2">
                            <svg width="47" height="47" viewBox="0 0 47 43" fill="none"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <rect width="47" height="43" fill="url(#pattern0)" />
                                <defs>
                                    <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                                        <use xlink:href="#image0_117_16"
                                            transform="matrix(0.00195312 0 0 0.00213481 0 -0.0465116)" />
                                    </pattern>
                                    <image id="image0_117_16" width="512" height="512"
                                        xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAgAAAAIACAYAAAD0eNT6AAAAAXNSR0IArs4c6QAAIABJREFUeF7tvQmYHEd5///W7KwsH9jYYHP8OYRjLHutnR55wcKcC+YmgXAsZ0I4w024CecPwhkIRwKGEM5wBhYSnHCEezEBY4dhu3qlxTYCC0I4LGMQWLKknZ36PzWZWlqjlXamu2a6Z+szz+NHttxd/dbnfbvfb91K+EEAAhCAAAQgEBwBFVyNqTAEIAABCEAAAoIAIAggAAEIQAACARJAAATodKoMAQhAAAIQQAAQAxCAAAQgAIEACSAAAnQ6VYYABCAAAQggAIgBCEAAAhCAQIAEEAABOp0qQwACEIAABBAAxAAEIAABCEAgQAIIgACdTpUhAAEIQAACCABiAAIQgAAEIBAgAQRAgE6nyhCAAAQgAAEEADEAAQhAAAIQCJAAAiBAp1NlCEAAAhCAAAKAGIAABCAAAQgESAABEKDTqTIEIAABCEAAAUAMQAACEIAABAIkgAAI0OlUGQIQgAAEIIAAIAYgAAEIQAACARJAAATodKoMAQhAAAIQQAAQAxCAAAQgAIEACSAAAnQ6VYYABCAAAQggAIgBCEAAAhCAQIAEEAABOp0qQwACEIAABBAAxAAEIAABCEAgQAIIgACdTpUhAAEIQAACCABiAAIQgAAEIBAgAQRAgE6nyhCAAAQgAAEEADEAAQhAAAIQCJAAAiBAp1NlCEAAAhCAAAKAGIAABCAAAQgESAABEKDTqTIEIAABCEAAAUAMQAACEIAABAIkgAAI0OlUGQIQgAAEIIAAIAYgAAEIQAACARJAAATodKoMAQhAAAIQQAAQAxCAAAQgAIEACSAAAnQ6VYYABCAAAQggAIgBCEAAAhCAQIAEEAABOp0qQwACEIAABBAAxAAEIAABCEAgQAIIgACdTpUhAAEIQAACCABiAAIQgAAEIBAgAQRAgE6nyhCAAAQgAAEEADEAAQhAAAIQCJAAAiBAp1NlCEAAAhCAAAKAGIAABCAAAQgESAABEKDTqTIEIAABCEAAAUAMQAACEIAABAIkgAAI0OlUGQIQgAAEIIAAIAYgAAEIQAACARJAAATodKoMAQhAAAIQQAAQAxCAAAQgAIEACSAAAnQ6VYYABCAAAQggAIgBCEAAAhCAQIAEEAABOp0qQwACEIAABBAAxAAEIAABCEAgQAIIgACdTpUhAAEIQAACCABiAAIQgAAEIBAgAQRAgE6nyhCAAAQgAAEEADEAAQhAAAIQCJAAAiBAp1NlCEAAAhCAAAKAGIAABCAAAQgESAABEKDTqTIEIAABCEAAAUAMQAACEIAABAIkgAAI0OlUGQIQgAAEIIAAIAYgAAEIQAACARJAAATodKoMAQhAAAIQQAAQAxCAAAQgAIEACSAAAnQ6VYYABCAAAQggAIgBCEAAAhCAQIAEEAABOp0qQwACEIAABBAAxAAEIAABCEAgQAIIgACdTpUhAAEIQAACCABiAAIQgAAEIBAgAQRAgE6nyhCAAAQgAAEEADEAAQhAAAIQCJAAAiBAp1NlCEAAAhCAAAKAGIAABCAAAQgESAABEKDTqTIEIAABCEAAAUAMQAACEIAABAIkgAAI0OlUGQIQgAAEIIAAIAYgAAEIQAACARJAAATodKoMAQhAAAIQQAAQAxCAAAQgAIEACSAAAnQ6VYYABCAAAQggAIgBCEAAAhCAQIAEEAABOp0qQwACEIAABBAAxAAEIAABCEAgQAIIgACdTpUhAAEIQAACCABiAAIQgAAEIBAgAQRAgE6nyhCAAAQgAAEEADEAAQhAAAIQCJAAAiBAp1NlCEAAAhCAAAKAGIAABCAAAQgESAABEKDTqTIEIAABCEAAAUAMQAACEIAABAIkgAAI0OlUGQIQgAAEIIAAIAYgAAEIQAACARJAAATodKoMAQhAAAIQQAAQAxCAAAQgAIEACSAAAnQ6VYYABCAAAQggAIgBCEAAAhCAQIAEEAABOp0qQwACEIAABBAAxAAEIAABCEAgQAIIgACdTpUhAAEIQAACCABiAAIQgAAEIBAgAQRAgE6nyhCAAAQgAAEEADEAAQhAAAIQCJAAAiBAp1NlCEAAAhCAAAKAGIAABCAAAQgESAABEKDTqTIEIAABCEAAAUAMQAACEIAABAIkgAAI0OlUGQIQgAAEIIAAIAYgAAEIQAACARJAAATodKoMAQhAAAIQQAAQAxCAAAQgAIEACSAAAnQ6VYYABCAAAQggAIgBCEAAAhCAQIAEEAABOp0qQwACEIAABBAAxAAEIAABCEAgQAIIgACdTpUhAAEIQAACCABiAAIQgAAEIBAgAQRAgE6nyhCAAAQgAAEEADEAAQhAAAIQCJAAAiBAp1NlCEAAAhCA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" />
                                </defs>
                            </svg>
                        </span>
                        <span class="text-black text-2xl font-bold self-center ">People<span
                                class="text-gray-50">Per</span>Task
                        </span>
                    </div>
                    <ul class="h-5/6 flex flex-col gap-1 mt-2 space-y-2 font-medium">
                        <!-- Search -->
                        <li>
                            <span href="/" class="flex justify-between items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">


                                <span class="ml-3">Search</span>
                                <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17.707 16.293L20.707 19.293C20.8807 19.4727 20.9877 19.7177 20.9877 19.9877C20.9877 20.54 20.54 20.9877 19.9877 20.9877C19.7177 20.9877 19.4726 20.8807 19.2927 20.7067L19.293 20.707L16.293 17.707C16.1193 17.5274 16.0123 17.2823 16.0123 17.0123C16.0123 16.46 16.46 16.0123 17.0123 16.0123C17.2823 16.0123 17.5273 16.1193 17.7073 16.2933L17.707 16.293ZM9.99999 2C14.4183 2 18 5.58172 18 9.99999C18 14.4183 14.4183 18 9.99999 18C5.58172 18 2 14.4183 2 9.99999C2 5.58172 5.58172 2 9.99999 2ZM9.99999 4.00002C6.68628 4.00002 3.99999 6.6863 3.99999 10C3.99999 13.3137 6.68628 16 9.99999 16C13.3137 16 16 13.3137 16 10C16 6.6863 13.3137 4.00002 9.99999 4.00002Z" fill="white" />
                                </svg>
                            </span>
                        </li>

                        <!-- Statistics -->
                        <li>
                            <a href="./dashboard.php" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">

                                <span class="flex-1 ml-3 whitespace-nowrap">Statistics</span>
                                <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                                    <path d="M6.143 0H1.857A1.857 1.857 0 0 0 0 1.857v4.286C0 7.169.831 8 1.857 8h4.286A1.857 1.857 0 0 0 8 6.143V1.857A1.857 1.857 0 0 0 6.143 0Zm10 0h-4.286A1.857 1.857 0 0 0 10 1.857v4.286C10 7.169 10.831 8 11.857 8h4.286A1.857 1.857 0 0 0 18 6.143V1.857A1.857 1.857 0 0 0 16.143 0Zm-10 10H1.857A1.857 1.857 0 0 0 0 11.857v4.286C0 17.169.831 18 1.857 18h4.286A1.857 1.857 0 0 0 8 16.143v-4.286A1.857 1.857 0 0 0 6.143 10Zm10 0h-4.286A1.857 1.857 0 0 0 10 11.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 18 16.143v-4.286A1.857 1.857 0 0 0 16.143 10Z" />
                                </svg>
                            </a>
                        </li>

                        <!-- Inbox -->
                        <li>
                            <a href="./inbox.php" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">

                                <span class="flex-1 ml-3 whitespace-nowrap">Inbox</span>
                                <span class="inline-flex items-center justify-center w-3 h-3 p-3 ml-3 text-sm font-medium text-custom-green bg-red-500 rounded-full mx-3">3</span>
                                <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="m17.418 3.623-.018-.008a6.713 6.713 0 0 0-2.4-.569V2h1a1 1 0 1 0 0-2h-2a1 1 0 0 0-1 1v2H9.89A6.977 6.977 0 0 1 12 8v5h-2V8A5 5 0 1 0 0 8v6a1 1 0 0 0 1 1h8v4a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-4h6a1 1 0 0 0 1-1V8a5 5 0 0 0-2.582-4.377ZM6 12H4a1 1 0 0 1 0-2h2a1 1 0 0 1 0 2Z" />
                                </svg>
                            </a>
                        </li>

                        <!-- Projects -->
                        <li>
                            <a href="./projects.php" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                <span class="flex-1 ml-3 whitespace-nowrap">Projects</span>
                                <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" width="24" height="24">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M2 5C2 4.44772 2.44772 4 3 4H20C20.5523 4 21 4.44772 21 5V19C21 19.5523 20.5523 20 20 20H3C2.44772 20 2 19.5523 2 19V5ZM3 2C1.34315 2 0 3.34315 0 5V19C0 20.6569 1.34315 22 3 22H20C21.6569 22 23 20.6569 23 19V5C23 3.34315 21.6569 2 20 2H3ZM6 9H18V11H6V9ZM6 13H18V15H6V13ZM6 17H14V19H6V17Z" fill="c" />
                                    </g>
                                </svg>

                            </a>
                        </li>

                        <!-- Freelancers -->
                        <li>
                            <a href="./freelancers.php" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">

                                <span class="flex-1 ml-3 whitespace-nowrap">Freelancers</span>
                                <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                                    <path d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z" />
                                </svg>
                            </a>
                        </li>

                        <!-- Categories -->
                        <li>
                            <a href="./CategoryManagement.php" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                <span class="flex-1 ml-3 whitespace-nowrap">Categories</span>
                                <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                                    <path d="M17 5.923A1 1 0 0 0 16 5h-3V4a4 4 0 1 0-8 0v1H2a1 1 0 0 0-1 .923L.086 17.846A2 2 0 0 0 2.08 20h13.84a2 2 0 0 0 1.994-2.153L17 5.923ZM7 9a1 1 0 0 1-2 0V7h2v2Zm0-5a2 2 0 1 1 4 0v1H7V4Zm6 5a1 1 0 1 1-2 0V7h2v2Z" />
                                </svg>

                            </a>
                        </li>

                        <!-- Testimonials -->
                        <li>
                            <a href="./Testimonials.php" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                <span class="flex-1 ml-3 whitespace-nowrap">Testimonials</span>
                                <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="80" height="54" viewBox="0 0 96 61" fill="none">
                                    <path d="M81.5191 61C84.4085 44.3599 89.0688 24.0266 95.5 0H71.7325C60.0818 22.4032 51.7865 41.8436 46.8466 58.3214L48.9437 61H81.5191ZM34.7531 61C38.2018 41.1131 42.9086 20.7798 48.8738 0H25.1063C20.0732 9.25349 15.1799 19.6028 10.4264 31.0479C5.67293 42.493 2.36412 51.5842 0.5 58.3214L2.1777 61H34.7531Z" fill="currentColor" />
                                </svg>

                            </a>
                        </li>

                        <!-- Log out -->
                        <li class="bg-white  rounded-lg  ">
                            <a href="sign_in.html" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 16">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 8h11m0 0L8 4m4 4-4 4m4-11h3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-3" />
                                </svg>
                                <span class="flex-1 ml-3 whitespace-nowrap">Log Out</span>
                            </a>
                        </li>
                    </ul>
                </div>


            </div>




            <!-- end side bar -->


        </div>
        <section class="flex flex-col flex-grow">
            <h1 class="text-3xl text-center font-bold">Category Management</h1>
            <div class="flex p-4 gap-6 justify-center flex-col">
                <div class=" shadow-sm rounded-lg gap-2 bg-slate-300 p-5 flex flex-col items-center ">
                    <h2 class="text-xl font-semibold">add category</h2>
                    <div class="flex   gap-4">
                        <input id="value_add_cetegory" class=" rounded-md p-1  border-2" type="text" placeholder="name of category">
                        <input id="btn_add_cetegory" type="submit" value="ADD"
                            class="bg-gray-50 p-2 rounded-md cursor-pointer">
                    </div>
                </div>
                <div id="parent_of_categories" class="flex flex-col border">
                    <ul class="flex  text-center items-center ">
                        <li class="w-2/3  text-xs md:text-lg p-4 bg-gray-300">NAME OF CATEGORY</li>
                        <li class="w-1/3 text-xs md:text-lg p-4 bg-gray-300">DATE</li>
                        <li class="w-1/3 text-xs md:text-lg p-4 bg-gray-300">
                            &nbsp;
                        </li>
                    </ul>
                    <ul class=" category  flex  text-center items-center ">
                        <li class="w-2/3  text-xs md:text-lg p-4 bg-gray-50"> CATEGORY 1</li>
                        <li class="w-1/3 text-xs md:text-lg p-4 bg-gray-50">10/10/2020</li>
                        <li class="w-1/3 text-xs flex justify-around md:text-lg p-4 bg-gray-50">
                            <button class="text-blue-500">EDIT</button> <button
                                class="text-red-500 btn_dele_cete btn_dele_cetegory">DELE</button>
                        </li>
                    </ul>
                    <ul class=" category  flex  text-center items-center ">
                        <li class="w-2/3  text-xs md:text-lg p-4 bg-gray-50"> CATEGORY 6</li>
                        <li class="w-1/3 text-xs md:text-lg p-4 bg-gray-50">10/10/2020</li>
                        <li class="w-1/3 text-xs flex justify-around md:text-lg p-4 bg-gray-50">
                            <button class="text-blue-500">EDIT</button> <button
                                class="text-red-500 btn_dele_cete btn_dele_cetegory">DELE</button>
                        </li>
                    </ul>
                    <ul class=" category  flex  text-center items-center ">
                        <li class="w-2/3  text-xs md:text-lg p-4 bg-gray-50"> CATEGORY 2</li>
                        <li class="w-1/3 text-xs md:text-lg p-4 bg-gray-50">10/10/2020</li>
                        <li class="w-1/3 text-xs flex justify-around md:text-lg p-4 bg-gray-50">
                            <button class="text-blue-500">EDIT</button> <button
                                class="text-red-500 btn_dele_cete btn_dele_cetegory">DELE</button>
                        </li>
                    </ul>
                    <ul class=" category  flex  text-center items-center ">
                        <li class="w-2/3  text-xs md:text-lg p-4 bg-gray-50"> CATEGORY 3</li>
                        <li class="w-1/3 text-xs md:text-lg p-4 bg-gray-50">10/10/2020</li>
                        <li class="w-1/3 text-xs flex justify-around md:text-lg p-4 bg-gray-50">
                            <button class="text-blue-500">EDIT</button> <button
                                class="text-red-500 btn_dele_cete btn_dele_cetegory">DELE</button>
                        </li>
                    </ul>
                    <ul class=" category  flex  text-center items-center ">
                        <li class="w-2/3  text-xs md:text-lg p-4 bg-gray-50"> CATEGORY 4</li>
                        <li class="w-1/3 text-xs md:text-lg p-4 bg-gray-50">10/10/2020</li>
                        <li class="w-1/3 text-xs flex justify-around md:text-lg p-4 bg-gray-50">
                            <button class="text-blue-500">EDIT</button> <button
                                class="text-red-500 btn_dele_cete btn_dele_cetegory">DELE</button>
                        </li>
                    </ul>
                    <ul class=" category  flex  text-center items-center ">
                        <li class="w-2/3  text-xs md:text-lg p-4 bg-gray-50"> CATEGORY 5</li>
                        <li class="w-1/3 text-xs md:text-lg p-4 bg-gray-50">10/10/2020</li>
                        <li class="w-1/3 text-xs flex justify-around md:text-lg p-4 bg-gray-50">
                            <button class="text-blue-500">EDIT</button> <button
                                class="text-red-500 btn_dele_cete btn_dele_cetegory">DELE</button>
                        </li>
                    </ul>

                </div>
            </div>
        </section>
    </div>



    <script src="../javascript/jquery.js"></script>
    <script src="../javascript/dashboard.js"></script>
    <script src="../javascript/script.js"></script>

    <script src="../javascript/dashCategories.js"></script>

</body>

</html>