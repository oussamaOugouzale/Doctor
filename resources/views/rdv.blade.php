<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Doccure</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" href="{{ asset('assets/img/favicon.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">

    <style>
        .timing {
    display: inline-block;
    margin: 5px;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    text-align: center;
    cursor: pointer;
    color: #333;
    background-color: #f8f9fa; /* Default Bootstrap button background color */
}

.timing:hover {
    background-color: #f0f0f0 !important; /* Force hover background color */
}

.timing.unselected {
    background-color: #ffcccc !important; /* Force unselected background color */
    color: #a00 !important; /* Force unselected text color */
    cursor: not-allowed;
}

.timing.reserved {
    background-color: #ffdddd !important;  /* Force reserved background color */
    color: #a00 !important;                /* Force reserved text color */
    cursor: not-allowed;                   /* Change cursor to indicate it's not clickable */
}

.timing.selected {
    background-color: #66cc66 !important;  /* Force selected background color */
    color: #fff !important;                /* Force selected text color */
}


    </style>
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
                                <a href="javascript:void(0);">Qui sommes-nous ? </a>
                            </li>
                        </ul>
                    </div>
                    <ul class="nav header-navbar-rht">
                        <li class="nav-item">
                            <a href="{{ route('patientLogout') }}">Se déconnecter</a>
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
                                <li class="breadcrumb-item"><a href="">Home</a></li>
                                <li class="breadcrumb-item" aria-current="page">Rendez-vous</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <div class="content">
            <div class="container">
                @if(isset($doctor))
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="booking-doc-info">
                                    <a href="doctor-profile.html" class="booking-doc-img">
                                        <img src="{{ asset($doctor->photo) }}" alt="User Image">
                                    </a>
                                    <div class="booking-info">
                                        <h4><a href="doctor-profile.html">Dr. {{ $doctor->nom . ' ' . $doctor->prenom }}</a></h4>
                                        <p class="text-muted mb-0"><i class="fas fa-map-marker-alt"></i> {{ $doctor->coordonnes->ville }}, Maroc</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 col-sm-4 col-md-6">
                                <h4 class="mb-1">{{ \Carbon\Carbon::now()->locale('fr')->isoFormat('D MMMM YYYY') }}</h4>
                                <p class="text-muted">{{ \Carbon\Carbon::now()->locale('fr')->isoFormat('dddd') }}</p>
                            </div>
                        </div>

                        <div class="card booking-schedule schedule-widget">
                            <div class="schedule-header">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="day-slot">
                                            <ul>
                                                @foreach ($jours as $jour)
                                                <li>
                                                    <span>{{ $jour->locale('fr')->isoFormat('dddd') }}</span>
                                                    <span class="slot-date">{{ $jour->locale('fr')->isoFormat('D MMMM YYYY') }}</span>
                                                </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="schedule-cont">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="time-slot">
                                            <ul class="clearfix">
                                                @foreach ($jours as $jour)
    <li>
        @php
        $jour_date = $jour->format('Y-m-d');
        $horaires_reserves_jour = isset($horaires_reserves[$jour_date]) ? $horaires_reserves[$jour_date] : [];
        @endphp

        <div class="time-slots">
            @foreach (['9:00 AM', '10:00 AM', '11:00 AM', '12:00 PM', '2:00 PM', '3:00 PM', '4:00 PM', '5:00 PM'] as $horaire)
                @php
                $horaire_formatte = Carbon\Carbon::createFromFormat('g:i A', $horaire)->format('H:i:s');
                @endphp

                @if (in_array($horaire_formatte, $horaires_reserves_jour))
                    <a class="timing reserved" href="javascript:;" data-date="{{ $jour_date }}">
                        <span>{{ $horaire }}</span>
                    </a>
                @else
                    <a class="timing" href="javascript:;" data-date="{{ $jour_date }}">
                        <span>{{ $horaire }}</span>
                    </a>
                @endif
            @endforeach
        </div>
    </li>
@endforeach

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="submit-section proceed-btn text-end">
                            <a href="{{ route('rdvTelephone') }}" class="btn btn-primary submit-btn">Confirmer</a>
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>

        <script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('assets/js/slick.js') }}"></script>
        <script src="{{ asset('assets/js/moment.min.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap-datetimepicker.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/select2/js/select2.min.js') }}"></script>
        <script src="{{ asset('assets/js/backToTop.js') }}"></script>
        <script src="{{ asset('assets/js/aos.js') }}"></script>
        <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('assets/js/script.js') }}"></script>

        <script>
            $(document).ready(function() {
                $('.timing').on('click', function() {
                    if (!$(this).hasClass('reserved') && !$(this).hasClass('unselected')) {
                        $('.timing').removeClass('selected');
                        $(this).addClass('selected');
                    }
                });

                $('.submit-btn').on('click', function() {
                    var selectedTime = $('.timing.selected').text().trim();
                    var selectedDate = $('.timing.selected').data('date');

                    $.ajax({
                        url: '{{ route("storeSelectedTime") }}'
                        , method: 'POST'
                        , data: {
                            _token: '{{ csrf_token() }}'
                            , time: selectedTime
                            , date: selectedDate
                        }
                        , success: function(response) {
                            console.log(response.message);
                            window.location.href = '{{ route("rdvTelephone") }}';
                        }
                        , error: function(xhr) {
                            console.log(xhr.responseText);
                        }
                    });
                });
            });

        </script>

</body>

</html>
