<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/datepicker.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@22.0.1/build/css/intlTelInput.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@22.0.1/build/css/intlTelInput.css">
    <script src="https://cdn.jsdelivr.net/npm/intl-tel-input@22.0.1/build/js/intlTelInput.min.js"></script>

</head>

<body>
    <div class="containerr">
        <div class="navbar">
            <img src="{{ asset('images/doccure.png') }}" alt="">
            <ul class="ul">
                <li class="current"><a href="">Medecin</a></li>
                <li><a href="">Vétérinaires</a><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#1F2937" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down">
                        <polyline points="6 9 12 15 18 9"></polyline>
                    </svg></li>
                <li><a href="">Pharmacies</a><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#1F2937" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down">
                        <polyline points="6 9 12 15 18 9"></polyline>
                    </svg></li>
                <li><a href="">Laboratoires</a><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#1F2937" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down">
                        <polyline points="6 9 12 15 18 9"></polyline>
                    </svg></li>
                <li><a href="">Médicaments</a><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#1F2937" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down">
                        <polyline points="6 9 12 15 18 9"></polyline>
                    </svg></li>
            </ul>

        </div>
        <div class="mainContainer">
            <div class="img"><img src="{{ asset('images/login-banner.png') }}" alt=""></div>
            <div class="formContainer rounded p-4 ">
                <form action="{{ route('patientRegister') }}" method="post">
                    @csrf
                    <div class="header  mx-auto">
                        <h1>Inscription</h1>
                        <a href="">Vous êtes un doctor ?</a>
                    </div>
                    <div class="mt-8">
                        <a href="#" class="block">
                            <button class="w-full text-center text-white py-2 my-3 border flex items-center justify-center bg-blue-500 border-slate-200 rounded-lg text-slate-700 hover:border-slate-400 hover:shadow transition duration-150">
                                <svg class="w-4 h-4 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 8 19">
                                    <path fill-rule="evenodd" d="M6.135 3H8V0H6.135a4.147 4.147 0 0 0-4.142 4.142V6H0v3h2v9.938h3V9h2.021l.592-3H5V3.591A.6.6 0 0 1 5.592 3h.543Z" clip-rule="evenodd" />
                                </svg>
                                <span class="">S'inscrire avec Facebook</span>
                            </button>
                        </a>
                        <a href="#" class="block">
                            <button class="w-full text-center py-2 my-3 border flex items-center justify-center border-slate-200 rounded-lg text-slate-700 hover:border-slate-400 hover:text-slate-900 hover:shadow transition duration-150">
                                <img src="https://www.svgrepo.com/show/355037/google.svg" class="w-5 h-5 mr-4" alt="Google Icon">
                                <span class="">S'inscrire avec Google</span>
                            </button>
                        </a>
                    </div>
                    <div class="inline-flex items-center justify-center w-full">
                        <hr class="w-80 h-px my-4 bg-gray-300 border-0 ">
                        <span class="absolute px-3 font-medium text-gray-900  bg-white ">OU</span>
                    </div>
                    <div class="inputs">
                        <div class="flex flex-col items-center mt-5">
                            <div class="text-sm text-gray-700">
                                Merci de saisir vos informations
                            </div>
                            <div class="flex mt-2">
                                <div class="flex items-center me-4">
                                    <input id="inline-radio" type="radio" required value="{{ old('genre') }}" value="femmme" name="genre" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800  dark:bg-gray-700 dark:border-gray-600">
                                    <label for="inline-radio" class="ms-2 text-xs font-medium text-gray-800 ">Femme</label>
                                </div>
                                <div class="flex items-center me-4">
                                    <input id="inline-2-radio" type="radio" value="homme" name="genre" class="w-4 h-4 text-xs text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800  dark:bg-gray-700 dark:border-gray-600">
                                    <label for="inline-2-radio" class="ms-2 text-xs font-medium text-gray-800">Homme</label>
                                </div>
                            </div>
                        </div>
                        <label for="UserEmail" class="relative block overflow-hidden rounded-md border border-gray-200 px-3 pt-3 shadow-sm focus-within:border-gary-300 focus-within:ring-1 focus-within:ring-gray-300 mt-4
                        @error('nom') border-red-600 focus-within:border-red-600 focus-within:ring-red-600 @else border-gray-200 @enderror">
                            <input type="text" placeholder="Nom" name="nom" value="{{ old('nom') }}" class="peer h-8 w-full border-none bg-transparent p-0 placeholder-transparent focus:border-transparent focus:outline-none focus:ring-0 sm:text-sm" />
                            <span class="absolute start-3 top-3 -translate-y-1/2 text-xs text-gray-700 transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-sm peer-focus:top-3 peer-focus:text-xs">
                                Nom
                            </span>
                        </label>
                        @error('nom')
                        <div class="text-red-600 text-sm mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                        <label for="UserEmail" class="relative block overflow-hidden rounded-md border border-gray-200 px-3 pt-3 shadow-sm focus-within:border-gary-300 focus-within:ring-1 focus-within:ring-gray-300 mt-4
                        @error('prenom') border-red-600 focus-within:border-red-600 focus-within:ring-red-600 @else border-gray-200 @enderror">
                            <input type="text" name="prenom" placeholder="Prénom" value="{{old('prenom')}}" class="peer h-8 w-full border-none bg-transparent p-0 placeholder-transparent focus:border-transparent focus:outline-none focus:ring-0 sm:text-sm" />
                            <span class="absolute start-3 top-3 -translate-y-1/2 text-xs text-gray-700 transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-sm peer-focus:top-3 peer-focus:text-xs">
                                Prénom
                            </span>
                        </label>
                        @error('prenom')
                        <div class="text-red-600 text-sm mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                        <label for="UserEmail" class="relative block overflow-hidden rounded-md border border-gray-200 px-3 pt-3 shadow-sm focus-within:border-gary-300 focus-within:ring-1 focus-within:ring-gray-300 mt-4
                        @error('email') border-red-600 focus-within:border-red-600 focus-within:ring-red-600 @else border-gray-200 @enderror">
                            <input type="email" name="email" id="UserEmail" placeholder="Email" value="{{old('email')}}" class="peer h-8 w-full border-none bg-transparent p-0 placeholder-transparent focus:border-transparent focus:outline-none focus:ring-0 sm:text-sm" />
                            <span class="absolute start-3 top-3 -translate-y-1/2 text-xs text-gray-700 transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-sm peer-focus:top-3 peer-focus:text-xs">
                                Email
                            </span>
                        </label>
                        @error('email')
                        <div class="text-red-600 text-sm mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                        <div class="div">
                            <input type="phone" id="phone" value="{{ old('numéro') }}" name="numéro" class="block p-2.5 w-full z-20 text-sm rounded-e-lg   focus:outline-none
                            px-3 pt-3 overflow-hidden rounded-md border border-gray-200 shadow-sm focus-within:border-gary-300 focus-within:ring-1 focus-within:ring-gray-300 phone
                            @error('numéro') border-red-600 focus-within:border-red-600 focus-within:ring-red-600 @else border-gray-200 @enderror
                            " placeholder="Numéro de mobile" required />
                        </div>
                        @error('numéro')
                        <div class="text-red-600 text-sm mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                        <label for="UserPassword" class="relative block overflow-hidden rounded-md border px-3 pt-3 shadow-sm focus-within:border-gray-300 focus-within:ring-1 focus-within:ring-gray-300 mt-4 
                        @error('password') border-red-600 focus-within:border-red-600 focus-within:ring-red-600 @else border-gray-200 @enderror">
                            <input type="password" id="UserPassword" name="password" value="{{ old('password') }}" placeholder="mot de passe" class="peer h-8 w-full border-none bg-transparent p-0 placeholder-transparent focus:border-transparent focus:outline-none focus:ring-0 sm:text-sm" />
                            <span class="absolute start-3 top-3 -translate-y-1/2 text-xs text-gray-700 transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-sm peer-focus:top-3 peer-focus:text-xs">
                                Mot de passe
                            </span>
                        </label>
                        @error('password')
                        <div class="text-red-600 text-sm mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                        <div class="flex items-start mb-5 mt-4">
                            <div class="flex items-center h-5">
                                <input id="terms" type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800" required />
                            </div>
                            <label for="terms" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Je suis d'accord avec les<a href="{{ asset('pdfs/gcu.pdf') }}" target="_blank" class="text-blue-600 hover:underline dark:text-blue-500"> GCU </a>et <a href="{{ asset('pdfs/politique.pdf') }}" target="_blank" class="text-blue-600 hover:underline dark:text-blue-500"> la politique de confidentialité </a></label>
                        </div>
                        <button type="submit" class="text-white w-full bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Soumettre</button>
                        <div class="flex mt-3 w-full">
                            <a href="{{route('login')}}" class="text-sm text-blue-600  underline hover:no-underline ">Vous avez déjà un compte ?</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>
<script>
    const input = document.querySelector("#phone");
    window.intlTelInput(input, {
        utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@22.0.1/build/js/utils.js"
    , });

</script>
</html>
