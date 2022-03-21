<div class="flex justify-center p-6 my-1 border-2 border-gray-300 border-dashed rounded-md text-xl">
	<div x-data="{ focused: false }" class="text-center">

		<x-icon.upload class="mx-auto text-gray-400 h-10 w-10" />
		
		<div class="flex text-sm text-gray-600 mt-3">
			<label for="file" class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none">
				<span>Upload a file</span>
				<input id="file" name="file" type="file" class="sr-only" {{ $attributes }} @focus="focused = true" @blur="focused = false">
			</label>
			<p class="pl-1">or drag and drop</p>
		</div>

		@if( $slot )
			<p class="text-xs text-gray-500">
				{{ $slot }}
			</p>
		@endif

	</div>
</div>
