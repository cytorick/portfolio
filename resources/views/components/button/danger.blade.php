@props([
	'disabled' => false,
	'enabledClasses' => ' text-white bg-red-600 hover:bg-red-700 focus:ring-red-500',
	'disabledClasses' => ' text-gray-400 bg-gray-200 cursor-default',
])

<button {{ $attributes->merge([ 'class' => 'inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2' . ($disabled ? $disabledClasses : $enabledClasses) ]) }} @if($disabled) disabled @endif>
	{{ $slot }}
</button>