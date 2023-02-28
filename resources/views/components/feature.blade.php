@props(['title', 'link'])

<div class="space-y-3">
    <span class="inline-block p-3 text-green-500 bg-green-100 rounded-full">
        {{ $icon }}
    </span>

    <h1 class="text-xl font-semibold text-gray-700 capitalize">{{ $title }}</h1>

    <p class="text-gray-500">
        {{ $desc }}
    </p>

    <a href="{{ $link }}"
        class="inline-flex items-center -mx-1 text-sm text-green-500 capitalize transition-colors duration-300 transform hover:underline hover:text-green-600">
        <span class="mx-1">commencer</span>
        <svg class="w-4 h-4 mx-1 rtl:-scale-x-100" fill="currentColor" viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
                d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                clip-rule="evenodd"></path>
        </svg>
    </a>
</div>
