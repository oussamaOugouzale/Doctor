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
                        <h2 class="breadcrumb-title">Doctor Profile</h2>
                        <nav aria-label="breadcrumb" class="page-breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="https://doccure.dreamstechnologies.com/laravel/template/public">Home</a></li>
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
                                        <img src="assets/img/doctors-dashboard/doctor-profile-img.jpg" alt="User Image">
                                    </a>
                                    <div class="profile-det-info">
                                        <h3><a href="doctor-profile.html">Dr {{Auth::guard('doctor')->user()->nom .' '.Auth::guard('doctor')->user()->prenom}}</a></h3>
                                        <div class="patient-details">
                                            <h5 class="mb-0">ttttttttttttttest, simthinnnng</h5>
                                        </div>
                                        <span class="badge doctor-role-badge"><i class="fa-solid fa-circle"></i>Dentist</span>
                                    </div>
                                </div>
                            </div>

                            <div class="dashboard-widget">
                                <nav class="dashboard-menu">
                                    <ul>
                                        <li class>
                                            <a href="{{route('dashboard')}}">
                                                <i class="fa-solid fa-shapes"></i>
                                                <span>Dashboard</span>
                                            </a>
                                        </li>
                                        
                                        <li class>
                                            <a href="appointments.html">
                                                <i class="fa-solid fa-calendar-days"></i>
                                                <span>Rendez-vous</span>
                                            </a>
                                        </li>
                                        <li class>
                                            <a href="my-patients.html">
                                                <i class="fa-solid fa-user-injured"></i>
                                                <span>Mes patients</span>
                                            </a>
                                        </li>
                                        <li class="active">
                                            <a href="doctor-profile-settings.html">
                                                <i class="fa-solid fa-user-pen"></i>
                                                <span>Paramétre du profil</span>
                                            </a>
                                        </li>
                                        <li class>
                                            <a href="doctor-change-password.html">
                                                <i class="fa-solid fa-key"></i>
                                                <span> Mot de passe</span>
                                            </a>
                                        </li>
                                        <li class>
                                            <form action="">
                                                <a href="login.html">
                                                    <i class="fa-solid fa-calendar-check"></i>
                                                    <span>Logout</span>
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
                            <h3>Profile Settings</h3>
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
                                        <a class="nav-link active" href="{{route('profile-settings-formations')}}">Spécialités</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="{{route('profile-settings-pratiques')}}">Pratiques et photo</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('profile-settings-hours')}}">Horaires de travail</a>
                                    </li>
                                </ul>
                            </div>
                        </div>


                        @php
                        $specialites = Auth::guard('doctor')->user()->specialites;
                        $formations = Auth::guard('doctor')->user()->formations;
                        @endphp

                        <form action="{{ route('doctorFormation') }}" method="POST">
                            @csrf
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

                            <div id="education-forms">
                                <div class="setting-title">
                                    <h5>Spécialités</h5>
                                </div>
                                <div class="setting-card">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-wrap">
                                                <label class="col-form-label">Spécialité principale</label>
                                                <input type="text" value="{{ $specialites ? $specialites->specialite : '' }}" class="form-control" name="specialite">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-wrap">
                                                <label class="col-form-label">Autre spécialité</label>
                                                <input type="text" value="{{ $specialites ? $specialites->autre_specialite : '' }}" class="form-control" name="autre_specialite">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="setting-title">
                                    <h5>Formations et Diplômes</h5>
                                </div>

                                <div id="formation-section">
                                    @if($formations->isEmpty())
                                    <div class="setting-card formation-card">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-wrap">
                                                    <label class="col-form-label">Nom de l'institution</label>
                                                    <input type="text" class="form-control" name="educations[0][institution_name]">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-wrap">
                                                    <label class="col-form-label">Formation</label>
                                                    <input type="text" class="form-control" name="educations[0][formation]">
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="form-wrap">
                                                    <label class="col-form-label">Date de début <span class="text-danger">*</span></label>
                                                    <div class="form-icon">
                                                        <input type="text" class="form-control datetimepicker" name="educations[0][start_date]">
                                                        <span class="icon"><i class="fa-regular fa-calendar-days"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="form-wrap">
                                                    <label class="col-form-label">Date de fin <span class="text-danger">*</span></label>
                                                    <div class="form-icon">
                                                        <input type="text" class="form-control datetimepicker" name="educations[0][end_date]">
                                                        <span class="icon"><i class="fa-regular fa-calendar-days"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="form-wrap">
                                                    <label class="col-form-label">Nombre d'années <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" name="educations[0][years]">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-wrap">
                                                    <label class="col-form-label">Description <span class="text-danger">*</span></label>
                                                    <textarea class="form-control" rows="3" name="educations[0][description]"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @else
                                    @foreach($formations as $index => $formation)
                                    <div class="setting-card formation-card">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-wrap">
                                                    <label class="col-form-label">Nom de l'institution</label>
                                                    <input type="text" value="{{ $formation->institution_name }}" class="form-control" name="educations[{{ $index }}][institution_name]">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-wrap">
                                                    <label class="col-form-label">Formation</label>
                                                    <input type="text" value="{{ $formation->formation }}" class="form-control" name="educations[{{ $index }}][formation]">
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="form-wrap">
                                                    <label class="col-form-label">Date de début <span class="text-danger">*</span></label>
                                                    <div class="form-icon">
                                                        <input type="text" value="{{ $formation->start_date }}" class="form-control datetimepicker" name="educations[{{ $index }}][start_date]">
                                                        <span class="icon"><i class="fa-regular fa-calendar-days"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="form-wrap">
                                                    <label class="col-form-label">Date de fin <span class="text-danger">*</span></label>
                                                    <div class="form-icon">
                                                        <input type="text" value="{{ $formation->end_date }}" class="form-control datetimepicker" name="educations[{{ $index }}][end_date]">
                                                        <span class="icon"><i class="fa-regular fa-calendar-days"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="form-wrap">
                                                    <label class="col-form-label">Nombre d'années <span class="text-danger">*</span></label>
                                                    <input type="text" value="{{ $formation->years }}" class="form-control" name="educations[{{ $index }}][years]">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-wrap">
                                                    <label class="col-form-label">Description <span class="text-danger">*</span></label>
                                                    <textarea class="form-control" rows="3" name="educations[{{ $index }}][description]">{{ $formation->description }}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    @endif
                                </div>
                            </div>

                            <div class="modal-btn">
                                <button type="button" class="btn btn-primary prime-btn" id="add-another">Ajouter une autre</button>
                            </div>
                            <div class="modal-btn text-end">
                                <button type="submit" class="btn btn-primary prime-btn">Enregistrer</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
        

    </div>

    <script>
        document.getElementById('add-another').addEventListener('click', function() {
            let formationSection = document.getElementById('formation-section');

            let lastFormationCard = formationSection.querySelector('.formation-card:last-of-type');

            let newFormationCard = lastFormationCard.cloneNode(true);

            let inputs = newFormationCard.querySelectorAll('input, textarea');
            inputs.forEach(function(input) {
                input.value = '';
                let name = input.getAttribute('name');
                if (name) {
                    let matches = name.match(/\[(\d+)\]/);
                    if (matches) {
                        let index = parseInt(matches[1]) + 1;
                        let newName = name.replace(/\[\d+\]/, '[' + index + ']');
                        input.setAttribute('name', newName);
                    }
                }
            });

            formationSection.appendChild(newFormationCard);
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
    <script>


    </script>

</body>

</html>
