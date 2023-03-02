<x-layaout>
    <x-form title="Entrez les informations pour recever une place dans nos parkings"
        image="https://images.unsplash.com/photo-1494621930069-4fd4b2e24a11?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=715&q=80">
        <div class="my-1">
            <label class="block mb-2 text-sm text-white ">Nom</label>
            <input type="text" placeholder="John"
                class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-100 bg-transparent border border-gray-200 rounded-lg focus:border-green-400 focus:ring-green-400 focus:outline-none focus:ring focus:ring-opacity-40" />
        </div>

        <div class="my-1">
            <label class="block mb-2 text-sm text-white ">Prenom</label>
            <input type="text" placeholder="Prenom"
                class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-100 bg-transparent border border-gray-200 rounded-lg focus:border-green-400 focus:ring-green-400 focus:outline-none focus:ring focus:ring-opacity-40" />
        </div>

        <div class="my-1">
            <label class="block mb-2 text-sm text-white ">Nombre de place</label>
            <input type="number" placeholder="1"
                class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-100 bg-transparent border border-gray-200 rounded-lg focus:border-green-400 focus:ring-green-400 focus:outline-none focus:ring focus:ring-opacity-40" />
        </div>

        <div class="my-1">
            <label class="block mb-2 text-sm text-white ">Choisir le parking</label>
            <select class="block w-full px-5 py-3 mt-2 text-gray-100 bg-transparent border border-gray-200 rounded-lg focus:border-green-400 focus:ring-green-400 focus:outline-none focus:ring focus:ring-opacity-40">
                @for ($i = 1; $i < 11; $i++)
                    <option class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-100 bg-transparent border border-gray-200 rounded-lg focus:border-green-400 focus:ring-green-400 focus:outline-none focus:ring focus:ring-opacity-40">Parking {{ $i }}</option>
                @endfor
            </select>
        </div>
        <x-payment />
    </x-form>
</x-layaout>
