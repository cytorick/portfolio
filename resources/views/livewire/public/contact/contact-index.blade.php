<div>
    <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8">
        <div class="lg:grid lg:grid-cols-2 lg:gap-8 lg:items-center">
            <div>
                <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl dark:text-gray-100"><span class="text-green-600">Interested?</span> Contact <span class="text-green-600">me!</span></h2>

            </div>
            <div class="mt-8 grid grid-cols-2 gap-0.5 md:grid-cols-3 lg:mt-0 lg:grid-cols-2">
                @foreach($links as $link)
                    <div class="col-span-1 flex justify-center py-8 px-8 hover:text-green-600">
                        <a href="{{ $link->link }}" target="_blank">
                            <p>{!! $link->icon !!} {{ $link->name }}</p>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

<div class="bg-gray-100 dark:bg-gray-800">
    <div class="grid grid-cols-12">
        <div class="col-span-4">
            <div class="relative mx-auto max-w-md px-4 sm:max-w-3xl sm:px-6 lg:px-0 my-auto">

                <img src="{{ asset('img/rick-pointing-2.png') }}" alt="" class="rounded-xl hidden sm:block  mt-10 mx-auto">

            </div>
        </div>
        <div class="col-span-12 sm:col-span-8">
            <div class="max-w-3xl px-4 pb-8 sm:px-6 lg:px-8">

                @livewire('public.contact.contact-form')

            </div>
        </div>
    </div>

</div>
