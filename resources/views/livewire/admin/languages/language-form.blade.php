<div class="grid grid-cols-12 gap-5">
    <div class="col-span-8">
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

                    <div class="grid grid-cols-9 gap-5">
                        <div class="col-span-5">
                            <input type="file" wire:model="image">
                            @if ($errors->first('image'))
                                <div class="mt-1 text-red-500 text-sm">{{ $errors->first('image') }}</div>
                            @endif
                            <div class="grid grid-cols-9 gap-5">
                                <div class="col-span-4">
                                    @if ($this->editing)
                                        @foreach($this->editing->media as $media)
                                            <img src="{{ asset('/img/' . $media->id .'/'. $media->file_name) }}" alt="">
                                        @endforeach
                                    @endif
                                </div>
                                @if ($image)
                                    <div class="col-span-1 my-auto">
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </div>
                                    <div class="col-span-4">
                                        <img src="{{ $image->temporaryUrl() }}" alt="">
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            {{-- FORM TOOLS --}}
            <div class="mt-6">
                <div class="text-right">
                    <x-button.submit>
                        {{__('Save languages')}}
                    </x-button.submit>
                </div>
            </div>

        </form>

    </div>

    <div class="col-span-4">
        <dl class="grid grid-cols-1 gap-5 sm:grid-cols-1 lg:grid-cols-1">
                <div class="bg-gray-200 dark:bg-gray-900 pt-5 px-4 pb-6 sm:pt-6 sm:px-6 shadow rounded-lg overflow-hidden">
                    <dt>
                        <div class="absolute bg-error rounded-md p-3">
                            @foreach($this->editing->media as $media)
                                <img src="{{ asset('/img/' . $media->id .'/'. $media->file_name) }}" alt="vlag" class="h-6 w-8">
                            @endforeach
                        </div>
                    </dt>
                    <dd class="ml-16">
                        <p class="text-2xl font-semibold text-gray-900 dark:text-gray-100">{{ $this->editing->name }}</p>
                        <p class="text-sm font-semibold text-gray-900 dark:text-gray-200">{{ $this->editing->level }}</p>
                    </dd>
                    <p class="text-xs mt-6">Level:</p>
                    <progress class="progress progress-error dark:bg-gray-900" value="{{ $this->editing->percentage }}" max="100" />

                </div>

        </dl>
    </div>

</div>
