<div class="bg-gray-100 dark:bg-gray-800">
    <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8">
        <div class="lg:grid lg:grid-cols-2 lg:gap-8 lg:items-center">
            <div class="mt-8 grid grid-cols-2 gap-0.5 md:grid-cols-3 lg:mt-0 lg:grid-cols-2">
                @foreach($jobs as $job)
                    <a href="{{ route('job.show', ['jobId' => $job->id, 'page' => 'overview']) }}">
                        <div class="col-span-1 flex justify-center py-8 px-8 hover:bg-error hover:rounded-3xl">
                            <img class="max-h-16" src="{{ asset('img/'. $job->image) }}" alt="{{ $job->image }}">
                        </div>
                    </a>
                @endforeach
                @foreach($internships as $internship)
                    <a href="{{ route('internship.show', ['internshipId' => $internship->id, 'page' => 'overview']) }}">
                        <div class="col-span-1 flex justify-center py-8 px-8 hover:bg-error hover:rounded-3xl">
                            <img class="max-h-16" src="{{ asset('img/'. $internship->image) }}"
                                 alt="{{ $internship->image }}">
                        </div>
                    </a>
                @endforeach
            </div>
            <div>
                <h2 class="text-3xl font-extrabold text-gray-900 dark:text-gray-100 sm:text-4xl">The <span class="text-error">experience</span> I
                    have</h2>
                <p class="mt-3 max-w-3xl text-lg text-gray-500 dark:text-gray-200">Here you see a short list of the
                    <span class="text-error">experience</span> I have. These are <span class="text-error">internships</span> and regular <span class="text-error">jobs</span>. When you click on a logo you go to the
                    information page of the specific job.</p>
                <div class="mt-8 sm:flex">
                    <div class="rounded-md shadow">
                        <a href="{{ route('experience') }}"
                           class="flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-error hover:bg-red-500">
                            All experience </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
