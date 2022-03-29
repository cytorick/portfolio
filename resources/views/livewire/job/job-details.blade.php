<div class="space-y-6">
    <div class="bg-white dark:bg-gray-800 shadow overflow-hidden sm:rounded-lg">
        {{-- HEADER --}}
        <div class="px-4 py-5 sm:px-6">
            <div class="flex justify-between items-center">
                <div>
                    <h3 class="text-lg leading-6 font-medium text-gray-900 dark:text-gray-100">{{ __('Basic details') }}</h3>
                    <p class="mt-1 max-w-2xl text-sm text-gray-500 dark:text-gray-200">{{ __('Here you have to specify the name, type & status of the location.') }}</p>
                </div>
                <div></div>
            </div>
        </div>
        {{-- CONTENT PANEL --}}
        <div class="border-t border-gray-200 dark:border-red-400 px-4 py-5 sm:px-6 space-y-4">

            <div class="grid grid-cols-9 gap-5">
                <div class="col-span-5">

                </div>
            </div>

            <div class="grid grid-cols-9 gap-5">
                <div class="col-span-5">

                </div>
            </div>

            <div class="grid grid-cols-9 gap-5">
                <div class="col-span-5">

                </div>
            </div>

        </div>
    </div>

    <form wire:submit.prevent="save" class="space-y-6" enctype="multipart/form-data">
        {{-- COMPANY DETAILS --}}
        <div class="bg-white dark:bg-gray-800 shadow overflow-hidden sm:rounded-lg">
            {{-- HEADER --}}
            <div class="px-4 py-5 sm:px-6">
                <div class="flex justify-between items-center">
                    <div>
                        <h3 class="text-lg leading-6 font-medium text-gray-900 dark:text-gray-100">{{ __('Contact details') }}</h3>
                        <p class="mt-1 max-w-2xl text-sm text-gray-500 dark:text-gray-200">{{ __('Here you have the option to enter the contact information of the location.') }}</p>
                    </div>
                    <div></div>
                </div>
            </div>
            {{-- CONTENT PANEL --}}
            <div class="border-t border-red-400 px-4 py-5 sm:px-6 space-y-4">
                <div class="grid grid-cols-9 gap-5">
                    <div class="col-span-5">
                        <input type="file" wire:model="image">
                       @error('image') <span class="error">{{ $message }}</span> @enderror
                        @if ($image)
                            Photo Preview:
                            <img src="{{ $image->temporaryUrl() }}" alt="">
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-6">
            <div class="text-right">
             <button type="submit">
                 submit
             </button>
            </div>
        </div>

    </form>

</div>
