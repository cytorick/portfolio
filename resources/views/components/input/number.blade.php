@props([
    'leadingAddOn' => false,
    'error' => false,
    'errorClasses' => ' border-red-300 text-red-900 placeholder-red-300 focus:outline-none focus:ring-red-500 focus:border-red-500',
    'defaultClasses' => ' border-gray-300 focus:ring-indigo-500 focus:border-indigo-500',
])

<div class="mt-1 relative flex rounded-md shadow-sm">
	@if ($leadingAddOn)
		<span class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">
			{{ $leadingAddOn }}
		</span>
	@endif
	<input type="number" {{ $attributes->merge([ 'class' => 'flex-1 block w-full rounded-none rounded-r-md sm:text-sm' . ($leadingAddOn ? ' rounded-none rounded-r-md' : ' rounded-md') . ($error ? $errorClasses : $defaultClasses) ]) }}>
	
	@if( $error )
		<div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
			<svg class="h-5 w-5 text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
				<path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
			</svg>
		</div>
    @endif

</div>