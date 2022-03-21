<div class="bg-gray-100 dark:bg-gray-800">
    <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8">
        <div class="lg:gap-8 lg:items-center">

            <div>
                <h3 class="text-3xl font-extrabold text-gray-900 sm:text-4xl dark:text-gray-100">The <span class="text-error">certificates</span> I have</h3>

                <dl class="mt-5 grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-3">
                    @foreach($certificates as $certificate)
                        <x-card.card title="{{ $certificate->name }}" sub-title="{{ $certificate->school }}" image="{{ $certificate->image }}" address="{{ $certificate->street }}, {{ $certificate->place }}" >
                        <x-slot name="link">
                            {{ route('certificate.show', ['certificateId' => $certificate->id, 'page' => 'overview']) }}
                        </x-slot>
                            <x-slot name="dates">
                            {{ date('d M Y', strtotime($certificate->start_date)) }}
                            @if($certificate->end_date == !null)
                                - {{ date('d M Y', strtotime($certificate->end_date)) }}
                            @endif
                        </x-slot>
                        </x-card.card>
                    @endforeach

                </dl>
            </div>


        </div>
    </div>
</div>
