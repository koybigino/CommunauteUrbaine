<x-layaout>
     <!-- <div class="w-full text-center my-10">
        <h1 class="text-5xl font-semibold tracking-wider text-gray-800 capitalize">
            Demande d'autorisations de circuler
        </h1>
        <div>
            <label for="">Selectionnez si c'est une entreprise ou un particulier</label>
            <select class="block border-gray-900 w-44 mx-auto px-10 py-3 text-gray-700 bg-transparent border rounded-lg  focus:border-green-400  focus:ring-green-300 focus:outline-none focus:ring focus:ring-opacity-40"            name="" id="">
                <option value="">Particulier</option>
                <option value="">Entreprise</option>
            </select>
        </div>
    </div> -->
        <x-entreprise>
            <x-slot:payment>
                <x-payment />
                </x-slot>
        </x-entreprise>
</x-layaout>
