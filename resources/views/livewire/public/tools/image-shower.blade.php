<span>
    @if($text)
        <img src=" {{ asset('img/' . $text->media[0]->id .'/'. $text->media[0]->file_name) }}" alt="" class="{{ $class }}">
    @else

    @endif
</span>
