@extends('pages.job.layout')

@section('content')

    <div class="grid grid-cols-12">
        <div class="col-span-9">
            <h3 class="text-3xl font-extrabold text-gray-900 sm:text-4xl dark:text-gray-100">{{ $job->function }}</h3>
            <p class="mt-0 text-red-400 sm:text-xl lg:text-lg xl:text-xl">
                {{ $job->company }}
            </p>
        </div>
        <div class="col-span-3">
            <a href="{{ $job->website }}" target="_blank">
                <img src="{{ asset('img/'. $job->image) }}" alt=""
                     class="inline-block align-middle">
            </a>
        </div>
    </div>



    <div class="space-y-8">

    {!! $job->learned !!}

    </div>

@endsection
