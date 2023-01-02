<form wire:submit.prevent="sendmail" class="space-y-6" enctype="multipart/form-data">
    @csrf
    {{-- BASIC DETAILS --}}
    <div>
        {{-- CONTENT PANEL --}}
        <div class="px-4 py-5 sm:px-6 space-y-4">

            <div class="grid grid-cols-10 gap-5">
                <div class="col-span-5">
                    <x-input.group stacked for="name" label="{{ __('Naam*') }}"
                                   :error="$errors->first('name')">
                        <x-input.text id="name" wire:model.lazy="name"
                                      :error="$errors->first('name')"/>
                    </x-input.group>
                </div>

                <div class="col-span-5">
                    <x-input.group stacked for="email" label="{{ __('Email*') }}"
                                   :error="$errors->first('email')">
                        <x-input.text id="email" wire:model.lazy="email"
                                      :error="$errors->first('email')"/>
                    </x-input.group>
                </div>
            </div>

            <div class="grid grid-cols-10 gap-5">
                <div class="col-span-5">
                    <x-input.group stacked for="phone" label="{{ __('Telefoon') }}"
                                   :error="$errors->first('phone')">
                        <x-input.text id="phone" wire:model.lazy="phone"
                                      :error="$errors->first('phone')"/>
                    </x-input.group>
                </div>
                <div class="col-span-5">
                    <x-input.group stacked for="company" label="{{ __('Bedrijf') }}"
                                   :error="$errors->first('company')">
                        <x-input.text id="company" wire:model.lazy="company"
                                      :error="$errors->first('company')"/>
                    </x-input.group>
                </div>
            </div>

            <div class="grid grid-cols-10 gap-5">
                <div class="col-span-10">
                    <x-input.group stacked for="subject" label="{{ __('Onderwerp/Vraag*') }}"
                                   :error="$errors->first('subject')">
                        <x-input.text id="subject" wire:model.lazy="subject"
                                      :error="$errors->first('subject')"/>
                    </x-input.group>
                </div>
            </div>

            <div class="grid grid-cols-10 gap-5">
                <div class="col-span-10">
                    <x-input.group stacked for="message" label="{{ __('Bericht*') }}"
                                   :error="$errors->first('message')">
                        <x-input.textarea rows="10" id="message" wire:model.lazy="message"
                                          :error="$errors->first('message')"/>
                    </x-input.group>
                </div>
            </div>

        </div>
    </div>


    {{-- FORM TOOLS --}}
    <div class="mt-6">
        <div class="text-right">
            <x-button.submit>
                {{__('Verstuur')}}
            </x-button.submit>
        </div>
    </div>

</form>
