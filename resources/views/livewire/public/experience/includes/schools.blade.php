<div class="bg-gray-50">
    <div class="mx-auto max-w-7xl py-12 px-4 sm:px-6 lg:px-8 lg:py-24">
        <div class="grid grid-cols-1 gap-12 lg:grid-cols-3 lg:gap-8">
            <div class="space-y-5 sm:space-y-4">
                <h2 class="text-3xl font-bold tracking-tight sm:text-4xl text-gray-900">Welke opleidingen ik heb
                    gevolgd</h2>
                <p class="text-xl text-gray-500">
                    In totaal heb 2 mbo-opleidingen waarvan 1 afgerond. Daarnaast heb ik ook mijn middelbare school afgerond.
                </p>
            </div>
            <div class="lg:col-span-2">
                <ul role="list" class="space-y-12 sm:grid sm:grid-cols-2 sm:gap-12 sm:space-y-0 lg:gap-x-8">
                    @foreach($schools as $school)
                        <li>
                            <div class="flex items-center space-x-4 lg:space-x-6">
                                <img class="w-20"
                                     src="https://images.cytorick.nl/{{ $school->media[0]->id }}/{{ $school->media[0]->file_name }}"
                                     alt="">
                                <div class="space-y-1 text-lg font-medium leading-6">
                                    <h3 class="text-gray-900">{{ $school->name }}</h3>
                                    <p class="text-green-600 text-sm">{{ $school->school }}</p>
                                    <p class="text-gray-500 text-sm">
                                        {{ date('M Y', strtotime($school->start_date)) }} -
                                        @if($school->is_active == 1)
                                            {{ __('Heden') }}
                                        @else
                                            {{ date('M Y', strtotime($school->end_date)) }}
                                        @endif
                                    </p>
                                    <p class="text-gray-500 text-sm">
                                        {{ $school->status }}
                                    </p>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
