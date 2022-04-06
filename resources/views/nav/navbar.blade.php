<div class="border-b-2">
    <div class=" h-14 flex items-center mx-auto container lg:w-10/12">
        <div class="uppercase font-semibold  lg:text-2xl font-comforter text-lime-700 px-10 dark:text-lime-300">
            Celciot
        </div>
        @auth
            <button id="dropdownDividerButton" data-dropdown-toggle="dropdownDivider"
                class="ml-auto text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                type="button">Live Preview <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg></button>
            <!-- Dropdown menu -->
            <div id="dropdownDivider"
                class="hidden z-10 w-44 text-base list-none bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                <ul class="py-1" aria-labelledby="dropdownDividerButton">
                    <li>
                        <a href="#"
                            class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">{{ auth()->user()->name }}</a>
                    </li>
                </ul>
                <div class="py-1">
                    <form action="/logout" method="post">
                        @csrf
                        <button type="submit"
                            class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white w-full "
                            style="cursor: pointer">Log Out
                            <i class="bi bi-box-arrow-right"></i></button>
                    </form>
                </div>
            </div>
        @else
            <div class="flex ml-auto pr-5">
                <div>Live</div>
                <div>Temprature</div>
            </div>
        @endauth
    </div>
</div>
