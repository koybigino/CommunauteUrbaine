<div class="md:flex md:items-center md:justify-center md:w-1/2 md:bg-transparent">
    <div class="px-6 py-6 md:px-8 md:py-0">
        <h2 class="text-lg font-bold text-white">Sign Up pour la mise à jour des <span
                class="text-red-600">Newletters</span></h2>

        <p class="mt-2 text-sm text-gray-600  md:text-gray-400">Inscrivez-vous à notre newsletter pour être informé de la
            publication de nouveaux articles.</p>
    </div>
</div>

<div class="flex items-center justify-center pb-6 md:py-0 md:w-1/2">
    <form method="GET" action="/">
        @csrf
        <div
            class="flex flex-col p-1.5 overflow-hidden border border-green-400  rounded-lg  lg:flex-row focus-within:ring focus-within:ring-opacity-40 focus-within:border-green-400 focus-within:ring-green-300">
            <input
                class="px-6 py-2 text-gray-700 placeholder-gray-500 bg-transparent outline-none  focus:placeholder-transparent"
                type="text" name="email" placeholder="Enter your email" aria-label="Enter your email">

            <button
                class="px-4 py-3 text-sm font-medium tracking-wider text-gray-100 uppercase transition-colors duration-300 transform bg-green-500 rounded-md hover:bg-green-600 focus:bg-green-600 focus:outline-none">souscrire</button>
        </div>
    </form>
</div>
