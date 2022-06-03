
<span class="inline-flex rounded-md shadow-sm">
    <button type="submit"
        {{ $attributes->merge([
            'type' => 'button',
            'class' => 'inline-flex justify-center py-1.5 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500' . ($attributes->get('disabled') ? ' opacity-75 cursor-pointer' : ''),
        ]) }}
    >
        {{ $slot }}
    </button>
</span>
