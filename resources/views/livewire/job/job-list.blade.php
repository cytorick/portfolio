<div class="py-4 space-y-4">

    <div class="flex justify-between">
        <div class="w-2/4 flex space-x-4">
            @include('livewire.shared.search', ['subject' => 'jobs'])
        </div>
        <div class="space-x-2 flex items-center">
            <x-a.primary href="{{ route('admin.create.job') }}"><x-icon.plus/> New</x-a.primary>
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
                <x-table.heading class="dark:bg-gray-900">Website</x-table.heading>
                <x-table.heading class="dark:bg-gray-900"></x-table.heading>
            </x-slot>
            <x-slot name="body">
                @forelse($jobs as $job)
                    <x-table.row wire:loading.class.delay="opacity-50" wire:key="row-{{ $job->id }}" >
                        <x-table.cell>
                            {{ $job->id }}
                        </x-table.cell>
                        <x-table.cell>
                            <img src="{{ asset('img/'. $job->image) }}" alt="" class="h-5">
                        </x-table.cell>
                        <x-table.cell>
                            {{ $job->company }}
                        </x-table.cell>
                        <x-table.cell>
                            {{ $job->function }}
                        </x-table.cell>
                        <x-table.cell>
                            {{ $job->street }}, {{ $job->place }}
                        </x-table.cell>
                        <x-table.cell>
                            {{ date('M Y', strtotime($job->start_date)) }} -
                            @if($job->is_active == 1)
                                Present
                            @else
                                {{ date('M Y', strtotime($job->end_date)) }}
                            @endif
                        </x-table.cell>
                        <x-table.cell>
                            {{ $job->contract_type }}
                        </x-table.cell>
                        <x-table.cell>
                            {{ $job->website }}
                        </x-table.cell>
                        <x-table.cell>
                            <x-a.link class="dark:text-gray-100 dark:hover:text-red-400" href="{{ route('admin.edit.job', ['jobId' => $job->id]) }}"><i class="fa-solid fa-pen-to-square"></i></x-a.link>
                        </x-table.cell>
                    </x-table.row>
                @empty
                    <x-table.row wire:loading.class.delay="opacity-50">
                        <x-table.cell colspan="8" class="py-8">
                            <x-table.no-data route="admin.create.job" title="No locations found" button-label="New location">
                                {{__('Get started by creating a new location.')}}
                            </x-table.no-data>
                        </x-table.cell>
                    </x-table.row>
                @endforelse
            </x-slot>
        </x-table>
    </div>
</div>