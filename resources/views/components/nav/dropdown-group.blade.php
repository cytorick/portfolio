<li x-data="{ isOpen: false }"
	 @click.away="isOpen = false"
	 {{ $attributes->merge([ 'class' => 'inline-flex' ]) }}>
	
	{{ $slot }}

</li>


