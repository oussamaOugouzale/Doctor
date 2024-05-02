<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/banner.css') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/datepicker.min.js"></script>


</head>

<body>
    <div class="cursor"></div>
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
            <div class="connection">
                <Button>
                    <a href="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="27" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                            <circle cx="12" cy="7" r="4"></circle>
                        </svg> Register
                    </a>
                </Button>
                <Button>
                    <a href="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#ffff" stroke-width="3.2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock">
                            <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                            <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                        </svg> Login
                    </a>
                </Button>
            </div>
        </div>
        <div class="bannerContainer">
            <div class="titlePart">
                <svg width="82" height="44" viewBox="0 0 66 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_131_119702)">
                        <path opacity="0.32" d="M49.9999 32.8291V24.7091H41.8799V16.9091H49.9999V8.78906H57.7999V16.9091H65.9199V24.7091H57.7999V32.8291H49.9999Z" fill="#0EA5E9" />
                        <path opacity="0.87" d="M23.3303 33.44V22.15H12.0303V11.29H23.3303V0H34.1803V11.29H45.4703V22.15H34.1803V33.44H23.3303Z" fill="#0EA5E9" />
                    </g>
                    <defs>
                        <clipPath id="clip0_131_119702">
                            <rect width="65.92" height="33.44" fill="white" />
                        </clipPath>
                    </defs>
                </svg>
                <h1>
                    Prenez rapidement un <span> rendez-vous </span> avec votre médecin !
                </h1>
                <p>Sélectionnez votre médecin, choisissez la date et l'heure de votre rdv et recevez votre sms/mail de
                    confirmation. C’est aussi simple que ça !</p>
            </div>
            <div class="imagePart">
                <img src="{{ asset('images/banner-img.png') }}" alt="">
            </div>
            <div class="searchPart">
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#8894AE" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search">
                        <circle cx="11" cy="11" r="8"></circle>
                        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                    </svg>
                    <input class="shadow-none focus:shadow-outline focus-ring border focus:outline-none rounded-lg" type="text" placeholder="Nom du professionnel de santé">
                </div>
                <div>
                    <form class="max-w-sm mx-auto l">
                        <select id="countries" class="rounded-lg focus:ring-blue-500 focus:border-blue-500 focus:outline-none specialites">
                            <option selected>Spécialité</option>
                            <option value="Dt">Dentiste</option>
                            <option value="Dt">Dentiste</option>
                            <option value="Dt">Dentiste</option>
                            <option value="Dt">Dentiste</option>
                            <option value="Dt">Dentiste</option>
                        </select>
                    </form>
                </div>
                <div class="borderNone">
                    <div class="relative">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                            </svg>
                        </div>
                        <input datepicker datepicker-buttons datepicker-autoselect-today type="text" class="block  ps-10 p-2.5 focus:outline-none" placeholder="choisi une date">
                    </div>
                </div>
                <button>
                    <a href="{{ route('doctor') }}">Search</a>
                </button>
            </div>
        </div>
    </div>
</body>
<script src="{{ asset('js/mouse.js') }}"></script>
</html>
