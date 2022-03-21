<div
	x-data="
		select({
			name: 'shop',
			shops: @entangle('shops'),
			shop: @entangle('filters.shop'),
			emptyOptionsMessage: 'No shops match your search.',
			placeholder: 'Select a shop...',
		})"
	x-init="init()"
	x-on:reset-dropdown.window="resetDropdown()"
	@click.away="closeListbox()"
	@keydown.escape="closeListbox()"
	class="relative mt-1"
>

	{{-- TOGGLE BUTTON --}}
	<span class="inline-block w-full rounded-md shadow-sm">
		<button x-ref="button"
				@click="toggleListboxVisibility()"
				:aria-expanded="open"
				aria-haspopup="listbox"
				class="relative z-0 w-full py-2 pl-3 pr-10 text-left transition duration-150 ease-in-out bg-white border border-gray-300 rounded-md cursor-default focus:outline-none focus:shadow-outline-blue focus:border-blue-300 sm:text-sm sm:leading-5">
			
			{{-- LABEL --}}
			<span x-show="! open"
				  x-text="selectedOptionIndex == null ? placeholder :  selectedName"
				  :class="{ 'text-gray-500': ! (selectedOptionIndex in options) }"
				  class="block truncate"></span>

			{{-- SEARCH INPUT FOR FILTERING --}}
			<input x-ref="search"
				   x-show="open"
				   x-model="search"
				   @keydown.enter.stop.prevent="selectOption()"
				   @keydown.arrow-up.prevent="focusPreviousOption()"
				   @keydown.arrow-down.prevent="focusNextOption()"
				   type="search"
				   class="w-full h-full form-control focus:outline-none p-0 focus:ring-0 focus:shadow-none focus:border-0 border-0" />

			{{-- CHEVRON DOWN --}}
			<span class="absolute inset-y-0 right-0 flex items-center pr-2 pointer-events-none">
				<svg class="w-5 h-5 text-gray-400" viewBox="0 0 20 20" fill="none" stroke="currentColor">
					<path d="M7 7l3-3 3 3m0 6l-3 3-3-3" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
				</svg>
			</span>

		</button>
	</span>
	{{-- end TOGGLE BUTTON --}}


	{{-- DROPDOWN PANEL --}}
	<div x-show="open"
		 x-transition:leave="transition ease-in duration-100"
		 x-transition:leave-start="opacity-100"
		 x-transition:leave-end="opacity-0"
		 x-cloak
		 class="absolute z-10 w-full mt-1 bg-white rounded-md shadow-lg">

		<ul x-ref="listbox"
			@keydown.enter.stop.prevent="selectOption()"
			@keydown.arrow-up.prevent="focusPreviousOption()"
			@keydown.arrow-down.prevent="focusNextOption()"
			role="listbox"
			:aria-activedescendant="focusedOptionIndex ? name + 'Option' + focusedOptionIndex : null"
			tabindex="-1"
			class="py-1 overflow-auto text-base leading-6 rounded-md shadow-xs max-h-60 focus:outline-none sm:text-sm sm:leading-5">

			{{-- ITEM ITERATOR --}}
			<template x-for="(option, index) in options" :key="index">
				<li :id="name + 'Option' + focusedOptionIndex"
					@click="selectOption()"
					@mouseenter="focusedOptionIndex = index"
					@mouseleave="focusedOptionIndex = null"
					role="option"
					:aria-selected="focusedOptionIndex === index"
					:class="{ 'text-white bg-indigo-600': index === focusedOptionIndex, 'text-gray-900': index !== focusedOptionIndex }"
					class="relative py-2 pl-3 text-gray-900 cursor-default select-none pr-9">

					{{-- ITEM LABEL --}}
					<span x-text="option.name"
						  :class="{ 'font-semibold': index === focusedOptionIndex, 'font-normal': index !== focusedOptionIndex }"
						  class="block font-normal truncate"></span>

					{{-- SELECTION CHECK MARK --}}
					{{-- <span x-show="index === selectedOptionIndex" --}}
					<span x-show="option.id === shop"
						  :class="{ 'text-white': index === focusedOptionIndex, 'text-indigo-600': index !== focusedOptionIndex }"
						  class="absolute inset-y-0 right-0 flex items-center pr-4 text-indigo-600">
						<svg class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
							<path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
						</svg>
					</span>

				</li>
			</template>
			{{-- end ITEM ITERATOR --}}

			{{-- NO ITEMS FOUND MESSAGE --}}
			<div x-show="! Object.keys(options).length"
				 x-text="emptyOptionsMessage"
				 class="px-3 py-2 text-gray-900 cursor-default select-none"></div>

		</ul>
	</div>
	{{-- end DROPDOWN PANEL --}}

</div>

<script>
	function select (config) {
		return {
			shops: config.shops,
			shop: config.shop,

			emptyOptionsMessage: config.emptyOptionsMessage ?? 'No results match your search.',
			placeholder: config.placeholder ?? 'Select an option',

			focusedOptionIndex: null,
			selectedOptionIndex: null,
			selectedName: '',

			name: config.name,

			open: false,

			options: {},

			search: '',

			closeListbox: function () 
			{
				this.open = false
				this.focusedOptionIndex = null
				this.search = ''
			},

			focusNextOption: function ()
			{
				if (this.focusedOptionIndex === null) return this.focusedOptionIndex = Object.keys(this.options).length - 1
				if (this.focusedOptionIndex + 1 >= Object.keys(this.options).length) return

				this.focusedOptionIndex++

				this.$refs.listbox.children[this.focusedOptionIndex].scrollIntoView({
					block: "center",
				})
			},

			focusPreviousOption: function ()
			{
				if (this.focusedOptionIndex === null) return this.focusedOptionIndex = 0
				if (this.focusedOptionIndex <= 0) return

				this.focusedOptionIndex--

				this.$refs.listbox.children[this.focusedOptionIndex].scrollIntoView({
					block: "center",
				})
			},

			init: function ()
			{
				this.options = JSON.parse(this.shops)

				if (!(this.selectedOptionIndex in this.options)) {
					this.selectedOptionIndex = 0
					this.selectedName = 'All shops...'
				}
				
				this.$watch('search', ((value) => {
					if (!this.open || !value) return this.options = JSON.parse(this.shops)

					// Exclude the 'All'-option (id = 0) and include options that match the search value.
					this.options = JSON.parse(this.shops)
						.filter(option => option.name.toLowerCase().includes(value.toLowerCase()) && option.id !== 0)
				}))
			},

			selectOption: function ()
			{
				if (!this.open) return this.toggleListboxVisibility()

				// Store the clicked index as selected index.
				this.selectedOptionIndex = this.focusedOptionIndex

				// Pluck the option name for local usage.
				this.selectedName = this.options[this.selectedOptionIndex].name

				// Update the livewire component with the selected id.
				this.$wire.set('filters.shop', this.options[this.selectedOptionIndex].id)

				this.closeListbox()
			},

			toggleListboxVisibility: function ()
			{
				if (this.open) return this.closeListbox()

				// Get index of the currently selected option.
				this.focusedOptionIndex = this.options.findIndex(option => option.id === this.shop)

				// If, for some reason, the found index is less than 0, set the index
				// to 0. The first option will then be highlighted.
				if (this.focusedOptionIndex < 0) this.focusedOptionIndex = 0

				// mark dropdown as opened.
				this.open = true

				// Scroll to the option with the found index.
				this.$nextTick(() => {
					this.$refs.search.focus()
					this.$refs.listbox.children[this.focusedOptionIndex].scrollIntoView({
						block: "nearest"
					})
				})
			},

			resetDropdown: function ()
			{
				this.shop = 0
				this.$wire.set('filters.shop', 0)
				this.selectedName = this.placeholder
			}

		}

	}
</script>