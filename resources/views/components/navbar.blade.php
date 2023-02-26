<nav x-data="{ isOpen: false }" class="bg-white shadow sm:mb-10  rounded-b-xl">
    <div class="container py-2 mx-auto">
        <div class="lg:flex justify-between">
            <div class="flex items-center pr-10 justify-between">
                <a href="#">
                    <img class="transition duration-500 ease-in-out transform hover:scale-105" width="70" height="auto" src="{{ asset('image.jpg') }}" alt="">
                </a>

                <!-- Mobile menu button -->
                <div class="flex lg:hidden">
                    <button x-cloak @click="isOpen = !isOpen" type="button"
                        class="text-gray-500 hover:text-gray-600 focus:outline-none focus:text-gray-600"
                        aria-label="toggle menu">
                        <svg x-show="!isOpen" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 8h16M4 16h16" />
                        </svg>

                        <svg x-show="isOpen" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>

            <div x-cloak :class="[isOpen ? 'translate-x-0 opacity-100 ' : 'opacity-0 -translate-x-full']"
                class="absolute inset-x-0 z-20 flex-1 w-full px-6 py-4 transition-all duration-500 ease-in-out bg-white lg:mt-0 lg:p-0 lg:top-0 lg:relative lg:bg-transparent lg:w-auto lg:opacity-100 lg:translate-x-0 lg:flex lg:items-center lg:justify-between">
                <div
                    class="flex flex-col text-gray-600 capitalize  lg:flex lg:-mx-4 lg:flex-row lg:items-center">
                    <a href="#"
                        class="mt-2 transition-colors duration-500 transform lg:mt-0 lg:mx-4 hover:text-green-400 ">actualites</a>
                    <a href="#"
                        class="mt-2 transition-colors duration-500 transform lg:mt-0 lg:mx-4 hover:text-green-400 ">Newletters</a>
                    <a href="#"
                        class="mt-2 transition-colors duration-500 transform lg:mt-0 lg:mx-4 hover:text-green-400 ">Products</a>
                    <form action="/" class="relative mt-4 lg:mt-0 lg:mx-4">
                        @csrf
                        <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                            <button type="submit"><svg class="w-4 h-4 text-gray-600 "
                                    viewBox="0 0 24 24" fill="none">
                                    <path
                                        d="M21 21L15 15M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                </svg>
                            </button>
                        </span>

                        <input type="text" class="w-full py-2 pl-10 pr-4 text-gray-700 bg-white border rounded-lg focus:border-green-400  focus:outline-none focus:ring focus:ring-opacity-40 focus:ring-blue-300" placeholder="Search">
                </div>

                <div class="flex justify-start mt-6 lg:flex lg:mt-0 lg:-mx-2">
                    <a class="hover:text-green-400 py-1 duration-500 transform pr-3 text-gray-500"
                        href="#">Login</a>
                    <a class="rounded-xl hover:bg-green-400 text-gray-500 duration-500 transform hover:text-white py-1 px-3 border-2 border-green-400"
                        href="#">Logup</a>
                </div>
                <div class="mt-3 lg:flex lg:mt-0 lg:-mx-2">
                    <a class="hover:text-green-400 py-1 duration-500 transform text-gray-500"
                        href="#"><x-language-dropdown/></a>
                </div>
            </div>
        </div>
    </div>
</nav>
