@if (!count($child))
    <li>
        <a href="{{ $href }}"
            class="flex items-center p-2 text-base font-medium text-white rounded-lg dark:text-white hover:bg-gray-100 transition duration-150 hover:text-primary-950 ">
            <i class="{{ $icon }}"></i>
            <span class="ml-3">{{ $title }}</span>
        </a>
    </li>
@else
    <li>
        <button type="button"
            class="flex items-center p-2 w-full text-base font-normal text-white hover:text-primary-950 rounded-lg transition duration-150 group hover:bg-gray-100"
            aria-controls="dropdown-pages" data-collapse-toggle="dropdown-pages">
            <i class="{{ $icon }}"></i>
            <span class="flex-1 ml-3 text-left whitespace-nowrap">{{ $title }}</span>
            <i class="fa-solid fa-chevron-down"></i>
        </button>
        <ul id="dropdown-pages" class="hidden py-2 space-y-2">
            @foreach ($child as $item)
                <li>
                    <a href="{{ $item['href'] }}"
                        class="flex  items-center gap-2 p-2 pl-11 w-full text-base font-medium text-white hover:text-primary-950 rounded-lg transition duration-150 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
                        {{ $item['title'] }}</a>
                </li>
            @endforeach
        </ul>
    </li>
@endif
