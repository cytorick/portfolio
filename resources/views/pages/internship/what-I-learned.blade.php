@extends('pages.internship.layout')

@section('content')

    <div class="grid grid-cols-12">
        <div class="col-span-9">
            <h3 class="text-3xl font-extrabold text-gray-900 sm:text-4xl dark:text-gray-100">{{ $internship->name }}</h3>
            <p class="mt-0 text-red-400 sm:text-xl lg:text-lg xl:text-xl">
                {{ $internship->company }}
            </p>
        </div>
        <div class="col-span-3">
            <img src="{{ asset('img/'. $internship->image) }}" alt=""
                 class="inline-block align-middle">
        </div>
    </div>



    <div class="space-y-8">

        <p class="mt-3 text-base text-gray-500 dark:text-gray-200 sm:mt-5 sm:text-xl lg:text-lg xl:text-xl">
            This <span class="text-error">website</span> is my personal portfolio, here you can find my
            experience, the schools I went to, my certificates, my skills, my past projects and the
            languages I speak. This <span class="text-error">website</span> is my personal portfolio, here you can find my
            experience, the schools I went to, my certificates, my skills, my past projects and the
            languages I speak.</p>
        <p class="mt-3 text-base text-gray-500 dark:text-gray-200 sm:mt-5 sm:text-xl lg:text-lg xl:text-xl">
            This <span class="text-error">website</span> is my personal portfolio, here you can find my
            experience, the schools I went to, my certificates, my skills, my past projects and the
            languages I speak.  This <span class="text-error">website</span> is my personal portfolio, here you can find my
            experience, the schools I went to, my certificates, my skills, my past projects and the
            languages I speak.</p>
        <p class="mt-3 text-base text-gray-500 dark:text-gray-200 sm:mt-5 sm:text-xl lg:text-lg xl:text-xl">
            This <span class="text-error">website</span> is my personal portfolio, here you can find my
            experience, the schools I went to, my certificates, my skills, my past projects and the
            languages I speak.  This <span class="text-error">website</span> is my personal portfolio, here you can find my
            experience, the schools I went to, my certificates, my skills, my past projects and the
            languages I speak.</p>

    </div>

@endsection
