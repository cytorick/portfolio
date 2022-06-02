@props([
    'status' => false
])

<div class="col-span-1 text-center my-auto">
<span class="text-green-500"><i class="fa-solid fa-file-contract"></i></span>
</div>
<div class="col-span-9 ml-1 my-auto">
    <p class="text-sm"> {{ $status }}</p>
</div>
