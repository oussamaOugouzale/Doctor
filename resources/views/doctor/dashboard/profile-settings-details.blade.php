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
                            <h3>Profile Settings</h3>
                        </div>

                        <div class="setting-tab">
                            <div class="appointment-tabs">
                                <ul class="nav">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="{{route('profile-settings-details')}}">Informations personnelles</a>
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
                                        <a class="nav-link" href="{{route('profile-settings-hours')}}">Horaires de travail</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="setting-title">
                            <h5>Profile</h5>
                        </div>
                        <form action="{{route('doctorInformations')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="setting-card">
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
                                <div class="change-avatar img-upload">
                                    <div class="profile-img">
                                        <i class="fa-solid fa-file-image" id="icon"></i>
                                        <img id="preview" src="#" alt="Image de Profil" style="display: none; max-width: 100px; max-height: 100px;" />
                                    </div>
                                    <div class="upload-img">
                                        <h5>Image de Profil</h5>
                                        <div class="imgs-load d-flex align-items-center">
                                            <div class="change-photo">
                                                Importer une image
                                                <input type="file" required class="upload" name="photo" accept=".jpg, .png, .svg" onchange="previewImage(event)">
                                            </div>
                                        </div>
                                        <p class="form-text">Votre image doit être inférieure à 4 Mo, formats acceptés : jpg, png, svg</p>
                                    </div>
                                </div>
                            </div>

                            <div class="setting-title">
                                <h5>INFORMATIONS PERSONELLES
                                </h5>
                            </div>
                            <div class="setting-card">
                                <div class="row">
                                    <div class="col-lg-4 col-md-6">
                                        <div class="form-wrap">
                                            <label class="col-form-label">Genre <span class="text-danger">*</span></label>
                                            <select class="form-control" required name="genre">
                                                <option value="" disabled selected>Genre</option>
                                                <option value="homme" {{ Auth::guard('doctor')->user()->genre === 'homme' ? 'selected' : '' }}>Homme</option>
                                                <option value="femme" {{ Auth::guard('doctor')->user()->genre === 'femme' ? 'selected' : '' }}>Femme</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="form-wrap">
                                            <label class="col-form-label">Nom <span class="text-danger">*</span></label>
                                            <input type="text" value="{{Auth::guard('doctor')->user()->nom}}" required name="nom" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="form-wrap">
                                            <label class="col-form-label">Prénom <span class="text-danger">*</span></label>
                                            <input type="text" value="{{Auth::guard('doctor')->user()->prenom}}" required name="prenom" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="form-wrap">
                                            <label class="col-form-label">numéro de téléphone <span class="text-danger">*</span></label>
                                            <input type="text" value="{{Auth::guard('doctor')->user()->numero_tel}}" required name="numero_tel" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="form-wrap">
                                            <label class="col-form-label">Adresse email <span class="text-danger">*</span></label>
                                            <input type="email" value="{{Auth::guard('doctor')->user()->email}}" required name="email" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-wrap">
                                            <label class="col-form-label">Languages parlés <span class="text-danger">*</span></label>
                                            <div class="input-block input-block-new mb-0">
                                                <input name="languages" value="{{Auth::guard('doctor')->user()->languages}}" required class="input-tags form-control" id="inputBox3" type="text" data-role="tagsinput" placeholder="Type New" name="Label" value="Français, Anglais">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 mt-5">
                                        <div class="form-wrap">
                                            <p>Pour des raisons de sécurité et afin de nous assurer de la pertinence des données sur notre plateforme, nous vous prions de nous envoyer une photo de votre carte de visite tamponnée ou bien votre permis d'exercice.</p>
                                            <label class="col-form-label">Import le Document <span class="text-danger">*</span></label>
                                            <input type="file" required class="form-control" name="document" accept="image/*">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-btn text-end">
                                <button type="submit" class="btn btn-primary prime-btn">Enregister</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        

    </div>

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
        function previewImage(event) {
            var icon = document.getElementById('icon');
            var preview = document.getElementById('preview');
            var file = event.target.files[0];
            var reader = new FileReader();

            reader.onload = function() {
                preview.src = reader.result;
                preview.style.display = 'block';
                icon.style.display = 'none';
            };

            if (file) {
                reader.readAsDataURL(file);
            } else {
                preview.style.display = 'none';
                icon.style.display = 'block';
            }
        }

    </script>

</body>

</html>
