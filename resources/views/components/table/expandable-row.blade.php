<tr {{ $attributes->merge([ 'class' => 'bg-white border-top' ]) }}>
    {{ $mainData }}
</tr>

<tr x-show="open" class="bg-white border-none">
    {{ $secondairyData }}
</tr>