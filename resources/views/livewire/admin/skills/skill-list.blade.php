<div class="py-4 space-y-4">
    {{-- TOP BAR --}}
    <div class="flex justify-between">
        <div class="w-2/4 flex space-x-4">
            {{-- SEARCH & ADVANCED SEARCH --}}
            @include('livewire.admin.shared.search', [ 'subject' => 'skills' ])
        </div>
        <div class="space-x-2 flex items-center">
            @include('livewire.admin.shared.bulk-actions', ['route' => route('admin.create.skills')])
        </div>
    </div>


    <div class="flex-col space-y-6">
        <x-table>
            <x-slot name="head">
                <x-table.heading class="pr-0 w-8 bg-gray-900">
                    <x-input.checkbox wire:model="selectPage"/>
                </x-table.heading>
                <x-table.heading class="bg-gray-900">#</x-table.heading>
                <x-table.heading class="bg-gray-900">{{__('Name')}}</x-table.heading>
                <x-table.heading class="bg-gray-900 text-center">{{__('Icon')}}</x-table.heading>
                <x-table.heading class="bg-gray-900">{{__('Color')}}</x-table.heading>
                <x-table.heading class="bg-gray-900"></x-table.heading>
                <x-table.heading class="bg-gray-900"></x-table.heading>
            </x-slot>
            <x-slot name="body">
                @if ($selectPage)
                    <x-table.row class="bg-gray-200" wire:key="row-message">
                        <x-table.cell colspan="10">
                            @unless ($selectAll)
                                <div>
                                    <span>{{__('You have selected ')}}<strong>{{ $skills->count() }}</strong> {{__('skills, do you want to select all')}} <strong>{{ $skills->total() }}</strong>?</span>
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
                        <x-table.cell class="text-center">
                            <span style="color: {{ $skill->color }}" class="text-lg">{!! $skill->icon !!}</span>
                        </x-table.cell>
                        <x-table.cell>
                            {{ $skill->color }}
                        </x-table.cell>
                        <x-table.cell class="text-right">
                            @if($skill->archived)
                                <div x-data="{ tooltip: 'This is crazy!' }">
                                    <i class="fa-solid fa-box-archive text-purple-400" x-tooltip="Archived"></i>
                                </div>
                                    @else
                                <div x-data="{ tooltip: 'This is crazy!' }">
                                        <i class="fa-solid fa-toggle-on text-green-400" x-tooltip="Live"></i>
                                </div>
                            @endif
                        </x-table.cell>
                        <x-table.cell class="text-right pr-6">
                            <div x-data="{ tooltip: 'This is crazy!' }">
                            <x-a.link x-tooltip="Edit" class="dark:text-gray-100 dark:hover:text-green-600" href="{{ route('admin.edit.skills', ['skillId' => $skill->id]) }}"><i class="fa-solid fa-pen-to-square"></i></x-a.link>
                            </div>
                        </x-table.cell>
                    </x-table.row>
                @empty
                    <x-table.row wire:loading.class.delay="opacity-50">
                        <x-table.cell colspan="8" class="py-8">
                            <x-table.no-data route="admin.create.skill" title="No skill found"
                                             button-label="new skill">
                                {{__('Get started by creating a new skills.')}}
                            </x-table.no-data>
                        </x-table.cell>
                    </x-table.row>
                @endforelse
            </x-slot>
        </x-table>
        {{ $skills->links() }}
    </div>

</div>
