<form wire:submit.prevent="save" class="space-y-6">

    {{-- BASIC DETAILS --}}
    <div class="bg-white dark:bg-gray-800 shadow overflow-hidden sm:rounded-lg">
        {{-- HEADER --}}
        <div class="px-4 py-5 sm:px-6">
            <div class="flex justify-between items-center">
                <div>
                    <h3 class="text-lg leading-6 font-medium text-gray-900 dark:text-gray-100">{{ __('Basic details') }}</h3>
                    <p class="mt-1 max-w-2xl text-sm text-gray-500 dark:text-gray-200">{{ __('Here you have to specify the name, image, level and percentage.') }}</p>
                </div>
                <div></div>
            </div>
        </div>
        {{-- CONTENT PANEL --}}
        <div class="border-t border-gray-200 dark:border-red-400 px-4 py-5 sm:px-6 space-y-4">

            <div class="grid grid-cols-9 gap-5">
                <div class="col-span-5">
                    <x-input.group stacked for="name" label="{{ __('Name*') }}" :error="$errors->first('editing.name')">
                        <x-input.text id="name" wire:model.lazy="editing.name" :error="$errors->first('editing.name')" />
                    </x-input.group>
                </div>
            </div>

            <div class="grid grid-cols-9 gap-5">
                <div class="col-span-5">
                    <x-input.group stacked for="level" label="{{ __('Level*') }}" :error="$errors->first('editing.level')">
                        <x-input.text id="level" wire:model.lazy="editing.level" :error="$errors->first('editing.level')" />
                    </x-input.group>
                </div>
            </div>

            <div class="grid grid-cols-9 gap-5">
                <div class="col-span-5">
                    <x-input.group stacked for="percentage" label="{{ __('Percentage') }}" :error="$errors->first('editing.percentage')">
                        <x-input.text id="percentage" wire:model.lazy="editing.percentage" :error="$errors->first('editing.percentage')" />
                    </x-input.group>
                </div>
            </div>

        </div>
    </div>

    {{-- FORM TOOLS --}}
    <div class="mt-6">
        <div class="text-right">
            <x-button.submit>
                {{__('Save language')}}
            </x-button.submit>
        </div>
    </div>

</form>
