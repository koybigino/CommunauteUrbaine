<div x-data="{ isOpen: false }" class="relative inline-block ">
    <!-- Dropdown toggle button -->
    <button type="reset" @click="isOpen = !isOpen"
        class="relative z-10 block hover:text-gray-700 transition-color duration-500 ease-in-out text-gray-500 bg-white pr-5 rounded-md   focus:outline-none">
        <div>Language</div>

        <div class="absolute bottom-1 right-1">
            <svg x-show="!isOpen" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                <path
                    d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z" />
            </svg>
            <svg x-show="isOpen" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-caret-up-fill" viewBox="0 0 16 16">
                <path
                    d="m7.247 4.86-4.796 5.481c-.566.647-.106 1.659.753 1.659h9.592a1 1 0 0 0 .753-1.659l-4.796-5.48a1 1 0 0 0-1.506 0z" />
            </svg>
        </div>
    </button>

    <!-- Dropdown menu -->
    <div x-show="isOpen" @click.away="isOpen = false" 
        class="absolute -right-20 lg:right-2 z-20 w-48 py-2 mt-2 bg-white rounded-md shadow-xl">
        <a href="#"
            class="flex items-center px-3 py-3 text-sm text-gray-600 capitalize transition-colors duration-500 transform hover:bg-gray-100">
            <img width="30" src="{{ asset('france.jpeg') }}" alt="" srcset="">

            <span class="mx-1">
                Français
            </span>
        </a>

        <a href="#"
            class="flex items-center p-3 text-sm text-gray-600 capitalize transition-colors duration-500 transform hover:bg-gray-100">
            <img width="30" src="{{ asset('anglais.jpg') }}" alt="" srcset="">

            <span class="mx-1">
                Anglais
            </span>
        </a>
    </div>
</div>
