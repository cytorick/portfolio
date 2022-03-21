@extends('pages.school.layout')

@section('content')

    <div class="grid grid-cols-12">
        <div class="col-span-9">
            <h3 class="text-3xl font-extrabold text-gray-900 sm:text-4xl dark:text-gray-100">{{ $school->name }}</h3>
            <p class="mt-0 text-red-400 sm:text-xl lg:text-lg xl:text-xl">
                {{ $school->school }}
            </p>
        </div>
        <div class="col-span-3">
            <img src="{{ asset('img/'. $school->image) }}" alt=""
                 class="inline-block align-middle">
        </div>
    </div>



    <div class="space-y-8">

     {!! $school->learned !!}

    </div>

@endsection
