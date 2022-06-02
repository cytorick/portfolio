{{--<x-button.secondary wire:click="flushCache()" class="mr-2">--}}
{{--    {{ __('Flush cache') }}--}}
{{--</x-button.secondary>--}}

<button type="submit" x-tooltip.raw="Flush Cache" wire:click="flushCache()" class="mr-2 inline-flex items-center px-4 py-2.5 border border-transparent text-base font-medium rounded-md bg-gray-800 hover:bg-blue-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 hover:text-white text-blue-400"><i class="fa-solid fa-toilet"></i></button>

