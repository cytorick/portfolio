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
            <div class="mt-12 max-w-lg mx-auto grid gap-5 lg:grid-cols-3 lg:max-w-none">
                @forelse($projects as $project)
                    <x-blog.card sub-title="{{ $project->company }}" title="{{ $project->title }}">
                        <x-slot name="image">
                            <img class="h-48 w-full object-cover"
                                 src="{{ asset('img/'. $project->image_1) }}"
                                 alt="{{ $project->image_1 }}">
                        </x-slot>
                        <x-blog.madeBy created-at="{{ $project->made_at }}"/>
                    </x-blog.card>
                @empty
                    <div class="flex flex-col rounded-lg overflow-hidden">
                        <div class="flex-1 bg-transparent p-6 flex flex-col justify-between">
                        </div>
                    </div>
                    <x-blog.card>
                        <x-slot name="title">
                            Oh oh... its <span class="text-error">empty</span> here
                        </x-slot>
                        <x-slot name="summary">
                            At this moment there are no <span class="text-error">projects</span> yet... in the future there will be some.
                        </x-slot>
                    </x-blog.card>
                @endforelse
            </div>

        </div>
    </div>


</section>
