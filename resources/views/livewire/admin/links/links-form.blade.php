<div class="grid grid-cols-12 gap-5">
    <div class="col-span-8">
        <form wire:submit.prevent="save" class="space-y-6">

            <div class="bg-white dark:bg-gray-800 shadow overflow-hidden sm:rounded-lg">
                <div class="px-4 py-5 sm:px-6">
                    <div class="flex justify-between items-center">
                        <div>
                            <h3 class="text-lg leading-6 font-medium text-gray-900 dark:text-gray-100">{{ __('Basic details') }}</h3>
                            <p class="mt-1 max-w-2xl text-sm text-gray-500 dark:text-gray-200">{{ __('Here you have to specify the name, icon and type.') }}</p>
                        </div>
                        <div></div>
                    </div>
                </div>
                <div class="border-t border-gray-200 dark:border-green-600 px-4 py-5 sm:px-6 space-y-4">

                    <div class="grid grid-cols-9 gap-5">
                        <div class="col-span-5">
                            <x-input.group stacked for="name" label="{{ __('Name*') }}" :error="$errors->first('editing.name')">
                                <x-input.text id="name" wire:model.lazy="editing.name" :error="$errors->first('editing.name')" />
                            </x-input.group>
                        </div>
                    </div>

                    <div class="grid grid-cols-9 gap-5">
                        <div class="col-span-5">
                            <x-input.group stacked for="icon" label="{{ __('Icon*') }}" :error="$errors->first('editing.icon')">
                                <x-input.text id="icon" wire:model.lazy="editing.icon" :error="$errors->first('editing.icon')" />
                            </x-input.group>
                            <x-a.link href="https://fontawesome.com" target="_blank">go to fontawesome.com <x-icon.external-link /> </x-a.link>
                        </div>
                    </div>

                    <div class="grid grid-cols-9 gap-5">
                        <div class="col-span-5">
                            <x-input.group stacked for="link" label="{{ __('Link') }}" :error="$errors->first('editing.link')">
                                <x-input.text id="link" wire:model.lazy="editing.link" :error="$errors->first('editing.link')" />
                            </x-input.group>
                        </div>
                    </div>

                    <div class="grid grid-cols-9 gap-5">
                        <div class="col-span-5">
                            <x-input.group stacked for="featured" label="{{ __('Do you want this link featured in the navbar?') }}"
                                           :error="$errors->first('editing.featured')">
                                <label for="default-toggle" class="inline-flex relative items-center cursor-pointer">
                                    <input type="checkbox" value="1" wire:model.lazy="editing.featured" id="default-toggle" class="sr-only peer">
                                    <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
                                </label>
                            </x-input.group>
                        </div>
                    </div>


                </div>
            </div>
            <div class="mt-6">
                <div class="text-right">
                    <x-button.submit>
                        {{__('Save skills')}}
                    </x-button.submit>
                </div>
            </div>

        </form>
    </div>

    <div class="col-span-4">
        <div class="mt-8 grid grid-cols-1 gap-0.5 md:grid-cols-1 lg:mt-0 lg:grid-cols-1">
            <div class="col-span-1 flex justify-center py-8 px-8 dark:bg-gray-900 rounded-xl">
                <p class="text-2xl dark:text-gray-200">
                    {!! $this->editing->icon !!} {{ $this->editing->name }}
                </p>
            </div>
        </div>
    </div>

</div>
