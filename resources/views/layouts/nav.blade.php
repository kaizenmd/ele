<nav class="mb-2">
    <div x-data="{ isOpen: false}" class="px-4 pt-3 md:flex md:justify-between md:items-center">
        <div class="flex items-center justify-between">
            <div id="branding" class="flex-shrink-0 flex items-center">
                <a href="/" class="flex items-center">
                    <x-application-logo class="block h-10 w-auto fill-current" />
                    <div class="text-gray-900 dark:text-white text-5xl font-bold italic dark:hover:text-white">
                        ELE<span class="text-yellow-500">.</span>
                    </div>
                </a>
            </div>
            {{-- Mobile Button --}}
            <div class="flex md:hidden">
                <x-hamburger />
            </div>
        </div>
        {{-- Menu, if mobile set to hidden --}}
        <div :class="isOpen ? 'show' : 'hidden'" class="items-center md:block">
            <div class=" flex flex-col md:flex-row md:ml-6">
                <a class="my-1 ml-5 text-sm text-gray-900 font-bold hover:text-gray-800 md:mx-4 md:my-0"
                    href="/">Acasa</a>
                <a class="my-1 ml-5 text-sm text-gray-900 font-bold hover:text-gray-800 md:mx-4 md:my-0"
                    href="/index">Toate
                    articolele</a>
            </div>
        </div>
    </div>
</nav>