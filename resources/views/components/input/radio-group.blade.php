@props([
    'label',
    'for',
    'error' => false,
    'helpText' => false,
    'stacked' => false,
    'paddingless' => false,
    'borderless' => false,
])

@if( $stacked )

    <div class="mt-4">
        <p class="block text-sm font-medium leading-5 text-gray-700">{{ $label }}</p>

        <div class="flex items-center mt-1">
            {{ $slot }}

            @if ($error)
                <div class="mt-1 text-red-500 text-sm">{{ $error }}</div>
            @endif

            @if ($helpText)
                <p class="mt-2 text-sm text-gray-500">{{ $helpText }}</p>
            @endif
        </div>
    </div>

@else

    <div class="mt-4">

        <div>
            <p class="block text-sm font-medium leading-5 text-gray-700">{{ $label }}</p>
            @if( $helpText )
                <p class="text-sm text-gray-500">These are delivered via SMS to your mobile phone.</p>
            @endif
        </div>

        <div class="mt-4 space-y-4">
            {{ $slot }}
        </div>

    </div>

@endif
