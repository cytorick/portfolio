<div class="bg-gray-100 dark:bg-gray-800">
    <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8">
        <div class="lg:gap-8 lg:items-center">

            <div>
                <h3 class="text-3xl font-extrabold text-gray-900 sm:text-4xl dark:text-gray-100">The <span class="text-green-600">jobs</span> I had</h3>

                <dl class="mt-5 grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-3">
                    @foreach($jobs as $job)
                        <x-card.card title="{{ $job->function }}" sub-title="{{ $job->company }}" address="{{ $job->street }}, {{ $job->place }}">
                            <x-slot name="link">
                                {{ route('jobs.show', ['jobId' => $job->id, 'page' => 'overview']) }}
                            </x-slot>
                            <x-slot name="image">
                                    <img src="{{ asset('img/' . $job->media[0]->id .'/'. $job->media[0]->file_name) }}" alt="{{ $job->media[0]->file_name }}"  class="inline-block align-middle px-3">
                            </x-slot>
                            <x-slot name="dates">
                                {{ date('M Y', strtotime($job->start_date)) }} -
                                @if($job->is_active == 1)
                                    Present
                                @else
                                    {{ date('M Y', strtotime($job->end_date)) }}
                                @endif
                            </x-slot>
                            <x-card.status status="{{ $job->contract_type }}" />
                        </x-card.card>
                    @endforeach

                </dl>
            </div>


        </div>
    </div>
</div>
