<div class="py-4 space-y-4">

    <div class="flex justify-between">
        <div class="w-2/4 flex space-x-4">
            @include('livewire.shared.search', ['subject' => 'jobs'])
        </div>
        <div class="space-x-2 flex items-center">
            @include('livewire.shared.bulk-actions-for-platforms')
            <x-a.primary href="{{ route('admin.create.language') }}"><x-icon.plus/> New</x-a.primary>
        </div>
    </div>

    <div>
        @if ($showFilters)

        @endif
    </div>

    <div class="flex-col space-y-6">

        <x-table>
            <x-slot name="head">
                <x-table.heading class="dark:bg-gray-900 pr-0 w-8"><x-input.checkbox wire:model="selectPage" /></x-table.heading>
                <x-table.heading class="dark:bg-gray-900">#</x-table.heading>
                <x-table.heading class="dark:bg-gray-900">Image</x-table.heading>
                <x-table.heading class="dark:bg-gray-900">Name</x-table.heading>
                <x-table.heading class="dark:bg-gray-900">Level</x-table.heading>
                <x-table.heading class="dark:bg-gray-900">Percentage</x-table.heading>
                <x-table.heading class="dark:bg-gray-900"></x-table.heading>
            </x-slot>
            <x-slot name="body">
                @if ($selectPage)
                    <x-table.row class="bg-gray-200" wire:key="row-message">
                        <x-table.cell colspan="10">
                            @unless ($selectAll)
                                <div>
                                    <span>You have selected <strong>{{ $languages->count() }}</strong> languages, do you want to select all <strong>{{ $languages->total() }}</strong>?</span>
                                    <x-button.link wire:click="selectAll" class="ml-1 text-blue-600">Select All</x-button.link>
                                </div>
                            @else
                                <span>You are currently selecting all <strong>{{ $languages->total() }}</strong> languages.</span>
                            @endif
                        </x-table.cell>
                    </x-table.row>
                @endif
                @forelse($languages as $language)
                    <x-table.row wire:loading.class.delay="opacity-50" wire:key="{{ $language->id }}" >
                        <x-table.cell class="pr-0">
                            <x-input.checkbox wire:model="selected" value="{{ $language->id }}" />
                        </x-table.cell>
                        <x-table.cell>
                            {{ $language->id }}
                        </x-table.cell>
                        <x-table.cell>
                            <img src="{{ asset('img/'. $language->image) }}" alt="" class="w-8">
                        </x-table.cell>
                        <x-table.cell>
                            {{ $language->name }}
                        </x-table.cell>
                        <x-table.cell>
                            {{ $language->level }}
                        </x-table.cell>
                        <x-table.cell>
                            {{ $language->percentage }} %
                        </x-table.cell>
                        <x-table.cell>
                            {{--                            <x-a.link wire:click="deleteSelected"><x-icon.trash color="red" /></x-a.link>--}}
                            <x-a.link class="dark:text-gray-100 dark:hover:text-red-400" href="{{ route('admin.edit.language', ['languageId' => $language->id]) }}"><i class="fa-solid fa-pen-to-square"></i></x-a.link>
                        </x-table.cell>
                    </x-table.row>
                @empty
                    <x-table.row wire:loading.class.delay="opacity-50">
                        <x-table.cell colspan="12" class="py-8">
                            <x-table.no-data route="admin.create.language" title="No locations found" button-label="New location">
                                {{__('Get started by creating a new location.')}}
                            </x-table.no-data>
                        </x-table.cell>
                    </x-table.row>
                @endforelse
            </x-slot>
        </x-table>
    </div>

    <form wire:submit.prevent="deleteSelected">
        <x-modal.confirmation wire:model.defer="showDeleteModal">
            <x-slot name="title">{{__('Delete location')}}</x-slot>
            <x-slot name="content">
                <div class="py-8 text-cool-gray-700">{{__('Are you sure? This action is irreversible.')}}</div>
            </x-slot>
            <x-slot name="footer">
                <x-button.secondary wire:click="$set('showDeleteModal', false)">{{__('Cancel')}}</x-button.secondary>
                <x-button.primary type="submit">{{__('Delete')}}</x-button.primary>
            </x-slot>
        </x-modal.confirmation>
    </form>

    <form wire:submit.prevent="archiveSelected">
        <x-modal.confirmation wire:model.defer="showArchiveModal">
            <x-slot name="title">{{__('Archive location')}}</x-slot>
            <x-slot name="content">
                <div class="py-8 text-cool-gray-700">{{__('Which this action you can archive the active or concept locations. If one of the selected locations is already archived it will change the status to concept.')}} <strong>{{__ ('Are you sure?') }}</strong></div>
            </x-slot>
            <x-slot name="footer">
                <x-button.secondary wire:click="$set('showArchiveModal', false)">{{__('Cancel')}}</x-button.secondary>
                <x-button.primary type="submit">{{__('Apply')}}</x-button.primary>
            </x-slot>
        </x-modal.confirmation>
    </form>

</div>

