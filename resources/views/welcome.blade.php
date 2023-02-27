<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />


    <!-- Script -->
    <script defer src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
    <script defer src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script defer>
        tailwind.config = {
          theme: {
            extend: {
              colors: {
                clifford: '#da373d',
              }
            }
          }
        }
      </script>
</head>

<body class="bg-yellow-50 px-6 mx-auto relative">
    <div class="fixed z-50 right-10 bottom-10">
        <x-whatsapp />
    </div>
    <header class="bg-white">
        <x-navbar />
    </header>
    <main>
        <section class="mt-20">
            <x-mot-de-bienvenu />
        </section>
        <section class="bg-white pt-10 shadow-lg mt-20 rounded-xl">
            <x-services />
        </section>
        <section class="mt-20 shadow-lg">
            <x-carousel />
        </section>
        <section class="bg-white pt-10 shadow-lg mt-20 rounded-xl">
            <x-carousel-activite />
        </section>
        <section class="bg-white mt-20 mb-20 rounded-xl shadow-lg">
            <x-partenaires />
        </section>
    </main>
    <footer class="rounded-t-xl bg-gray-900">
        <x-footer />
    </footer>
</body>

</html>
