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

    <link rel="icon" href="assets/img/favicon.png" type="image/x-icon">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

    <link rel="stylesheet" href="assets/css/feather.css">

    <link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">

    <link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css">

    <link rel="stylesheet" href="assets/css/custom.css">
</head>
<body>

    <div class="main-wrapper">

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

                        </ul>
                    </div>
                    <ul class="nav header-navbar-rht">
                        <a href="{{route('doctorLogout')}}">Se déconnecter</a>
                    </ul>
                </nav>
            </div>
        </header>


        <div class="breadcrumb-bar-two">
            <div class="container">
                <div class="row align-items-center inner-banner">
                    <div class="col-md-12 col-12 text-center">
                        <h2 class="breadcrumb-title">Doctor Profile</h2>
                        <nav aria-label="breadcrumb" class="page-breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="">Home</a></li>
                                <li class="breadcrumb-item" aria-current="page">Doctor Profile</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>


        <div class="content doctor-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-xl-3 theiaStickySidebar">

                        <div class="profile-sidebar doctor-sidebar profile-sidebar-new">
                            <div class="widget-profile pro-widget-content">
                                <div class="profile-info-widget">
                                    <a href="" class="booking-doc-img">
                                        <img src="{{Auth::guard('doctor')->user()->photo}}" alt="User Image">
                                    </a>
                                    <div class="profile-det-info">
                                        <h3><a href="">Dr {{Auth::guard('doctor')->user()->nom .' '.Auth::guard('doctor')->user()->prenom}}</a></h3>
                                        <div class="patient-details">
                                            <h5 class="mb-0">ttttttttttttttest, somthinnnng</h5>
                                        </div>
                                        @if(isset(Auth::guard('doctor')->user()->specialites) && isset(Auth::guard('doctor')->user()->specialites->specialite))
                                        <span class="badge doctor-role-badge"><i class="fa-solid fa-circle"></i>{{ Auth::guard('doctor')->user()->specialites->specialite }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="dashboard-widget">
                                <nav class="dashboard-menu">
                                    <ul>
                                        <li class="">
                                            <a href="{{route('dashboard')}}">
                                                <i class="fa-solid fa-shapes"></i>
                                                <span>Dashboard</span>
                                            </a>
                                        </li>

                                        <li class>
                                            <a href="{{route('appointment')}}">
                                                <i class="fa-solid fa-calendar-days"></i>
                                                <span>Rendez-vous</span>
                                            </a>
                                        </li>

                                        <li class="active">
                                            <a href="{{route('profile-settings-hours')}}">
                                                <i class="fa-solid fa-user-pen"></i>
                                                <span>Paramétre du profil</span>
                                            </a>
                                        </li>
                                        <li class>
                                            <a href="{{route('doctor-password')}}">
                                                <i class="fa-solid fa-key"></i>
                                                <span> Mot de passe</span>
                                            </a>
                                        </li>
                                        <li class>
                                            <form action="">
                                                <a href="{{route('doctorLogout')}}">
                                                    <i class="fa-solid fa-calendar-check"></i>
                                                    <span>Se deconnecter</span>
                                                </a>
                                            </form>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-8 col-xl-9">

                        <div class="dashboard-header">
                            <h3>Paramétre du profil</h3>
                        </div>

                        <div class="setting-tab">
                            <div class="appointment-tabs">
                                <ul class="nav">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('profile-settings-details')}}">Informations personnelles</a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link " href="{{route('profile-settings-coordonnes')}}">Coordonnées</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="{{route('profile-settings-formations')}}">Spécialités</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="{{route('profile-settings-pratiques')}}">Pratiques et photo</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" href="{{route('profile-settings-hours')}}">Horaires de travail</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="dashboard-header border-0 mb-0">
                            <h3>Horaires d'ouverture</h3>
                        </div>
                        @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif
                        @if(session('error'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ session('error') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif
                        <form action="{{route('set-profile-hours-settings')}}" method="POST">
                            @csrf
                            <div class="business-wrap">
                                <h4>Sélectionner les jours ouvrables</h4>
                                <ul class="business-nav">
                                    <li>
                                        <a class="tab-link active" data-tab="day-monday">Lundi</a>
                                    </li>
                                    <li>
                                        <a class="tab-link active" data-tab="day-tuesday">Mardi</a>
                                    </li>
                                    <li>
                                        <a class="tab-link active" data-tab="day-wednesday">Mercredi</a>
                                    </li>
                                    <li>
                                        <a class="tab-link active" data-tab="day-thursday">Jeudi</a>
                                    </li>
                                    <li>
                                        <a class="tab-link active" data-tab="day-friday">Vendredi</a>
                                    </li>
                                    <li>
                                        <a class="tab-link" data-tab="day-saturday">Samedi</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="accordions business-info" id="list-accord">
                                @if(isset($horaires) && $horaires->isNotEmpty())
                                @php
                                $days_translation = [
                                'lundi' => 'monday',
                                'mardi' => 'tuesday',
                                'mercredi' => 'wednesday',
                                'jeudi' => 'thursday',
                                'vendredi' => 'friday',
                                'samedi' => 'saturday',
                                ];
                                @endphp
                                @foreach($horaires as $horaire)
                                @php
                                $day_in_english = $days_translation[$horaire->jour];
                                @endphp
                                <div class="user-accordion-item tab-items active" id="day-{{$day_in_english}}">
                                    <a href="#" class="accordion-wrap" data-bs-toggle="collapse" data-bs-target="#{{$day_in_english}}">{{$horaire->jour}}<span class="edit">Modifier</span></a>
                                    <div class="accordion-collapse collapse show" id="{{$day_in_english}}" data-bs-parent="#list-accord">
                                        <div class="content-collapse pb-0">
                                            <div class="row align-items-center">
                                                <h5 class="">Première séance:</h5>
                                                <div class="col-md-6">
                                                    <div class="form-wrap">
                                                        <label class="col-form-label">De <span class="text-danger">*</span></label>
                                                        <div class="form-icon">
                                                            <input type="text" value="{{$horaire->debut_première}}" name="horaires[{{$horaire->jour}}][debut_premiere]" class="form-control timepicker1">
                                                            <span class="icon"><i class="fa-solid fa-clock"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-wrap">
                                                        <label class="col-form-label">à <span class="text-danger">*</span></label>
                                                        <div class="form-icon">
                                                            <input type="text" value="{{$horaire->fin_première}}" name="horaires[{{$horaire->jour}}][fin_premiere]" class="form-control timepicker1">
                                                            <span class="icon"><i class="fa-solid fa-clock"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row align-items-center">
                                                <h5 class="">Deuxième séance:</h5>
                                                <div class="col-md-6">
                                                    <div class="form-wrap">
                                                        <label class="col-form-label">De <span class="text-danger">*</span></label>
                                                        <div class="form-icon">
                                                            <input type="text" value="{{$horaire->debut_deuxième}}" name="horaires[{{$horaire->jour}}][debut_deuxieme]" class="form-control timepicker1">
                                                            <span class="icon"><i class="fa-solid fa-clock"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-wrap">
                                                        <label class="col-form-label">à <span class="text-danger">*</span></label>
                                                        <div class="form-icon">
                                                            <input type="text" value="{{$horaire->fin_deuxième}}" name="horaires[{{$horaire->jour}}][fin_deuxieme]" class="form-control timepicker1">
                                                            <span class="icon"><i class="fa-solid fa-clock"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                @else
                                @php
                                $days_translation = [
                                'lundi' => 'monday',
                                'mardi' => 'tuesday',
                                'mercredi' => 'wednesday',
                                'jeudi' => 'thursday',
                                'vendredi' => 'friday',
                                'samedi' => 'saturday',
                                ];
                                @endphp
                                @foreach($days_translation as $jour => $day_in_english)
                                <div class="user-accordion-item tab-items active" id="day-{{$day_in_english}}">
                                    <a href="#" class="accordion-wrap" data-bs-toggle="collapse" data-bs-target="#{{$day_in_english}}">{{$jour}}<span class="edit">Modifier</span></a>
                                    <div class="accordion-collapse collapse show" id="{{$day_in_english}}" data-bs-parent="#list-accord">
                                        <div class="content-collapse pb-0">
                                            <div class="row align-items-center">
                                                <h5 class="">Première séance:</h5>
                                                <div class="col-md-6">
                                                    <div class="form-wrap">
                                                        <label class="col-form-label">De <span class="text-danger">*</span></label>
                                                        <div class="form-icon">
                                                            <input type="text" name="horaires[{{$jour}}][debut_premiere]" class="form-control timepicker1">
                                                            <span class="icon"><i class="fa-solid fa-clock"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-wrap">
                                                        <label class="col-form-label">à <span class="text-danger">*</span></label>
                                                        <div class="form-icon">
                                                            <input type="text" name="horaires[{{$jour}}][fin_premiere]" class="form-control timepicker1">
                                                            <span class="icon"><i class="fa-solid fa-clock"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row align-items-center">
                                                <h5 class="">Deuxième séance:</h5>
                                                <div class="col-md-6">
                                                    <div class="form-wrap">
                                                        <label class="col-form-label">De <span class="text-danger">*</span></label>
                                                        <div class="form-icon">
                                                            <input type="text" name="horaires[{{$jour}}][debut_deuxieme]" class="form-control timepicker1">
                                                            <span class="icon"><i class="fa-solid fa-clock"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-wrap">
                                                        <label class="col-form-label">à <span class="text-danger">*</span></label>
                                                        <div class="form-icon">
                                                            <input type="text" name="horaires[{{$jour}}][fin_deuxieme]" class="form-control timepicker1">
                                                            <span class="icon"><i class="fa-solid fa-clock"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                @endif

                            </div>
                            <div class="modal-btn text-end">
                                <a href="#" class="btn btn-gray">Annuler</a>
                                <button type="submit" class="btn btn-primary prime-btn">Enregister</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>


        <footer class="footer pharmacy-footer">
            <div class="container">
                <div class="top-footer">
                    <div class="footer-logo">
                        <a href="index-2.html"><img src="assets/img/logo.png" alt="logo"></a>
                    </div>
                    <div class="doccure-info">
                        <p>Doccure is one of India’s most trusted pharmacies, dispensing quality medicines
                            at reasonable prices to over 9 million happy customers
                        </p>
                    </div>
                </div>
                <div class="mid-footer">
                    <div class="row">
                        <div class="col-xl-2 col-lg-3 col-md-4">
                            <div class="footer-links">
                                <h4>Company</h4>
                                <ul class="pages-links">
                                    <li><a href="about-us.html">About Doccure</a></li>
                                    <li><a href="javascript:void(0);">Customers Speak</a></li>
                                    <li><a href="javascript:void(0);">In the News</a></li>
                                    <li><a href="javascript:void(0);">Career</a></li>
                                    <li><a href="contact-us.html">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-4">
                            <div class="footer-links">
                                <h4>Shopping</h4>
                                <ul class="pages-links">
                                    <li><a href="javascript:void(0);">Browse by A-Z</a></li>
                                    <li><a href="javascript:void(0);">Browse by Manufacturers</a></li>
                                    <li><a href="javascript:void(0);">Health Articles</a></li>
                                    <li><a href="javascript:void(0);">Offers / Coupons</a></li>
                                    <li><a href="faq.html">FAQs</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-4">
                            <div class="footer-links">
                                <h4>Our Policies</h4>
                                <ul class="pages-links">
                                    <li><a href="terms-condition.html">Terms and Conditions</a></li>
                                    <li><a href="privacy-policy.html">Privacy Policy</a></li>
                                    <li><a href="javascript:void(0);">Fees and Payments</a></li>
                                    <li><a href="javascript:void(0);">Shipping and Delivery</a></li>
                                    <li><a href="javascript:void(0);">Return, Refund </a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-4">
                            <div class="footer-links">
                                <h4>Our Services</h4>
                                <ul class="pages-links">
                                    <li><a href="javascript:void(0);">Order Medicines</a></li>
                                    <li><a href="javascript:void(0);">Book Lab Tests</a></li>
                                    <li><a href="javascript:void(0);">Consult a Doctor</a></li>
                                    <li><a href="javascript:void(0);">Ayurveda Articles</a></li>
                                    <li><a href="javascript:void(0);">Careers</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-8">
                            <div class="footer-links">
                                <h4>Subscribe to Newsletter</h4>
                                <form action="#">
                                    <div class="input-block">
                                        <input type="email" class="form-control" placeholder="Enter Email Address">
                                        <button type="submit" class="submit-btn">Submit</button>
                                    </div>
                                </form>
                                <div class="app-store-links">
                                    <a href="javascript:void(0);"><img src="assets/img/icons/app-store.svg" alt="Img"></a>
                                    <a href="javascript:void(0);"><img src="assets/img/icons/google-play.svg" alt="Img"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mid-foot-two">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <ul class="payment-methods d-flex align-items-center">
                                <li>
                                    <a href="javascript:void(0);">
                                        <img src="assets/img/icons/payment-icon-01.svg" alt="Img">
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <img src="assets/img/icons/payment-icon-02.svg" alt="Img">
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <img src="assets/img/icons/payment-icon-03.svg" alt="Img">
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <img src="assets/img/icons/payment-icon-04.svg" alt="Img">
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="social-icons d-flex align-items-center">
                                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-dribbble"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="copy-right text-center">
                    <p>Copyright © 2024 Doccure. All Rights Reserved</p>
                </div>
            </div>
        </footer>
    </div>


    <script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}" type="a3af23efa9a8f95e5c98a8cc-text/javascript"></script>

    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}" type="a3af23efa9a8f95e5c98a8cc-text/javascript"></script>

    <script src="{{ asset('assets/plugins/theia-sticky-sidebar/ResizeSensor.js') }}" type="a3af23efa9a8f95e5c98a8cc-text/javascript"></script>
    <script src="{{ asset('assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js') }}" type="a3af23efa9a8f95e5c98a8cc-text/javascript"></script>


    <script src="{{ asset('assets/js/moment.min.js') }}" type="a3af23efa9a8f95e5c98a8cc-text/javascript"></script>
    <script src="{{ asset('assets/js/bootstrap-datetimepicker.min.js') }}" type="a3af23efa9a8f95e5c98a8cc-text/javascript"></script>

    <script src="{{ asset('assets/plugins/select2/js/select2.min.js') }}" type="a3af23efa9a8f95e5c98a8cc-text/javascript"></script>

    <script src="{{ asset('assets/js/aos.js') }}" type="a3af23efa9a8f95e5c98a8cc-text/javascript"></script>

    <script src="{{ asset('assets/js/script.js') }}" type="a3af23efa9a8f95e5c98a8cc-text/javascript"></script>

    <script src="{{asset('assets/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js')}}" data-cf-settings="a3af23efa9a8f95e5c98a8cc-|49" defer></script>

    <script src="{{ asset('assets/js/test.js') }}"></script>
</body>

</html>
