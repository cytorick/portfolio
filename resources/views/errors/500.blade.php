<x-error-layout>
    <div class="bg-gray-100 dark:bg-gray-800">
        <main class="max-w-7xl w-full mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-center pt-16 mx-auto">
                <i class="fa-solid fa-r h-8 block text-error text-2xl"></i>
                <i class="fa-solid fa-v h-8 block text-error text-2xl"></i>
            </div>
            <div class="max-w-xl mx-auto py-16 sm:py-24">
                <div class="text-center">
                    <p class="text-sm font-semibold uppercase tracking-wide text-red-400">500 error</p>
                    <h1 class="mt-2 text-4xl font-extrabold text-gray-900 tracking-tight sm:text-5xl dark:text-gray-100">
                        Server ERROR</h1>
                    <p class="mt-2 text-lg text-gray-500 dark:text-gray-200">Oh oh, our server went for a walk...</p>
                </div>
                <div class="mt-12">
                    <h2 class="text-sm font-semibold tracking-wide uppercase text-black dark:text-gray-200">Popular pages</h2>
                    <ul role="list"
                        class="mt-4 border-t border-b border-gray-200 dark:border-t dark:border-b dark:border-gray-600 divide-y divide-gray-200 dark:divide-gray-600">
                        <li class="relative py-6 flex items-start space-x-4">
                            <div class="flex-shrink-0">
              <span class="flex items-center justify-center h-12 w-12 rounded-lg bg-gray-300 dark:bg-gray-700">
                <!-- Heroicon name: outline/book-open -->
             <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-400" fill="none" viewBox="0 0 24 24"
                  stroke="currentColor" stroke-width="2">
  <path stroke-linecap="round" stroke-linejoin="round"
        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
</svg>
              </span>
                            </div>
                            <div class="min-w-0 flex-1">
                                <h3 class="text-base font-medium text-gray-900 dark:text-gray-100">
                <span class="rounded-sm focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                  <a href="{{ route('about') }}" class="focus:outline-none">
                    <span class="absolute inset-0" aria-hidden="true"></span>
                    About me
                  </a>
                </span>
                                </h3>
                                <p class="text-base text-gray-500 dark:text-gray-200">Learn more about me as a person</p>
                            </div>
                            <div class="flex-shrink-0 self-center">
                                <!-- Heroicon name: solid/chevron-right -->
                                <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                     viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                          d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                          clip-rule="evenodd"/>
                                </svg>
                            </div>
                        </li>

                        <li class="relative py-6 flex items-start space-x-4">
                            <div class="flex-shrink-0">
              <span class="flex items-center justify-center h-12 w-12 rounded-lg bg-gray-300 dark:bg-gray-700">
                <!-- Heroicon name: outline/rss -->
                <svg class="h-6 w-6 text-red-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M6 5c7.18 0 13 5.82 13 13M6 11a7 7 0 017 7m-6 0a1 1 0 11-2 0 1 1 0 012 0z"/>
                </svg>
              </span>
                            </div>
                            <div class="min-w-0 flex-1">
                                <h3 class="text-base font-medium text-gray-900 dark:text-gray-100">
                <span class="rounded-sm focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-red-400">
                  <a href="{{ route('blog') }}" class="focus:outline-none">
                    <span class="absolute inset-0" aria-hidden="true"></span>
                    Blog
                  </a>
                </span>
                                </h3>
                                <p class="text-base text-gray-500 dark:text-gray-200">Read my latest news and
                                    articles</p>
                            </div>
                            <div class="flex-shrink-0 self-center">
                                <!-- Heroicon name: solid/chevron-right -->
                                <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                     viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                          d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                          clip-rule="evenodd"/>
                                </svg>
                            </div>
                        </li>
                    </ul>
                    <div class="mt-8">
                        <a href="{{ route('home') }}" class="text-base font-medium text-red-400 hover:text-red-500">Or go back
                            home<span aria-hidden="true"> &rarr;</span></a>
                    </div>
                </div>
            </div>
        </main>
        <footer class="max-w-7xl w-full mx-auto px-4 sm:px-6 lg:px-8">
            <div class="border-t border-gray-200 py-12 text-center md:flex md:justify-between">
                <p class="text-base text-gray-400">&copy; {{ now()->format('Y') }} Rick Visser | All rights
                    reserved.</p>
                <div class="mt-6 flex justify-center space-x-8 md:mt-0">
                    @foreach(\App\Models\Link::all() as $link)
                        <a href="@if($link->name == 'Email') mailto: @endif @if($link->name == 'Tel') tel: @endif {{ $link->link }}"
                           class="text-gray-400 hover:text-gray-500" target="_blank">
                            <span class="sr-only">{{ $link->name }}</span>
                            <span class="text-lg">
                           {!! $link->icon !!}
                    </span>
                        </a>
                    @endforeach
                </div>
            </div>
        </footer>
    </div>

</x-error-layout>
