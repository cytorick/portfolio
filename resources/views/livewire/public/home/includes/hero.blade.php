<div class="bg-gray-100 dark:bg-gray-800 overflow-hidden">
    <div class="pb-16 sm:pb-24 lg:pb-32">
        <main class="mt-16 mx-auto max-w-7xl px-4 sm:mt-24 sm:px-6 lg:mt-32">
            <div class="lg:grid lg:grid-cols-12 lg:gap-8">
                <div class="sm:text-center md:max-w-2xl md:mx-auto lg:col-span-5 lg:text-left">
                    <h1>
                        <br>
                        <span class="mt-1 block text-4xl tracking-tight font-extrabold sm:text-5xl xl:text-6xl">
           <span class="block text-gray-900 dark:text-gray-100">Hi, my name is <span
                       class="text-error">Rick Visser</span></span>
            </span>
                    </h1>
                    <p class="mt-3 text-base text-gray-500 dark:text-gray-200 sm:mt-5 sm:text-xl lg:text-lg xl:text-xl">
                        I am a {{ $age }} year-old <span
                                class="text-error">Full-Stack development</span> student from The Netherlands.</p>
                    <p class="mt-3 text-base text-gray-500 dark:text-gray-200 sm:mt-5 sm:text-xl lg:text-lg xl:text-xl">
                        This <span class="text-error">website</span> is my personal portfolio, here you can find my
                        experience, the schools I went to, my certificates, my skills, my past projects and the
                        languages I speak.</p>
                    <p class="mt-3 text-base text-gray-500 dark:text-gray-200 sm:mt-5 sm:text-xl lg:text-lg xl:text-xl">
                        Are you curious what I look like?</p>
                    <div class="mt-4 sm:flex">
                        <div class="rounded-md shadow">
                            <a href="{{ route('about') }}"
                               class="flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-error hover:bg-red-500">
                                Click here </a>
                        </div>
                    </div>
                </div>
                <div class="mt-12 sm:mx-auto lg:mt-0 lg:mx-0 lg:col-span-7 flex items-center">
                    <div class="mx-auto w-full">
                        <div class="mockup-code bg-gray-200 dark:bg-gray-900">
                            <pre data-prefix="$"
                                 class="dark:text-white text-black"><code><a href="{{ route('login') }}" class="cursor-text">laravel</a> new Portfolio</code></pre>
                            <pre data-prefix=">" class="dark:text-yellow-400 text-blue-500"><code>installing jetstream...</code></pre>
                            <pre data-prefix=">"
                                 class="dark:text-yellow-400 text-blue-500"><code>installing livewire...</code></pre>
                            <pre data-prefix=">" class="dark:text-yellow-400 text-blue-500"><code>installing tailwindcss...</code></pre>
                            <pre data-prefix=">"
                                 class="dark:text-green-500 text-green-700"><code>Application ready! Build something amazing.</code></pre>
                            <pre data-prefix="$"
                                 class="dark:text-white text-black"><code>php artisan key:generate</code></pre>
                            <pre data-prefix=">"
                                 class="dark:text-green-500 text-green-700"><code>Application key set successfully.</code></pre>
                            <pre data-prefix="$" class="dark:text-white text-black"><code>npm run dev</code></pre>
                            <pre data-prefix=">" class="dark:text-green-500 text-green-700"><code>Webpack compiled successfully.</code></pre>
                            <pre data-prefix="$" class="dark:text-white text-black"><code>php artisan serve</code></pre>
                            <pre data-prefix=">" class="dark:text-green-500 text-green-700"><code>Starting Laravel development server: [https://cytorick.nl]</code></pre>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
