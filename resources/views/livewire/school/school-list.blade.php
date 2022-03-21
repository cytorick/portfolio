<div class="py-4 space-y-4">

    <div class="flex justify-between">
        <div class="w-2/4 flex space-x-4">
            @include('livewire.shared.search', ['subject' => 'schools'])
        </div>
        <div class="space-x-2 flex items-center">
            <x-a.primary href="{{ route('admin.create.school') }}"><x-icon.plus/> New</x-a.primary>
        </div>
    </div>

    <div>
        @if ($showFilters)

        @endif
    </div>

    <div class="flex-col space-y-6">

        <x-table>
            <x-slot name="head">
                <x-table.heading class="dark:bg-gray-900">#</x-table.heading>
                <x-table.heading class="dark:bg-gray-900">Image</x-table.heading>
                <x-table.heading class="dark:bg-gray-900">Company</x-table.heading>
                <x-table.heading class="dark:bg-gray-900">Function</x-table.heading>
                <x-table.heading class="dark:bg-gray-900">Address</x-table.heading>
                <x-table.heading class="dark:bg-gray-900">Dates</x-table.heading>
                <x-table.heading class="dark:bg-gray-900">Contract</x-table.heading>
                <x-table.heading class="dark:bg-gray-900"></x-table.heading>
            </x-slot>
            <x-slot name="body">
                @forelse($schools as $school)
                    <x-table.row wire:loading.class.delay="opacity-50" wire:key="row-{{ $school->id }}" >
                        <x-table.cell>
                            {{ $school->id }}
                        </x-table.cell>
                        <x-table.cell>
                            <img src="{{ asset('img/'. $school->image) }}" alt="" class="h-5">
                        </x-table.cell>
                        <x-table.cell>
                            {{ $school->school }}
                        </x-table.cell>
                        <x-table.cell>
                            {{ $school->name }}
                        </x-table.cell>
                        <x-table.cell>
                            {{ $school->street }}, {{ $school->place }}
                        </x-table.cell>
                        <x-table.cell>
                            {{ date('M Y', strtotime($school->start_date)) }} -
                            @if($school->is_active == 1)
                                Present
                            @else
                                {{ date('M Y', strtotime($school->end_date)) }}
                            @endif
                        </x-table.cell>
                        <x-table.cell>
                            {{ $school->status }}
                        </x-table.cell>
                        <x-table.cell>
                            <x-a.link class="dark:text-gray-100 dark:hover:text-red-400" href="{{ route('admin.edit.school', ['schoolId' => $school->id]) }}"><i class="fa-solid fa-pen-to-square"></i></x-a.link>
                        </x-table.cell>
                    </x-table.row>
                @empty
                    <x-table.row wire:loading.class.delay="opacity-50">
                        <x-table.cell colspan="8" class="py-8">
                            <x-table.no-data route="admin.create.school" title="No schools found" button-label="New school">
                                {{__('Get started by creating a new school.')}}
                            </x-table.no-data>
                        </x-table.cell>
                    </x-table.row>
                @endforelse
            </x-slot>
        </x-table>
    </div>
</div>