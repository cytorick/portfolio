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
                            <p class="mt-1 max-w-2xl text-sm text-gray-500 dark:text-gray-200">{{ __('Here you have to specify the name, icon and type.') }}</p>
                        </div>
                        <div></div>
                    </div>
                </div>
                {{-- CONTENT PANEL --}}
                <div class="border-t border-gray-200 dark:border-green-600 px-4 py-5 sm:px-6 space-y-4">

                    <div class="grid grid-cols-10 gap-5">
                        <div class="col-span-5">
                            <x-input.group stacked for="page" label="{{ __('Page') }}" :error="$errors->first('editing.page')">
                                <x-input.text disabled id="page" wire:model.lazy="editing.page" :error="$errors->first('editing.page')" />
                            </x-input.group>
                        </div>
                        <div class="col-span-5">
                            <x-input.group stacked for="number" label="{{ __('Number') }}" :error="$errors->first('editing.number')">
                                <x-input.text disabled id="number" wire:model.lazy="editing.number" :error="$errors->first('editing.number')" />
                            </x-input.group>
                        </div>
                    </div>

                    <div class="grid grid-cols-9 gap-5">
                        <div class="col-span-9">
                            <x-input.group stacked for="title" label="{{ __('Title*') }}" :error="$errors->first('editing.title')">
                                <x-input.text id="title" wire:model.lazy="editing.title" :error="$errors->first('editing.title')" />
                            </x-input.group>
                        </div>
                    </div>

                    <div class="grid grid-cols-9 gap-5">
                        <div class="col-span-9">
                            <x-input.group stacked for="content" label="{{ __('content') }}" :error="$errors->first('editing.content')">
                                <x-input.textarea id="content" wire:model.lazy="editing.content" rows="10"
                                                  :error="$errors->first('editing.content')"/>
                            </x-input.group>
                        </div>
                    </div>

                    <div class="grid grid-cols-9 gap-5">
                        <div class="col-span-9">
                            <input type="file" wire:model="image">
                            @if ($errors->first('image'))
                                <div class="mt-1 text-red-500 text-sm">{{ $errors->first('image') }}</div>
                            @endif
                            <div class="grid grid-cols-9 gap-5">
                                <div class="col-span-4">
                                    @if ($this->editing->media)
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
                        {{__('Save skills')}}
                    </x-button.submit>
                </div>
            </div>

        </form>
    </div>

    <div class="col-span-4 gap-4">
        <div class="py-8 px-8 dark:bg-gray-900 rounded-xl shadow-xl">
            {!! $this->editing->title !!}
        </div>
        <div class="mt-8 py-8 px-8 dark:bg-gray-900 rounded-xl shadow-xl">
               {!! $this->editing->content !!}
        </div>
    </div>

</div>
