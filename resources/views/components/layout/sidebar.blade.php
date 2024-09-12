<aside id="default-sidebar"
    class="fixed top-0 left-0 z-50 sm:z-40 w-64  h-screen transition-transform -translate-x-full sm:translate-x-0"
    aria-label="Sidenav">


    <div
        class="overflow-y-hidden py-5 sm:py-24 px-3 h-full bg-primary-950  border-primary-950 dark:bg-gray-800 dark:border-gray-700">
        <div class="mb-5 px-2">
            <div class="font-light text-xl text-white">Selamat Pagi,</div>
            <div class="font-semibold text-xl text-white">Budiono Siregar</div>
        </div>
        <ul class="space-y-2">
            <li>
                <a href="#"
                    class="flex items-center p-2 text-base font-medium text-white rounded-lg dark:text-white hover:bg-gray-100 transition duration-150 hover:text-primary-950 ">
                    <i class="fa-solid fa-house"></i>
                    <span class="ml-3">Dashboard</span>
                </a>
            </li>
            <li>
                <button type="button"
                    class="flex items-center p-2 w-full text-base font-normal text-white hover:text-primary-950 rounded-lg transition duration-150 group hover:bg-gray-100"
                    aria-controls="dropdown-pages" data-collapse-toggle="dropdown-pages">
                    <i class="fa-solid fa-people-group"></i>
                    <span class="flex-1 ml-3 text-left whitespace-nowrap">Kepegawaian</span>
                    <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
                <ul id="dropdown-pages" class="hidden py-2 space-y-2">
                    <li>
                        <a href="#"
                            class="flex items-center p-2 pl-11 w-full text-base font-medium text-white hover:text-primary-950 rounded-lg transition duration-150 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Data
                            Karyawan</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>

</aside>
