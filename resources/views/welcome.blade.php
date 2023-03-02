<x-layaout>
    <section class="mt-20">
        <x-mot-de-bienvenu />
    </section>
    <section class="mt-20 shadow-lg">
        <x-carousel :images="['commune_6.jpg', 'commune_5.webp', 'commune_4.jpg']" />
    </section>
    <section class="bg-transparent pt-10 shadow-lg mt-20 rounded-xl">
        <x-actualite />
    </section>
    <section class="bg-transparent mt-20 mb-20 rounded-xl shadow-lg">
        <x-partenaires />
    </section>
</x-layaout>
