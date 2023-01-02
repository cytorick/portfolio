<footer class="bg-gray-50">
    <div class="mx-auto max-w-7xl py-12 px-4 sm:px-6 md:flex md:items-center md:justify-between lg:px-8">
        <div class="flex justify-center space-x-6 md:order-2">
            @foreach($links as $link)
                <a href="{{ $link->link }}" target="_blank" class="text-gray-400 hover:text-green-600">
                    <span class="sr-only">{{ $link->name }}</span>
                    {!! $link->icon !!}
                </a>
            @endforeach
        </div>
        <div class="mt-8 md:order-1 md:mt-0">
            <p class="text-center text-base text-gray-400">&copy; {{ date('Y') }} <span class="font-semibold">Rick Visser</span> | All rights reserved.</p>
        </div>
    </div>
</footer>
