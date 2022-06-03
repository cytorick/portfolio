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
                            <x-input.group stacked for="company" label="{{ __('Title*') }}"
                                           :error="$errors->first('editing.title')">
                                <x-input.text id="company" wire:model.lazy="editing.title"
                                              :error="$errors->first('editing.title')"/>
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
                            <x-input.group stacked for="link" label="{{ __('Link*') }}"
                                           :error="$errors->first('editing.link')">
                                <x-input.text id="link" wire:model.lazy="editing.link"
                                              :error="$errors->first('editing.link')"/>
                            </x-input.group>
                        </div>
                    </div>

                    {{--            <div class="grid grid-cols-9 gap-5">--}}
                    {{--                <div class="col-span-5">--}}
                    {{--                    <x-input.group stacked for="icon" label="{{ __('Icon*') }}"--}}
                    {{--                                   :error="$errors->first('editing.icon')">--}}
                    {{--                        <x-input.text id="icon" wire:model.lazy="editing.icon"--}}
                    {{--                                      :error="$errors->first('editing.icon')"/>--}}
                    {{--                    </x-input.group>--}}
                    {{--                </div>--}}
                    {{--            </div>--}}
                    <div class="grid grid-cols-9 gap-5">
                        <div class="col-span-5">
                            <div>
                                <label for="made_at" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Made
                                    at</label>
                                <div class="mt-1">
                                    <input type="date" wire:model="editing.made_at" id="made_at"
                                           class="flex-1 block w-full rounded-l-md rounded-r-md sm:text-sm dark:border-gray-700 dark:bg-gray-700 border-gray-300 focus:ring-gray-900 focus:border-gray-900">
                                </div>
                            </div>
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

            {{-- OTHER INFORMATION --}}
            <div class="bg-white dark:bg-gray-800 shadow overflow-hidden sm:rounded-lg">
                {{-- HEADER --}}
                <div class="px-4 py-5 sm:px-6">
                    <div class="flex justify-between items-center">
                        <div>
                            <h3 class="text-lg leading-6 font-medium text-gray-900 dark:text-gray-100">{{ __('Description') }}</h3>
                        </div>
                        <div></div>
                    </div>
                </div>
                {{-- CONTENT PANEL --}}
                <div class="border-t border-green-600 px-4 py-5 sm:px-6 space-y-4">
                    <x-input.group stacked for="description" label="{{ __('Description*') }}"
                                   :error="$errors->first('editing.description')">
                        <x-input.textarea id="description" wire:model.lazy="editing.description" rows="5"
                                          :error="$errors->first('editing.description')"/>
                    </x-input.group>
                </div>
            </div>

            {{-- FORM TOOLS --}}
            <div class="mt-6">
                <div class="text-right">
                    <x-button.submit>
                        {{__('Save projects')}}
                    </x-button.submit>
                </div>
            </div>

        </form>

    </div>

    <div class="col-span-4">
        <ul role="list" class="sm:divide-y sm:divide-gray-200">
            <li class="sm:py-8">
                <div class="space-y-4 sm:grid sm:grid-cols-3 sm:items-start sm:gap-6 sm:space-y-0">
                    <div class="aspect-w-3 aspect-h-2 sm:aspect-w-3 sm:aspect-h-4">
                        @foreach($this->editing->media as $media)
                            <img src="{{ asset('/img/' . $media->id .'/'. $media->file_name) }}" alt=""
                                 class="object-cover rounded-lg">
                        @endforeach
                    </div>
                    <div class="sm:col-span-2">
                        <div class="space-y-4">
                            <div class="text-lg leading-6 font-medium space-y-1">
                                <h3 class="dark:text-gray-100">{{ $this->editing->title }}</h3>
                                <p class="text-green-600 text-sm">{{ $this->editing->company }}</p>
                            </div>
                            <div class="text-lg">
                                <p class="text-gray-500 dark:text-gray-200">
                                    {{ $this->editing->description }}
                                </p>
                            </div>
                            @if($this->editing->link)
                                <a href="{{ $this->editing->link }}" target="_blank"><i
                                        class="fa-solid fa-arrow-up-right-from-square"></i></a>
                            @endif
                        </div>
                    </div>
                </div>
            </li>
        </ul>

        <div class="my-5 grid grid-cols-1 gap-0.5 md:grid-cols-1 lg:mt-0 lg:grid-cols-1">
            <div class="col-span-1 flex justify-center py-8 px-8 dark:bg-gray-800 rounded-xl">
                <p class="text-2xl dark:text-gray-200">
                    @foreach($this->editing->skills as $skill)
                        <span style="color: {{ $skill->icons->color }}" class="px-1">{!! $skill->icons->icon !!}</span>
                    @endforeach
                </p>
            </div>
        </div>

        @livewire('admin.projects.partials.add-skill', ['projectId' => $this->editing->id])

        @foreach($this->editing->skills as $skill)
            <div class="my-5 grid grid-cols-12 gap-0.5 md:grid-cols-12 lg:mt-0 lg:grid-cols-12">
                <div class="col-span-12 py-4 px-8 dark:bg-gray-800 rounded-xl">
                    <div class="grid grid-cols-12">
                        <div class="col-span-2">
                            <p class="text-1xl dark:text-gray-200">
                            <span class="mx-auto">
                                <span style="color: {{ $skill->icons->color }}">{!! $skill->icons->icon !!}</span>
                            </span>
                            </p>
                        </div>
                        <div class="col-span-6">
                            <p class="text-1xl dark:text-gray-200">
                                {{ $skill->icons->name }}
                            </p>
                        </div>
                        <div class="col-span-4 text-right">
                            <x-a.link wire:click="deleteSkill({{ $skill->id }})"><x-icon.trash /></x-a.link>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
</div>
