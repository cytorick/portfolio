<section class="bg-gray-100 dark:bg-gray-800">

    <div class="relative bg-gray-100 dark:bg-gray-800 pt-16 pb-20 px-4 sm:px-6 lg:pt-24 lg:pb-28 lg:px-8">
        <div class="absolute inset-0">
            <div class="bg-gray-100 dark:bg-gray-800 h-1/3 sm:h-2/3"></div>
        </div>
        <div class="relative max-w-7xl mx-auto">
            <div class="text-center">
                <h2 class="text-3xl tracking-tight font-extrabold text-gray-900 dark:text-gray-200 sm:text-4xl">My
                    <span class="text-error">projects</span></h2>
                <p class="mt-3 max-w-2xl mx-auto text-xl text-gray-500 dark:text-gray-100 sm:mt-4">Over the years I have
                    done a few <span class="text-error">projects</span>. Some small, some a little bigger.</p>
            </div>
            <div class="mt-12 max-w-lg mx-auto">
                <ul role="list" class="-mb-8 col-span-2">
                    @foreach($projects as $project)
                        <li>
                            <div class="relative pb-8">
                                                <span class="absolute top-4 left-4 -ml-px h-full w-0.5 bg-error"
                                                      aria-hidden="true"></span>
                                <div class="relative flex space-x-3">
                                    <div>
                                                    <span
                                                        class="h-8 w-8 rounded-full text-white bg-gray-400 dark:bg-gray-900 flex items-center justify-center ring-8 ring-error">
                                                        {!! $project->icon !!}
                                                    </span>
                                    </div>
                                    <div class="min-w-0 flex-1 pt-1.5 flex justify-between space-x-4 pl-2">
                                        <div>
                                            <p class="text-sm text-gray-500 dark:text-gray-200">
                                                {{ $project->title }} <br>
                                                <small class="text-red-400">{{ $project->company }}</small> <br>
                                            {{ $project->description }}
                                            </p>
                                        </div>
                                        <div
                                            class="text-right text-sm whitespace-nowrap text-gray-500 dark:text-gray-300">
                                            <time
                                                datetime="20-09-2022">{{ $project->made_at }}</time>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        @endforeach
                    <li>
                        <div class="relative pb-8">
                            <div class="relative flex space-x-3">
                                <div>
                                        <span
                                            class="h-8 w-8 rounded-full bg-gray-400 dark:bg-gray-900 text-white flex items-center justify-center ring-8 ring-error">
                                         <i class="fa-solid fa-clipboard-question"></i>
                                        </span>
                                </div>
                                <div class="min-w-0 flex-1 pt-1.5 flex justify-between space-x-4 pl-2">
                                    <div>
                                        <p class="text-sm text-gray-500 dark:text-gray-200">There will be more, soon!</p>
                                    </div>
                                    <div
                                        class="text-right text-sm whitespace-nowrap text-gray-500 dark:text-gray-300">
                                        <time datetime="2020-09-20">Now</time>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
        </div>
    </div>


</section>
