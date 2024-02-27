<footer>
    <div class="flex justify-center  mx-auto max-w-4xl mt-4 mb-6 sm:items-center sm:justify-between">
        <div class="text-center text-sm text-gray-500 sm:text-left">
            <div class="flex items-center">


                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    viewBox="0 0 24 24" class="ml-4 -mt-px w-5 h-5 text-gray-400">
                    <path
                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                    </path>
                </svg>

                <a href="https://www.josenunez.eu" class="ml-1 underline">
                    Desarrollado por Jose P. Nuñez
                </a>
            </div>
        </div>
        <div class="ml-4 text-center text-sm text-gray-500 sm:ml-0">
            &copy; Cleepple Copyright <?php
            $then = 2019;
            $now = date('Y');
            if ($then == $now) {
            echo $now;
            } else {
            echo "$then - $now";
            }
            ?>
        </div>

        <div class="ml-4 text-center text-sm text-gray-500 sm:text-right mr-3 sm:ml-0">
            Cleepple v1.3.0 ( Desarrollado con PHP v{{ PHP_VERSION }})
        </div>
    </div>
   
</footer>
