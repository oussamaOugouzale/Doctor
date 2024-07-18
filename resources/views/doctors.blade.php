<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <title>Doccure</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:type" content="website">
    <meta property="og:image" content="assets/img/preview-banner.jpg">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:image" content="assets/img/preview-banner.jpg">
    <title>Doccure</title>

    <link rel="icon" href="{{asset('assets/img/favicon.png')}}" type="image/x-icon">

    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">

    <link rel="stylesheet" href="{{asset('assets/plugins/fontawesome/css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/fontawesome/css/all.min.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/feather.css')}}">

    <link rel="stylesheet" href="{{asset('assets/plugins/select2/css/select2.min.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/aos.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">
</head>
<body>

    <div class="main-wrapper home-three">

        <header class="header header-trans header-three header-eight">
            <div class="container">
                <nav class="navbar navbar-expand-lg header-nav">
                    <div class="navbar-header">
                        <a id="mobile_btn" href="javascript:void(0);">
                            <span class="bar-icon">
                                <span></span>
                                <span></span>
                                <span></span>
                            </span>
                        </a>
                        <a href="index-2.html" class="navbar-brand logo">
                            <img src="assets/img/logo.png" class="img-fluid" alt="Logo">
                        </a>
                    </div>
                    <div class="main-menu-wrapper">
                        <div class="menu-header">
                            <a href="index-2.html" class="menu-logo">
                                <img src="assets/img/logo-01.svg" class="img-fluid" alt="Logo">
                            </a>
                            <a id="menu_close" class="menu-close" href="javascript:void(0);">
                                <i class="fas fa-times"></i>
                            </a>
                        </div>
                        <ul class="main-nav">
                            <li class="has-submenu megamenu active">
                                <a href="javascript:void(0);">Home </a>
                            </li>
                            <li class="has-submenu megamenu ">
                                <a href="javascript:void(0);">Contact </a>
                            </li>
                            <li class="has-submenu megamenu ">
                                <a href="javascript:void(0);">Qui somme nous ? </a>
                            </li>
                            <li class="has-submenu megamenu ">
                            </li>
                        </ul>
                    </div>
                    <ul class="nav header-navbar-rht">
                        </li>
                        @if(Auth::guard('patient')->user() != null)
                        <li class="nav-item">
                            <a class="nav-link header-login" href="{{route('pat-appointments')}}"><img src="assets/img/icons/user-circle.svg" alt="img">Mon Compte </a>
                        </li>
                        @elseif(Auth::guard('doctor')->user() != null)
                        <li class="nav-item">
                            <a class="nav-link header-login" href="{{route('dashboard')}}"><img src="assets/img/icons/user-circle.svg" alt="img">Dashboard </a>
                        </li>
                        @else
                        <li class="nav-item">
                            <a class="nav-link header-login" href="{{route('loginForm')}}"><img src="assets/img/icons/user-circle.svg" alt="img">Connexion /
                                Inscription </a>
                        </li>
                        @endif
                    </ul>
                    </li>
                    </ul>
                </nav>
            </div>
        </header>
        <div class="breadcrumb-bar-two">
            <div class="container">
                <div class="row align-items-center inner-banner">
                    <div class="col-md-12 col-12 text-center">
                        <h2 class="breadcrumb-title">Search</h2>
                        <nav aria-label="breadcrumb" class="page-breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="https://doccure.dreamstechnologies.com/laravel/template/public">Home</a></li>
                                <li class="breadcrumb-item" aria-current="page">Search</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="container ">
                <div class="col-md-12 col-lg-8 col-xl-9 mx-auto">
                    @if(isset($doctors) && $doctors->isNotEmpty())
                    @foreach($doctors as $doctor)
                    @if($doctor->coordonnes ? $doctor->coordonnes->partCompleted : false)
                    <div class="card">
                        <div class="card-body">
                            <div class="doctor-widget">
                                <div class="doc-info-left">
                                    <div class="doctor-img">
                                        <a href="doctor-profile.html">
                                            <img src="{{$doctor->photo}}" class="img-fluid" alt="User Image">
                                        </a>
                                    </div>
                                    <div class="doc-info-cont">
                                        <h4 class="doc-name"><a href="#">Dr. {{$doctor->nom .' '. $doctor->prenom}}</a></h4>
                                        <p class="doc-speciality">{{ $doctor->specialites->specialite .' / '. ($doctor->specialites->autre_specialite ? $doctor->specialites->autre_specialite : '' )}}
                                        </p>

                                        <div class="clinic-details">
                                            <p class="doc-location"><i class="fas fa-map-marker-alt"></i>
                                                {{$doctor->coordonnes->adresse}}
                                            </p>
                                            <ul class="clinic-gallery">
                                                @foreach($doctor->cabinets as $photo)

                                                <li>
                                                    <a href="{{$photo->photo}}" data-fancybox="gallery">
                                                        <img src="{{$photo->photo}}" alt="Feature">
                                                    </a>
                                                </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        <div class="clinic-services">
                                            <span>Dental Fillings</span>
                                            <span> Whitneing</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="doc-info-right">
                                    <div class="clini-infos">
                                        <ul>
                                            <li><i class="fas fa-map-marker-alt"></i> {{$doctor->coordonnes->ville}}, MAROC</li>
                                            <li><i class="far fa-money-bill-alt"></i> 300DH - 1000DH <i class="fas fa-info-circle" data-bs-toggle="tooltip" title="Lorem Ipsum"></i> </li>
                                            <li><i class="fas fa-phone"></i> {{$doctor->coordonnes->tele_mobile}} </li>
                                            <li><i class="fas fa-phone-alt"></i> {{$doctor->coordonnes->tele_fixe}} </li>
                                        </ul>
                                    </div>
                                    <div class="clinic-booking">
                                        <a class="view-pro-btn" href="{{ route('doctorShow', ['id' => $doctor->id]) }}">Voir le profile</a>
                                        <a class="apt-btn" href="{{ route('prendreRdv', ['id' => $doctor->id]) }}">Prendre RDV</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                    @endforeach
                    @endif
                    {{-- <div class="load-more text-center">
                            <a class="btn btn-primary btn-sm prime-btn" href="javascript:void(0);">Load More</a>
                        </div> --}}
                </div>
            </div>
        </div>
    </div>




    </div>


    <script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="assets/js/jquery-3.7.1.min.js" type="7073d074eb0ac309415a3550-text/javascript"></script>

    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}" type="7073d074eb0ac309415a3550-text/javascript"></script>

    <script src="{{asset('assets/js/slick.js')}}" type="7073d074eb0ac309415a3550-text/javascript"></script>

    <script src="{{asset('assets/js/moment.min.js')}}" type="7073d074eb0ac309415a3550-text/javascript"></script>
    <script src="{{asset('assets/js/bootstrap-datetimepicker.min.js')}}" type="7073d074eb0ac309415a3550-text/javascript"></script>

    <script src="{{asset('assets/plugins/select2/js/select2.min.js')}}" type="7073d074eb0ac309415a3550-text/javascript"></script>

    <script src="{{asset('assets/js/backToTop.js')}}" type="7073d074eb0ac309415a3550-text/javascript"></script>

    <script src="{{asset('assets/js/aos.js')}}" type="7073d074eb0ac309415a3550-text/javascript"></script>

    <script src="{{asset('assets/js/owl.carousel.min.js')}}" type="7073d074eb0ac309415a3550-text/javascript"></script>

    <script src="{{asset('assets/js/script.js')}}" type="7073d074eb0ac309415a3550-text/javascript"></script>
    <script src="{{asset('assets/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js')}}" data-cf-settings="7073d074eb0ac309415a3550-|49" defer></script>
</body>

</html>
