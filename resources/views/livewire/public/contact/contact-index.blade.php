<x-header>
    Enthousiast geworden? Stuur <span class="text-green-600">mij een berichtje</span>...
</x-header>

<div class="overflow-hidden bg-gray-50 py-16 lg:py-24">
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
            <div class="lg:grid lg:grid-flow-row-dense lg:grid-cols-2 lg:items-center lg:gap-8">
                <div class="lg:col-start-2">
                    @livewire('public.contact.contact-form')
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
                    @livewire('public.tools.image-shower', ['page' => 'Home', 'number' => 4, 'class' => 'rounded-xl hidden sm:block transform -scale-x-100'])
                </div>
            </div>
        </div>
    </div>
</div>
</div>
