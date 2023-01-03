<x-header>
    De <span class="text-green-600">projecten</span> waar ik aan heb gewerkt...
</x-header>

<div class="overflow-hidden bg-gray-50 py-10 lg:py-10">
    <div class="relative mx-auto max-w-xl px-6 lg:max-w-7xl lg:px-8">


        <svg class="absolute right-full hidden translate-x-1/2 translate-y-12 transform lg:block" width="404"
             height="784" fill="none" viewBox="0 0 404 784" aria-hidden="true">
            <defs>
                <pattern id="64e643ad-2176-4f86-b3d7-f2c5da3b6a6d" x="0" y="0" width="20" height="20"
                         patternUnits="userSpaceOnUse">
                    <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor"/>
                </pattern>
            </defs>
            <rect width="404" height="784" fill="url(#64e643ad-2176-4f86-b3d7-f2c5da3b6a6d)"/>
        </svg>

        <div class="relative mt-12 sm:mt-16 lg:mt-24">
            <div class="lg:grid lg:grid-flow-row-dense lg:grid-cols-1 lg:items-center lg:gap-8">
                <div class="lg:col-start-1">
                    <div class="relative bg-gray-50 px-4 pt-16 pb-20 sm:px-6 lg:px-8 lg:pt-24 lg:pb-28">
                        <div class="absolute inset-0">
                            <div class="h-1/3 sm:h-2/3"></div>
                        </div>
                        <div class="relative mx-auto max-w-7xl">
                            <div class="mx-auto mt-12 grid max-w-lg gap-5 lg:max-w-none lg:grid-cols-3">
                                @foreach($projects as $project)
                                    <div class="flex flex-col overflow-hidden rounded-lg shadow-lg">
                                        <div class="flex-shrink-0">
                                            @foreach($project->media as $media)
                                                <img
                                                    src="https://images.cytorick.nl/{{ $media->id }}/{{ $media->file_name }}"
                                                    alt=""
                                                    class="h-48 w-full object-cover">
                                            @endforeach
                                        </div>
                                        <div class="flex flex-1 flex-col justify-between bg-white p-6">
                                            <div class="flex-1">
                                                <p class="text-lg font-medium text-green-600">
                                                    @foreach($project->skills as $skill)
                                                        {!! $skill->icons->icon !!}
                                                    @endforeach
                                                </p>
                                                <div class="mt-2 block">
                                                    <p class="text-xl font-semibold text-gray-900">
                                                        {{ $project->title }}
                                                    </p>
                                                    <p class="mt-3 text-base text-gray-500">
                                                        {{ $project->description }}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                </div>

                <div class="relative -mx-4 mt-10 lg:col-start-1 lg:mt-0">
                    <svg class="absolute left-1/2 -translate-x-1/2 translate-y-16 transform lg:hidden" width="784"
                         height="404" fill="none" viewBox="0 0 784 404" aria-hidden="true">
                        <defs>
                            <pattern id="e80155a9-dfde-425a-b5ea-1f6fadd20131" x="0" y="0" width="20" height="20"
                                     patternUnits="userSpaceOnUse">
                                <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor"/>
                            </pattern>
                        </defs>
                        <rect width="784" height="404" fill="url(#e80155a9-dfde-425a-b5ea-1f6fadd20131)"/>
                    </svg>
                </div>
            </div>
        </div>
    </div>
</div>
