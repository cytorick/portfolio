@props([
	'color' => 'indigo'
])

<a {{ $attributes->merge([ 'class' => 'inline-flex items-center px-2 py-1 border border-transparent text-sm leading-4 font-medium rounded-md shadow-sm text-white bg-' . $color . '-600 hover:bg-' . $color . '-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-' . $color . '-500' ]) }}>
	{{ $slot }}
</a>
