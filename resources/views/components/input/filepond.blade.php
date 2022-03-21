<div wire:ignore
	 x-data
	 x-init="
	 	FilePond.setOptions({
		 	allowMultiple: {{ isset($attributes['multiple']) ? 'true' : 'false' }},
    		server: {
        		process:(fieldName, file, metadata, load, error, progress, abort, transfer, options) => {
        			@this.upload('{{ $attributes['wire:model'] }}', file, load, error, progress)
	        	},
	        	revert: (filename, load, error) => {
	        		@this.removeUpload('{{ $attributes['wire:model'] }}', filename, load)
		        },
        	},
        });

	 	var Pond = FilePond.create($refs.input);
	 	this.addEventListener('reset-filepond', e => {
	 		Pond.removeFiles(); 
	 	});
	"
>

	<input type="file" x-ref="input">

</div>


