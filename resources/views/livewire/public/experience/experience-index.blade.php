<x-header>
    Mijn <span class="text-green-600">ervaring</span> door de jaren heen...
</x-header>

<div class="bg-gray-50 pt-12 sm:pt-16">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-4xl text-center">
            <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Een opsomming van mijn
                ervaringen</h2>
            <p class="mt-3 text-xl text-gray-500 sm:mt-4">Door de jaren heen heb ik gelukkig heel veel ervaring
                mogen opdoen op verschillende plekken.</p>
        </div>
    </div>
    <div class="mt-10 bg-gray-50 pb-12 sm:pb-16">
        <div class="relative">
            <div class="absolute inset-0 h-1/2 bg-gray-50"></div>
            <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="mx-auto max-w-4xl">
                    <dl class="rounded-lg bg-white shadow-lg sm:grid sm:grid-cols-3">
                        <div class="flex flex-col border-b border-gray-100 p-6 text-center sm:border-0 sm:border-r">
                            <dt class="order-2 mt-2 text-lg font-medium leading-6 text-gray-500">Werkgevers</dt>
                            <dd class="order-1 text-5xl font-bold tracking-tight text-green-600">{{ $jobs->count()  }}</dd>
                        </div>
                        <div
                            class="flex flex-col border-t border-b border-gray-100 p-6 text-center sm:border-0 sm:border-l sm:border-r">
                            <dt class="order-2 mt-2 text-lg font-medium leading-6 text-gray-500">Opleidingen</dt>
                            <dd class="order-1 text-5xl font-bold tracking-tight text-green-600">{{ $schools->count() }}</dd>
                        </div>
                        <div class="flex flex-col border-t border-gray-100 p-6 text-center sm:border-0 sm:border-l">
                            <dt class="order-2 mt-2 text-lg font-medium leading-6 text-gray-500">Stages</dt>
                            <dd class="order-1 text-5xl font-bold tracking-tight text-green-600">{{ $internships->count() }}</dd>
                        </div>
                    </dl>
                </div>
            </div>
        </div>
    </div>
</div>

@include('livewire.public.experience.includes.jobs')
@include('livewire.public.experience.includes.internships')
@include('livewire.public.experience.includes.schools')
@include('livewire.public.experience.includes.certificates')
