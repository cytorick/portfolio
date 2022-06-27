<form wire:submit.prevent="save" class="space-y-6 mb-5">
    <div class="bg-white dark:bg-gray-800 shadow overflow-hidden sm:rounded-lg">
        {{-- HEADER --}}
        <div class="px-4 py-5 sm:px-6">
            <div class="flex justify-between items-center">
                <div>
                    <h3 class="text-lg leading-6 font-medium text-gray-900 dark:text-gray-100">{{ __('Skills used') }}</h3>
                </div>
                <div></div>
            </div>
        </div>
        {{-- CONTENT PANEL --}}
        <div class="border-t border-green-600 px-4 py-5 sm:px-6 space-y-4">
            <div class="grid grid-cols-9 gap-5">
                <div class="col-span-5">
                    <x-input.group stacked for="skill_id" label="Skill 1"
                                   :error="$errors->first('skill_id.0')">
                        <x-input.select id="skill_id" wire:model="skill_id.0"
                                        placeholder="Select a skill..">
                            @foreach($skills as $skill)
                                <option value="{{ $skill->id }}">{{ $skill->name }}</option>
                            @endforeach
                        </x-input.select>
                    </x-input.group>
                </div>
            </div>
            <div class="grid grid-cols-9 gap-5">
                <div class="col-span-5">
                    @foreach($inputs as $key => $value)
                        <x-input.group stacked for="skill_id.{{ $value }}" label="Skill {{ $value }}"
                                       :error="$errors->first('skill_id.{{ $value }}')">
                            <x-input.select id="skill_id.{{ $value }}" wire:model="skill_id.{{ $value }}"
                                            placeholder="Select a skill..">
                                @foreach($skills as $skill)
                                    <option value="{{ $skill->id }}">{{ $skill->name }}</option>
                                @endforeach
                            </x-input.select>
                        </x-input.group>
                    @endforeach
                </div>
            </div>
            <div class="grid grid-cols-10 gap-5">
                <div class="col-span-5">
                        <x-a.link wire:click.prevent="add({{$i}})">
                            <x-icon.plus/>
                            add another skill
                        </x-a.link>
                </div>
                <div class="col-span-5">
                    <div class="">
                        <div class="text-right">
                            <x-button.submit>
                                {{__('Save skills')}}
                            </x-button.submit>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</form>
