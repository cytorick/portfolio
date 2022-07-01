<div class="grid grid-cols-12">

    <div class="col-span-4 pr-5">
        <div>
            <dl class="mt-5 text-center">
                <div class="px-4 py-5 bg-white dark:bg-gray-900 shadow rounded-lg overflow-hidden sm:p-6">
                    <dd class="mt-1 text-3xl font-semibold text-gray-900 dark:text-gray-100">Welcome <span class="text-green-600">{{ auth()->user()->name }}</span></dd>
                </div>
            </dl>
        </div>
        <div>
            <dl class="mt-5">
                <div class="px-4 py-5 bg-white dark:bg-gray-900 shadow rounded-lg overflow-hidden sm:p-6">
                    <dt class="text-sm font-medium text-gray-500 dark:text-gray-200">
                        Welcome to the admin dashboard of my portfolio website. Here you can see the admin CMS. Here I can add and edit records.
                    </dt>
                </div>
            </dl>
        </div>
        <div class="mt-5">
            @livewire('admin.tools.task-list', ['hidden' => false])
        </div>
    </div>

    <div class="col-span-8">
        <div>
            <dl class="mt-5 grid grid-cols-1 gap-5 sm:grid-cols-3">
                <div class="px-4 py-5 bg-white dark:bg-gray-900 shadow rounded-lg overflow-hidden sm:p-6">
                    <dt class="text-sm font-medium text-gray-500 dark:text-gray-200 truncate">Total media</dt>
                    <dd class="mt-1 text-3xl font-semibold text-gray-900 dark:text-gray-100">{{ $mediaCount }}</dd>
                </div>

                <div class="px-4 py-5 bg-white dark:bg-gray-900 shadow rounded-lg overflow-hidden sm:p-6">
                    <dt class="text-sm font-medium text-gray-500 dark:text-gray-200 truncate">Total texts</dt>
                    <dd class="mt-1 text-3xl font-semibold text-gray-900 dark:text-gray-100">{{ $textCount }}</dd>
                </div>

                <div class="px-4 py-5 bg-white dark:bg-gray-900 shadow rounded-lg overflow-hidden sm:p-6">
                    <dt class="text-sm font-medium text-gray-500 dark:text-gray-200 truncate">Total jobs</dt>
                    <dd class="mt-1 text-3xl font-semibold text-gray-900 dark:text-gray-100">{{ $jobCount }}</dd>
                </div>
            </dl>
        </div>
        <div>
            <dl class="mt-5 grid grid-cols-1 gap-5 sm:grid-cols-3">

                <div class="px-4 py-5 bg-white dark:bg-gray-900 shadow rounded-lg overflow-hidden sm:p-6">
                    <dt class="text-sm font-medium text-gray-500 dark:text-gray-200 truncate">Total certificates</dt>
                    <dd class="mt-1 text-3xl font-semibold text-gray-900 dark:text-gray-100">{{ $certificateCount }}</dd>
                </div>

                <div class="px-4 py-5 bg-white dark:bg-gray-900 shadow rounded-lg overflow-hidden sm:p-6">
                    <dt class="text-sm font-medium text-gray-500 dark:text-gray-200 truncate">Total schools</dt>
                    <dd class="mt-1 text-3xl font-semibold text-gray-900 dark:text-gray-100">{{ $schoolCount }}</dd>
                </div>

                <div class="px-4 py-5 bg-white dark:bg-gray-900 shadow rounded-lg overflow-hidden sm:p-6">
                    <dt class="text-sm font-medium text-gray-500 dark:text-gray-200 truncate">Total internships</dt>
                    <dd class="mt-1 text-3xl font-semibold text-gray-900 dark:text-gray-100">{{ $internshipCount }}</dd>
                </div>
            </dl>
        </div>
        <div>
            <dl class="mt-5 grid grid-cols-1 gap-5 sm:grid-cols-3">

                <div class="px-4 py-5 bg-white dark:bg-gray-900 shadow rounded-lg overflow-hidden sm:p-6">
                    <dt class="text-sm font-medium text-gray-500 dark:text-gray-200 truncate">Total projects</dt>
                    <dd class="mt-1 text-3xl font-semibold text-gray-900 dark:text-gray-100">{{ $projectCount }}</dd>
                </div>

                <div class="px-4 py-5 bg-white dark:bg-gray-900 shadow rounded-lg overflow-hidden sm:p-6">
                    <dt class="text-sm font-medium text-gray-500 dark:text-gray-200 truncate">Total links</dt>
                    <dd class="mt-1 text-3xl font-semibold text-gray-900 dark:text-gray-100">{{ $linkCount }}</dd>
                </div>

                <div class="px-4 py-5 bg-white dark:bg-gray-900 shadow rounded-lg overflow-hidden sm:p-6">
                    <dt class="text-sm font-medium text-gray-500 dark:text-gray-200 truncate">Total skills</dt>
                    <dd class="mt-1 text-3xl font-semibold text-gray-900 dark:text-gray-100">{{ $skillCount }}</dd>
                </div>
            </dl>
        </div>
        <div>
            <dl class="mt-5 grid grid-cols-1 gap-5 sm:grid-cols-3">


                <div class="px-4 py-5 bg-white dark:bg-gray-900 shadow rounded-lg overflow-hidden sm:p-6">
                    <dt class="text-sm font-medium text-gray-500 dark:text-gray-200 truncate">Total users</dt>
                    <dd class="mt-1 text-3xl font-semibold text-gray-900 dark:text-gray-100">{{ $userCount }}</dd>
                </div>

                <div class="px-4 py-5 bg-white dark:bg-gray-900 shadow rounded-lg overflow-hidden sm:p-6">
                    <dt class="text-sm font-medium text-gray-500 dark:text-gray-200 truncate">Total languages</dt>
                    <dd class="mt-1 text-3xl font-semibold text-gray-900 dark:text-gray-100">{{ $languageCount }}</dd>
                </div>

{{--                <div class="px-4 py-5 bg-white dark:bg-gray-900 shadow rounded-lg overflow-hidden sm:p-6">--}}
{{--                    <dt class="text-sm font-medium text-gray-500 dark:text-gray-200 truncate">Total skills</dt>--}}
{{--                    <dd class="mt-1 text-3xl font-semibold text-gray-900 dark:text-gray-100">{{ $skillCount }}</dd>--}}
{{--                </div>--}}

{{--                <div class="px-4 py-5 bg-white dark:bg-gray-900 shadow rounded-lg overflow-hidden sm:p-6">--}}
{{--                    <dt class="text-sm font-medium text-gray-500 dark:text-gray-200 truncate">Total users</dt>--}}
{{--                    <dd class="mt-1 text-3xl font-semibold text-gray-900 dark:text-gray-100">{{ $userCount }}</dd>--}}
{{--                </div>--}}
            </dl>
        </div>

    </div>
    <div class="col-span-12 mt-5">

    </div>

</div>
