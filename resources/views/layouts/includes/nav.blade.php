<nav class=" border-gray-200 px-4 sm:px-4 py-2.5 rounded bg-transparent py-4">
    <div class="container flex flex-wrap justify-between items-center mx-auto">
        <a href="{{ route('home') }}" class="flex items-center">
            <i class="fa-solid fa-r h-8 block text-error text-2xl"></i>
            <i class="fa-solid fa-v h-8 block text-error text-2xl"></i>
        </a>
        <div class="flex items-center md:order-2">
          @foreach(\App\Models\Link::all() as $link)
                <a href="@if($link->name == 'Email') mailto: @endif @if($link->name == 'Tel') tel: @endif {{ $link->link }}" class="mx-2" target="_blank">{!! $link->icon !!}</a>
          @endforeach
        </div>
    </div>
</nav>
