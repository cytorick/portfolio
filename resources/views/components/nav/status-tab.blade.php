@props([
	'key' => null,
	'count' => false,
	'color' => 'indigo'
])


<button type="button"
		wire:click="$set('status', '{{ $key }}')"
		@click="{ tab = '{{ $key }}' }"
		class="relative text-gray-500 hover:text-gray-700 group relative min-w-0 flex-1 overflow-hidden bg-white py-4 px-4 text-sm font-medium text-center hover:bg-gray-50 focus:z-10"
		:class="{ 'text-gray-900': tab == '{{ $key }}' }"
		aria-current="page">
	
	<span>
		{{ $slot }}
	</span>
	
	{{-- COUNT --}}
	@if ($count !== false)
		<span class="absolute top-2 right-2 bg-gray-100 text-gray-900 hidden ml-2 py-0.5 px-2 rounded-full text-xs font-medium md:inline-block"
			  :class="{ 'bg-indigo-100 text-indigo-600': tab == '{{ $key }}' }">
			{{ $count }}
		</span>
	@endif

	{{-- UNDERLINE IF ACTIVE --}}
	<span x-show="tab == '{{ $key }}'"
		  aria-hidden="true"
		  class="bg-indigo-500 absolute inset-x-0 bottom-0 h-0.5"></span>

</button>