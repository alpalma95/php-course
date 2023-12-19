<a
    @if($active)
        aria-current="{{ $link }}"
    @endif 
    href="{{ $link }}" 
    class="
        @if($link === parse_url($_SERVER['REQUEST_URI'])['path']) bg-gray-900 text-white 
        @else text-gray-300 hover:bg-gray-700 hover:text-white 
        @endif 
        rounded-md px-3 py-2 text-sm font-medium
    ">{{ $slot }}</a>