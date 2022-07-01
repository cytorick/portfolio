<div class="py-4 space-y-4">

    <div class="flex justify-between">
        <div class="w-2/4 flex space-x-4">
            @include('livewire.admin.shared.search', ['subject' => 'internships'])
        </div>
        <div class="space-x-2 flex items-center">
            @include('livewire.admin.shared.bulk-actions', ['route' => route('admin.create.internships')])
        </div>
    </div>

    <div class="flex-col space-y-6">

        <x-table>
            <x-slot name="head">
                <x-table.heading class="dark:bg-gray-900 pr-0 w-8">
                    <x-input.checkbox wire:model="selectPage"/>
                </x-table.heading>
                <x-table.heading class="dark:bg-gray-900">#</x-table.heading>
                <x-table.heading class="dark:bg-gray-900">Image</x-table.heading>
                <x-table.heading class="dark:bg-gray-900">Company</x-table.heading>
                <x-table.heading class="dark:bg-gray-900">Function</x-table.heading>
                <x-table.heading class="dark:bg-gray-900">Address</x-table.heading>
                <x-table.heading class="dark:bg-gray-900">Dates</x-table.heading>
                <x-table.heading class="dark:bg-gray-900">Contract</x-table.heading>
                <x-table.heading class="dark:bg-gray-900">Website</x-table.heading>
                <x-table.heading class="dark:bg-gray-900"></x-table.heading>
                <x-table.heading class="dark:bg-gray-900"></x-table.heading>
                <x-table.heading class="dark:bg-gray-900"></x-table.heading>
            </x-slot>
            <x-slot name="body">
                @if ($selectPage)
                    <x-table.row class="bg-gray-200" wire:key="row-message">
                        <x-table.cell colspan="12">
                            @unless ($selectAll)
                                <div>
                                    <span>You have selected <strong>{{ $internships->count() }}</strong> internships, do you want to select all <strong>{{ $internships->total() }}</strong>?</span>
                                    <x-button.link wire:click="selectAll" class="ml-1 text-blue-600">Select All
                                    </x-button.link>
                                </div>
                            @else
                                <span>You are currently selecting all <strong>{{ $internships->total() }}</strong> internships.</span>
                            @endif
                        </x-table.cell>
                    </x-table.row>
                @endif
                @forelse($internships as $internship)
                    <x-table.row wire:loading.class.delay="opacity-50" wire:key="row-{{ $internship->id }}">
                        <x-table.cell class="pr-0">
                            <x-input.checkbox wire:model="selected" value="{{ $internship->id }}"/>
                        </x-table.cell>
                        <x-table.cell>
                            {{ $internship->id }}
                        </x-table.cell>
                        <x-table.cell>
                            @foreach($internship->media as $media)
                                <img src="{{ asset('/img/' . $media->id .'/'. $media->file_name) }}" alt="" class="h-5">
                            @endforeach
                        </x-table.cell>
                        <x-table.cell>
                            {{ $internship->company }}
                        </x-table.cell>
                        <x-table.cell>
                            {{ $internship->name }}
                        </x-table.cell>
                        <x-table.cell>
                            {{ $internship->street }}, {{ $internship->place }}
                        </x-table.cell>
                        <x-table.cell>
                            {{ date('M Y', strtotime($internship->start_date)) }} -
                            @if($internship->is_active == 1)
                                Present
                            @else
                                {{ date('M Y', strtotime($internship->end_date)) }}
                            @endif
                        </x-table.cell>
                        <x-table.cell>
                            {{ $internship->contract_type }}
                        </x-table.cell>
                        <x-table.cell>
                            {{ $internship->website }}
                        </x-table.cell>
                        <x-table.cell class="text-right">
                            @if($internship->archived)
                                <div x-data="{ tooltip: 'This is crazy!' }">
                                <i class="fa-solid fa-box-archive text-purple-400" x-tooltip="Archived">
                                </i>
                                    @else
                                        <div x-data="{ tooltip: 'This is crazy!' }">
                                        <i class="fa-solid fa-toggle-on text-green-400" x-tooltip="Live"></i>
                                        </div>
                            @endif
                        </x-table.cell>
                        <x-table.cell class="text-right">
                            @if($internship->featured)
                                <div x-data="{ tooltip: 'This is crazy!' }">
                                    <i class="fa-solid fa-eye text-blue-400" x-tooltip="Featured"></i>
                                </div>
                            @else
                                <div x-data="{ tooltip: 'This is crazy!' }">
                                    <i class="fa-solid fa-eye-slash text-red-400" x-tooltip="Not featured"></i>
                                </div>
                            @endif
                        </x-table.cell>
                        <x-table.cell class="text-right pr-6">
                            <div x-data="{ tooltip: 'This is crazy!' }">
                            <x-a.link class="dark:text-gray-100 dark:hover:text-green-600" x-tooltip="Edit"
                                      href="{{ route('admin.edit.internships', ['internshipId' => $internship->id]) }}">
                                <i class="fa-solid fa-pen-to-square"></i></x-a.link>
                            </div>
                        </x-table.cell>
                    </x-table.row>
                @empty
                    <x-table.row wire:loading.class.delay="opacity-50">
                        <x-table.cell colspan="12" class="py-8">
                            <x-table.no-data route="admin.create.job" title="No locations found"
                                             button-label="New location">
                                {{__('Get started by creating a new location.')}}
                            </x-table.no-data>
                        </x-table.cell>
                    </x-table.row>
                @endforelse
            </x-slot>
        </x-table>
        {{ $internships->links() }}
    </div>
</div>
