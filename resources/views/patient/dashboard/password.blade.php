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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/datepicker.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@22.0.1/build/css/intlTelInput.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@22.0.1/build/css/intlTelInput.css">
    <script src="https://cdn.jsdelivr.net/npm/intl-tel-input@22.0.1/build/js/intlTelInput.min.js"></script>
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
                            <a href="{{route('patientLogout')}}">Se déconnecter</a>
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
                        <h2 class="breadcrumb-title">Dashboard</h2>
                        <nav aria-label="breadcrumb" class="page-breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="">Home</a>
                                </li>
                                <li class="breadcrumb-item" aria-current="page">Dashboard</li>
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
                                        <img src="" alt="User Image">
                                    </a>
                                    <div class="profile-det-info">
                                        <h3><a href=""> {{Auth::guard('patient')->user()->nom .' '.Auth::guard('patient')->user()->prenom}}</a></h3>
                                        <div class="patient-details">
                                            <h5 class="mb-0">ttttttttttttttest, somthinnnng</h5>
                                        </div>
                                        {{-- <span class="badge doctor-role-badge"><i class="fa-solid fa-circle"></i>{{Auth::guard('doctor')->user()->specialites->specialite}}</span> --}}
                                    </div>
                                </div>
                            </div>

                            <div class="dashboard-widget">
                                <nav class="dashboard-menu">
                                    <ul>


                                        <li class="">
                                            <a href="{{route('pat-appointments')}}">
                                                <i class="fa-solid fa-calendar-days"></i>
                                                <span>Mes Rendez-vous</span>
                                            </a>
                                        </li>

                                        <li class="">
                                            <a href="{{route('pat-profile-settings')}}">
                                                <i class="fa-solid fa-user-pen"></i>
                                                <span>Paramétre du profil</span>
                                            </a>
                                        </li>
                                        <li class="active">
                                            <a href="{{route('patient-password')}}">
                                                <i class="fa-solid fa-key"></i>
                                                <span> Mot de passe</span>
                                            </a>
                                        </li>
                                        <li class>
                                            <form action="">
                                                <a href="{{route('patientLogout')}}">
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
                            <h3>Change Password</h3>
                        </div>
                        <form action="{{route('patient-change-password')}}" method="POST">
                            @csrf
                            @if(session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                            @endif
                            <div class="card pass-card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="input-block input-block-new">
                                                <label class="form-label">Old Password</label>
                                                <input type="password" name="oldPassword" class="form-control">
                                            </div>
                                            @error('password')
                                            <p class="mt-2 text-sm text-red-600">{{$message}}</p>
                                            @enderror
                                            <div class="input-block input-block-new">
                                                <label class="form-label" for="newPassword">New Password</label>
                                                <div class="pass-group">
                                                    <input type="password" name="newPassword" class="form-control pass-input" id="newPassword">
                                                    <span class="feather-eye-off toggle-password" onclick="togglePasswordVisibility('newPassword')"></span>
                                                </div>
                                                @error('newPassword')
                                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                                @enderror
                                            </div>

                                            <div class="input-block input-block-new mb-0">
                                                <label class="form-label" for="newPassword_confirmation">Confirm Password</label>
                                                <div class="pass-group">
                                                    <input type="password" name="newPassword_confirmation" class="form-control pass-input-sub" id="newPassword_confirmation">
                                                    <span class="feather-eye-off toggle-password" onclick="togglePasswordVisibility('newPassword_confirmation')"></span>
                                                </div>
                                                @error('newPassword_confirmation')
                                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                                @enderror
                                            </div>




                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-set-button">
                                <button class="btn btn-primary" type="submit">Save Changes</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>




    <script>
        function togglePasswordVisibility(inputName) {
            const input = document.querySelector(`input[name="${inputName}"]`);
            const eyeIcon = document.querySelector(`.toggle-password-${inputName}`);

            if (input.type === 'password') {
                input.type = 'text';
                eyeIcon.classList.add('feather-eye');
            } else {
                input.type = 'password';
                eyeIcon.classList.remove('feather-eye');
            }
        }

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
