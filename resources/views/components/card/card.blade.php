@props([
    'dates' => false,
    'image' => false,
    'title' => false,
    'subTitle' => false,
    'address' => false,
    'dates' => false,
    'link' => false,
    'hover' => 'hover:text-red-400',
])


<div
    class="bg-gray-200 dark:bg-gray-900 pt-5 px-4 pb-6 sm:pt-6 sm:px-6 shadow rounded-lg overflow-hidden max-h-100 {{ $link ? 'hover:bg-green-600 hover:text-gray-100' : ''}}">
    @if($link)
        <a href="{{ $link }}">
            @endif
            <div class="grid grid-cols-5">
                <div class="col-span-2 justify-center my-auto mx-auto">
                    {{ $image }}
                </div>
                <div class="col-span-3">

                    <h1 class="text-lg font-semibold dark:text-gray-100">{{ $title }}</h1>

                    <p class="text-xs">{{ $subTitle }}</p>
                    <br>
                    <div class="grid grid-cols-10">

                        @if($address)
                            <div class="col-span-1 text-center mb-auto">
                                <span class="text-red-500"><i class="fa-solid fa-location-dot"></i></span>
                            </div>
                            <div class="col-span-9 ml-1 my-auto">
                                <p class="text-sm"> {{ $address }}</p>
                            </div>
                        @endif

                        <div class="col-span-1 text-center my-auto">
                            <span class="text-yellow-400" wire:loading.class.remove="text-yellow-400"><i
                                    class="fa-solid fa-calendar-days"></i></span>
                        </div>
                        <div class="col-span-9 ml-1 my-auto">
                            <p class="text-sm">
                                {!! $dates !!}
                            </p>
                        </div>
                        {{ $slot }}

                    </div>

                </div>
            </div>
            @if($link)
        </a>
    @endif
</div>

