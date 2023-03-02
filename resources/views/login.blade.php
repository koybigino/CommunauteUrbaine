<x-auth title="Login">
    <div class="px-6 py-4">
        <div class="flex justify-center mx-auto">
            <img class="w-auto lg:h-44 sm:10" src="{{ asset('image.jpg') }}" alt="">
        </div>

        <h3 class="mt-3 text-xl font-medium text-center text-gray-600 ">Bienvenue</h3>

        <p class="mt-1 text-center text-gray-800">Connectez vous à votre compte</p>
    </div>

    <div class="relative flex items-center mt-8">
        <span class="absolute">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mx-3 text-gray-300" fill="none"
                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
            </svg>
        </span>

        <input type="text"
            class="block w-full py-3 text-gray-700 bg-transparent border rounded-lg px-11 focus:border-green-400 focus:ring-green-300 focus:outline-none focus:ring focus:ring-opacity-40"
            placeholder="Username or email">
    </div>

    <div class="relative flex items-center mt-4">
        <span class="absolute">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mx-3 text-gray-300" fill="none"
                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
            </svg>
        </span>

        <input type="password"
            class="block w-full px-10 py-3 text-gray-700 bg-transparent border rounded-lg focus:border-green-400 focus:ring-green-300 focus:outline-none focus:ring focus:ring-opacity-40"
            placeholder="Password">
    </div>

    <div class="mt-6">
        <button
            class="w-full px-6 py-3 text-sm font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-green-500 rounded-lg hover:bg-green-400 focus:outline-none focus:ring focus:ring-green-300 focus:ring-opacity-50">
            Sign In
        </button>

        <div class="flex items-center justify-center py-4 text-cente">
            <span class="text-sm text-gray-600 ">N'avez vous pas un compte ? </span>

            <a href="/register"
                class="mx-2 text-sm font-bold text-green-400 hover:underline">Register</a>
        </div>
    </div>
</x-auth>
