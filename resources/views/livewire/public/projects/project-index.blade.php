<div class="bg-white dark:bg-gray-800">
    <div class="mx-auto py-12 px-4 max-w-7xl sm:px-6 lg:px-8 lg:py-24">
        <div class="space-y-12 lg:grid lg:grid-cols-3 lg:gap-8 lg:space-y-0">
            <div class="space-y-5 sm:space-y-4">
                <h2 class="text-3xl font-extrabold tracking-tight sm:text-4xl dark:text-gray-200 mb-1">
                    @livewire('public.tools.title-shower', ['page' => 'Projects', 'number' => 1])
                </h2>
                @livewire('public.tools.text-shower', ['page' => 'Projects', 'number' => 1])
                <div class="relative mx-auto px-4 sm:max-w-3xl sm:px-6 lg:px-0 pt-10">

                    @livewire('public.tools.image-shower', ['page' => 'Projects', 'number' => 1, 'class' => 'rounded-xl hidden sm:block mt-10 min-h-100 mx-auto'])

                </div>
            </div>
            <div class="lg:col-span-2">
                <ul role="list"
                    class="space-y-12 sm:divide-y sm:divide-gray-200 sm:space-y-0 sm:-mt-8 lg:gap-x-8 lg:space-y-0">
                    @foreach($projects as $project)
                        <div class="block sm:hidden divide-y divide-gray-200 pt-5 pb-5"></div>
                        <li class="sm:py-8">
                            <div class="space-y-4 sm:grid sm:grid-cols-3 sm:items-start sm:gap-6 sm:space-y-0">
                                <div class="aspect-w-3 aspect-h-2 sm:aspect-w-3 sm:aspect-h-4">
                                    @foreach($project->media as $media)
                                        <img src="https://images.cytorick.nl{{ $media->id }}/{{ $media->file_name }}" alt=""
                                             class="object-cover rounded-lg">
                                    @endforeach
                                </div>
                                <div class="sm:col-span-2">
                                    <div class="space-y-4">
                                        <div class="text-lg leading-6 font-medium space-y-1">
                                            <h3 class="dark:text-gray-100">{{ $project->title }}         @if($project->link)
                                                    <a href="{{ $project->link }}" target="_blank"><i
                                                            class="fa-solid fa-arrow-up-right-from-square"></i></a>
                                                @endif</h3>
                                            <p class="text-green-600 text-sm">{{ $project->company }}</p>
                                        </div>
                                        <div class="text-lg">
                                            <p class="text-gray-500 dark:text-gray-200">
                                                {{ $project->description }}
                                            </p>
                                        </div>
                                        <div class="text-xl inline-block mt-5">
                                            @foreach($project->skills as $skill)
                                                <span
                                                    style="color: {{ $skill->icons->color }} @if($skill->icons->name == 'Mac') black @endif"
                                                    class="mx-1">{!! $skill->icons->icon !!}</span>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
