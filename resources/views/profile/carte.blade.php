<x-layaout>
    <x-form title="Ajouter les informations pour la creation d'une carte bleu"
    image="https://images.unsplash.com/photo-1494621930069-4fd4b2e24a11?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=715&q=80">
    <div class="my-1">
            <label for="image" class="block text-sm text-white">Pdf Formulaire d'identification d'imbré</label>

            <input type="file"
                class="block w-full px-3 py-2 mt-2 text-sm text-gray-100 bg-transparent border border-gray-200 rounded-lg file:bg-transparent file:text-gray-100 file:text-sm file:px-4 file:py-1 file:border-none file:rounded-full placeholder-gray-100/70  focus:border-green-400 focus:outline-none focus:ring focus:ring-green-300 focus:ring-opacity-40" />
        </div>

        <div class="my-1">
            <label for="image" class="block text-sm text-white">Pdf recto/verso de la CNI</label>

            <input type="file"
                class="block w-full px-3 py-2 mt-2 text-sm text-gray-100 bg-transparent border border-gray-200 rounded-lg file:bg-transparent file:text-gray-100 file:text-sm file:px-4 file:py-1 file:border-none file:rounded-full placeholder-gray-100/70  focus:border-green-400 focus:outline-none focus:ring focus:ring-green-300 focus:ring-opacity-40" />
        </div>

        <div class="my-1">
            <label for="image" class="block text-sm text-white">Pdf Licence</label>

            <input type="file"
                class="block w-full px-3 py-2 mt-2 text-sm text-gray-100 bg-transparent border border-gray-200 rounded-lg file:bg-transparent file:text-gray-100 file:text-sm file:px-4 file:py-1 file:border-none file:rounded-full placeholder-gray-100/70  focus:border-green-400 focus:outline-none focus:ring focus:ring-green-300 focus:ring-opacity-40" />
        </div>

        <div class="my-1">
            <label for="image" class="block text-sm text-white">Pdf carte grise</label>

            <input type="file"
                class="block w-full px-3 py-2 mt-2 text-sm text-gray-100 bg-transparent border border-gray-200 rounded-lg file:bg-transparent file:text-gray-100 file:text-sm file:px-4 file:py-1 file:border-none file:rounded-full placeholder-gray-100/70  focus:border-green-400 focus:outline-none focus:ring focus:ring-green-300 focus:ring-opacity-40" />
        </div>

        <div class="my-1">
            <label for="image" class="block text-sm text-white">Pdf Visite technique</label>

            <input type="file"
                class="block w-full px-3 py-2 mt-2 text-sm text-gray-100 bg-transparent border border-gray-200 rounded-lg file:bg-transparent file:text-gray-100 file:text-sm file:px-4 file:py-1 file:border-none file:rounded-full placeholder-gray-100/70  focus:border-green-400 focus:outline-none focus:ring focus:ring-green-300 focus:ring-opacity-40" />
        </div>

        <div class="my-1">
            <label for="image" class="block text-sm text-white">Pdf assurance</label>

            <input type="file"
                class="block w-full px-3 py-2 mt-2 text-sm text-gray-100 bg-transparent border border-gray-200 rounded-lg file:bg-transparent file:text-gray-100 file:text-sm file:px-4 file:py-1 file:border-none file:rounded-full placeholder-gray-100/70  focus:border-green-400 focus:outline-none focus:ring focus:ring-green-300 focus:ring-opacity-40" />
        </div>

        <div class="my-1">
            <label for="image" class="block text-sm text-white">Pdf impot liberatoire</label>

            <input type="file"
                class="block w-full px-3 py-2 mt-2 text-sm text-gray-100 bg-transparent border border-gray-200 rounded-lg file:bg-transparent file:text-gray-100 file:text-sm file:px-4 file:py-1 file:border-none file:rounded-full placeholder-gray-100/70  focus:border-green-400 focus:outline-none focus:ring focus:ring-green-300 focus:ring-opacity-40" />
        </div>

        <div class="my-1">
            <label for="image" class="block text-sm text-white">Pdf carte de stationnement</label>

            <input type="file"
                class="block w-full px-3 py-2 mt-2 text-sm text-gray-100 bg-transparent border border-gray-200 rounded-lg file:bg-transparent file:text-gray-100 file:text-sm file:px-4 file:py-1 file:border-none file:rounded-full placeholder-gray-100/70  focus:border-green-400 focus:outline-none focus:ring focus:ring-green-300 focus:ring-opacity-40" />
        </div>

        <div class="my-1">
            <label class="block mb-2 text-sm text-gray-100">Numero contribuable</label>
            <input type="text" placeholder="XXX-XX-XXXX-XXX"
                class="block w-full px-5 py-3 mt-2 text-gray-100 placeholder-gray-100 bg-transparent border border-gray-200 rounded-lg focus:border-green-400 focus:ring-green-400 focus:outline-none focus:ring focus:ring-opacity-40" />
        </div>

        <x-payment />
    </x-form>
</x-layaout>
