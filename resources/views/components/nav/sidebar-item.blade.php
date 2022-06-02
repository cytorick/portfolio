@props([
	'active' => false,
	'badge' => false,
	'navIcon' => false,
])

@php
$classes = ($active ?? false)
            ? 'bg-gray-200 text-blue-900 flex items-center px-3 py-2 text-base font-medium rounded-md transition mt-1'
            : 'text-gray-600 hover:bg-gray-50 hover:text-gray-900 flex items-center px-3 py-2 text-base font-medium rounded-md transition mt-1';
@endphp

<a {{ $attributes->merge([ 'class' => $classes ]) }} aria-current="page">

	@if ($navIcon)
		<span class="text-gray-400 flex-shrink-0 -ml-1 mr-3 h-6 w-6">
			{{ $navIcon }}
		</span>
	@endif

	<span class="truncate">
		{{ $slot }}
	</span>

	@if ($badge)
		<span class="bg-gray-50 ml-auto inline-block py-0.5 px-3 text-xs rounded-full">
			{{ $badge }}
		</span>
	@endif

</a>
