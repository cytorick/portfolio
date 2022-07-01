<div>
    <h1 class="mb-2 text-xl font-semibold text-gray-900 dark:text-gray-100">Tasks:</h1>
    <x-table>
        <x-slot name="head">
            <x-table.heading class="bg-gray-900">#</x-table.heading>
            <x-table.heading class="bg-gray-900"><i class="fa-solid fa-exclamation"></i></x-table.heading>
            <x-table.heading class="bg-gray-900">{{__('Title')}}</x-table.heading>
            <x-table.heading class="bg-gray-900"><i class="fa-solid fa-check"></i></x-table.heading>
        </x-slot>
        <x-slot name="body">
            @forelse ($tasks as $task)
                <x-table.row wire:loading.class.delay="opacity-50" wire:key="row-{{ $task->id }}">
                    <x-table.cell> {{ $task->id }} </x-table.cell>
                    <x-table.cell>
                        @if($task->importance == '!')
                            <span class="text-green-500">{{ $task->importance }}</span>
                        @elseif($task->importance == '!!')
                            <span class="text-orange-500">{{ $task->importance }}</span>
                        @elseif($task->importance == '!!!')
                            <span class="text-red-500">{{ $task->importance }}</span>
                        @endif
                    </x-table.cell>
                    <x-table.cell>
                        {{ $task->title }}
                    </x-table.cell>
                    <x-table.cell>
                        <x-input.checkbox wire:click="setCompleted({{ $task->id }})"/>
                    </x-table.cell>
                </x-table.row>
            @empty
                <x-table.row wire:loading.class.delay="opacity-50" wire:key="row-">
                    <x-table.cell>#</x-table.cell>
                    <x-table.cell></x-table.cell>
                    <x-table.cell>
                        NO TASKS
                    </x-table.cell>
                    <x-table.cell>
                        <x-input.checkbox wire:click="setCompleted()" checked disabled/>
                    </x-table.cell>
                </x-table.row>
            @endforelse
        </x-slot>
    </x-table>
    @if($hidden == false)
        <div class="bg-white dark:bg-gray-800 shadow overflow-hidden sm:rounded-lg mb-5 mt-5">
            {{-- CONTENT PANEL --}}
            <div class="px-4 py-5 sm:px-6 space-y-4">
                <form wire:submit.prevent="createRecord" class="space-y-6" enctype="multipart/form-data">
                    <div class="grid grid-cols-9 gap-5">
                        <div class="col-span-7">
                            <x-input.group stacked for="title" label="{{ __('Title*') }}"
                                           :error="$errors->first('title')">
                                <x-input.text id="title" wire:model="title"
                                              :error="$errors->first('title')"/>
                            </x-input.group>
                        </div>
                        <div class="col-span-2">
                            <x-input.group stacked for="importance" label="{{ __('!*') }}"
                                           :error="$errors->first('importance')">
                                <x-input.select id="importance" wire:model="importance"
                                              :error="$errors->first('importance')" placeholder="{{__('Select importance level')}}">
                                    <option value="!">{{__('!')}}</option>
                                    <option value="!!">{{__('!!')}}</option>
                                    <option value="!!!">{{__('!!!')}}</option>
                                </x-input.select>
                            </x-input.group>
                        </div>
                    </div>

                    <div class="mt-6">
                        <div class="text-right">
                            <x-button.submit>
                                {{__('Save task')}}
                            </x-button.submit>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    @endif
</div>
