@props(['title', 'link', 'image'])

<div class="flex flex-col items-center transition-all duration-500 ease-in-out transform hover:-translate-y-3 p-6 space-y-3 text-center bg-transparent rounded-xl ">
    <div class="w-full max-w-xs overflow-hidden bg-transparent rounded-lg shadow-lg ">
        <img class="object-cover w-full h-56" src="{{asset($image)}}" alt="avatar">
    
        <div class="py-5 px-2 truncate text-center">
            <a href="{{$link}}" class="block text-xl font-bold text-gray-800 text-ellipsis overflow-hidden whitespace-nowrap mb-2" tabindex="0" role="link">{{$title}}</a>
            <span class="text-sm text-gray-700">{{$content}}</span>
        </div>
    </div>

    <a href="{{$link}}"
        class="flex items-center -mx-1 text-sm text-green-500 capitalize transition-colors duration-500 transform hover:underline hover:text-green-600">
        <span class="mx-1">read more</span>
        <svg class="w-4 h-4 mx-1 rtl:-scale-x-100" fill="currentColor" viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
                d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                clip-rule="evenodd"></path>
        </svg>
    </a>
</div>