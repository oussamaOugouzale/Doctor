<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>medecin</title>
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/banner.css') }}">
    <link rel="stylesheet" href="{{ asset('css/doctor-profile.css') }}">
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
                <li><a href="">Vétérinaires</a><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                        viewBox="0 0 24 24" fill="none" stroke="#1F2937" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="feather feather-chevron-down">
                        <polyline points="6 9 12 15 18 9"></polyline>
                    </svg></li>
                <li><a href="">Pharmacies</a><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                        viewBox="0 0 24 24" fill="none" stroke="#1F2937" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="feather feather-chevron-down">
                        <polyline points="6 9 12 15 18 9"></polyline>
                    </svg></li>
                <li><a href="">Laboratoires</a><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                        viewBox="0 0 24 24" fill="none" stroke="#1F2937" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="feather feather-chevron-down">
                        <polyline points="6 9 12 15 18 9"></polyline>
                    </svg></li>
                <li><a href="">Médicaments</a><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                        viewBox="0 0 24 24" fill="none" stroke="#1F2937" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="feather feather-chevron-down">
                        <polyline points="6 9 12 15 18 9"></polyline>
                    </svg></li>
            </ul>
            <div class="connection">
                <Button>
                    <a href="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="27" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-user">
                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                            <circle cx="12" cy="7" r="4"></circle>
                        </svg> Register
                    </a>
                </Button>
                <Button>
                    <a href="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="#ffff" stroke-width="3.2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-lock">
                            <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                            <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                        </svg> Login
                    </a>
                </Button>
            </div>
        </div>
        <div class="doctorProfile">
            <div class="header">
                <h1>Doctor Profile</h1>
            </div>
            <div class="doctorInformations ">
                <div class="info">
                    <div class="firstPart">
                        <img src="{{ asset('images/doctor-thumb.jpg') }}" alt="profile image">
                        <div class="details">
                            <div>
                                <h2>Dr. Darren Elder</h2>
                                <p>BDS, MDS - Oral & Maxillofacial Surgery</p>
                            </div>
                            <div>
                                <span>Dentist</span>
                                <span></span>
                                <span>
                                    <div class="flex items-center">
                                        <svg class="w-4 h-4 text-yellow-300 me-1" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                            <path
                                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                        </svg>
                                        <svg class="w-4 h-4 text-yellow-300 me-1" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                            <path
                                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                        </svg>
                                        <svg class="w-4 h-4 text-yellow-300 me-1" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                            <path
                                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                        </svg>
                                        <svg class="w-4 h-4 text-yellow-300 me-1" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                            <path
                                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                        </svg>
                                        <svg class="w-4 h-4 text-gray-300 me-1 dark:text-gray-500" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                            <path
                                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                        </svg>
                                        <p class="ms-1 text-sm font-medium text-gray-500 dark:text-gray-400">(15)</p>
                                    </div>
                                </span>
                                <div>
                                    <span><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                            viewBox="0 0 24 24" fill="none" stroke="#757575" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-map-pin">
                                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                            <circle cx="12" cy="10" r="3"></circle>
                                        </svg>
                                        Agadir, MOROCOO -
                                        <a href="" class="direction">Voir Direction</a>
                                    </span>
                                </div>
                                <ul>
                                    <li><a href=""><img src="{{ asset('images/feature-01.jpg') }}" alt=""></a></li>
                                    <li><a href=""><img src="{{ asset('images/feature-02.jpg') }}" alt=""></a></li>
                                    <li><a href=""><img src="{{ asset('images/feature-01.jpg') }}" alt=""></a></li>
                                    <li><a href=""><img src="{{ asset('images/feature-02.jpg') }}" alt=""></a></li>
                                </ul>
                                <div class="services">
                                    <span>Service1 Service</span>
                                    <span>service2</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="secondPart">
                        <ul>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                    fill="none" stroke="#4E4852" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-thumbs-up">
                                    <path
                                        d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3">
                                    </path>
                                </svg>
                                99%
                            </li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                    fill="none" stroke="#4E4852" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-message-circle">
                                    <path
                                        d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z">
                                    </path>
                                </svg>
                                7 Feedback
                            </li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                    fill="none" stroke="#757575" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-map-pin">
                                    <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                    <circle cx="12" cy="10" r="3"></circle>
                                </svg>
                                Salam, Agadir
                            </li>
                        </ul>
                        <Button>
                            <a href="">Prendere RDV</a>
                        </Button>
                    </div>
                </div>
            </div>
            <div class="professionalExperiences">
                <ul class="grid grid-flow-col text-center border-slate-300 text-gray-500
                ">
                    <li> <a href="
                        "
                            class=" flex justify-center border-b-4 border-sky-500 text-sky-500 py-4 active                        ">
                            Overview</a> </li>
                    <li> <a href="
                        " class="transition duration-0 hover-duration-500  flex justify-center hover:border-b-4  
                                py-4 hover:text-sky-500 ">
                            Locations</a> </li>
                    <li> <a href="
                        "
                            class="transition duration-0 hover:duration-500 flex justify-center  py-4 hover:border-b-4 hover:text-sky-500">Review</a>
                    </li>
                    <li> <a href="
                        "
                            class="transition duration-0 hover-duration-500 flex justify-center py-4 hover:border-b-4 hover:text-sky-500">Bussenis
                            hours</a> </li>
                </ul>
                <div class="body">
                    <div class="hidden dv first">
                        <div>
                            <h1>About Me</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut
                                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                ullamco
                                laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
                                in
                                voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                                cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </p>
                        </div>
                        <div>
                            <h1>Education</h1>
                            <div class="education">
                                <div class="progress">
                                    <div class="circle"></div>
                                    <div class="vertical-line"></div>
                                </div>
                                <div class="content">
                                    <h3>American Dental Medical University</h3>
                                    <span>BDS</span>
                                    <span>1998 - 2001</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hidden dv">locations</div>
                    <div class="hidden dv"> reviews</div>
                    <div class="hidden dv">hours</div>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const tabButtons = document.querySelectorAll('.professionalExperiences > ul > li > a');
            const tabContents = document.querySelectorAll('.body > div');

            tabContents[0].classList.remove('hidden');
            tabButtons.forEach((button, index) => {
                button.addEventListener('click', (e) => {
                    e.preventDefault();
                    tabButtons.forEach(btn => {
                        btn.classList.remove("text-sky-500", "border-b-4", "border-sky-500");
                    });
                    tabContents.forEach(tab => {
                        tab.classList.add('hidden');
                    });
                    button.classList.add("text-sky-500", "border-b-4", "border-sky-500");
                    tabContents[index].classList.remove('hidden');
                });
            });
        });

    </script>
    <script src="{{ asset('js/mouse.js') }}"></script>
</body>

</html>