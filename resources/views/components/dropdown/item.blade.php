@props(['type' => 'link'])

@if ($type === 'link')
    <a {{ $attributes->merge(['href' => '#', 'class' => 'block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-red-400 hover:text-gray-200 focus:outline-none focus:bg-gray-100 focus:text-gray-900']) }} role="menuitem">
        {{ $slot }}
    </a>
@elseif ($type === 'button')
    <button {{ $attributes->merge(['type' => 'button', 'class' => 'block w-full px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-red-400 hover:text-gray-200 dark:text-gray-100 dark:bg-gray-600 focus:outline-none focus:bg-gray-100 focus:text-gray-900']) }} role="menuitem">
        {{ $slot }}
    </button>
@endif
