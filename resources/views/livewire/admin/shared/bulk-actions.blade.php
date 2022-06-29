<form wire:submit.prevent="featureSelected">
    <div x-data="{ tooltip: 'This is crazy!' }">
        <button x-tooltip="Feature record(s)" type="submit"
                class="inline-flex items-center px-4 py-2.5 border border-transparent text-base font-medium rounded-md bg-gray-800 hover:bg-blue-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 hover:text-white text-blue-400">
            <i class="fa-solid fa-eye"></i></button>
    </div>
</form>
<form wire:submit.prevent="deleteSelected">
    <div x-data="{ tooltip: 'This is crazy!' }">
        <button x-tooltip="Delete record(s)" type="submit"
                class="inline-flex items-center px-4 py-2.5 border border-transparent text-base font-medium rounded-md bg-gray-800 hover:bg-red-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 hover:text-white text-red-500">
            <i class="fa-solid fa-trash"></i></button>
    </div>
</form>
<form wire:submit.prevent="archiveSelected">
    <div x-data="{ tooltip: 'This is crazy!' }">
        <button x-tooltip="Archive record(s)" type="submit"
                class="inline-flex items-center px-4 py-2.5 border border-transparent text-base font-medium rounded-md bg-gray-800 hover:bg-purple-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 hover:text-white text-purple-400">
            <i class="fa-solid fa-box-archive"></i></button>
    </div>
</form>
<div x-data="{ tooltip: 'This is crazy!' }">
    <a x-tooltip="Create record" href="{{ $route }}"
       class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md shadow-sm text-white hover:text-green-600 bg-green-600 hover:bg-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
       }}>
        <x-icon.plus/>
    </a>
</div>
