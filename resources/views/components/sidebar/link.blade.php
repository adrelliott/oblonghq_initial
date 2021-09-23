@props([
    'url' => '#',
    'title' => 'Set a title in parent',
    'icon' => 'icons.dashboard',
    'active'    // set to any value (e.g. true) to apply. Prob do this using route() helper
])

<li class="relative px-6 py-3">
    <a
        class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200
            @isset($active)
                text-gray-800 dark:text-gray-100
            @endisset
        "
        href="{{ $url }}"
        >
        @isset($active)
            <span
                class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg"
                aria-hidden="true"
            ></span>
        @endisset
        <svg
            class="w-5 h-5"
            aria-hidden="true"
            fill="none"
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            viewBox="0 0 24 24"
            stroke="currentColor"
            >
            <x-dynamic-component :component="$icon" />

        </svg>
        <span class="ml-4">{{ $title }}</span>
    </a>
</li>
