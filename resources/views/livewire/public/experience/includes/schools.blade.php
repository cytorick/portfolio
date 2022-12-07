<div class="bg-gray-100 dark:bg-gray-800">
    <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8">
        <div class="lg:gap-8 lg:items-center">

            <div>
                <h3 class="text-3xl font-extrabold text-gray-900 sm:text-4xl dark:text-gray-100">
                    @livewire('public.tools.title-shower', ['page' => 'Experience', 'number' => 4])
                </h3>

                <dl class="mt-5 grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-3">
                    @foreach($schools as $school)
                        <x-card.card title="{{ $school->name }}" sub-title="{{ $school->school }}"
                                     address="{{ $school->street }}, {{ $school->place }}" hover>
                            <x-slot name="link">
                                {{ route('schools.show', ['schoolId' => $school->id, 'page' => 'overview']) }}
                            </x-slot>
                            <x-slot name="image">
                                <img
                                    src="https://images.cytorick.nl{{ $school->media[0]->id }}/{{ $school->media[0]->file_name }}"
                                    alt="{{ $school->media[0]->file_name }}" class="inline-block align-middle px-3">
                            </x-slot>
                            <x-slot name="dates">
                                {{ date('M Y', strtotime($school->start_date)) }} -
                                @if($school->is_active == 1)
                                    Present
                                @else
                                    {{ date('M Y', strtotime($school->end_date)) }}
                                @endif
                            </x-slot>
                            <x-card.status status="{{ $school->status }}"/>
                        </x-card.card>
                    @endforeach
                </dl>
            </div>


        </div>
    </div>
</div>
