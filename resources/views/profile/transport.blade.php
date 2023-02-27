<x-layaout>
    <section class="bg-white my-20">
        <div class="flex rounded-xl justify-center min-h-screen">
            <div class="hidden bg-cover lg:block lg:w-2/5"
                style="background-image: url('https://images.unsplash.com/photo-1494621930069-4fd4b2e24a11?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=715&q=80')">
            </div>

            <div class="flex items-center w-full max-w-3xl p-8 mx-auto lg:px-12 lg:w-3/5">
                <div class="w-full">
                    <h1 class="text-2xl font-semibold tracking-wider text-gray-800 capitalize">
                        Demande de carte de transport public
                    </h1>

                    <p class="mt-4 text-gray-500">
                        Let’s get you all set up so you can verify your personal account and begin setting up your
                        profile.
                    </p>

                    <form class="grid grid-cols-1 gap-6 mt-8 md:grid-cols-2">
                        @csrf

                        <div class="my-5">
                            <label class="block mb-2 text-md text-gray-600">Ancienneté</label>
                            <div class="flex justify-around">
                                <div class="flex gap-x-3">
                                    <label for="Nouvelle"
                                        class="text-gray-600 text-sm inline-block">Nouvelle </label>
                                    <input type="checkbox" name="Nouvelle" id="Nouvelle">
                                </div>
                                <div class="flex gap-x-3">
                                    <label for="Duplicata"
                                        class="text-gray-600 text-sm inline-block">Duplicata </label>
                                    <input type="checkbox" name="Duplicata" id="Duplicata">
                                </div>
                                <div class="flex gap-x-3">
                                    <label for="Renouvellement"
                                        class="text-gray-600 text-sm inline-block">Renouvellement
                                    </label>
                                    <input type="checkbox" name="Renouvellement" id="Renouvellement">
                                </div>
                            </div>
                        </div>

                        <div class="my-5">
                            <label class="block mb-2 text-md text-gray-600">Category</label>
                            <div class="flex justify-around">
                                <div class="flex gap-x-3">
                                    <label for="1"
                                        class="text-gray-600 text-sm inline-block">1 </label>
                                    <input type="checkbox" name="1" id="1">
                                </div>
                                <div class="flex gap-x-3">
                                    <label for="2"
                                        class="text-gray-600 text-sm inline-block">2 </label>
                                    <input type="checkbox" name="2" id="2">
                                </div>
                                <div class="flex gap-x-3">
                                    <label for="3"
                                        class="text-gray-600 text-sm inline-block">3 </label>
                                    <input type="checkbox" name="3" id="3">
                                </div>
                                <div class="flex gap-x-3">
                                    <label for="4"
                                        class="text-gray-600 text-sm inline-block">4 </label>
                                    <input type="checkbox" name="4" id="4">
                                </div>
                                <div class="flex gap-x-3">
                                    <label for="5"
                                        class="text-gray-600 text-sm inline-block">5 </label>
                                    <input type="checkbox" name="5" id="5">
                                </div>
                            </div>
                        </div>

                        <div class="my-5">
                            <label class="block mb-2 text-md text-gray-600">Numero chassis</label>
                            <input type="text" placeholder="XXX-XX-XXXX-XXX"
                                class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-lg focus:border-green-400 focus:ring-green-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                        </div>

                        <div class="my-5">
                            <label for="Birthday" class="block text-md text-gray-500">Date de
                                delivrance</label>

                            <input type="date" placeholder="John Doe"
                                class="block  mt-2 w-full placeholder-gray-400/70 rounded-lg border border-gray-200 bg-white px-5 py-2.5 text-gray-700 focus:border-green-400 focus:outline-none focus:ring focus:ring-green-300 focus:ring-opacity-40" />
                        </div>

                        <button
                            class="flex items-center justify-between w-44 px-6 py-3 text-sm tracking-wide text-white capitalize transition-colors duration-300 transform bg-green-500 rounded-lg hover:bg-green-400 focus:outline-none focus:ring focus:ring-green-300 focus:ring-opacity-50">
                            <span>Soumettre </span>

                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 rtl:-scale-x-100" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-layaout>
