<x-input.group borderless paddingless for="perPage" label="Per page">
	<x-input.select wire:model="perPage" id="perPage">
		<option value="10">10</option>
		<option value="25">25</option>
		<option value="50">50</option>
		<option value="100">100</option>
		<option value="500">500</option>
	</x-input.select>
</x-input.group>