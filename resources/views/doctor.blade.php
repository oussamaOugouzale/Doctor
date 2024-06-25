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
    <link rel="stylesheet" href="{{asset('assets/plugins/fontawesome/css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/fontawesome/css/all.min.css')}}">
</head>

<body>
    <div class="cursor"></div>
    <div class="containerr">
        <div class="navbar">
            <img src="{{ asset('images/doccure.png') }}" alt="">
            <ul class="ul">
                <li class=""><a href="">Home</a></li>
                <li class=""><a href="">Contact</a></li>
                <li class=""><a href="">Qui somme nous ?</a></li>
                
            </ul>
            <div class="connection">
                <button>
                    <a href="{{route('patientLogout')}}">Se déconnecter</a>
                </button>
            </ul>
            </div>
        </div>
        @if(isset($doctor))
        <div class="doctorProfile">
            <div class="header">
                <h1>Doctor Profile</h1>
            </div>


            <div class="doctorInformations ">
                <div class="info">
                    <div class="firstPart">
                        <img src="{{asset($doctor->photo)}}" alt="profile image">
                        <div class="details">
                            <div>
                                <h2>Dr {{$doctor->nom .' '.$doctor->prenom}}</h2>
                                <p>{{$doctor->specialites->specialite .' / '.$doctor->specialites->specialite}}</p>
                            </div>
                            <div>
                                <span></span>
                                <span></span>
                                <span>
                                    <div class="flex items-center">

                                    </div>
                                </span>
                                <div>
                                    <span><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#757575" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin">
                                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                            <circle cx="12" cy="10" r="3"></circle>
                                        </svg>
                                        {{$doctor->coordonnes->ville}}, Maroc
                                    </span>
                                </div>
                                <ul>
                                    <li><a href="{{ asset('images/feature-01.jpg') }}"><img src="{{ asset('images/feature-01.jpg') }}" alt=""></a></li>
                                    <li><a href="{{ asset('images/feature-02.jpg') }}"><img src="{{ asset('images/feature-02.jpg') }}" alt=""></a></li>
                                    <li><a href="{{ asset('images/feature-01.jpg') }}"><img src="{{ asset('images/feature-01.jpg') }}" alt=""></a></li>
                                    <li><a href="{{ asset('images/feature-02.jpg') }}"><img src="{{ asset('images/feature-02.jpg') }}" alt=""></a></li>
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
                            <li><i class="fas fa-map-marker-alt"></i> {{$doctor->coordonnes->adresse}}, MAROC</li>
                            <li><i class="far fa-money-bill-alt"></i> 300DH - 1000DH <i class="fas fa-info-circle" data-bs-toggle="tooltip" title="Lorem Ipsum"></i> </li>
                            <li><i class="fas fa-phone"></i> {{$doctor->coordonnes->tele_mobile}} </li>
                            <li><i class="fas fa-phone-alt"></i> {{$doctor->coordonnes->tele_fixe}} </li>
                        </ul>
                        <Button>
                            <a href="{{ route('prendreRdv', ['id' => $doctor->id]) }}">Prendre RDV</a>
                        </Button>
                    </div>
                </div>
            </div>
            <div class="professionalExperiences">
                <ul class="grid grid-flow-col text-center border-slate-300 text-gray-500
                ">
                    <li> <a href="
                        " class=" flex justify-center border-b-4 border-sky-500 text-sky-500 py-4                         ">
                            Overview</a> </li>
                    <li> <a href="
                        " class="transition duration-0 hover-duration-500  flex justify-center hover:border-b-4  
                                py-4 hover:text-sky-500 ">
                            Locations</a> </li>
                    <li> <a href="
                        " class="transition duration-0 hover:duration-500 flex justify-center  py-4 hover:border-b-4 hover:text-sky-500">Review</a>
                    </li>
                    <li> <a href="
                        " class="transition duration-0 hover-duration-500 flex justify-center py-4 hover:border-b-4 hover:text-sky-500">Bussenis
                            hours</a> </li>
                </ul>
                <div class="body">
                    <div class="hidden dv first">
                        <div>

                        </div>
                        <div class="info-block">
                            <h1>Formations et Diplômes</h1>
                            @foreach($doctor->formations as $formation)
                            <div class="education">
                                <div class="progress">
                                    <div class="circle"></div>
                                    <div class="vertical-line"></div>
                                </div>
                                <div class="content">
                                    <h3>{{$formation->formation}}</h3>
                                    <span>{{$formation->institution_name
                                    .' ('.$formation->start_date .' - '.$formation->end_date . ' ('.$formation->years.'))'
                                    }}</span>
                                    <span>{{ $formation->description }}</span>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="info-block min-line">
                            <h1>Work & Experience</h1>
                            <div class="education">
                                <div class="progress">
                                    <div class="circle"></div>
                                    <div class="vertical-line"></div>
                                </div>
                                <div class="content">
                                    <h3>Glowing Smiles Family Dental Clinic</h3>
                                    <span>2010 - lorem (5 years)</span>
                                </div>
                            </div>
                            <div class="education">
                                <div class="progress">
                                    <div class="circle"></div>
                                    <div class="vertical-line"></div>
                                </div>
                                <div class="content">
                                    <h3>Comfort Care Dental Clinic</h3>
                                    <span>2007 - 2010 (3 years)</span>
                                </div>
                            </div>
                            <div class="education">
                                <div class="progress">
                                    <div class="circle"></div>
                                    <div class="vertical-line"></div>
                                </div>
                                <div class="content">
                                    <h3>Dream Smile Dental Practice</h3>
                                    <span>2007 - 2010 (3 years)</span>
                                </div>
                            </div>
                        </div>
                        <div class="info-block min-line awards">
                            <h1>Awards</h1>
                            <div class="education">
                                <div class="progress">
                                    <div class="circle"></div>
                                    <div class="vertical-line"></div>
                                </div>
                                <div class="content">
                                    <span>janvier 2022</span>
                                    <h3>Humanitatrian award </h3>
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestiae, laboriosam!
                                        Quidem ipsam ipsa culpa laborum repellendus ea, saepe explicabo, cum, natus quod
                                        maxime. Et, odit.</p>
                                </div>
                            </div>
                            <div class="education">
                                <div class="progress">
                                    <div class="circle"></div>
                                    <div class="vertical-line"></div>
                                </div>
                                <div class="content">
                                    <span>may 2022</span>
                                    <h3>Certificate for International Volunteer Service
                                    </h3>
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestiae, laboriosam!
                                        Quidem ipsam ipsa culpa laborum repellendus ea, saepe explicabo, cum, natus quod
                                        maxime. Et, odit.</p>
                                </div>
                            </div>
                            <div class="education">
                                <div class="progress">
                                    <div class="circle"></div>
                                    <div class="vertical-line"></div>
                                </div>
                                <div class="content">
                                    <span>janvier 2022</span>
                                    <h3>Humanitatrian Certificate for International Volunteer Service
                                    </h3>
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestiae, laboriosam!
                                        Quidem ipsam ipsa culpa laborum repellendus ea, saepe explicabo, cum, natus quod
                                        maxime. Et, odit.</p>
                                </div>
                            </div>
                        </div>
                        <div class="info-block min-line services">
                            <h1>Services</h1>
                            <div class="elements">
                                <li><img src="{{ asset('icons/arrow.png') }}" alt="arrow"> Tooth cleaning</li>
                                <li><img src="{{ asset('icons/arrow.png') }}" alt="arrow"> Root Canal Therapy</li>
                                <li><img src="{{ asset('icons/arrow.png') }}" alt="arrow"> Tooth cleaning</li>
                            </div>
                            <div class="elements">
                                <li><img src="{{ asset('icons/arrow.png') }}" alt="arrow"> Fissure Sealants</li>
                                <li><img src="{{ asset('icons/arrow.png') }}" alt="arrow"> Surgical Extractions</li>
                                <li><img src="{{ asset('icons/arrow.png') }}" alt="arrow"> Composite Bonding</li>
                            </div>
                            </ul>
                        </div>
                        <div class="info-block min-line services">
                            <h1>Spécialités</h1>
                            <div class="elements">
                                <li><img src="{{ asset('icons/arrow.png') }}" alt="arrow"> {{$doctor->specialites->specialite}}</li>
                                <li><img src="{{ asset('icons/arrow.png') }}" alt="arrow"> {{$doctor->specialites->autre_specialite}}</li>
                            </div>

                            </ul>
                        </div>
                    </div>
                    <div class="hidden dv">locations</div>
                    <div class="hidden dv"> reviews</div>
                    <div class="hidden dv">hours</div>
                </div>
            </div>
        </div>
        @endif
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
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
