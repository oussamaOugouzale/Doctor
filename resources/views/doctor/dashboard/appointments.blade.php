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
    <style>
        .annule, .accepte{
            display: none;
        }
    </style>
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
                        </li>
                        <li class="nav-item">
                            <a href="{{route('doctorLogout')}}">Se déconnecter</a>
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
                        <h2 class="breadcrumb-title">Rendez-vous</h2>
                        <nav aria-label="breadcrumb" class="page-breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="">Home</a>
                                </li>
                                <li class="breadcrumb-item" aria-current="page">Appointments</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>


        <div class="content">
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
                                        <span class="badge doctor-role-badge"><i class="fa-solid fa-circle"></i>{{Auth::guard('doctor')->user()->specialites->specialite}}</span>
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

                                        <li class="active">
                                            <a href="{{route('appointment')}}">
                                                <i class="fa-solid fa-calendar-days"></i>
                                                <span>Rendez-vous</span>
                                            </a>
                                        </li>

                                        <li class="">
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
                            <h3>Rendez-vous</h3>

                        </div>
                        <div class="appointment-tab-head">
                            <div class="appointment-tabs">
                                <ul class="nav nav-pills inner-tab " id="pills-tab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="pills-upcoming-tab" data-bs-toggle="pill" data-bs-target="#pills-upcoming" type="button" role="tab" aria-controls="pills-upcoming" aria-selected="false">A venir<span>{{$aVenir}}</span></button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="pills-cancel-tab" data-bs-toggle="pill" data-bs-target="#pills-cancel" type="button" role="tab" aria-controls="pills-cancel" aria-selected="true">Annulé<span>{{$annule}}</span></button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="pills-complete-tab" data-bs-toggle="pill" data-bs-target="#pills-complete" type="button" role="tab" aria-controls="pills-complete" aria-selected="true">Complété<span>{{$complete}}</span></button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="tab-content appointment-tab-content aVenir">
                            <div class="tab-pane fade show active" id="pills-upcoming" role="tabpanel" aria-labelledby="pills-upcoming-tab">
                                @if(isset($rdvs))
                                @foreach($rdvs as $key => $rdv)
                                @if($rdv->etat === null)
                                <div class="appointment-wrap">
                                    <ul>
                                        <li>
                                            <div class="patinet-information">
                                                <a href="doctor-upcoming-appointment.html">
                                                    <img src="assets/img/doctors-dashboard/profile-01.jpg" alt="User Image">
                                                </a>
                                                <div class="patient-info">
                                                    <p>#Apt0001</p>
                                                    <h6><a href="doctor-upcoming-appointment.html">{{$rdv->patient->nom}}</a></h6>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="appointment-info">
                                            <p><i class="fa-solid fa-clock"></i>{{$rdv->jour .' '. $rdv->horaire}}</p>
                                            <ul class="d-flex apponitment-types">
                                                <li>{{$rdv->motif}}</li>
                                            </ul>
                                        </li>
                                        <li class="mail-info-patient">
                                            <ul>
                                                <li><i class="fa-solid fa-envelope"></i>{{$rdv->patient->email}}
                                                </li>
                                                <li><i class="fa-solid fa-phone"></i>{{$rdv->patient->numero_tel}}</li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                @endif
                                @endforeach
                                @endif
                            </div>
                        </div>
                        <div class="tab-content appointment-tab-content annule ">
                            <div class="tab-pane fade show active" id="pills-upcoming" role="tabpanel" aria-labelledby="pills-upcoming-tab">
                                @if(isset($rdvs))
                                @foreach($rdvs as $key => $rdv)
                                @if($rdv->etat ==='annule')
                                <div class="appointment-wrap">
                                    <ul>
                                        <li>
                                            <div class="patinet-information">
                                                <a href="doctor-upcoming-appointment.html">
                                                    <img src="assets/img/doctors-dashboard/profile-01.jpg" alt="User Image">
                                                </a>
                                                <div class="patient-info">
                                                    <p>#Apt0001</p>
                                                    <h6><a href="doctor-upcoming-appointment.html">{{$rdv->patient->nom}}</a></h6>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="appointment-info">
                                            <p><i class="fa-solid fa-clock"></i>{{$rdv->jour .' '. $rdv->horaire}}</p>
                                            <ul class="d-flex apponitment-types">
                                                <li>{{$rdv->motif}}</li>
                                            </ul>
                                        </li>
                                        <li class="mail-info-patient">
                                            <ul>
                                                <li><i class="fa-solid fa-envelope"></i>{{$rdv->patient->email}}
                                                </li>
                                                <li><i class="fa-solid fa-phone"></i>{{$rdv->patient->numero_tel}}</li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                @endif
                                @endforeach
                                @endif
                            </div>
                        </div>
                        <div class="tab-content appointment-tab-content accepte">
                            <div class="tab-pane fade show active" id="pills-upcoming" role="tabpanel" aria-labelledby="pills-upcoming-tab">
                                @if(isset($rdvs))
                                @foreach($rdvs as $key => $rdv)
                                @if($rdv->etat ==='accepte')
                                <div class="appointment-wrap">
                                    <ul>
                                        <li>
                                            <div class="patinet-information">
                                                <a href="doctor-upcoming-appointment.html">
                                                    <img src="assets/img/doctors-dashboard/profile-01.jpg" alt="User Image">
                                                </a>
                                                <div class="patient-info">
                                                    <p>#Apt0001</p>
                                                    <h6><a href="doctor-upcoming-appointment.html">{{$rdv->patient->nom}}</a></h6>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="appointment-info">
                                            <p><i class="fa-solid fa-clock"></i>{{$rdv->jour .' '. $rdv->horaire}}</p>
                                            <ul class="d-flex apponitment-types">
                                                <li>{{$rdv->motif}}</li>
                                            </ul>
                                        </li>
                                        <li class="mail-info-patient">
                                            <ul>
                                                <li><i class="fa-solid fa-envelope"></i>{{$rdv->patient->email}}
                                                </li>
                                                <li><i class="fa-solid fa-phone"></i>{{$rdv->patient->numero_tel}}</li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                @endif
                                @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const upcomingButton = document.getElementById('pills-upcoming-tab');
                const cancelButton = document.getElementById('pills-cancel-tab');
                const completeButton = document.getElementById('pills-complete-tab');

                const aVenirDiv = document.querySelector('.aVenir');
                const annuleDiv = document.querySelector('.annule');
                const accepteDiv = document.querySelector('.accepte');

                upcomingButton.addEventListener('click', function() {
                    aVenirDiv.style.display = 'block';
                    annuleDiv.style.display = 'none';
                    accepteDiv.style.display = 'none';
                    upcomingButton.classList.add('active');
                    const completeButton = document.getElementById('pills-complete-tab');
                    const cancelButton = document.getElementById('pills-cancel-tab');
                    cancelButton.classList.remove('active');
                    completeButton.classList.remove('active');
                });

                cancelButton.addEventListener('click', function() {
                    aVenirDiv.style.display = 'none';
                    annuleDiv.style.display = 'block';
                    accepteDiv.style.display = 'none';
                    cancelButton.classList.add('active');
                    const upcomingButton = document.getElementById('pills-upcoming-tab');
                    const completeButton = document.getElementById('pills-complete-tab');
                    upcomingButton.classList.remove('active');
                    completeButton.classList.remove('active');
                });

                completeButton.addEventListener('click', function() {
                    aVenirDiv.style.display = 'none';
                    annuleDiv.style.display = 'none';
                    accepteDiv.style.display = 'block';

                    completeButton.classList.add('active');
                    const upcomingButton = document.getElementById('pills-upcoming-tab');
                    const cancelButton = document.getElementById('pills-cancel-tab');
                    upcomingButton.classList.remove('active');
                    cancelButton.classList.remove('active');
                });
            });

        </script>
        <script src="{{ asset('public/assets/js/jquery-3.7.1.min.js') }}"></script>
        <script src="{{ asset('public/assets/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('public/assets/plugins/theia-sticky-sidebar/ResizeSensor.js') }}"></script>
        <script src="{{ asset('public/assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js') }}"></script>
        <script src="{{ asset('public/assets/js/moment.min.js') }}"></script>
        <script src="{{ asset('public/assets/js/bootstrap-datetimepicker.min.js') }}"></script>
        <script src="{{ asset('public/assets/plugins/select2/js/select2.min.js') }}"></script>
        <script src="{{ asset('public/assets/js/aos.js') }}"></script>
        <script src="{{ asset('public/assets/js/script.js') }}"></script>
        <script src="../../../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="a3af23efa9a8f95e5c98a8cc-|49" defer></script>
</body>


</html>
