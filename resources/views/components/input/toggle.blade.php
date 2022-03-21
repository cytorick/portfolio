@props([
    'featured' => null,
    'shipping_surcharge' => null,
    'auction_service' => null,
])

<div class="flex" x-data="{ toggle: '{{ $featured ?? $shipping_surcharge ?? $auction_service ?? 0 }}' }">

    <div class="relative rounded-full w-12 h-6 transition duration-200 ease-linear"
       :class="[toggle === '1' ? 'bg-green-400' : 'bg-gray-400']">

        <label {{ $attributes }} for="toggle" 
            class="absolute bg-white border-2 mb-2 w-6 h-6 rounded-full transition transform duration-100 ease-linear cursor-pointer"
            :class="[toggle === '1' ? 'translate-x-full border-green-400' : 'translate-x-0 border-gray-400']"
            @click="toggle === '0' ? toggle = '1' : toggle = '0'"></label>
        <input type="checkbox" id="toggle" name="toggle" 
            class="apperance-none invisible rounded-xl w-full h-full active:outline-none focus:outline-none"
            :class="[toggle === '1' ? 'bg-green-400' : 'bg-gray-400']"
            >
    </div>

</div>