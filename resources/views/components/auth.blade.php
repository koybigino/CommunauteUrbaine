@props(['title'])

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <section class="bg-gradient-to-r from-gray-200 via-gray-200 to-gray-200">
        <div class="container flex items-center justify-center min-h-screen px-6 mx-auto">
            <form class="w-full m-20 p-6 shadow-lg rounded-lg  bg-white max-w-md" action="/">
                @csrf
                {{$slot}}
            </form>
        </div>
    </section>
</body>
</html>