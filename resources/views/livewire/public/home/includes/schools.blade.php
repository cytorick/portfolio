<div class="bg-gray-100 dark:bg-gray-800">
    <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8">
        <div class="lg:gap-8 lg:items-center">

            <div>
                <h3 class="text-3xl font-extrabold text-gray-900 sm:text-4xl dark:text-gray-100">The <span
                        class="text-green-500">schools</span> I went to</h3>

                <dl class="mt-5 grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-3">
                    @foreach($schools as $school)
                        <x-card.card title="{{ $school->name }}" sub-title="{{ $school->school }}" address="{{ $school->street }}, {{ $school->place }}"
                                     hover>
                            <x-slot name="link">
                                {{ route('schools.show', ['schoolId' => $school->id, 'page' => 'overview']) }}
                            </x-slot>
                            <x-slot name="image">
                                @foreach($school->media as $media)
                                    <img src="{{ asset('/img/' . $media->id .'/'. $media->file_name) }}" alt="" class="inline-block align-middle px-3">
                                @endforeach
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
