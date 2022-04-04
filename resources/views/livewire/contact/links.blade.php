<div>
    <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8">
        <div class="lg:grid lg:grid-cols-2 lg:gap-8 lg:items-center">
            <div>
                <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl dark:text-gray-100"><span class="text-red-400">Interested?</span> Contact <span class="text-red-400">me!</span></h2>

            </div>
            <div class="mt-8 grid grid-cols-2 gap-0.5 md:grid-cols-3 lg:mt-0 lg:grid-cols-2">
                @foreach($links as $link)
                    <div class="col-span-1 flex justify-center py-8 px-8 hover:text-red-400">
                        <a href="@if($link->name == 'Email') mailto: @endif @if($link->name == 'Call me') tel: @endif {{ $link->link }}">
                            <p>{!! $link->icon !!} {{ $link->name }}</p>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
