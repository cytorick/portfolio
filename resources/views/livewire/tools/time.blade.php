<div class="text-center mx-auto" wire:poll.1000ms>
    <h1 class="text-md capitalize font-semibold">
   @php
       setlocale(LC_TIME, 'NL_nl');
       echo strftime('%A %e %B %Y',time());
   @endphp
        <br>
   @php
       setlocale(LC_TIME, 'NL_nl');
       echo strftime('%H:%M:%S',time());
   @endphp
    </h1>
</div>
