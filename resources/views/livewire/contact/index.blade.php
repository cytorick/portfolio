<div>
    <div class="relative max-w-xl mx-auto">

        <div class="mt-12">
            <form action="#" method="POST" class="grid grid-cols-1 gap-y-6 sm:grid-cols-2 sm:gap-x-8">
                <div>
                    <label for="first-name" class="block text-sm font-medium text-gray-700">First name</label>
                    <div class="mt-1">
                        <input type="text" name="first-name" id="first-name" autocomplete="given-name" class="py-3 px-4 block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md">
                    </div>
                </div>
                <div>
                    <label for="last-name" class="block text-sm font-medium text-gray-700">Last name</label>
                    <div class="mt-1">
                        <input type="text" name="last-name" id="last-name" autocomplete="family-name" class="py-3 px-4 block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md">
                    </div>
                </div>
                <div class="sm:col-span-2">
                    <label for="company" class="block text-sm font-medium text-gray-700">Company</label>
                    <div class="mt-1">
                        <input type="text" name="company" id="company" autocomplete="organization" class="py-3 px-4 block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md">
                    </div>
                </div>
                <div class="sm:col-span-2">
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <div class="mt-1">
                        <input id="email" name="email" type="email" autocomplete="email" class="py-3 px-4 block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md">
                    </div>
                </div>
                <div class="sm:col-span-2">
                    <label for="phone-number" class="block text-sm font-medium text-gray-700">Phone Number</label>
                    <div class="mt-1 relative rounded-md shadow-sm">
                        <div class="absolute inset-y-0 left-0 flex items-center">
                            <label for="country" class="sr-only">Country</label>
                            <select id="country" name="country" class="h-full py-0 pl-4 pr-8 border-transparent bg-transparent text-gray-500 focus:ring-indigo-500 focus:border-indigo-500 rounded-md">
                                <option>US</option>
                                <option>CA</option>
                                <option>EU</option>
                            </select>
                        </div>
                        <input type="text" name="phone-number" id="phone-number" autocomplete="tel" class="py-3 px-4 block w-full pl-20 focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md" placeholder="+1 (555) 987-6543">
                    </div>
                </div>
                <div class="sm:col-span-2">
                    <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
                    <div class="mt-1">
                        <textarea id="message" name="message" rows="4" class="py-3 px-4 block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 border border-gray-300 rounded-md"></textarea>
                    </div>
                </div>
                <div class="sm:col-span-2">
                    <div class="flex items-start">
                        <div class="flex-shrink-0">
                            <button type="button" class="relative inline-flex flex-shrink-0 h-6 w-11 border-2 border-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 bg-gray-200" x-data="{ on: false }" role="switch" aria-checked="false" :aria-checked="on.toString()" @click="on = !on" x-state:on="Enabled" x-state:off="Not Enabled" :class="{ 'bg-indigo-600': on, 'bg-gray-200': !(on) }">
                                <span class="sr-only">Agree to policies</span>
                                <span aria-hidden="true" class="inline-block h-5 w-5 rounded-full bg-white shadow transform ring-0 transition ease-in-out duration-200 translate-x-0" x-state:on="Enabled" x-state:off="Not Enabled" :class="{ 'translate-x-5': on, 'translate-x-0': !(on) }"></span>
                            </button>
                        </div>
                        <div class="ml-3">
                            <p class="text-base text-gray-500">
                                By selecting this, you agree to the
                                <!-- space -->
                                <a href="#" class="font-medium text-gray-700 underline">Privacy Policy</a>
                                <!-- space -->
                                and
                                <!-- space -->
                                <a href="#" class="font-medium text-gray-700 underline">Cookie Policy</a>.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="sm:col-span-2">
                    <button type="submit" class="w-full inline-flex items-center justify-center px-6 py-3 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Let's talk
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
