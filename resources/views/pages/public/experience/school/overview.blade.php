@extends('pages.public.experience.school.layout')

@section('content')

<div class="grid grid-cols-12">
    <div class="col-span-9">
        <h3 class="text-3xl font-extrabold text-gray-900 sm:text-4xl dark:text-gray-100">{{ $school->name }}</h3>
        <p class="mt-0 text-green-600 sm:text-xl lg:text-lg xl:text-xl">
            {{ $school->school }}
        </p>
    </div>
    <div class="col-span-3">
        @foreach($school->media as $media)
            <img src="https://images.cytorick.nl/{{ $media->id }}/{{ $media->file_name }}" class="inline-block align-middle">
        @endforeach
    </div>
</div>



    <div class="space-y-8">
        <p class="mt-3 text-base text-gray-500 dark:text-gray-200 sm:mt-5 sm:text-xl lg:text-lg xl:text-xl">
            {!! $school->introduction !!}
        </p>
        <section>

            <dl class="grid grid-cols-1 gap-5 sm:grid-cols-3">

                <div class="px-4 py-5 bg-gray-200 dark:bg-gray-900 shadow rounded-lg overflow-hidden sm:p-6">
                    <dt class="text-sm font-medium text-gray-500 dark:text-gray-200 truncate">
                        {{ __('Dates') }}
                    </dt>
                    <dd class="mt-1 flex items-baseline">
                        <p class="text-2xl font-semibold text-gray-900 dark:text-gray-100">
                            {{ date('M Y', strtotime($school->start_date)) }} -
                            @if($school->is_active == 1)
                                Present
                            @else
                                {{ date('M Y', strtotime($school->end_date)) }}
                            @endif
                        </p>
                    </dd>
                </div>

                <div class="px-4 py-5 bg-gray-200 dark:bg-gray-900 shadow rounded-lg overflow-hidden sm:p-6">
                    <dt class="text-sm font-medium text-gray-500 dark:text-gray-200 truncate">
                        {{ __('Status') }}
                    </dt>
                    <dd class="mt-1 flex items-baseline">
                        <p class="text-2xl font-semibold text-gray-900 dark:text-gray-100">
                            {{ $school->status }}
                        </p>
                    </dd>
                </div>

                <div class="px-4 py-5 bg-gray-200 dark:bg-gray-900 shadow rounded-lg overflow-hidden sm:p-6">
                    <dt class="text-sm font-medium text-gray-500 dark:text-gray-200 truncate">
                        {{ __('Place') }}
                    </dt>
                    <dd class="mt-1 flex items-baseline">
                        <p class="text-2xl font-semibold text-gray-900 dark:text-gray-100">
                            {{ $school->place}}
                        </p>
                    </dd>
                </div>

            </dl>

        </section>
        <p class="mt-3 text-base text-gray-500 dark:text-gray-200 sm:mt-5 sm:text-xl lg:text-lg xl:text-xl">
            {!! $school->description !!}
        </p>
    </div>

@endsection
