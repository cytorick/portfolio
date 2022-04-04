<x-guest-layout>

    @section('title', $blog->title)

    <div class="relative py-16 overflow-hidden">
        <div class="relative px-4 sm:px-6 lg:px-8">
            <div class="text-lg max-w-prose mx-auto">
                <h1>
                    <span class="block text-base text-center text-red-400 font-semibold tracking-wide uppercase">{{ $blog->category }}</span>
                    <span class="mt-2 block text-3xl text-center leading-8 font-extrabold tracking-tight text-gray-900 dark:text-gray-100 sm:text-4xl">{{ $blog->title }}</span>
                </h1>
                <p class="mt-8 text-xl text-gray-500 leading-8 dark:text-gray-200">{{ $blog->summary }}</p>
            </div>
            <div class="mt-6 prose prose-indigo prose-lg text-gray-500 dark:text-gray-200 mx-auto">
                <img class="w-full object-cover"
                     src="{{ asset('img/'. $blog->image) }}"
                     alt="{{ $blog->image }}">
                {!! $blog->body !!}
            </div>
        </div>
    </div>

</x-guest-layout>
