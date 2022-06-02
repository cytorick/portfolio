<li>
	<a {{ $attributes->merge([ 'class' => '-m-3 p-3 block rounded-md hover:bg-gray-50 dark:hover:bg-gray-900 dark:bg-gray-800 transition ease-in-out duration-150' ]) }}>

		@isset($title)
			<p class="text-base font-medium text-gray-300">
				{{ $title }}
			</p>
		@endisset

		@isset($description)
			<p class="mt-1 text-sm text-gray-500">
				{{ $description }}
			</p>
		@endisset

	</a>
</li>
