<div class="bg-gray-100 dark:bg-gray-800">
    <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8">
        <div class="lg:gap-8 lg:items-center">

            <div>
                <h3 class="text-3xl font-extrabold text-gray-900 sm:text-4xl dark:text-gray-100">The <span class="text-error">internships</span> I had</h3>

                <dl class="mt-5 grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-3">
                    @foreach($internships as $internship)
                       <x-card.card title="{{ $internship->name }}" sub-title="{{ $internship->company }}" image="{{ $internship->image }}" address="{{ $internship->street }}, {{ $internship->place }}">
                        <x-slot name="link">
                            {{ route('internship.show', ['internshipId' => $internship->id, 'page' => 'overview']) }}
                        </x-slot>
                           <x-slot name="dates">
                            {{ date('M Y', strtotime($internship->start_date)) }} -
                            @if($internship->is_active == 1)
                                Present
                            @else
                                {{ date('M Y', strtotime($internship->end_date)) }}
                            @endif
                        </x-slot>
                           <x-card.status status="{{ $internship->contract_type }}" />
                       </x-card.card>
                    @endforeach

                </dl>
            </div>


        </div>
    </div>
</div>
