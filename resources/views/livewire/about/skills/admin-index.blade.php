<div class="py-4 space-y-4">
    {{-- TOP BAR --}}
    <div class="flex justify-between">
        <div class="w-2/4 flex space-x-4">
            {{-- SEARCH & ADVANCED SEARCH --}}
            @include('livewire.shared.search', [ 'subject' => 'announcements' ])
        </div>
        <div class="space-x-2 flex items-center">
            {{-- ITEMS PER PAGE --}}
{{--            @include('livewire.admin.shared.items-per-page')--}}
            {{-- BULK ACTIONS --}}
{{--            @include('livewire.about.language.admin-index')--}}
            {{-- CREATE NEW PLATFORM --}}
            <x-a.primary href="">
                <x-icon.plus/>
                {{__('New')}}
            </x-a.primary>
        </div>
    </div>
    {{-- ADVANCED SEARCH TOGGLE BLOCK --}}
    <div>
        @if ($showFilters)
            <div class="bg-gray-200 p-4 rounded shadow-inner">
                <div class="grid grid-cols-5 gap-6">
                    <div class="col-span-5 sm:col-span-1">
                        <x-input.select wire:model="filters.status" id="filter-announcement-status">
                            <option value="">{{__('Announcement status...')}}</option>
                            <option value="published">{{__('Published')}}</option>
                            <option value="not published">{{__('Not published')}}</option>
                            <option value="concept">{{__('Concept')}}</option>
                        </x-input.select>
                    </div>
                    <div class="col-span-5 sm:col-span-1 inline-block">
                        <x-input.checkbox wire:model="filters.archived">
                            Include archived announcements
                        </x-input.checkbox>
                    </div>
                </div>
                <div class="grid grid-cols-6 gap-6">
                    <div class="col-span-6">
                        <div class="text-right">
                            <x-button.link wire:click="resetFilters">{{__('Reset Filters')}}</x-button.link>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>
    {{-- END ADVANCED SEARCH --}}
    {{-- DATA TABLE --}}
    <div class="flex-col space-y-6">
        <x-table>
            <x-slot name="head">
                <x-table.heading class="pr-0 w-8 bg-gray-900">
                    <x-input.checkbox wire:model="selectPage"/>
                </x-table.heading>
                <x-table.heading class="bg-gray-900">#</x-table.heading>
                <x-table.heading class="bg-gray-900">{{__('Name')}}</x-table.heading>
                <x-table.heading class="bg-gray-900">{{__('Icon')}}</x-table.heading>
                <x-table.heading class="bg-gray-900">{{__('Color')}}</x-table.heading>
                <x-table.heading class="bg-gray-900"></x-table.heading>
            </x-slot>
            <x-slot name="body">
                @if ($selectPage)
                    <x-table.row class="bg-gray-200" wire:key="row-message">
                        <x-table.cell colspan="10">
                            @unless ($selectAll)
                                <div>
                                    <span>{{__('You have selected ')}}<strong>{{ $announcements->count() }}</strong> {{__('announcements, do you want to select all')}} <strong>{{ $announcements->total() }}</strong>?</span>
                                    <x-button.link wire:click="selectAll" class="ml-1 text-blue-600">Select All
                                    </x-button.link>
                                </div>
                            @else
                                <span>{{__('You are currently selecting all')}} <strong>{{ $announcements->total() }}</strong> {{__('announcements')}}.</span>
                            @endif
                        </x-table.cell>
                    </x-table.row>
                @endif
                @forelse ($skills as $skill)
                    <x-table.row wire:loading.class.delay="opacity-50" wire:key="row-{{ $skill->id }}">
                        <x-table.cell class="pr-0">
                            <x-input.checkbox wire:model="selected" value="{{ $skill->id }}"/>
                        </x-table.cell>
                        <x-table.cell> {{ $skill->id }} </x-table.cell>
                        <x-table.cell>
                            {{ $skill->name }}
                        </x-table.cell>
                        <x-table.cell>
                           <span style="color: {{ $skill->color }}" class="text-lg">{!! $skill->icon !!}</span>
                        </x-table.cell>
                        <x-table.cell>
                            {{ $skill->color }}
                        </x-table.cell>
                        <x-table.cell>
                            <x-a.link href="">
                                <x-icon.edit class="text-gray-600"/>
                            </x-a.link>
                        </x-table.cell>
                    </x-table.row>
                @empty
                    <x-table.row wire:loading.class.delay="opacity-50">
                        <x-table.cell colspan="8" class="py-8">
                            <x-table.no-data route="admin.create.skill" title="No skill found"
                                             button-label="new skill">
                                {{__('Get started by creating a new skill.')}}
                            </x-table.no-data>
                        </x-table.cell>
                    </x-table.row>
                @endforelse
            </x-slot>
        </x-table>
        {{ $skills->links() }}
    </div>
    {{-- END DATA TABLE --}}

</div>
