<div class="bg-gray-100 dark:bg-gray-800">
    <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8">
        <div class="lg:grid lg:grid-cols-2 lg:gap-8 lg:items-center">
            <div>
                <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl dark:text-gray-100">The <span class="text-error">skills</span> I have learned over the years</h2>
                <p class="mt-3 max-w-3xl text-lg text-gray-500 dark:text-gray-200">Over the years I have collected a few <span class="text-error">skills</span>. I have learned these <span class="text-error">skills</span> at school, at a <span class="text-error">job</span> or at an <span class="text-error">internship</span>. These <span class="text-error">skills</span> range from a basic state to a more advanced state.</p>
                <p class="mt-3 max-w-3xl text-lg text-gray-500 dark:text-gray-200">I would say that in programming <span class="text-red-500"><i class="fa-brands fa-laravel"></i> Laravel</span> is the <span class="text-error">skill</span> I am most proud of. I luckily got the chance the past years to get better at <span class="text-red-500"><i class="fa-brands fa-laravel"></i> Laravel</span> and learn a lot of things I didn't expect to learn.</p>
                <p class="mt-3 max-w-3xl text-lg text-gray-500 dark:text-gray-200">See here what I have made with these skills.</p>
                <div class="mt-8 sm:flex">
                    <div class="rounded-md shadow">
                        <a href="{{ route('projects') }}"
                           class="flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-error hover:bg-red-500">
                            All projects </a>
                    </div>
                </div>
            </div>
            <div class="mt-8 grid grid-cols-2 gap-0.5 md:grid-cols-3 lg:mt-0 lg:grid-cols-2">
                @foreach($skills as $skill)
                    <div class="col-span-1 flex justify-center py-8 px-8 dark:bg-transparent rounded-xl">
                        <p class="text-2xl dark:text-gray-200">
                            <span style="color: {{ $skill->color }} @if($skill->name == 'Mac') black @endif">{!! $skill->icon !!}</span> {{ $skill->name }}
                        </p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>