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
                <li class="current"><a href="{{route('home')}}">Home</a></li>
                <li><a href="">Contact</a></li>
                <li><a href="">Qui somme nous ?</a></li>
            </ul>
        </div>
        <div class="mainContainer">
            <div class="img"><img src="{{ asset('images/login-banner.png') }}" alt=""></div>
            <div class="formContainer rounded p-4 ">
                <form action="{{ route('login') }}" method="post">
                    @csrf
                    <div class="header mx-auto">
                        <h1>Connexion</h1>
                        <a href="{{route('register')}}" class="underline ">S'inscrire</a>
                    </div>
                    <div class="mt-8">
                        <a href="#" class="block">
                            <button class="w-full text-center text-white py-2 my-3 border flex items-center justify-center bg-blue-500 border-slate-200 rounded-lg text-slate-700 hover:border-slate-400 hover:shadow transition duration-150">
                                <svg class="w-4 h-4 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 8 19">
                                    <path fill-rule="evenodd" d="M6.135 3H8V0H6.135a4.147 4.147 0 0 0-4.142 4.142V6H0v3h2v9.938h3V9h2.021l.592-3H5V3.591A.6.6 0 0 1 5.592 3h.543Z" clip-rule="evenodd" />
                                </svg>
                                <span >Se connecter avec Facebook</span>
                            </button>
                        </a>
                        <a href="#" class="block">
                            <button class="w-full text-center py-2 my-3 border flex items-center justify-center border-slate-200 rounded-lg text-slate-700 hover:border-slate-400 hover:text-slate-900 hover:shadow transition duration-150">
                                <img src="https://www.svgrepo.com/show/355037/google.svg" class="w-5 h-5 mr-4" alt="Google Icon">
                                <span class="">Se connecter avec Google</span>
                            </button>
                        </a>
                    </div>
                    <div class="inline-flex items-center justify-center w-full">
                        <hr class="w-80 h-px my-4 bg-gray-300 border-0 ">
                        <span class="absolute px-3 font-medium text-gray-900  bg-white ">OU</span>
                    </div>
                    <div class="inputs">
                        <label for="UserEmail" class="relative block overflow-hidden rounded-md border border-gray-200 px-3 pt-3 shadow-sm focus-within:border-gary-300 focus-within:ring-1 focus-within:ring-gray-300 mt-4
                        @error('email') border-red-500 focus-within:border-red-500 focus-within:ring-red-500 @else border-gray-200 @enderror">
                            <input type="email" placeholder="Nom" name="email" value="{{ old('email') }}" class="peer h-8 w-full border-none bg-transparent p-0 placeholder-transparent focus:border-transparent focus:outline-none focus:ring-0 sm:text-sm" />
                            <span class="absolute start-3 top-3 -translate-y-1/2 text-xs text-gray-700 transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-sm peer-focus:top-3 peer-focus:text-xs
                            @error('email')
                                text-red-700
                            @enderror
                            ">
                                Email
                            </span>
                        </label>
                        @error('email')
                        <p class="mt-2 text-sm text-red-600"> {{ $message }} </p>
                        @enderror
                        <label for="UserEmail" class="relative block overflow-hidden rounded-md border border-gray-200 px-3 pt-3 shadow-sm focus-within:border-gary-300 focus-within:ring-1 focus-within:ring-gray-300 mt-4
                        @error('password') border-red-500 focus-within:border-red-500 focus-within:ring-red-500 @else border-gray-200 @enderror">
                            <input type="password" placeholder="Password" name="password" value="{{ old('password') }}" class="peer h-8 w-full border-none bg-transparent p-0 placeholder-transparent focus:border-transparent focus:outline-none focus:ring-0 sm:text-sm" />
                            <span class="absolute start-3 top-3 -translate-y-1/2 text-xs text-gray-700 transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-sm peer-focus:top-3 peer-focus:text-xs
                            @error('password')
                                text-red-700
                            @enderror">
                                Password
                            </span>
                        </label>
                        @error('password')
                        <p class="mt-2 text-sm text-red-600">{{$message}}</p>
                        @enderror
                        <button type="submit" class="text-white w-full  hover:bg-blue-800 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm mt-3 px-5 py-2.5 text-center  bg-blue-700">Soumettre</button>
                        <div class="flex w-full">
                        <a href="" class="mt-3 text-xs underline text-sky-400 hover:no-underline">Vous avez perdus votre mot de passe ?</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>


</body>

</html>
