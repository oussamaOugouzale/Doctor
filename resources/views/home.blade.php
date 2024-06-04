<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <title>Doccure</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="The responsive professional Doccure template offers many features, like scheduling appointments with  top doctors, clinics, and hospitals via voice, video call & chat.">
    <meta name="keywords" content="practo clone, doccure, doctor appointment, Practo clone html template, doctor booking template">
    <meta name="author" content="Practo Clone HTML Template - Doctor Booking Template">
    <meta property="og:url" content="https://doccure.dreamstechnologies.com/html/">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Doctors Appointment HTML Website Templates | Doccure">
    <meta property="og:description" content="The responsive professional Doccure template offers many features, like scheduling appointments with  top doctors, clinics, and hospitals via voice, video call & chat.">
    <meta property="og:image" content="assets/img/preview-banner.jpg">
    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:domain" content="https://doccure.dreamstechnologies.com/html/">
    <meta property="twitter:url" content="https://doccure.dreamstechnologies.com/html/">
    <meta name="twitter:title" content="Doctors Appointment HTML Website Templates | Doccure">
    <meta name="twitter:description" content="The responsive professional Doccure template offers many features, like scheduling appointments with  top doctors, clinics, and hospitals via voice, video call & chat.">
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
                        <li class="nav-item">
                            <a class="nav-link header-login" href="{{route('loginForm')}}"><img src="assets/img/icons/user-circle.svg" alt="img">Connexion /
                                Inscription </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>


        <section class="doctor-search-section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7 aos" data-aos="fade-up">
                        <div class="doctor-search">
                            <div class="banner-header">
                                <h2><span>Rechercher un Médecin,</span> Prendre un Rendez-vous</h2>
                                <p>Sélectionnez votre médecin, choisissez la date et l'heure de votre rdv et recevez votre sms/mail de confirmation. C’est aussi simple que ça !.</p>
                            </div>
                            <div class="doctor-form">
                                @if(session('error'))
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    {{ session('error') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                                @endif
                                @if(session('notfound'))
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    {{ session('notfound') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                                @endif
                                <form action="{{route('doctorSearch')}}" id="searchForm" method="POST" class="doctor-search">
                                    @csrf
                                    <div class="input-box-twelve">
                                        <div class="search-input input-block">
                                            <input type="text" name="localisation" class="form-control" placeholder="Localisation">
                                            <a class="current-loc-icon current_location" href="javascript:void(0);">
                                                <i class="fa-solid fa-location-crosshairs"></i>
                                            </a>
                                        </div>
                                        <div class="search-input input-block">
                                            <select class="select form-control" name="specialite">
                                                <option value="" selected="">Sélectionnez votre spécialité</option>
                                                <option value="13">Cardiologue</option>
                                                <option value="24">Chirurgien Esthétique</option>
                                                <option value="20">Chirurgien Orthopédiste Traumatologue</option>
                                                <option value="29">Dentiste</option>
                                                <option value="30">Dermatologue</option>
                                                <option value="33">Endocrinologue Diabétologue</option>
                                                <option value="35">Gastro-entérologue</option>
                                                <option value="36">Généraliste</option>
                                                <option value="39">Gynécologue Obstétricien</option>
                                                <option value="49">Interniste</option>
                                                <option value="154">Laboratoire d'analyses de biologie médicale</option>
                                                <option value="62">Néphrologue</option>
                                                <option value="64">Neurologue</option>
                                                <option value="65">Nutritionniste</option>
                                                <option value="66">Ophtalmologiste</option>
                                                <option value="70">Oto-Rhino-Laryngologiste (ORL)</option>
                                                <option value="72">Pédiatre</option>
                                                <option value="78">Pneumologue</option>
                                                <option value="93">Psychiatre</option>
                                                <option value="94">Psychothérapeute</option>
                                                <option value="80">Radiologue</option>
                                                <option value="87">Rhumatologue</option>
                                                <option value="95">Sexologue</option>
                                                <option value="92">Urologue</option>
                                                <optgroup label="Autres spécialités">
                                                    <option value="111">Acupuncture</option>
                                                    <option value="120">Addictologue</option>
                                                    <option value="121">Algologue</option>
                                                    <option value="89">Allergologue</option>
                                                    <option value="1">Anatomo-Cyto-Pathologiste</option>
                                                    <option value="122">Andrologue</option>
                                                    <option value="2">Anesthésiste-Réanimateur</option>
                                                    <option value="3">Angiologue</option>
                                                    <option value="160">Audiologiste</option>
                                                    <option value="106">Audioprothésiste</option>
                                                    <option value="172">Auriculothérapeute</option>
                                                    <option value="6">Biochimiste</option>
                                                    <option value="4">Biochimiste Clinique</option>
                                                    <option value="5">Biologiste Medicale</option>
                                                    <option value="10">Biophysique</option>
                                                    <option value="12">Cancérologue</option>
                                                    <option value="179">Cardiologue pédiatrique</option>
                                                    <option value="153">Centre d'imagerie médicale</option>
                                                    <option value="161">Chiropracteur</option>
                                                    <option value="182">Chirurgie Arthroscopique et du Sport</option>
                                                    <option value="158">Chirurgie plastique et réparatrice</option>
                                                    <option value="26">Chirurgien</option>
                                                    <option value="178">Chirurgien Buccal</option>
                                                    <option value="14">Chirurgien Cancérologue</option>
                                                    <option value="143">Chirurgien capillaire</option>
                                                    <option value="15">Chirurgien Cardio-Vasculaire</option>
                                                    <option value="16">Chirurgien Cardio-Vasculaire Thoracique</option>
                                                    <option value="177">Chirurgien cervico-facial</option>
                                                    <option value="133">Chirurgien de l'obésité</option>
                                                    <option value="17">Chirurgien Généraliste</option>
                                                    <option value="151">Chirurgien Maxillo Facial et Esthétique</option>
                                                    <option value="91">Chirurgien Maxillo Facial Stomatologue</option>
                                                    <option value="174">Chirurgien Orthopédiste Pédiatrique</option>
                                                    <option value="21">Chirurgien Pédiatrique</option>
                                                    <option value="22">Chirurgien Plasticien</option>
                                                    <option value="27">Chirurgien Thoracique</option>
                                                    <option value="25">Chirurgien Urologue</option>
                                                    <option value="144">Chirurgien vasculaire</option>
                                                    <option value="132">Chirurgien viscéral et digestif</option>
                                                    <option value="31">Diabétologue</option>
                                                    <option value="101">Diététicien</option>
                                                    <option value="43">Embryologiste</option>
                                                    <option value="32">Endocrinologue</option>
                                                    <option value="150">Endodontiste</option>
                                                    <option value="137">Epidemiologiste</option>
                                                    <option value="142">Ergothérapeute</option>
                                                    <option value="117">Généticien</option>
                                                    <option value="102">Gériatre</option>
                                                    <option value="41">Hématologue</option>
                                                    <option value="42">Hématologue Clinique</option>
                                                    <option value="7">Hématopathologiste</option>
                                                    <option value="110">Hépatologue</option>
                                                    <option value="116">Hypnothérapeute</option>
                                                    <option value="44">Imagerie
                                                </optgroup>
                                            </select> </div>
                                        <div class="search-input input-block">
                                            <input type="text" class="form-control" name="nom" placeholder=" Médecin">
                                        </div>
                                        <div class="input-block">
                                            <div class="search-btn-info">
                                                <a href="" onclick="event.preventDefault() 
                                                document.getElementById('searchForm').submit()
                                                "><i class="fa-solid fa-magnifying-glass"></i>Search</a>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 aos" data-aos="fade-up">
                        <img src="assets/img/banner/doctor-banner.png" class="img-fluid dr-img" alt="doctor-image">
                    </div>
                </div>
            </div>
        </section>


        <section class="clinics-section">
            <div class="shapes">
                <img src="assets/img/shapes/shape-1.png" alt="shape-image" class="img-fluid shape-1">
                <img src="assets/img/shapes/shape-2.png" alt="shape-image" class="img-fluid shape-2">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 mt-10 aos" data-aos="fade-up">
                        <div class="section-heading">
                            <h2>Clinic & Specialities</h2>
                            <p>Access to expert physicians and surgeons, advanced technologies and top-quality surgery
                                facilities right here.</p>
                        </div>
                    </div>
                    <div class="col-md-6 text-end aos" data-aos="fade-up">
                        <div class="owl-nav slide-nav-1 text-end nav-control"></div>
                    </div>
                </div>
                <div class="owl-carousel clinics owl-theme aos" data-aos="fade-up">
                    <div class="item">
                        <div class="clinic-item">
                            <div class="clinics-card">
                                <div class="clinics-img">
                                    <img src="assets/img/clinic/clinic-1.jpg" alt="clinic-image" class="img-fluid">
                                </div>
                                <div class="clinics-info">
                                    <span class="clinic-img">
                                        <img src="assets/img/category/category-01.svg" alt="kidney-image" class="img-fluid">
                                    </span>
                                    <a href="#"><span>Urology</span></a>
                                </div>
                            </div>
                            <div class="clinics-icon">
                                <a href="#"><i class="fas fa-long-arrow-alt-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="clinic-item">
                            <div class="clinics-card">
                                <div class="clinics-img">
                                    <img src="assets/img/clinic/clinic-2.jpg" alt="clinic-image" class="img-fluid">
                                </div>
                                <div class="clinics-info">
                                    <span class="clinic-img">
                                        <img src="assets/img/category/category-02.svg" alt="bone-image" class="img-fluid">
                                    </span>
                                    <a href="#"><span>Orthopedic</span></a>
                                </div>
                            </div>
                            <div class="clinics-icon">
                                <a href="#"><i class="fas fa-long-arrow-alt-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="clinic-item">
                            <div class="clinics-card">
                                <div class="clinics-img">
                                    <img src="assets/img/clinic/clinic-4.jpg" alt="client-image" class="img-fluid">
                                </div>
                                <div class="clinics-info">
                                    <span class="clinic-img">
                                        <img src="assets/img/category/category-03.svg" alt="heart-image" class="img-fluid">
                                    </span>
                                    <a href="#"><span>Cardiologist</span></a>
                                </div>
                            </div>
                            <div class="clinics-icon">
                                <a href="#"><i class="fas fa-long-arrow-alt-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="clinic-item">
                            <div class="clinics-card">
                                <div class="clinics-img">
                                    <img src="assets/img/clinic/clinic-3.jpg" alt="client-image" class="img-fluid">
                                </div>
                                <div class="clinics-info">
                                    <span class="clinic-img">
                                        <img src="assets/img/category/category-04.svg" alt="teeth-image" class="img-fluid">
                                    </span>
                                    <a href="#"><span>Dentist</span></a>
                                </div>
                            </div>
                            <div class="clinics-icon">
                                <a href="#"><i class="fas fa-long-arrow-alt-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="clinic-item">
                            <div class="clinics-card">
                                <div class="clinics-img">
                                    <img src="assets/img/clinic/clinic-5.jpg" alt="client-image" class="img-fluid">
                                </div>
                                <div class="clinics-info">
                                    <span class="clinic-img">
                                        <img src="assets/img/category/category-05.svg" alt="brain-image" class="img-fluid">
                                    </span>
                                    <a href="#"><span>Neurology</span></a>
                                </div>
                            </div>
                            <div class="clinics-icon">
                                <a href="#"><i class="fas fa-long-arrow-alt-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="clinic-item">
                            <div class="clinics-card">
                                <div class="clinics-img">
                                    <img src="assets/img/clinic/clinic-1.jpg" alt="clinic-image" class="img-fluid">
                                </div>
                                <div class="clinics-info">
                                    <span class="clinic-img">
                                        <img src="assets/img/category/category-06.svg" alt="heart-image" class="img-fluid">
                                    </span>
                                    <a href="#"><span>Cardiologist</span></a>
                                </div>
                            </div>
                            <div class="clinics-icon">
                                <a href="#"><i class="fas fa-long-arrow-alt-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="specialities-section">
            <div class="shapes">
                <img src="assets/img/shapes/shape-3.png" alt="shape-image" class="img-fluid shape-3">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 aos" data-aos="fade-up">
                        <div class="section-heading bg-area">
                            <h2>Browse by Specialities</h2>
                            <p>Find experienced doctors across all specialties</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-6 aos" data-aos="fade-up">
                        <div class="specialist-card d-flex">
                            <div class="specialist-img">
                                <img src="assets/img/category/1.png" alt="kidney-image" class="img-fluid">
                            </div>
                            <div class="specialist-info">
                                <a href="#">
                                    <h4>Urology</h4>
                                </a>
                                <p>21 Doctors</p>
                            </div>
                            <div class="specialist-nav ms-auto">
                                <a href="#"><i class="fas fa-long-arrow-alt-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 aos" data-aos="fade-up">
                        <div class="specialist-card d-flex">
                            <div class="specialist-img">
                                <img src="assets/img/category/2.png" alt="bone-image" class="img-fluid">
                            </div>
                            <div class="specialist-info">
                                <a href="#">
                                    <h4>Orthopedic</h4>
                                </a>
                                <p>30 Doctors</p>
                            </div>
                            <div class="specialist-nav ms-auto">
                                <a href="#"><i class="fas fa-long-arrow-alt-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 aos" data-aos="fade-up">
                        <div class="specialist-card d-flex">
                            <div class="specialist-img">
                                <img src="assets/img/category/4.png" alt="heart-image" class="img-fluid">
                            </div>
                            <div class="specialist-info">
                                <a href="#">
                                    <h4>Cardiologist</h4>
                                </a>
                                <p>15 Doctors</p>
                            </div>
                            <div class="specialist-nav ms-auto">
                                <a href="#"><i class="fas fa-long-arrow-alt-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 aos" data-aos="fade-up">
                        <div class="specialist-card d-flex">
                            <div class="specialist-img">
                                <img src="assets/img/category/5.png" alt="brain-image" class="img-fluid">
                            </div>
                            <div class="specialist-info">
                                <a href="#">
                                    <h4>Dentist</h4>
                                </a>
                                <p>35 Doctors</p>
                            </div>
                            <div class="specialist-nav ms-auto">
                                <a href="#"><i class="fas fa-long-arrow-alt-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 aos" data-aos="fade-up">
                        <div class="specialist-card d-flex">
                            <div class="specialist-img">
                                <img src="assets/img/category/3.png" alt="brain-image" class="img-fluid">
                            </div>
                            <div class="specialist-info">
                                <a href="#">
                                    <h4>Neurology</h4>
                                </a>
                                <p>25 Doctors</p>
                            </div>
                            <div class="specialist-nav ms-auto">
                                <a href="#"><i class="fas fa-long-arrow-alt-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 aos" data-aos="fade-up">
                        <div class="specialist-card d-flex">
                            <div class="specialist-img">
                                <img src="assets/img/category/6.png" alt="bone-image" class="img-fluid">
                            </div>
                            <div class="specialist-info">
                                <a href="#">
                                    <h4>Pediatrist</h4>
                                </a>
                                <p>10 Doctors</p>
                            </div>
                            <div class="specialist-nav ms-auto">
                                <a href="#"><i class="fas fa-long-arrow-alt-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 aos" data-aos="fade-up">
                        <div class="specialist-card d-flex">
                            <div class="specialist-img">
                                <img src="assets/img/category/7.png" alt="heart-image" class="img-fluid">
                            </div>
                            <div class="specialist-info">
                                <a href="#">
                                    <h4>Veterinary</h4>
                                </a>
                                <p>20 Doctors</p>
                            </div>
                            <div class="specialist-nav ms-auto">
                                <a href="#"><i class="fas fa-long-arrow-alt-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 aos" data-aos="fade-up">
                        <div class="specialist-card d-flex">
                            <div class="specialist-img">
                                <img src="assets/img/category/8.png" alt="kidney-image" class="img-fluid">
                            </div>
                            <div class="specialist-info">
                                <a href="#">
                                    <h4>Psychiatrist</h4>
                                </a>
                                <p>12 Doctors</p>
                            </div>
                            <div class="specialist-nav ms-auto">
                                <a href="#"><i class="fas fa-long-arrow-alt-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="our-doctors-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 aos" data-aos="fade-up">
                        <div class="section-heading">
                            <h2>Book Our Best Doctor</h2>
                            <p>Meet our experts & book online</p>
                        </div>
                    </div>
                    <div class="col-md-6 text-end aos" data-aos="fade-up">
                        <div class="owl-nav slide-nav-2 text-end nav-control"></div>
                    </div>
                </div>
                <div class="owl-carousel our-doctors owl-theme aos" data-aos="fade-up">
                    <div class="item">
                        <div class="our-doctors-card">
                            <div class="doctors-header">
                                <a href="#"><img src="assets/img/doctors/doctor-01.jpg" alt="Ruby Perrin" class="img-fluid"></a>
                                <div class="img-overlay">
                                    <span>$20 - $50</span>
                                </div>
                            </div>
                            <div class="doctors-body">
                                <div class="rating">
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <span class="d-inline-block average-ratings">3.5</span>
                                </div>
                                <a href="doctor-profile.html">
                                    <h4>Dr. Ruby Perrin</h4>
                                </a>
                                <p>BDS, MDS - Oral & Maxillofacial Surgery</p>
                                <div class="location d-flex">
                                    <p><i class="fas fa-map-marker-alt"></i> Georgia, USA</p>
                                    <p class="ms-auto"><i class="fas fa-user-md"></i> 450 Consultations</p>
                                </div>
                                <div class="row row-sm">
                                    <div class="col-6">
                                        <a href="doctor-profile.html" class="btn view-btn" tabindex="0">View
                                            Profile</a>
                                    </div>
                                    <div class="col-6">
                                        <a href="booking.html" class="btn book-btn" tabindex="0">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="our-doctors-card">
                            <div class="doctors-header">
                                <a href="#"><img src="assets/img/doctors/doctor-04.jpg" alt="Deborah Angel" class="img-fluid"></a>
                                <div class="img-overlay">
                                    <span>$30 -$60</span>
                                </div>
                            </div>
                            <div class="doctors-body">
                                <div class="rating">
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <span class="d-inline-block average-ratings">3.0</span>
                                </div>
                                <a href="doctor-profile.html">
                                    <h4>Dr. Lisa Graham</h4>
                                </a>
                                <p>MBBS, MD - Cardialogist</p>
                                <div class="location d-flex">
                                    <p><i class="fas fa-map-marker-alt"></i> San Diego, USA</p>
                                    <p class="ms-auto"><i class="fas fa-user-md"></i> 120 Consultations</p>
                                </div>
                                <div class="row row-sm">
                                    <div class="col-6">
                                        <a href="doctor-profile.html" class="btn view-btn" tabindex="0">View
                                            Profile</a>
                                    </div>
                                    <div class="col-6">
                                        <a href="booking.html" class="btn book-btn" tabindex="0">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="our-doctors-card">
                            <div class="doctors-header">
                                <a href="#"><img src="assets/img/doctors/doctor-03.jpg" alt="Sofia Brient" class="img-fluid"></a>
                                <div class="img-overlay">
                                    <span>$15 -$30</span>
                                </div>
                            </div>
                            <div class="doctors-body">
                                <div class="rating">
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <span class="d-inline-block average-ratings">3.0</span>
                                </div>
                                <a href="doctor-profile.html">
                                    <h4>Dr. Carrie Soderberg</h4>
                                </a>
                                <p>MBBS, DNB - Neurology</p>
                                <div class="location d-flex">
                                    <p><i class="fas fa-map-marker-alt"></i> Dallas, USA</p>
                                    <p class="ms-auto"><i class="fas fa-user-md"></i> 300 Consultations</p>
                                </div>
                                <div class="row row-sm">
                                    <div class="col-6">
                                        <a href="doctor-profile.html" class="btn view-btn" tabindex="0">View
                                            Profile</a>
                                    </div>
                                    <div class="col-6">
                                        <a href="booking.html" class="btn book-btn" tabindex="0">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="our-doctors-card">
                            <div class="doctors-header">
                                <a href="#"><img src="assets/img/doctors/doctor-02.jpg" alt="Darren Elder" class="img-fluid"></a>
                                <div class="img-overlay">
                                    <span>$20 - $50</span>
                                </div>
                            </div>
                            <div class="doctors-body">
                                <div class="rating">
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <span class="d-inline-block average-ratings">4.0</span>
                                </div>
                                <a href="doctor-profile.html">
                                    <h4>Dr. Matthew Ruiz</h4>
                                </a>
                                <p>BDS, MDS - Oral & Maxillofacial Surgery</p>
                                <div class="location d-flex">
                                    <p><i class="fas fa-map-marker-alt"></i> Georgia, USA</p>
                                    <p class="ms-auto"><i class="fas fa-user-md"></i> 450 Consultations</p>
                                </div>
                                <div class="row row-sm">
                                    <div class="col-6">
                                        <a href="doctor-profile.html" class="btn view-btn" tabindex="0">View
                                            Profile</a>
                                    </div>
                                    <div class="col-6">
                                        <a href="booking.html" class="btn book-btn" tabindex="0">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="clinic-features-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 aos" data-aos="fade-up">
                        <div class="section-heading">
                            <h2>Availabe Features in Our Clinic</h2>
                            <p>Meet our Experts & Book Online</p>
                        </div>
                    </div>
                    <div class="col-md-6 text-end aos" data-aos="fade-up">
                        <div class="owl-nav slide-nav-3 text-end nav-control"></div>
                    </div>
                </div>
                <div class="owl-carousel clinic-feature owl-theme aos" data-aos="fade-up">
                    <div class="item">
                        <div class="clinic-features">
                            <img src="assets/img/clinic/clinic-6.jpg" alt="clinic-image" class="img-fluid">
                        </div>
                        <div class="clinic-feature-overlay">
                            <a href="#" class="img-overlay">Operation</a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="clinic-features">
                            <img src="assets/img/clinic/clinic-7.jpg" alt="clinic-image" class="img-fluid">
                        </div>
                        <div class="clinic-feature-overlay">
                            <a href="#" class="img-overlay">Medical</a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="clinic-features">
                            <img src="assets/img/clinic/clinic-8.jpg" alt="clinic-image" class="img-fluid">
                        </div>
                        <div class="clinic-feature-overlay">
                            <a href="#" class="img-overlay">Patient Ward</a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="clinic-features">
                            <img src="assets/img/clinic/clinic-9.jpg" alt="clinic-image" class="img-fluid">
                        </div>
                        <div class="clinic-feature-overlay">
                            <a href="#" class="img-overlay">Test Room</a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="clinic-features">
                            <img src="assets/img/clinic/clinic-10.jpg" alt="clinic-image" class="img-fluid">
                        </div>
                        <div class="clinic-feature-overlay">
                            <a href="#" class="img-overlay">ICU</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="our-blog-section blogs-three">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 aos" data-aos="fade-up">
                        <div class="section-heading">
                            <h2>Blogs and News</h2>
                            <p>Read Professional Articles and Latest Articles</p>
                        </div>
                    </div>
                    <div class="col-md-6 text-end aos" data-aos="fade-up">
                        <div class="owl-nav slide-nav-4 text-end nav-control"></div>
                    </div>
                </div>
                <div class="owl-carousel blogs owl-theme aos" data-aos="fade-up">
                    <div class="item">
                        <div class="our-blogs">
                            <div class="blogs-img">
                                <a href="blog-details.html"><img src="assets/img/blog/blog-26.jpg" alt="blog-image" class="img-fluid"></a>
                                <div class="blogs-overlay d-flex">
                                    <img src="assets/img/clients/client-11.jpg" alt="Ruby Perrin" class="img-fluid">
                                    <span class="blogs-writter">Ruby Perrin</span>
                                </div>
                            </div>
                            <div class="blogs-info">
                                <span class="blog-slug">Urology</span>
                                <h4><a href="blog-details.html">Revolutionizing Healthcare: The Rise of Online Doctor
                                        Booking</a></h4>
                                <p>Explore how online doctor booking is revolutionize access to healthcare efficiency.
                                </p>
                                <div class="blogs-nav d-flex align-items-center justify-content-between">
                                    <span class="blogs-time"><i class="fa-regular fa-calendar-days"></i> 03 Apr 2024</span>
                                    <a href="blog-details.html" class="blogs-btn">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="our-blogs">
                            <div class="blogs-img">
                                <a href="blog-details.html"><img src="assets/img/blog/blog-27.jpg" alt="blog-image" class="img-fluid"></a>
                                <div class="blogs-overlay d-flex">
                                    <img src="assets/img/clients/client-12.jpg" alt="Ruby Perrin" class="img-fluid">
                                    <span class="blogs-writter">Lynette Williams</span>
                                </div>
                            </div>
                            <div class="blogs-info">
                                <span class="blog-slug">Neurology</span>
                                <h4><a href="blog-details.html">Neurology and Technology: A New Frontier in Brain
                                        Health</a></h4>
                                <p>Discover the intersection of technology and neurology, transforming treatments.
                                </p>
                                <div class="blogs-nav d-flex align-items-center justify-content-between">
                                    <span class="blogs-time"><i class="fa-regular fa-calendar-days"></i> 10 Apr 2024</span>
                                    <a href="blog-details.html" class="blogs-btn">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="our-blogs">
                            <div class="blogs-img">
                                <a href="blog-details.html"><img src="assets/img/blog/blog-28.jpg" alt="blog-image" class="img-fluid"></a>
                                <div class="blogs-overlay d-flex">
                                    <img src="assets/img/clients/client-03.jpg" alt="Ruby Perrin" class="img-fluid">
                                    <span class="blogs-writter">Mathew Rulz</span>
                                </div>
                            </div>
                            <div class="blogs-info">
                                <span class="blog-slug">Orthopedic</span>
                                <h4><a href="blog-details.html">Beating Strong: The Digital Revolution in Cardiac
                                        Care</a></h4>
                                <p>Discover how digital advancements are transforming cardiac care, making heart health.
                                </p>
                                <div class="blogs-nav d-flex align-items-center justify-content-between">
                                    <span class="blogs-time"><i class="fa-regular fa-calendar-days"></i> 15 Apr 2024</span>
                                    <a href="blog-details.html" class="blogs-btn">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="our-blogs">
                            <div class="blogs-img">
                                <a href="blog-details.html"><img src="assets/img/blog/blog-29.jpg" alt="blog-image" class="img-fluid"></a>
                                <div class="blogs-overlay d-flex">
                                    <img src="assets/img/clients/client-09.jpg" alt="Sofia Brient" class="img-fluid">
                                    <span class="blogs-writter">Sofia Brient</span>
                                </div>
                            </div>
                            <div class="blogs-info">
                                <span class="blog-slug">Ophthalmology</span>
                                <h4><a href="blog-details.html">Understanding and Preventing Glaucoma: A Detailed
                                        Guide</a></h4>
                                <p>Glaucoma is a leading cause of blindness worldwide, yet many do not realize they have it</p>
                                <div class="blogs-nav d-flex align-items-center justify-content-between">
                                    <span class="blogs-time"><i class="fa-regular fa-calendar-days"></i> 18 Apr 2024</span>
                                    <a href="blog-details.html" class="blogs-btn">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="our-blogs">
                            <div class="blogs-img">
                                <a href="blog-details.html"><img src="assets/img/blog/blog-30.jpg" alt="blog-image" class="img-fluid"></a>
                                <div class="blogs-overlay d-flex">
                                    <img src="assets/img/clients/client-02.jpg" alt="Olga Barlow" class="img-fluid">
                                    <span class="blogs-writter">Olga Barlow</span>
                                </div>
                            </div>
                            <div class="blogs-info">
                                <span class="blog-slug">Dental Care</span>
                                <h4><a href="blog-details.html">5 Essential Tips for Maintaining Optimal Oral
                                        Health</a></h4>
                                <p>Learn the top five daily practices to keep your teeth and gums healthy. </p>
                                <div class="blogs-nav d-flex align-items-center justify-content-between">
                                    <span class="blogs-time"><i class="fa-regular fa-calendar-days"></i> 18 Apr 2024</span>
                                    <a href="blog-details.html" class="blogs-btn">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="our-blogs">
                            <div class="blogs-img">
                                <a href="blog-details.html"><img src="assets/img/blog/blog-31.jpg" alt="blog-image" class="img-fluid"></a>
                                <div class="blogs-overlay d-flex">
                                    <img src="assets/img/clients/client-04.jpg" alt="Linda Tobin" class="img-fluid">
                                    <span class="blogs-writter">Linda Tobin</span>
                                </div>
                            </div>
                            <div class="blogs-info">
                                <span class="blog-slug">Veterinary</span>
                                <h4><a href="blog-details.html">Pet Emergencies: How to Recognize and React</a></h4>
                                <p>This critical guide covers the most common emergencies seen in pets, including choking.</p>
                                <div class="blogs-nav d-flex align-items-center justify-content-between">
                                    <span class="blogs-time"><i class="fa-regular fa-calendar-days"></i> 24 Apr 2024</span>
                                    <a href="blog-details.html" class="blogs-btn">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <div class="progress-wrap active-progress">
            <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919px, 307.919px; stroke-dashoffset: 228.265px;">
                </path>
            </svg>
        </div>


        <footer class="footer footer-three">

            <div class="footer-top">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">

                            <div class="footer-widget footer-about">
                                <div class="footer-logo">
                                    <img src="assets/img/footer-logo.png" alt="logo">
                                </div>
                                <div class="footer-about-content">
                                    <p>Effortlessly schedule your medical appointments with Doccure. Connect with healthcare
                                        professionals, manage appointments & prioritize your well being </p>
                                    <div class="social-icon">
                                        <ul>
                                            <li> <a href="javascript:void(0);"><i class="fa-brands fa-facebook"></i></a>
                                            </li>
                                            <li> <a href="javascript:void(0);"><i class="fab fa-twitter"></i> </a>
                                            </li>
                                            <li> <a href="javascript:void(0);"><i class="fab fa-linkedin-in"></i></a>
                                            </li>
                                            <li> <a href="javascript:void(0);"><i class="fab fa-instagram"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-3 col-md-6">

                            <div class="footer-widget footer-menu">
                                <h2 class="footer-title">For Patients</h2>
                                <ul>
                                    <li><a href="search.html">Search for Doctors</a>
                                    </li>
                                    <li><a href="login.html">Login</a>
                                    </li>
                                    <li><a href="register.html">Register</a>
                                    </li>
                                    <li><a href="booking.html">Booking</a>
                                    </li>
                                    <li><a href="patient-dashboard.html">Patient Dashboard</a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                        <div class="col-lg-3 col-md-6">

                            <div class="footer-widget footer-menu">
                                <h2 class="footer-title">For Doctors</h2>
                                <ul>
                                    <li><a href="appointments.html">Appointments</a>
                                    </li>
                                    <li><a href="chat.html">Chat</a>
                                    </li>
                                    <li><a href="login.html">Login</a>
                                    </li>
                                    <li><a href="doctor-register.html">Register</a>
                                    </li>
                                    <li><a href="doctor-dashboard.html">Doctor Dashboard</a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                        <div class="col-lg-3 col-md-6">

                            <div class="footer-widget footer-contact">
                                <h2 class="footer-title">Contact Us</h2>
                                <div class="footer-contact-info">
                                    <div class="footer-address"> <span><i class="fas fa-map-marker-alt"></i></span>
                                        <p>3556 Beech Street, San Francisco,
                                            <br>California, CA 94108
                                        </p>
                                    </div>
                                    <p class="mb-0"> <i class="fas fa-envelope"></i>
                                        <a href="https://doccure.dreamstechnologies.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="ff9b909c9c8a8d9abf9a879e928f939ad19c9092">[email&#160;protected]</a></p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>


            <div class="footer-bottom">
                <div class="container-fluid">

                    <div class="copyright">
                        <div class="row">
                            <div class="col-md-6 col-lg-6">
                                <div class="copyright-text">
                                    <p class="mb-0">Copyright © 2024 Doccure. All Rights Reserved</p>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6">

                                <div class="copyright-menu">
                                    <ul class="policy-menu">
                                        <li><a href="terms-condition.html">Terms and Conditions</a>
                                        </li>
                                        <li><a href="privacy-policy.html">Policy</a>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </footer>


        <div class="mouse-cursor cursor-outer"></div>
        <div class="mouse-cursor cursor-inner"></div>

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
