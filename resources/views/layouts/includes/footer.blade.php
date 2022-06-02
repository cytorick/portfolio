<footer class="bg-gray-200 dark:bg-gray-900">
    <div class="max-w-7xl mx-auto py-12 px-4 overflow-hidden sm:px-6 lg:px-8">
        <nav class="-mx-5 -my-2 flex flex-wrap justify-center" aria-label="Footer">
            <div class="px-5 py-2">
                <a href="{{ route('about') }}" class="text-base text-black dark:text-gray-500 hover:text-gray-900 dark:hover:text-gray-600"> About me </a>
            </div>

            <div class="px-5 py-2">
                <a href="{{ route('projects') }}" class="text-base text-black dark:text-gray-500 hover:text-gray-900 dark:hover:text-gray-600"> Projects </a>
            </div>

            <div class="px-5 py-2">
                <a href="{{ route('experience') }}" class="text-base text-black dark:text-gray-500 hover:text-gray-900 dark:hover:text-gray-600"> Experience </a>
            </div>

            <div class="px-5 py-2">
                <a href="{{ route('contact') }}" class="text-base text-black dark:text-gray-500 hover:text-gray-900 dark:hover:text-gray-600"> Contact </a>
            </div>
        </nav>
        <div class="mt-8 flex justify-center space-x-6">
            @foreach(\App\Models\Link::all() as $link)
                <a href="{{ $link->link }}" class="text-gray-400 hover:text-gray-500" target="_blank">
                    <span class="sr-only">{{ $link->name }}</span>
                    <span class="text-lg">
                           {!! $link->icon !!}
                    </span>
                </a>
            @endforeach
        </div>
        <div class="mt-8 flex justify-center space-x-6">
            <a href="https://www.digitalocean.com/?refcode=33fae74bbc4c&utm_campaign=Referral_Invite&utm_medium=Referral_Program&utm_source=badge" target="_blank" ><img src="https://web-platforms.sfo2.digitaloceanspaces.com/WWW/Badge%203.svg" alt="DigitalOcean Referral Badge" /></a>
        </div>
        <p class="mt-8 text-center text-base text-gray-400">&copy; {{ now()->format('Y') }} Rick Visser | All rights reserved.</p>
    </div>
</footer>
