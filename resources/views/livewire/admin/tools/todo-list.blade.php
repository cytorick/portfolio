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
            @forelse ($todos as $todo)
                <x-table.row wire:loading.class.delay="opacity-50" wire:key="row-{{ $todo->id }}">
                    <x-table.cell> {{ $todo->id }} </x-table.cell>
                    <x-table.cell>
                        @if($todo->importance == '!')
                            <span class="text-green-500">{{ $todo->importance }}</span>
                            @elseif($todo->importance == '!!')
                            <span class="text-orange-500">{{ $todo->importance }}</span>
                            @elseif($todo->importance == '!!!')
                            <span class="text-red-500">{{ $todo->importance }}</span>
                        @endif
                    </x-table.cell>
                    <x-table.cell>
                        {{ $todo->title }}
                    </x-table.cell>
                    <x-table.cell>
                        <x-input.checkbox wire:click="setCompleted({{ $todo->id }})"/>
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
</div>
