<x-layaout>
    <x-form title="Entrez les informations pour une demande de carte de transport public"
    image="https://images.unsplash.com/photo-1494621930069-4fd4b2e24a11?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=715&q=80">

    <div class="my-1">
        <label class="block mb-2 text-sm text-gray-600">Ancienneté</label>
        <div class="flex justify-around">
            <div class="flex gap-x-3">
                <label for="Nouvelle" class="text-gray-600 text-sm inline-block">Nouvelle </label>
                <input type="checkbox" name="Nouvelle" id="Nouvelle">
            </div>
            <div class="flex gap-x-3">
                <label for="Duplicata" class="text-gray-600 text-sm inline-block">Duplicata </label>
                <input type="checkbox" name="Duplicata" id="Duplicata">
            </div>
            <div class="flex gap-x-3">
                <label for="Renouvellement" class="text-gray-600 text-sm inline-block">Renouvellement
                </label>
                <input type="checkbox" name="Renouvellement" id="Renouvellement">
            </div>
        </div>
    </div>

    <div class="my-1">
        <label class="block mb-2 text-sm text-gray-600">Category</label>
        <div class="flex justify-around">
            <div class="flex gap-x-3">
                <label for="1" class="text-gray-600 text-sm inline-block">1 </label>
                <input type="checkbox" name="1" id="1">
            </div>
            <div class="flex gap-x-3">
                <label for="2" class="text-gray-600 text-sm inline-block">2 </label>
                <input type="checkbox" name="2" id="2">
            </div>
            <div class="flex gap-x-3">
                <label for="3" class="text-gray-600 text-sm inline-block">3 </label>
                <input type="checkbox" name="3" id="3">
            </div>
            <div class="flex gap-x-3">
                <label for="4" class="text-gray-600 text-sm inline-block">4 </label>
                <input type="checkbox" name="4" id="4">
            </div>
            <div class="flex gap-x-3">
                <label for="5" class="text-gray-600 text-sm inline-block">5 </label>
                <input type="checkbox" name="5" id="5">
            </div>
        </div>
    </div>

    <div class="my-1">
        <label class="block mb-2 text-sm text-gray-600">Numero chassis</label>
        <input type="text" placeholder="XXX-XX-XXXX-XXX"
            class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-lg focus:border-green-400 focus:ring-green-400 focus:outline-none focus:ring focus:ring-opacity-40" />
    </div>

    <div class="my-1">
        <label for="Birthday" class="block text-sm text-gray-500">Date de
            delivrance</label>

        <input type="date" placeholder="John Doe"
            class="block  mt-2 w-full placeholder-gray-400/70 rounded-lg border border-gray-200 bg-white px-5 py-2.5 text-gray-700 focus:border-green-400 focus:outline-none focus:ring focus:ring-green-300 focus:ring-opacity-40" />
    </div>

    <x-payment />
</x-form>
</x-layaout>