<div class="grid grid-cols-12 gap-5">
    <div class="col-span-8">
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
                <div class="border-t border-gray-200 dark:border-green-600 px-4 py-5 sm:px-6 space-y-4">

                    <div class="grid grid-cols-9 gap-5">
                        <div class="col-span-5">
                            <x-input.group stacked for="name" label="{{ __('Name*') }}"
                                           :error="$errors->first('editing.name')">
                                <x-input.text id="name" wire:model.lazy="editing.name"
                                              :error="$errors->first('editing.name')"/>
                            </x-input.group>
                        </div>
                    </div>

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
                            <x-input.group stacked for="contract_type" label="{{ __('Contract Type*') }}"
                                           :error="$errors->first('editing.contract_type')">
                                <x-input.select id="status" wire:model="editing.status"
                                                :error="$errors->first('editing.status')" placeholder="{{__('Select contract type')}}">
                                    <option value="Internship">{{__('Internship')}}</option>
                                </x-input.select>
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
                <div class="border-t border-green-600 px-4 py-5 sm:px-6 space-y-4">
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
                <div class="border-t border-green-600 px-4 py-5 sm:px-6 space-y-4">
                    <div class="grid grid-cols-9 gap-5">
                        <div class="col-span-5">
                            <div>
                                <label for="start_date" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Start date</label>
                                <div class="mt-1">
                                    <input type="date" wire:model="editing.start_date" id="start_date"
                                           class="flex-1 block w-full rounded-l-md rounded-r-md sm:text-sm dark:border-gray-700 dark:bg-gray-700 border-gray-300 focus:ring-gray-900 focus:border-gray-900">
                                </div>
                            </div>

                        </div>
                        <div class="col-span-5">
                            <div>
                                <label for="end_date" class="block text-sm font-medium text-gray-700 dark:text-gray-200">End date</label>
                                <div class="mt-1">
                                    <input type="date" wire:model="editing.end_date" id="end_date"
                                           class="flex-1 block w-full rounded-l-md rounded-r-md sm:text-sm dark:border-gray-700 dark:bg-gray-700 border-gray-300 focus:ring-gray-900 focus:border-gray-900">
                                </div>
                            </div>

                        </div>
                        <div class="col-span-5">
                            <x-input.group stacked for="active" label="{{ __('Is this your current jobs?') }}"
                                           :error="$errors->first('editing.is_active')">
                                <label for="default-toggle" class="inline-flex relative items-center cursor-pointer">
                                    <input type="checkbox" value="1" wire:model.lazy="editing.is_active" id="default-toggle" class="sr-only peer">
                                    <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
                                </label>
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
                            <input type="file" wire:model="image">
                            @if ($errors->first('image'))
                                <div class="mt-1 text-red-500 text-sm">{{ $errors->first('image') }}</div>
                            @endif
                            <div class="grid grid-cols-9 gap-5">
                                <div class="col-span-4">
                                    @if ($this->editing)
                                        @foreach($this->editing->media as $media)
                                            <img src="https://images.cytorick.nl/{{ $media->id }}/{{ $media->file_name }}" alt="">
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
                <div class="border-t border-green-600 px-4 py-5 sm:px-6 space-y-4">
                    <x-input.group stacked for="introduction" label="{{ __('Introduction') }}" :error="$errors->first('editing.introduction')">
                        <x-input.textarea id="introduction" wire:model.lazy="editing.introduction" rows="7"
                                          :error="$errors->first('editing.introduction')"/>
                    </x-input.group>
                    <x-input.group stacked for="description" label="{{ __('Description') }}" :error="$errors->first('editing.description')">
                        <x-input.textarea id="description" wire:model.lazy="editing.description" rows="7"
                                          :error="$errors->first('editing.description')"/>
                    </x-input.group>
                </div>
            </div>

            {{-- FORM TOOLS --}}
            <div class="mt-6">
                <div class="text-right">
                    <x-button.submit>
                        {{__('Save internships')}}
                    </x-button.submit>
                </div>
            </div>

        </form>

    </div>

    <div class="col-span-4">
        <dl class="mt-5 grid grid-cols-1 gap-5 sm:grid-cols-1 lg:grid-cols-1">
            <x-card.card title="{{ $this->editing->name }}" sub-title="{{ $this->editing->company }}"
                         address="{{ $this->editing->street }}, {{ $this->editing->place }}">
                <x-slot name="image">
                    @foreach($this->editing->media as $media)
                        <img src="https://images.cytorick.nl/{{ $media->id }}/{{ $media->file_name }}" alt="">
                    @endforeach
                </x-slot>
                <x-slot name="dates">
                    {{ date('M Y', strtotime($this->editing->start_date)) }} -
                    @if($this->editing->is_active == 1)
                        Present
                    @else
                        {{ date('M Y', strtotime($this->editing->end_date)) }}
                    @endif
                </x-slot>
                <x-card.status status="{{ $this->editing->contract_type }}"/>
            </x-card.card>

        </dl>

        <div class="bg-white dark:bg-gray-800 shadow overflow-hidden sm:rounded-lg mt-5">
            {{-- HEADER --}}
            <div class="px-4 py-5 sm:px-6">
                <div class="flex justify-between items-center">
                    <div>
                        <h3 class="text-lg leading-6 font-medium text-gray-900 dark:text-gray-100">{{ __('Introduction') }}</h3>
                    </div>
                    <div></div>
                </div>
            </div>
            <div class="border-t border-green-600 px-4 py-5 sm:px-6 space-y-4">
                    {!! $this->editing->introduction !!}
            </div>
        </div>

        <div class="bg-white dark:bg-gray-800 shadow overflow-hidden sm:rounded-lg mt-5">
            {{-- HEADER --}}
            <div class="px-4 py-5 sm:px-6">
                <div class="flex justify-between items-center">
                    <div>
                        <h3 class="text-lg leading-6 font-medium text-gray-900 dark:text-gray-100">{{ __('Description') }}</h3>
                    </div>
                </div>
            </div>
            <div class="border-t border-green-600 px-4 py-5 sm:px-6 space-y-4">
                {!! $this->editing->description !!}
            </div>
        </div>
    </div>

</div>
