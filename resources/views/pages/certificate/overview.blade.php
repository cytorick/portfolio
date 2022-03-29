@extends('pages.certificate.layout')

@section('content')

<div class="grid grid-cols-12">
    <div class="col-span-9">
        <h3 class="text-3xl font-extrabold text-gray-900 sm:text-4xl dark:text-gray-100">{{ $certificate->name }}</h3>
        <p class="mt-0 text-red-400 sm:text-xl lg:text-lg xl:text-xl">
            {{ $certificate->school }}
        </p>
    </div>
    <div class="col-span-3">
        <img src="{{ asset('img/'. $certificate->image) }}" alt=""
             class="inline-block align-middle">
    </div>
</div>



    <div class="space-y-8">
        {!! $certificate->introduction !!}
        <section>

            <dl class="grid grid-cols-1 gap-5 sm:grid-cols-3">

                <div class="px-4 py-5 bg-gray-200 dark:bg-gray-900 shadow rounded-lg overflow-hidden sm:p-6">
                    <dt class="text-sm font-medium text-gray-500 dark:text-gray-200 truncate">
                        {{ __('Dates') }}
                    </dt>
                    <dd class="mt-1 flex items-baseline">
                        <p class="text-2xl font-semibold text-gray-900 dark:text-gray-100">
                            {{ date('M Y', strtotime($certificate->start_date)) }}
                            @if($certificate->end_date == !null)
                                - {{ date('M Y', strtotime($certificate->end_date)) }}
                            @endif
                        </p>
                    </dd>
                </div>

                <div class="px-4 py-5 bg-gray-200 dark:bg-gray-900 shadow rounded-lg overflow-hidden sm:p-6">
                    <dt class="text-sm font-medium text-gray-500 dark:text-gray-200 truncate">
                        {{ __('Validity') }}
                    </dt>
                    <dd class="mt-1 flex items-baseline">
                        <p class="text-2xl font-semibold text-gray-900 dark:text-gray-100">
                            @if($certificate->end_date == null)
                                Indefinitely
                            @else
                                Certain period of time
                            @endif
                        </p>
                    </dd>
                </div>

                <div class="px-4 py-5 bg-gray-200 dark:bg-gray-900 shadow rounded-lg overflow-hidden sm:p-6">
                    <dt class="text-sm font-medium text-gray-500 dark:text-gray-200 truncate">
                        {{ __('Place') }}
                    </dt>
                    <dd class="mt-1 flex items-baseline">
                        <p class="text-2xl font-semibold text-gray-900 dark:text-gray-100">
                            {{ $certificate->place}}
                        </p>
                    </dd>
                </div>

            </dl>

        </section>
        {!! $certificate->summary !!}
    </div>

@endsection
