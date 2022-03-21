<x-dropdown label="Bulk actions">
	<x-dropdown.item type="button" wire:click="exportSelected" class="flex items-center space-x-2">
		<x-icon.download class="text-gray-400"/> <span>Export</span>
	</x-dropdown.item>

	<x-dropdown.item type="button" wire:click="$toggle('showDeleteModal')" class="flex items-center space-x-2">
		<x-icon.trash class="text-gray-400"/> <span>Delete</span>
	</x-dropdown.item>
</x-dropdown>