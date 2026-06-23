<div class="flex">
        <div class="flex-1 h-1.5 bg-green-400"></div>
        <div class="flex-1 h-1.5 bg-red-500"></div>
        <div class="flex-1 h-1.5 bg-yellow-400"></div>
        <div class="flex-1 h-1.5 bg-indigo-500"></div>
        <div class="flex-1 h-1.5 bg-pink-500"></div>
    </div>

    <nav x-data="{ mobile: false }"
        class="relative z-40 px-10 pt-6 mx-auto md:pb-6 max-w-7xl md:flex md:justify-between md:items-center text-gray-900">
        <div class="relative z-20 flex items-center justify-between">
            <div>
                <a href="#_" class="text-lg font-semibold text-gray-900 md:text-xl">
                 <img src="assets/images/Logo_tremplin.png" width="100" alt="" srcset="">
                </a>
            </div>

            <!-- Mobile menu button -->
            <div @click="mobile = !mobile" class="flex md:hidden">
                <button type="button" class="text-gray-900 hover:text-gray-100 focus:outline-none focus:text-gray-100"
                    aria-label="toggle menu">
                    <svg viewBox="0 0 24 24" class="w-6 h-6 fill-current">
                        <path fill-rule="evenodd"
                            d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z">
                        </path>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
        <div :class="{ 'hidden' : !mobile, 'flex': mobile }"
            class="left-0 z-10 items-center justify-center w-full font-semibold select-none md:flex lg:absolute hidden" style="font-size:20px">
            <div
                class="flex flex-col justify-center w-full mt-4 space-y-2 md:mt-0 md:flex-row md:space-x-6 lg:space-x-10 xl:space-x-16 md:space-y-0 font-semibold:1200">
                <a href="/" class="py-3 text-gray-900 hover:text-gray-700 hover:underline">Acceuil</a>
                <a href="/#presentation" class="py-3 text-gray-900 hover:text-gray-700 hover:underline">Présentation</a>
                <a href="recherche" class="py-3 text-gray-900 hover:text-gray-700 hover:underline">Espace client</a>
                <a href="profile" class="py-3 text-gray-900 hover:text-gray-700 hover:underline">Espace nounou</a>

            <!--
                {{-- <a href="#process" class="py-3 text-gray-900 hover:text-gray-700 hover:underline">Annonces</a> --}}
                <div x-data="{ isOpen: false }" @mouseenter="isOpen = true" @mouseleave="isOpen = false"
                    class="relative py-3">
                    <div
                        class="relative z-10 flex items-center space-x-1 text-gray-900 cursor-pointer lg:space-x-3 hover:text-gray-700 focus:outline-none">
                        <span>Inscription</span>

                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <div x-show="isOpen" x-transition:enter="transition ease-out duration-200"
                        x-transition:enter-start="opacity-0 translate-y-1"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        x-transition:leave="transition ease-in duration-150"
                        x-transition:leave-start="opacity-100 translate-y-0"
                        x-transition:leave-end="opacity-0 translate-y-1"
                        class="absolute left-0 z-30 w-full p-3 mt-3 -ml-0 space-y-2 overflow-hidden transform shadow-lg bg-gradient-to-br from-gray-800 to-gray-900 lg:left-1/2 lg:-ml-24 md:w-48 rounded-xl ring-1 ring-black ring-opacity-5"
                        style="display: none;">
                        <a href="profile"
                            class="block px-4 py-3 text-sm text-gray-200 capitalize cursor-pointer hover:bg-gray-900 rounded-xl hover:text-gray-200">
                            S'inscrire
                        </a>
                        <a href="recherche"
                            class="block px-4 py-3 text-sm text-gray-200 capitalize hover:bg-gray-900 rounded-xl hover:text-gray-200">
                            Rechercher une nounou
                        </a>
                    </div>
                </div> -->
                <a href="contact"class="py-3 text-gray-900 hover:text-gray-700 hover:underline">Contacts</a>
            </div>
        </div>
        <div :class="{ 'flex' : mobile, 'hidden md:flex' : !mobile }"
            class="relative z-20 flex-col justify-center pr-5 mt-4 space-y-8 md:pr-3 lg:pr-0 md:flex-row md:space-y-0 md:items-center md:space-x-6 md:mt-0 hidden md:flex">
            <a href="{{ route('profile.create') }}" class="btn btn-primary">
                M'enregister
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ml-2" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                    <polyline points="12 5 19 12 12 19"></polyline>
                </svg>
            </a>
        </div>
    </nav>
