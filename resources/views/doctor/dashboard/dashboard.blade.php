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
                        <a href="" class="navbar-brand logo">
                            <img src="assets/img/logo.png" class="img-fluid" alt="Logo">
                        </a>
                    </div>
                    <div class="main-menu-wrapper">
                        <div class="menu-header">
                            <a href="" class="menu-logo">
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
                                        <li class="active">
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
                        <div class="row">
                            <div class="col-xl-4 d-flex">
                                <div class="dashboard-box-col w-100">
                                    <div class="dashboard-widget-box">
                                        <div class="dashboard-content-info">
                                            <h6>Total Patients</h6>
                                            <h4>{{$totalRdv}}</h4>
                                        </div>
                                        <div class="dashboard-widget-icon">
                                            <span class="dash-icon-box"><i class="fa-solid fa-user-injured"></i></span>
                                        </div>
                                    </div>
                                    <div class="dashboard-widget-box">
                                        <div class="dashboard-content-info">
                                            <h6>Patients aujourd'hui</h6>
                                            <h4>{{$patientsToday}}</h4>
                                        </div>
                                        <div class="dashboard-widget-icon">
                                            <span class="dash-icon-box"><i class="fa-solid fa-user-clock"></i></span>
                                        </div>
                                    </div>
                                    <div class="dashboard-widget-box">
                                        <div class="dashboard-content-info">
                                            <h6>Rdv aujourd'hui</h6>
                                            <h4>{{$patientsToday}}</h4>
                                        </div>
                                        <div class="dashboard-widget-icon">
                                            <span class="dash-icon-box"><i class="fa-solid fa-calendar-days"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-8 d-flex">
                                <div class="dashboard-card w-100">
                                    <div class="dashboard-card-head">
                                        <div class="header-title">
                                            <h5>Rendez-vous</h5>
                                        </div>
                                        <div class="dropdown header-dropdown">

                                        </div>
                                    </div>
                                    <div class="dashboard-card-body">
                                        <div class="table-responsive">
                                            <table class="table dashboard-table appoint-table">
                                                <tbody>
                                                    @if(isset($rdvs))
                                                    @foreach($rdvs as $key => $rdv)
                                                    @if($rdv->etat !== 'annule')
                                                    <tr>
                                                        <td>
                                                            <div class="patient-info-profile">
                                                                <a href="" class="table-avatar">
                                                                    <img src="{assets/img/doctors-dashboard/profile-01.jpg}" alt="Img">
                                                                </a>
                                                                <div class="patient-name-info">
                                                                    <h5><a href="">
                                                                            {{$rdv->patient->nom .' '.$rdv->patient->prenom}}
                                                                        </a>
                                                                    </h5>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="appointment-date-created">
                                                                <h6>{{ $rdv->jour .' '.$rdv->horaire }}</h6>
                                                                <span class="badge table-badge">{{$rdv->motif}}</span>

                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="apponiment-actions d-flex align-items-center">
                                                                <a href="#" class="text-success-icon me-2" data-rdv-id="{{ $rdv->id }}"><i class="fa-solid fa-check"></i></a>
                                                                <a href="#" class="text-danger-icon" data-rdv-id="{{ $rdv->id }}"><i class="fa-solid fa-xmark"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    @endif
                                                    @endforeach
                                                    @endif

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const xmarkIcons = document.querySelectorAll('.text-danger-icon');
            const checkIcons = document.querySelectorAll('.text-success-icon');

            xmarkIcons.forEach(icon => {
                icon.addEventListener('click', function(event) {
                    event.preventDefault();

                    if (confirm('Êtes-vous sûr de vouloir annuler ce rendez-vous ?')) {
                        const rdvId = this.dataset.rdvId;

                        $.ajax({
                            url: '{{ route("cancelRdv") }}'
                            , method: 'POST'
                            , data: {
                                _token: '{{ csrf_token() }}'
                                , rdv_id: rdvId
                            }
                            , success: function(response) {
                                alert('Rendez-vous annulé avec succès');
                                location.reload();
                            }
                            , error: function(xhr) {
                                alert('Une erreur est survenue lors de l\'annulation du rendez-vous');
                            }
                        });
                    }
                });
            });

            checkIcons.forEach(icon => {
                icon.addEventListener('click', function(event) {
                    event.preventDefault();

                    if (confirm('Êtes-vous sûr de vouloir accepter ce rendez-vous ?')) {
                        const rdvId = this.dataset.rdvId;

                        $.ajax({
                            url: '{{ route("acceptRdv") }}'
                            , method: 'POST'
                            , data: {
                                _token: '{{ csrf_token() }}'
                                , rdv_id: rdvId
                            }
                            , success: function(response) {
                                alert('Rendez-vous accepté avec succès');
                                location.reload();
                            }
                            , error: function(xhr) {
                                alert('Une erreur est survenue lors de l\'acceptation du rendez-vous');
                            }
                        });
                    }
                });
            });
        });

    </script>



    <script src="assets/js/jquery-3.7.1.min.js" type="16918b8f4d623b629b9d01f0-text/javascript"></script>

    <script src="assets/js/bootstrap.bundle.min.js" type="16918b8f4d623b629b9d01f0-text/javascript"></script>

    <script src="assets/plugins/theia-sticky-sidebar/ResizeSensor.js" type="16918b8f4d623b629b9d01f0-text/javascript"></script>
    <script src="assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js" type="16918b8f4d623b629b9d01f0-text/javascript"></script>

    <script src="assets/plugins/apex/apexcharts.min.js" type="16918b8f4d623b629b9d01f0-text/javascript"></script>
    <script src="assets/plugins/apex/chart-data.js" type="16918b8f4d623b629b9d01f0-text/javascript"></script>

    <script src="assets/js/circle-progress.min.js" type="16918b8f4d623b629b9d01f0-text/javascript"></script>

    <script src="assets/plugins/select2/js/select2.min.js" type="16918b8f4d623b629b9d01f0-text/javascript"></script>

    <script src="assets/js/circle-progress.min.js" type="16918b8f4d623b629b9d01f0-text/javascript"></script>

    <script src="assets/js/aos.js" type="16918b8f4d623b629b9d01f0-text/javascript"></script>

    <script src="assets/js/script.js" type="16918b8f4d623b629b9d01f0-text/javascript"></script>
    <script src="../../../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="16918b8f4d623b629b9d01f0-|49" defer></script>
</body>


</html>
