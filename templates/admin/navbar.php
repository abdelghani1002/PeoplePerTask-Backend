<!-- side bar -->
<aside id="sidebar" class="w-1/6 min-h-full" aria-label="Sidebar">
    <div class="h-full px-1 py-4 overflow-y-auto flex flex-col justify-between bg-custom-green dark:bg-gray-800">
        <ul class="flex flex-col gap-1 font-medium">
            <!-- Search -->
            <li>
                <span href="/" class="search flex justify-between items-center py-2 pr-1 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <span class="ml-3">Search</span>
                    <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.707 16.293L20.707 19.293C20.8807 19.4727 20.9877 19.7177 20.9877 19.9877C20.9877 20.54 20.54 20.9877 19.9877 20.9877C19.7177 20.9877 19.4726 20.8807 19.2927 20.7067L19.293 20.707L16.293 17.707C16.1193 17.5274 16.0123 17.2823 16.0123 17.0123C16.0123 16.46 16.46 16.0123 17.0123 16.0123C17.2823 16.0123 17.5273 16.1193 17.7073 16.2933L17.707 16.293ZM9.99999 2C14.4183 2 18 5.58172 18 9.99999C18 14.4183 14.4183 18 9.99999 18C5.58172 18 2 14.4183 2 9.99999C2 5.58172 5.58172 2 9.99999 2ZM9.99999 4.00002C6.68628 4.00002 3.99999 6.6863 3.99999 10C3.99999 13.3137 6.68628 16 9.99999 16C13.3137 16 16 13.3137 16 10C16 6.6863 13.3137 4.00002 9.99999 4.00002Z" fill="white" />
                    </svg>
                </span>
            </li>

            <!-- Statistics -->
            <li>
                <a href="<?= $path . "/dashboard.php"?>" class="statistics flex items-center py-2 pr-1 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">

                    <span class="flex-1 ml-3 whitespace-nowrap">Statistics</span>
                    <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                        <path d="M6.143 0H1.857A1.857 1.857 0 0 0 0 1.857v4.286C0 7.169.831 8 1.857 8h4.286A1.857 1.857 0 0 0 8 6.143V1.857A1.857 1.857 0 0 0 6.143 0Zm10 0h-4.286A1.857 1.857 0 0 0 10 1.857v4.286C10 7.169 10.831 8 11.857 8h4.286A1.857 1.857 0 0 0 18 6.143V1.857A1.857 1.857 0 0 0 16.143 0Zm-10 10H1.857A1.857 1.857 0 0 0 0 11.857v4.286C0 17.169.831 18 1.857 18h4.286A1.857 1.857 0 0 0 8 16.143v-4.286A1.857 1.857 0 0 0 6.143 10Zm10 0h-4.286A1.857 1.857 0 0 0 10 11.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 18 16.143v-4.286A1.857 1.857 0 0 0 16.143 10Z" />
                    </svg>
                </a>
            </li>

            <!-- Inbox -->
            <li>
                <a href="" class="inbox flex items-center py-2 pr-1 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">

                    <span class="flex-1 ml-3 whitespace-nowrap">Inbox</span>
                    <span class="inline-flex items-center justify-center w-3 h-3 p-3 ml-3 text-sm font-medium text-custom-green bg-red-500 rounded-full mx-3">3</span>
                    <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="m17.418 3.623-.018-.008a6.713 6.713 0 0 0-2.4-.569V2h1a1 1 0 1 0 0-2h-2a1 1 0 0 0-1 1v2H9.89A6.977 6.977 0 0 1 12 8v5h-2V8A5 5 0 1 0 0 8v6a1 1 0 0 0 1 1h8v4a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-4h6a1 1 0 0 0 1-1V8a5 5 0 0 0-2.582-4.377ZM6 12H4a1 1 0 0 1 0-2h2a1 1 0 0 1 0 2Z" />
                    </svg>
                </a>
            </li>

            <!-- Projects -->
            <li>
                <a href="<?= $path . "/src/project/index.php"?>" class="projects flex items-center py-2 pr-1 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <span class="flex-1 ml-3 whitespace-nowrap">Projects</span>
                    <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg" width="24" height="24">
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
                <a href="<?= $path . "/src/freelancer/index.php"?>" class="freelancers flex items-center py-2 pr-1 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">

                    <span class="flex-1 ml-3 whitespace-nowrap">Freelancers</span>
                    <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                        <path d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z" />
                    </svg>
                </a>
            </li>

            <!-- Categories -->
            <li>
                <a href="<?= $path . "/src/category/index.php" ?>" class="categories flex items-center py-2 pr-1 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <span class="flex-1 ml-3 whitespace-nowrap">Categories</span>
                    <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                        <path d="M17 5.923A1 1 0 0 0 16 5h-3V4a4 4 0 1 0-8 0v1H2a1 1 0 0 0-1 .923L.086 17.846A2 2 0 0 0 2.08 20h13.84a2 2 0 0 0 1.994-2.153L17 5.923ZM7 9a1 1 0 0 1-2 0V7h2v2Zm0-5a2 2 0 1 1 4 0v1H7V4Zm6 5a1 1 0 1 1-2 0V7h2v2Z" />
                    </svg>
                </a>
            </li>

            <!-- Testimonials -->
            <li>
                <a href="<?= $path . "/src/testimonials" ?>" class="testimonials flex items-center py-2 pr-1 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <span class="flex-1 ml-3 whitespace-nowrap">Testimonials</span>
                    <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="80" height="54" viewBox="0 0 96 61" fill="none">
                        <path d="M81.5191 61C84.4085 44.3599 89.0688 24.0266 95.5 0H71.7325C60.0818 22.4032 51.7865 41.8436 46.8466 58.3214L48.9437 61H81.5191ZM34.7531 61C38.2018 41.1131 42.9086 20.7798 48.8738 0H25.1063C20.0732 9.25349 15.1799 19.6028 10.4264 31.0479C5.67293 42.493 2.36412 51.5842 0.5 58.3214L2.1777 61H34.7531Z" fill="currentColor" />
                    </svg>

                </a>
            </li>

        </ul>
        <!-- Log out -->
        <a href="<?= $path . "/src/auth.php?func=logout"?>" class="flex bg-gray-200 items-center rounded-lg dark:text-white dark:hover:bg-gray-700 group">
            <svg class="rotate-180 flex-shrink-0 w-5 h-5 ml-2  text-gray-500 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 16">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 8h11m0 0L8 4m4 4-4 4m4-11h3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-3" />
            </svg>
            <span class="p-2 w-full font-bold hover:text-gray-200 text-gray-900">Log Out</span>
        </a>
    </div>
</aside>
<!-- end side bar -->