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

<body class="bg-gradient-to-r from-gray-200 via-gray-200 to-gray-200 px-6 mx-auto relative">
    <div class="fixed z-50 right-10 bottom-10">
        <x-whatsapp />
    </div>
    <header class="bg-transparent rounded-b-xl">
        <x-navbar />
    </header>
    <main>
        {{ $slot }}
    </main>
    <footer class="rounded-t-xl bg-gray-300">
        <x-footer />
    </footer>
</body>

</html>
