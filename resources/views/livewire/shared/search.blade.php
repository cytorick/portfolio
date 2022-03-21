<x-input.text wire:model.debounce.200ms="search" style="background: rgb(31 41 55);" placeholder="Search {{ $subject }}..." />

<x-button.link wire:click="toggleShowFilters">
	@if( $showFilters )
		Hide advanced search
	@else
		Advanced search...
	@endif
</x-button.link>