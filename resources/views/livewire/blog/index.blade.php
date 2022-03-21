<section class="bg-gray-100 dark:bg-gray-800">

    <div class="relative bg-gray-100 dark:bg-gray-800 pt-16 pb-20 px-4 sm:px-6 lg:pt-24 lg:pb-28 lg:px-8">
        <div class="absolute inset-0">
            <div class="bg-gray-100 dark:bg-gray-800 h-1/3 sm:h-2/3"></div>
        </div>
        <div class="relative max-w-7xl mx-auto">
            <div class="text-center">
                <h2 class="text-3xl tracking-tight font-extrabold text-gray-900 dark:text-gray-200 sm:text-4xl">From the
                    <span class="text-error">blog</span></h2>
                <p class="mt-3 max-w-2xl mx-auto text-xl text-gray-500 dark:text-gray-100 sm:mt-4">Here you can find the
                    most recent <span class="text-error">posts</span> from the <span class="text-error">blog</span>.</p>
            </div>
            <div class="mt-12 max-w-lg mx-auto grid gap-5 lg:grid-cols-3 lg:max-w-none">
                @foreach($blogs as $blog)
                    <x-blog.card title="{{ $blog->title }}" summary="{{ $blog->summary }}" sub-title="{{ $blog->category }}" image="{{ $blog->image }}">
                        <x-blog.madeBy created-at="{{ $blog->created_at->format('d M Y') }}" read-time="{{ $blog->read_time }}">
                            <x-blog.readTime read-time="{{ $blog->read_time }}" />
                        </x-blog.madeBy>
                    </x-blog.card>
                @endforeach
            </div>

        </div>
    </div>


</section>