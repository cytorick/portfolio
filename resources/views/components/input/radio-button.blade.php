@props([
	'id' => '',
	'name' => '',
	'value' => '',
])

<div {{ $attributes->merge([ 'class' => 'flex items-center' ]) }}>
	
	<input id="{{ $id }}" name="{{ $name }}" value="{{ $value }}" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300">

	<label for="{{ $id }}" class="ml-1 block text-sm font-medium text-gray-700">
		{{ $slot }}
	</label>

</div>
