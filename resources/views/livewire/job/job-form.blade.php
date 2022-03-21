<form wire:submit.prevent="save" class="space-y-6" enctype="multipart/form-data">
    @csrf
    {{-- BASIC DETAILS --}}
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
                    <x-input.group stacked for="company" label="{{ __('Company*') }}"
                                   :error="$errors->first('editing.company')">
                        <x-input.text id="company" wire:model.lazy="editing.company"
                                      :error="$errors->first('editing.company')"/>
                    </x-input.group>
                </div>
            </div>

            <div class="grid grid-cols-9 gap-5">
                <div class="col-span-5">
                    <x-input.group stacked for="function" label="{{ __('Function*') }}"
                                   :error="$errors->first('editing.function')">
                        <x-input.text id="function" wire:model.lazy="editing.function"
                                      :error="$errors->first('editing.function')"/>
                    </x-input.group>
                </div>
            </div>

            <div class="grid grid-cols-9 gap-5">
                <div class="col-span-5">
                    <x-input.group stacked for="contract_type" label="{{ __('Contract Type*') }}"
                                   :error="$errors->first('editing.contract_type')">
                        <x-input.text id="contract_type" wire:model.lazy="editing.contract_type"
                                      :error="$errors->first('editing.contract_type')"/>
                    </x-input.group>
                </div>
            </div>

        </div>
    </div>

    {{-- ADDRESS DETAILS --}}
    <div class="bg-white dark:bg-gray-800 shadow overflow-hidden sm:rounded-lg">
        {{-- HEADER --}}
        <div class="px-4 py-5 sm:px-6">
            <div class="flex justify-between items-center">
                <div>
                    <h3 class="text-lg leading-6 font-medium text-gray-900 dark:text-gray-100">{{ __('Address details') }}</h3>
                    <p class="mt-1 max-w-2xl text-sm text-gray-500 dark:text-gray-200">{{ __('Here you have the option to specify the address information.') }}</p>
                </div>
                <div></div>
            </div>
        </div>
        {{-- CONTENT PANEL --}}
        <div class="border-t border-red-400 px-4 py-5 sm:px-6 space-y-4">
            <div class="grid grid-cols-9 gap-5">
                <div class="col-span-5">
                    <x-input.group stacked for="street" label="Street" :error="$errors->first('editing.street')">
                        <x-input.text id="street" wire:model="editing.street"/>
                    </x-input.group>
                </div>
            </div>
            <div class="grid grid-cols-9 gap-5">
                <div class="col-span-5">
                    <x-input.group stacked for="place" label="Place" :error="$errors->first('editing.place')">
                        <x-input.text id="place" wire:model="editing.place"/>
                    </x-input.group>
                </div>
            </div>
        </div>
    </div>

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
                    <x-input.group stacked for="start_date" label="Start Date"
                                   :error="$errors->first('editing.start_date')">
                        <x-input.date id="start_date" wire:model.lazy="editing.start_date" autocomplete="off"
                                      value="2021-09-09"/>
                    </x-input.group>
                </div>
            </div>
            <div class="grid grid-cols-9 gap-5">
                <div class="col-span-5">
                    <x-input.group stacked for="end_date" label="End Date" :error="$errors->first('editing.end_date')">
                        <x-input.date id="end_date" wire:model.lazy="editing.end_date" autocomplete="off"
                                      value="2021-09-09"/>
                    </x-input.group>
                </div>
            </div>
            <div class="grid grid-cols-9 gap-5">
                <div class="col-span-5">
                    <x-input.group stacked for="website" label="{{ __('Website*') }}"
                                   :error="$errors->first('editing.website')">
                        <x-input.text id="website" wire:model.lazy="editing.website"
                                      :error="$errors->first('editing.website')"/>
                    </x-input.group>
                </div>
            </div>
            <div class="grid grid-cols-9 gap-5">
                <div class="col-span-5">
                    <x-input.group stacked for="image" label="{{ __('Image*') }}" :error="$errors->first('image')">
                        <x-input.file-upload id="image" wire:model.lazy="image" name="image"
                                             :error="$errors->first('image')"/>
                    </x-input.group>
                    @if ($image)
                        Photo Preview:
                        <img src="{{ $image->temporaryUrl() }}" alt="">
                    @endif
                </div>
            </div>
        </div>
    </div>

    {{-- OTHER INFORMATION --}}
    <div class="bg-white dark:bg-gray-800 shadow overflow-hidden sm:rounded-lg">
        {{-- HEADER --}}
        <div class="px-4 py-5 sm:px-6">
            <div class="flex justify-between items-center">
                <div>
                    <h3 class="text-lg leading-6 font-medium text-gray-900 dark:text-gray-100">{{ __('Other information') }}</h3>
                </div>
                <div></div>
            </div>
        </div>
        {{-- CONTENT PANEL --}}
        <div class="border-t border-red-400 px-4 py-5 sm:px-6 space-y-4">
            <x-input.group stacked for="notes" label="{{ __('Notes') }}" :error="$errors->first('editing.notes')">
                <x-input.textarea id="notes" wire:model.lazy="editing.notes" rows="5"
                                  :error="$errors->first('editing.notes')"/>
            </x-input.group>
        </div>
    </div>

    {{-- FORM TOOLS --}}
    <div class="mt-6">
        <div class="text-right">
            <x-button.submit>
                {{__('Save job')}}
            </x-button.submit>
        </div>
    </div>

</form>
