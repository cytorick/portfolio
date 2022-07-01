<div class="py-4 space-y-4">
    {{-- TOP BAR --}}
    <div class="flex justify-between">
        <div class="w-2/4 flex space-x-4">
            {{-- SEARCH & ADVANCED SEARCH --}}
            @include('livewire.admin.shared.search', [ 'subject' => 'skills' ])
        </div>
        <div class="space-x-2 flex items-center">
            <form wire:submit.prevent="archiveSelected">
                <div x-data="{ tooltip: 'This is crazy!' }">
                    <button x-tooltip="Archive record(s)" type="submit"
                            class="inline-flex items-center px-4 py-2.5 border border-transparent text-base font-medium rounded-md bg-gray-800 hover:bg-purple-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 hover:text-white text-purple-400">
                        <i class="fa-solid fa-box-archive"></i></button>
                </div>
            </form>
        </div>
    </div>


    <div class="flex-col space-y-6">
        <x-table>
            <x-slot name="head">
                <x-table.heading class="pr-0 w-8 bg-gray-900">
                    <x-input.checkbox wire:model="selectPage"/>
                </x-table.heading>
                <x-table.heading class="bg-gray-900">#</x-table.heading>
                <x-table.heading class="bg-gray-900">{{__('Page')}}</x-table.heading>
                <x-table.heading class="bg-gray-900">{{__('Number')}}</x-table.heading>
                <x-table.heading class="bg-gray-900">{{__('Title')}}</x-table.heading>
                <x-table.heading class="bg-gray-900"></x-table.heading>
                <x-table.heading class="bg-gray-900"></x-table.heading>
            </x-slot>
            <x-slot name="body">
                @if ($selectPage)
                    <x-table.row class="bg-gray-200" wire:key="row-message">
                        <x-table.cell colspan="12">
                            @unless ($selectAll)
                                <div>
                                    <span>{{__('You have selected ')}}<strong>{{ $texts->count() }}</strong> {{__('skills, do you want to select all')}} <strong>{{ $texts->total() }}</strong>?</span>
                                    <x-button.link wire:click="selectAll" class="ml-1 text-blue-600">Select All
                                    </x-button.link>
                                </div>
                            @else
                                <span>{{__('You are currently selecting all')}} <strong>{{ $announcements->total() }}</strong> {{__('announcements')}}.</span>
                            @endif
                        </x-table.cell>
                    </x-table.row>
                @endif
                @forelse ($texts as $text)
                    <x-table.row wire:loading.class.delay="opacity-50" wire:key="row-{{ $text->id }}">
                        <x-table.cell class="pr-0">
                            <x-input.checkbox wire:model="selected" value="{{ $text->id }}"/>
                        </x-table.cell>
                        <x-table.cell> {{ $text->id }} </x-table.cell>
                        <x-table.cell>
                            {{ $text->page }}
                        </x-table.cell>
                        <x-table.cell>
                            {{ $text->number }}
                        </x-table.cell>
                        <x-table.cell>
                            {!! $text->title !!}
                        </x-table.cell>
                        <x-table.cell class="text-right">
                            @if($text->archived)
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
                                <x-a.link x-tooltip="Edit" class="dark:text-gray-100 dark:hover:text-green-600" href="{{ route('admin.edit.texts', ['textId' => $text->id]) }}"><i class="fa-solid fa-pen-to-square"></i></x-a.link>
                            </div>
                        </x-table.cell>
                    </x-table.row>
                @empty
                    <x-table.row wire:loading.class.delay="opacity-50">
                        <x-table.cell colspan="12" class="py-8">
                            <x-table.no-data route="admin.create.skill" title="No skill found"
                                             button-label="new skill">
                                {{__('Get started by creating a new skills.')}}
                            </x-table.no-data>
                        </x-table.cell>
                    </x-table.row>
                @endforelse
            </x-slot>
        </x-table>
        {{ $texts->links('vendor.pagination.tailwind') }}
    </div>

</div>
