<x-guest-layout>
    <x:notify-messages />
    <x-navbar />
    <!-- Section 1 -->
    <section class="relative py-0 bg-white lg:py-20">

        <div class="flex flex-col items-center justify-between md:px-10 mx-auto max-w-7xl xl:px-5 lg:flex-row">

            <div class="flex flex-col items-center w-full px-2 md:px-10 pt-5 pb-20 lg:pt-20 lg:flex-row">
                <div class="relative w-full max-w-md bg-cover lg:max-w-2xl lg:w-7/12">
                    <div class="relative flex flex-col items-center justify-center w-full h-full lg:pr-10 mt-8 md:mt-2">
                        <h1 class="text-5xl font-bold text-pink-500 lg:text-6xl xl:text-7xl mb-4">
                            Offrez-vous un avenir meilleur.
                        </h1>
                        <p class="text-base text-gray-800 lg:text-xl">
                            Rejoignez maintenant la cohorte de formation pour  nounous et reprenez votre vie en main. Avec des formateurs de qualité, vous repartirez mieux outillées pour offrir des services de qualité.
                        </p>
                    </div>
                </div>

                <div class="relative z-10 w-full max-w-2xl mt-20 lg:mt-0 lg:w-5/12">
                    <form action="{{ route('profile.store') }}" method="post"
                        class="relative z-10 flex flex-col items-start justify-start p-10 bg-white shadow-2xl rounded-xl" enctype="multipart/form-data">
                        @csrf
                        <h4 class="w-full font-serif text-4xl font-medium leading-snug">Créer mon profil</h4>
                        <div class="relative w-full mt-6 space-y-8">
                            <div class="relative">
                                <label
                                    class="absolute px-2 ml-2 -mt-3 font-medium text-gray-600 bg-white">Prénoms</label>
                                <input name="prenom" required type="text"
                                    class="block w-full px-4 py-4 mt-2 text-base placeholder-gray-400 bg-white border border-gray-300 rounded-md focus:outline-none focus:border-black">
                            </div>
                            <div class="relative">
                                <label class="absolute px-2 ml-2 -mt-3 font-medium text-gray-600 bg-white">Nom</label>
                                <input name= "nom" required type="text"
                                    class="block w-full px-4 py-4 mt-2 text-base placeholder-gray-400 bg-white border border-gray-300 rounded-md focus:outline-none focus:border-black">
                            </div>
                            <div class="relative">
                                <label class="absolute px-2 ml-2 -mt-3 font-medium text-gray-600 bg-white">Numéro de
                                    téléphone</label>
                                <input name="telephone" required type="number"
                                    class="block w-full px-4 py-4 mt-2 text-base placeholder-gray-400 bg-white border border-gray-300 rounded-md focus:outline-none focus:border-black"
                                    >
                            </div>
                            <div class="relative">
                                <label class="absolute px-2 ml-2 -mt-3 font-medium text-gray-600 bg-white">Lieu de résidence</label>
                                <input name="lieu_residence" required type="text"
                                    class="block w-full px-4 py-4 mt-2 text-base placeholder-gray-400 bg-white border border-gray-300 rounded-md focus:outline-none focus:border-black"
                                    >
                            </div>
                            <div class="relative">
                                <label class="absolute px-2 ml-2 -mt-3 font-medium text-gray-600 bg-white">Charger votre pièce</label>
                                <input name= "piece_identite" required type="file"
                                    class="block w-full px-4 py-4 mt-2 text-base placeholder-gray-400 bg-white border border-gray-300 rounded-md focus:outline-none focus:border-black"
                                    >
                            </div>
                            <div class="relative">
                                Le programme Tremplin Nounou offre la possibilité de suivre des formations avant votre insertion. Voulez-vous y participer?
                                <select required onChange="change(this.value);" name= "status" class="block w-full px-4 py-4 mt-2 text-base placeholder-gray-400 bg-white border border-gray-300 rounded-md focus:outline-none focus:border-black" name="" id="">
                                    <option value="">Sélectionnez une réponse</option>
                                    <option value="oui">Oui</option>
                                    <option value="non">Non</option>
                                </select>
                            </div>
                            <div class="relative">
                                <button type="submit" class="btn btn-primary btn-block">Créer mon profil</button>
                            </div>
                        </div>

                    </form>
                    <svg class="absolute top-0 left-0 z-0 w-32 h-32 -mt-12 -ml-12 text-gray-200 fill-current"
                        viewBox="0 0 91 91" xmlns="http://www.w3.org/2000/svg">
                        <g stroke="none" stroke-width="1" fill-rule="evenodd">
                            <g fill-rule="nonzero">
                                <g>
                                    <g>
                                        <circle cx="3.261" cy="3.445" r="2.72"></circle>
                                        <circle cx="15.296" cy="3.445" r="2.719"></circle>
                                        <circle cx="27.333" cy="3.445" r="2.72"></circle>
                                        <circle cx="39.369" cy="3.445" r="2.72"></circle>
                                        <circle cx="51.405" cy="3.445" r="2.72"></circle>
                                        <circle cx="63.441" cy="3.445" r="2.72"></circle>
                                        <circle cx="75.479" cy="3.445" r="2.72"></circle>
                                        <circle cx="87.514" cy="3.445" r="2.719"></circle>
                                    </g>
                                    <g transform="translate(0 12)">
                                        <circle cx="3.261" cy="3.525" r="2.72"></circle>
                                        <circle cx="15.296" cy="3.525" r="2.719"></circle>
                                        <circle cx="27.333" cy="3.525" r="2.72"></circle>
                                        <circle cx="39.369" cy="3.525" r="2.72"></circle>
                                        <circle cx="51.405" cy="3.525" r="2.72"></circle>
                                        <circle cx="63.441" cy="3.525" r="2.72"></circle>
                                        <circle cx="75.479" cy="3.525" r="2.72"></circle>
                                        <circle cx="87.514" cy="3.525" r="2.719"></circle>
                                    </g>
                                    <g transform="translate(0 24)">
                                        <circle cx="3.261" cy="3.605" r="2.72"></circle>
                                        <circle cx="15.296" cy="3.605" r="2.719"></circle>
                                        <circle cx="27.333" cy="3.605" r="2.72"></circle>
                                        <circle cx="39.369" cy="3.605" r="2.72"></circle>
                                        <circle cx="51.405" cy="3.605" r="2.72"></circle>
                                        <circle cx="63.441" cy="3.605" r="2.72"></circle>
                                        <circle cx="75.479" cy="3.605" r="2.72"></circle>
                                        <circle cx="87.514" cy="3.605" r="2.719"></circle>
                                    </g>
                                    <g transform="translate(0 36)">
                                        <circle cx="3.261" cy="3.686" r="2.72"></circle>
                                        <circle cx="15.296" cy="3.686" r="2.719"></circle>
                                        <circle cx="27.333" cy="3.686" r="2.72"></circle>
                                        <circle cx="39.369" cy="3.686" r="2.72"></circle>
                                        <circle cx="51.405" cy="3.686" r="2.72"></circle>
                                        <circle cx="63.441" cy="3.686" r="2.72"></circle>
                                        <circle cx="75.479" cy="3.686" r="2.72"></circle>
                                        <circle cx="87.514" cy="3.686" r="2.719"></circle>
                                    </g>
                                    <g transform="translate(0 49)">
                                        <circle cx="3.261" cy="2.767" r="2.72"></circle>
                                        <circle cx="15.296" cy="2.767" r="2.719"></circle>
                                        <circle cx="27.333" cy="2.767" r="2.72"></circle>
                                        <circle cx="39.369" cy="2.767" r="2.72"></circle>
                                        <circle cx="51.405" cy="2.767" r="2.72"></circle>
                                        <circle cx="63.441" cy="2.767" r="2.72"></circle>
                                        <circle cx="75.479" cy="2.767" r="2.72"></circle>
                                        <circle cx="87.514" cy="2.767" r="2.719"></circle>
                                    </g>
                                    <g transform="translate(0 61)">
                                        <circle cx="3.261" cy="2.846" r="2.72"></circle>
                                        <circle cx="15.296" cy="2.846" r="2.719"></circle>
                                        <circle cx="27.333" cy="2.846" r="2.72"></circle>
                                        <circle cx="39.369" cy="2.846" r="2.72"></circle>
                                        <circle cx="51.405" cy="2.846" r="2.72"></circle>
                                        <circle cx="63.441" cy="2.846" r="2.72"></circle>
                                        <circle cx="75.479" cy="2.846" r="2.72"></circle>
                                        <circle cx="87.514" cy="2.846" r="2.719"></circle>
                                    </g>
                                    <g transform="translate(0 73)">
                                        <circle cx="3.261" cy="2.926" r="2.72"></circle>
                                        <circle cx="15.296" cy="2.926" r="2.719"></circle>
                                        <circle cx="27.333" cy="2.926" r="2.72"></circle>
                                        <circle cx="39.369" cy="2.926" r="2.72"></circle>
                                        <circle cx="51.405" cy="2.926" r="2.72"></circle>
                                        <circle cx="63.441" cy="2.926" r="2.72"></circle>
                                        <circle cx="75.479" cy="2.926" r="2.72"></circle>
                                        <circle cx="87.514" cy="2.926" r="2.719"></circle>
                                    </g>
                                    <g transform="translate(0 85)">
                                        <circle cx="3.261" cy="3.006" r="2.72"></circle>
                                        <circle cx="15.296" cy="3.006" r="2.719"></circle>
                                        <circle cx="27.333" cy="3.006" r="2.72"></circle>
                                        <circle cx="39.369" cy="3.006" r="2.72"></circle>
                                        <circle cx="51.405" cy="3.006" r="2.72"></circle>
                                        <circle cx="63.441" cy="3.006" r="2.72"></circle>
                                        <circle cx="75.479" cy="3.006" r="2.72"></circle>
                                        <circle cx="87.514" cy="3.006" r="2.719"></circle>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </svg>
                    <svg class="absolute bottom-0 right-0 z-0 w-32 h-32 -mb-12 -mr-2 md:-mr-12 text-pink-400 fill-current"
                        viewBox="0 0 91 91" xmlns="http://www.w3.org/2000/svg">
                        <g stroke="none" stroke-width="1" fill-rule="evenodd">
                            <g fill-rule="nonzero">
                                <g>
                                    <g>
                                        <circle cx="3.261" cy="3.445" r="2.72"></circle>
                                        <circle cx="15.296" cy="3.445" r="2.719"></circle>
                                        <circle cx="27.333" cy="3.445" r="2.72"></circle>
                                        <circle cx="39.369" cy="3.445" r="2.72"></circle>
                                        <circle cx="51.405" cy="3.445" r="2.72"></circle>
                                        <circle cx="63.441" cy="3.445" r="2.72"></circle>
                                        <circle cx="75.479" cy="3.445" r="2.72"></circle>
                                        <circle cx="87.514" cy="3.445" r="2.719"></circle>
                                    </g>
                                    <g transform="translate(0 12)">
                                        <circle cx="3.261" cy="3.525" r="2.72"></circle>
                                        <circle cx="15.296" cy="3.525" r="2.719"></circle>
                                        <circle cx="27.333" cy="3.525" r="2.72"></circle>
                                        <circle cx="39.369" cy="3.525" r="2.72"></circle>
                                        <circle cx="51.405" cy="3.525" r="2.72"></circle>
                                        <circle cx="63.441" cy="3.525" r="2.72"></circle>
                                        <circle cx="75.479" cy="3.525" r="2.72"></circle>
                                        <circle cx="87.514" cy="3.525" r="2.719"></circle>
                                    </g>
                                    <g transform="translate(0 24)">
                                        <circle cx="3.261" cy="3.605" r="2.72"></circle>
                                        <circle cx="15.296" cy="3.605" r="2.719"></circle>
                                        <circle cx="27.333" cy="3.605" r="2.72"></circle>
                                        <circle cx="39.369" cy="3.605" r="2.72"></circle>
                                        <circle cx="51.405" cy="3.605" r="2.72"></circle>
                                        <circle cx="63.441" cy="3.605" r="2.72"></circle>
                                        <circle cx="75.479" cy="3.605" r="2.72"></circle>
                                        <circle cx="87.514" cy="3.605" r="2.719"></circle>
                                    </g>
                                    <g transform="translate(0 36)">
                                        <circle cx="3.261" cy="3.686" r="2.72"></circle>
                                        <circle cx="15.296" cy="3.686" r="2.719"></circle>
                                        <circle cx="27.333" cy="3.686" r="2.72"></circle>
                                        <circle cx="39.369" cy="3.686" r="2.72"></circle>
                                        <circle cx="51.405" cy="3.686" r="2.72"></circle>
                                        <circle cx="63.441" cy="3.686" r="2.72"></circle>
                                        <circle cx="75.479" cy="3.686" r="2.72"></circle>
                                        <circle cx="87.514" cy="3.686" r="2.719"></circle>
                                    </g>
                                    <g transform="translate(0 49)">
                                        <circle cx="3.261" cy="2.767" r="2.72"></circle>
                                        <circle cx="15.296" cy="2.767" r="2.719"></circle>
                                        <circle cx="27.333" cy="2.767" r="2.72"></circle>
                                        <circle cx="39.369" cy="2.767" r="2.72"></circle>
                                        <circle cx="51.405" cy="2.767" r="2.72"></circle>
                                        <circle cx="63.441" cy="2.767" r="2.72"></circle>
                                        <circle cx="75.479" cy="2.767" r="2.72"></circle>
                                        <circle cx="87.514" cy="2.767" r="2.719"></circle>
                                    </g>
                                    <g transform="translate(0 61)">
                                        <circle cx="3.261" cy="2.846" r="2.72"></circle>
                                        <circle cx="15.296" cy="2.846" r="2.719"></circle>
                                        <circle cx="27.333" cy="2.846" r="2.72"></circle>
                                        <circle cx="39.369" cy="2.846" r="2.72"></circle>
                                        <circle cx="51.405" cy="2.846" r="2.72"></circle>
                                        <circle cx="63.441" cy="2.846" r="2.72"></circle>
                                        <circle cx="75.479" cy="2.846" r="2.72"></circle>
                                        <circle cx="87.514" cy="2.846" r="2.719"></circle>
                                    </g>
                                    <g transform="translate(0 73)">
                                        <circle cx="3.261" cy="2.926" r="2.72"></circle>
                                        <circle cx="15.296" cy="2.926" r="2.719"></circle>
                                        <circle cx="27.333" cy="2.926" r="2.72"></circle>
                                        <circle cx="39.369" cy="2.926" r="2.72"></circle>
                                        <circle cx="51.405" cy="2.926" r="2.72"></circle>
                                        <circle cx="63.441" cy="2.926" r="2.72"></circle>
                                        <circle cx="75.479" cy="2.926" r="2.72"></circle>
                                        <circle cx="87.514" cy="2.926" r="2.719"></circle>
                                    </g>
                                    <g transform="translate(0 85)">
                                        <circle cx="3.261" cy="3.006" r="2.72"></circle>
                                        <circle cx="15.296" cy="3.006" r="2.719"></circle>
                                        <circle cx="27.333" cy="3.006" r="2.72"></circle>
                                        <circle cx="39.369" cy="3.006" r="2.72"></circle>
                                        <circle cx="51.405" cy="3.006" r="2.72"></circle>
                                        <circle cx="63.441" cy="3.006" r="2.72"></circle>
                                        <circle cx="75.479" cy="3.006" r="2.72"></circle>
                                        <circle cx="87.514" cy="3.006" r="2.719"></circle>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </svg>
                </div>
            </div>

        </div>

    </section>
    <x-footer />
</x-guest-layout>
