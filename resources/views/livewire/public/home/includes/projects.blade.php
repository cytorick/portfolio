<div class="relative bg-gray-100 dark:bg-gray-800 pt-16 pb-20 px-4 sm:px-6 lg:pt-24 lg:pb-28 lg:px-8">
    <div class="absolute inset-0">
        <div class="bg-gray-100 dark:bg-gray-800 h-1/3 sm:h-2/3"></div>
    </div>
    <div class="relative max-w-7xl mx-auto">
        <div class="text-center">
            <h2 class="text-3xl tracking-tight font-extrabold text-gray-900 dark:text-gray-200 sm:text-4xl">
                @livewire('public.tools.title-shower', ['page' => 'Home', 'number' => 7])
            </h2>
          @livewire('public.tools.text-shower', ['page' => 'Home', 'number' => 7])
            <div class="mt-8 sm:flex justify-center">
                <div class="rounded-md shadow">
                    <a href="{{ route('projects') }}"
                       class="flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-green-500 hover:bg-green-700">
                        All projects </a>
                </div>
            </div>
        </div>
        <div class="mt-12 max-w-lg mx-auto grid gap-5 lg:grid-cols-3 lg:max-w-none">
            @forelse($projects as $project)
                <x-blog.card title="{{ $project->title }}" sub-title="{{ $project->company }}">
                    <x-slot name="summary">
                        {{ $project->description }}
                        <div class="text-xl inline-block mt-3">
                            @foreach($project->skills as $skill)
                                <span style="color: {{ $skill->icons->color }} @if($skill->icons->name == 'Mac') black @endif" class="mx-1">{!! $skill->icons->icon !!}</span>
                            @endforeach
                        </div>
                    </x-slot>
                    <x-blog.madeBy created-at="{{ $project->made_at }}">
                    </x-blog.madeBy>
                </x-blog.card>
            @empty
                <div class="flex flex-col rounded-lg overflow-hidden">
                    <div class="flex-1 bg-transparent p-6 flex flex-col justify-between">
                    </div>
                </div>
                <x-blog.card>
                    <x-slot name="title">
                        Oh oh... its <span class="text-green-500">empty</span> here
                    </x-slot>
                    <x-slot name="summary">
                        At this moment there are no <span class="text-green-500">projects</span> yet... in the future there will be some.
                    </x-slot>
                </x-blog.card>
            @endforelse
        </div>

    </div>
</div>
