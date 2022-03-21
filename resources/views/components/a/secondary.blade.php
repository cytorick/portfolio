@props([
	'small' => false,
	'classesSizeSmall' => ' px-2 py-2 text-xs leading-3',
	'classesSizeDefault' => ' px-3 py-2 text-sm leading-4',
])

<a {{ $attributes->merge([ 'class' => 'inline-flex items-center border border-transparent font-medium rounded-md text-indigo-700 bg-indigo-100 hover:bg-indigo-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500'  . ($small ? $classesSizeSmall : $classesSizeDefault) ]) }}>
	{{ $slot }}
</a>
