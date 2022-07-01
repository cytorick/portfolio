<x-error-layout>
    <div class="min-h-full pt-16 pb-12 flex flex-col bg-white dark:bg-gray-800">
        <main class="flex-grow flex flex-col justify-center max-w-7xl w-full mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex-shrink-0 flex justify-center">
                <a href="/" class="inline-flex">
                    <i class="fa-solid fa-r h-8 block text-green-600 text-2xl"></i>
                    <i class="fa-solid fa-v h-8 block text-green-600 text-2xl"></i>                </a>
            </div>
            <div class="py-16">
                <div class="text-center">
                    <p class="text-sm font-semibold text-green-600 uppercase tracking-wide">503 error</p>
                    <h1 class="mt-2 text-4xl font-extrabold text-gray-900 tracking-tight sm:text-5xl dark:text-gray-100">Maintenance mode activated!</h1>
                    <p class="mt-2 text-base text-gray-500 dark:text-gray-200">We are currently fixing something, we will be right back!</p>
                    <div class="mt-6">
{{--                        <a href="#" class="text-base font-medium text-indigo-600 hover:text-indigo-500">Go back home<span aria-hidden="true"> &rarr;</span></a>--}}
                    </div>
                </div>
            </div>
        </main>
        <footer class="flex-shrink-0 max-w-7xl w-full mx-auto px-4 sm:px-6 lg:px-8">
            <nav class="flex justify-center space-x-4">
                @foreach(\App\Models\Link::all() as $link)
                    <a href="@if($link->name == 'Email') mailto: @endif @if($link->name == 'Tel') tel: @endif {{ $link->link }}"
                       class="text-gray-400 hover:text-gray-500" target="_blank">
                        <span class="sr-only">{{ $link->name }}</span>
                        <span class="text-lg">
                           {!! $link->icon !!}
                    </span>
                    </a>
                @endforeach
            </nav>
        </footer>
    </div>



</x-error-layout>
