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
                            Retrouver des nounons .
                        </h1>
                        <p class="text-base text-gray-800 lg:text-xl">
                            Trouvez avec nous des nounous qualifiées pour votre maison ou votre entreprise.
                        </p>
                    </div>
                </div>

                <div class="relative z-10 w-full max-w-2xl mt-20 lg:mt-0 lg:w-5/12">
                    <form action="{{ route('profile.store2') }}"  method="post"
                        class="relative z-10 flex flex-col items-start justify-start p-10 bg-white shadow-2xl rounded-xl"  enctype="multipart/form-data">

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
                                <input name="nom" required type="text"
                                    class="block w-full px-4 py-4 mt-2 text-base placeholder-gray-400 bg-white border border-gray-300 rounded-md focus:outline-none focus:border-black">
                            </div>
                            <div class="relative">
                                <label class="absolute px-2 ml-2 -mt-3 font-medium text-gray-600 bg-white">Lieu de résidence</label>
                                <input name="lieu_residence" required type="text"
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
                                <label class="absolute px-2 ml-2 -mt-3 font-medium text-gray-600 bg-white">Type de nounous</label>
                                <select onChange="change(this.value);" name= "type_nounous" class="block w-full px-4 py-4 mt-2 text-base placeholder-gray-400 bg-white border border-gray-300 rounded-md focus:outline-none focus:border-black" name="" id="">
                                    <option value="">Sélectionnez un type de nounous</option>
                                    <option value="garde enfant">Nounous garde d'enfants</option>
                                    <option value="Auxiliaire de vie">Auxiliaire de vie</option>
                                    <option value="ménage">Nounous ménage</option>
                                    <option value="cuisine">Nounous cuisine</option>
                                </select>
                            </div>
                            <div class="relative" id="type_auxiliaire" style="display:none">
                                <!-- <label class="absolute px-2 ml-2 -mt-3 font-medium text-gray-600 bg-white">Type Auxiliaire de vie</label> -->
                                <div style>
                                   <label class="ml-2 -mt-3 font-medium text-gray-600 bg-white">Personne du troisième âge</label>
                                   &nbsp;&nbsp;&nbsp;
                                   <input name="type_auxiliaire"  type="radio" value="Personne du troisième âge"
                                    class=" px-4 py-4 mt-3 text-base placeholder-gray-400 bg-white border border-gray-300 rounded-md focus:outline-none focus:border-black"
                                    >
                               </div>
                               <br>
                               <div>
                                   <label class="ml-2 -mt-3 font-medium text-gray-600 bg-white">Personne en situation de handicap</label>
                                   &nbsp;&nbsp;&nbsp; <input name="type_auxiliaire"  type="radio" value="Personne en situation de handicap"
                                    class="px-4 py-4 mt-2 text-base placeholder-gray-400 bg-white border border-gray-300 rounded-md focus:outline-none focus:border-black"
                                    >
                               </div>
                            </div>
                            <div class="relative">
                                <label class="absolute px-2 ml-2 -mt-3 font-medium text-gray-600 bg-white">Charger votre pièce</label>
                                <input name="piece_identite" required type="file"
                                    class="block w-full px-4 py-4 mt-2 text-base placeholder-gray-400 bg-white border border-gray-300 rounded-md focus:outline-none focus:border-black"
                                    >
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
<script>
    function change(param) {

     if (param == "Auxiliaire de vie") {
        document.getElementById("type_auxiliaire").style.display="block";
     }
     else{
        document.getElementById("type_auxiliaire").style.display="none";

     }
    }
</script>
    </section>
    <x-footer />
</x-guest-layout>
