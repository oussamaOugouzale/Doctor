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
                                            <a href="{{route('profile-settings-hours')}}">
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
                        <div class="row">
                            <div class="col-xl-4 d-flex">
                                <div class="dashboard-box-col w-100">
                                    <div class="dashboard-widget-box">
                                        <div class="dashboard-content-info">
                                            <h6>Total Patient</h6>
                                            <h4>978</h4>

                                        </div>
                                        <div class="dashboard-widget-icon">
                                            <span class="dash-icon-box"><i class="fa-solid fa-user-injured"></i></span>
                                        </div>
                                    </div>
                                    <div class="dashboard-widget-box">
                                        <div class="dashboard-content-info">
                                            <h6>Patients Today</h6>
                                            <h4>978</h4>

                                        </div>
                                        <div class="dashboard-widget-icon">
                                            <span class="dash-icon-box"><i class="fa-solid fa-user-clock"></i></span>
                                        </div>
                                    </div>
                                    <div class="dashboard-widget-box">
                                        <div class="dashboard-content-info">
                                            <h6>Appointments Today</h6>
                                            <h4>978</h4>

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
                                            <h5>Appointment</h5>
                                        </div>
                                        <div class="dropdown header-dropdown">

                                        </div>
                                    </div>
                                    <div class="dashboard-card-body">
                                        <div class="table-responsive">
                                            <table class="table dashboard-table appoint-table">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="patient-info-profile">
                                                                <a href="appointments.html" class="table-avatar">
                                                                    <img src="assets/img/doctors-dashboard/profile-01.jpg" alt="Img">
                                                                </a>
                                                                <div class="patient-name-info">
                                                                    <h5><a href="appointments.html">Adrian Marshall</a>
                                                                    </h5>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="appointment-date-created">
                                                                <h6>11 Nov 2024 10.45 AM</h6>
                                                                <span class="badge table-badge">General</span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="apponiment-actions d-flex align-items-center">
                                                                <a href="#" class="text-success-icon me-2"><i class="fa-solid fa-check"></i></a>
                                                                <a href="#" class="text-danger-icon"><i class="fa-solid fa-xmark"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="patient-info-profile">
                                                                <a href="appointments.html" class="table-avatar">
                                                                    <img src="assets/img/doctors-dashboard/profile-02.jpg" alt="Img">
                                                                </a>
                                                                <div class="patient-name-info">
                                                                    <h5><a href="appointments.html">Kelly Stevens</a>
                                                                    </h5>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="appointment-date-created">
                                                                <h6>10 Nov 2024 11.00 AM</h6>
                                                                <span class="badge table-badge">Clinic Consulting</span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="apponiment-actions d-flex align-items-center">
                                                                <a href="#" class="text-success-icon me-2"><i class="fa-solid fa-check"></i></a>
                                                                <a href="#" class="text-danger-icon"><i class="fa-solid fa-xmark"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="patient-info-profile">
                                                                <a href="appointments.html" class="table-avatar">
                                                                    <img src="assets/img/doctors-dashboard/profile-03.jpg" alt="Img">
                                                                </a>
                                                                <div class="patient-name-info">
                                                                    <h5><a href="appointments.html">Samuel Anderson</a>
                                                                    </h5>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="appointment-date-created">
                                                                <h6>03 Nov 2024 02.00 PM</h6>
                                                                <span class="badge table-badge">General</span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="apponiment-actions d-flex align-items-center">
                                                                <a href="#" class="text-success-icon me-2"><i class="fa-solid fa-check"></i></a>
                                                                <a href="#" class="text-danger-icon"><i class="fa-solid fa-xmark"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="patient-info-profile">
                                                                <a href="appointments.html" class="table-avatar">
                                                                    <img src="assets/img/doctors-dashboard/profile-04.jpg" alt="Img">
                                                                </a>
                                                                <div class="patient-name-info">
                                                                    <h5><a href="appointments.html">Catherine
                                                                            Griffin</a></h5>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="appointment-date-created">
                                                                <h6>01 Nov 2024 04.00 PM</h6>
                                                                <span class="badge table-badge">Clinic Consulting</span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="apponiment-actions d-flex align-items-center">
                                                                <a href="#" class="text-success-icon me-2"><i class="fa-solid fa-check"></i></a>
                                                                <a href="#" class="text-danger-icon"><i class="fa-solid fa-xmark"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="patient-info-profile">
                                                                <a href="appointments.html" class="table-avatar">
                                                                    <img src="assets/img/doctors-dashboard/profile-05.jpg" alt="Img">
                                                                </a>
                                                                <div class="patient-name-info">
                                                                    <h5><a href="appointments.html">Robert
                                                                            Hutchinson</a></h5>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="appointment-date-created">
                                                                <h6>28 Oct 2024 05.30 PM</h6>
                                                                <span class="badge table-badge">General</span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="apponiment-actions d-flex align-items-center">
                                                                <a href="#" class="text-success-icon me-2"><i class="fa-solid fa-check"></i></a>
                                                                <a href="#" class="text-danger-icon"><i class="fa-solid fa-xmark"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-5 d-flex">
                                <div class="dashboard-chart-col w-100">
                                    <div class="dashboard-card w-100">
                                        <div class="dashboard-card-head border-0">
                                            <div class="header-title">
                                                <h5>Weekly Overview</h5>
                                            </div>
                                            <div class="chart-create-date">
                                                <h6>Mar 14 - Mar 21</h6>
                                            </div>
                                        </div>
                                        <div class="dashboard-card-body">
                                            <div class="chart-tab">
                                                <ul class="nav nav-pills product-licence-tab" id="pills-tab2" role="tablist">
                                                    <li class="nav-item" role="presentation">
                                                        <button class="nav-link active" id="pills-revenue-tab" data-bs-toggle="pill" data-bs-target="#pills-revenue" type="button" role="tab" aria-controls="pills-revenue" aria-selected="false">Revenue</button>
                                                    </li>
                                                    <li class="nav-item" role="presentation">
                                                        <button class="nav-link" id="pills-appointment-tab" data-bs-toggle="pill" data-bs-target="#pills-appointment" type="button" role="tab" aria-controls="pills-appointment" aria-selected="true">Appointments</button>
                                                    </li>
                                                </ul>
                                                <div class="tab-content w-100" id="v-pills-tabContent">
                                                    <div class="tab-pane fade show active" id="pills-revenue" role="tabpanel" aria-labelledby="pills-revenue-tab">
                                                        <div id="revenue-chart"></div>
                                                    </div>
                                                    <div class="tab-pane fade" id="pills-appointment" role="tabpanel" aria-labelledby="pills-appointment-tab">
                                                        <div id="appointment-chart"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dashboard-card w-100">
                                        <div class="dashboard-card-head">
                                            <div class="header-title">
                                                <h5>Recent Patients</h5>
                                            </div>
                                            <div class="card-view-link">
                                                <a href="my-patients.html">View All</a>
                                            </div>
                                        </div>
                                        <div class="dashboard-card-body">
                                            <div class="d-flex recent-patient-grid-boxes">
                                                <div class="recent-patient-grid">
                                                    <a href="patient-details.html" class="patient-img">
                                                        <img src="assets/img/doctors-dashboard/profile-01.jpg" alt="Img">
                                                    </a>
                                                    <h5><a href="patient-details.html">Adrian Marshall</a></h5>
                                                    <span>Patient ID : P0001</span>
                                                    <div class="date-info">
                                                        <h6>Last Appointment
                                                            15 Mar 2024</h6>
                                                    </div>
                                                </div>
                                                <div class="recent-patient-grid">
                                                    <a href="patient-details.html" class="patient-img">
                                                        <img src="assets/img/doctors-dashboard/profile-02.jpg" alt="Img">
                                                    </a>
                                                    <h5><a href="patient-details.html">Kelly Stevens</a></h5>
                                                    <span>Patient ID : P0002</span>
                                                    <div class="date-info">
                                                        <h6>Last Appointment
                                                            13 Mar 2024</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-7 d-flex">
                                <div class="dashboard-main-col w-100">
                                    <div class="upcoming-appointment-card">
                                        <div class="title-card">
                                            <h5>Upcoming Appointment</h5>
                                        </div>
                                        <div class="upcoming-patient-info">
                                            <div class="info-details">
                                                <span class="img-avatar"><img src="assets/img/doctors-dashboard/profile-01.jpg" alt="Img"></span>
                                                <div class="name-info">
                                                    <span>#Apt0001</span>
                                                    <h6>Adrian Marshall</h6>
                                                </div>
                                            </div>
                                            <div class="date-details">
                                                <span>General visit</span>
                                                <h6>Today, 10:45 AM</h6>
                                            </div>
                                            <div class="circle-bg">
                                                <img src="assets/img/bg/dashboard-circle-bg.png" alt>
                                            </div>
                                        </div>
                                        <div class="appointment-card-footer">
                                            <h5><i class="fa-solid fa-video"></i>Video Appointment</h5>
                                            <div class="btn-appointments">
                                                <a href="chat-doctor.html" class="btn">Chat Now</a>
                                                <a href="doctor-appointment-start.html" class="btn">Start
                                                    Appointment</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dashboard-card w-100">
                                        <div class="dashboard-card-head">
                                            <div class="header-title">
                                                <h5>Recent Invoices</h5>
                                            </div>
                                            <div class="card-view-link">
                                                <a href="invoices.html">View All</a>
                                            </div>
                                        </div>
                                        <div class="dashboard-card-body">
                                            <div class="table-responsive">
                                                <table class="table dashboard-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <div class="patient-info-profile">
                                                                    <a href="invoices.html" class="table-avatar">
                                                                        <img src="assets/img/doctors-dashboard/profile-01.jpg" alt="Img">
                                                                    </a>
                                                                    <div class="patient-name-info">
                                                                        <h5><a href="invoices.html">Adrian</a></h5>
                                                                        <span>#Apt0001</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="appointment-date-created">
                                                                    <span class="paid-text">Amount</span>
                                                                    <h6>$450</h6>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="appointment-date-created">
                                                                    <span class="paid-text">Paid On</span>
                                                                    <h6>11 Nov 2024</h6>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="apponiment-view d-flex align-items-center">
                                                                    <a href="invoice-view.html"><i class="fa-solid fa-eye"></i></a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="patient-info-profile">
                                                                    <a href="#" class="table-avatar">
                                                                        <img src="assets/img/doctors-dashboard/profile-02.jpg" alt="Img">
                                                                    </a>
                                                                    <div class="patient-name-info">
                                                                        <h5><a href="#">Kelly</a></h5>
                                                                        <span>#Apt0002</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="appointment-date-created">
                                                                    <span class="paid-text">Paid On</span>
                                                                    <h6>10 Nov 2024</h6>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="appointment-date-created">
                                                                    <span class="paid-text">Amount</span>
                                                                    <h6>$500</h6>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="apponiment-view d-flex align-items-center">
                                                                    <a href="#"><i class="fa-solid fa-eye"></i></a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="patient-info-profile">
                                                                    <a href="#" class="table-avatar">
                                                                        <img src="assets/img/doctors-dashboard/profile-03.jpg" alt="Img">
                                                                    </a>
                                                                    <div class="patient-name-info">
                                                                        <h5><a href="#">Samuel</a></h5>
                                                                        <span>#Apt0003</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="appointment-date-created">
                                                                    <span class="paid-text">Paid On</span>
                                                                    <h6>03 Nov 2024</h6>
                                                                </div>
                                                            <td>
                                                                <div class="appointment-date-created">
                                                                    <span class="paid-text">Amount</span>
                                                                    <h6>$320</h6>
                                                                </div>
                                                            </td>
                                                            </td>
                                                            <td>
                                                                <div class="apponiment-view d-flex align-items-center">
                                                                    <a href="#"><i class="fa-solid fa-eye"></i></a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="patient-info-profile">
                                                                    <a href="#" class="table-avatar">
                                                                        <img src="assets/img/doctors-dashboard/profile-04.jpg" alt="Img">
                                                                    </a>
                                                                    <div class="patient-name-info">
                                                                        <h5><a href="#">Catherine</a></h5>
                                                                        <span>#Apt0004</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="appointment-date-created">
                                                                    <span class="paid-text">Paid On</span>
                                                                    <h6>01 Nov 2024</h6>
                                                                </div>
                                                            <td>
                                                                <div class="appointment-date-created">
                                                                    <span class="paid-text">Amount</span>
                                                                    <h6>$240</h6>
                                                                </div>
                                                            </td>
                                                            </td>
                                                            <td>
                                                                <div class="apponiment-view d-flex align-items-center">
                                                                    <a href="#"><i class="fa-solid fa-eye"></i></a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="patient-info-profile">
                                                                    <a href="#" class="table-avatar">
                                                                        <img src="assets/img/doctors-dashboard/profile-05.jpg" alt="Img">
                                                                    </a>
                                                                    <div class="patient-name-info">
                                                                        <h5><a href="#">Robert</a></h5>
                                                                        <span>#Apt0005</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="appointment-date-created">
                                                                    <span class="paid-text">Paid On</span>
                                                                    <h6>28 Oct 2024</h6>
                                                                </div>
                                                            <td>
                                                                <div class="appointment-date-created">
                                                                    <span class="paid-text">Amount</span>
                                                                    <h6>$380</h6>
                                                                </div>
                                                            </td>
                                                            </td>
                                                            <td>
                                                                <div class="apponiment-view d-flex align-items-center">
                                                                    <a href="#"><i class="fa-solid fa-eye"></i></a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-7 d-flex">
                                <div class="dashboard-card w-100">
                                    <div class="dashboard-card-head">
                                        <div class="header-title">
                                            <h5>Notifications</h5>
                                        </div>
                                        <div class="card-view-link">
                                            <a href="#">View All</a>
                                        </div>
                                    </div>
                                    <div class="dashboard-card-body">
                                        <div class="table-responsive">
                                            <table class="table dashboard-table">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="table-noti-info">
                                                                <div class="table-noti-icon color-violet">
                                                                    <i class="fa-solid fa-bell"></i>
                                                                </div>
                                                                <div class="table-noti-message">
                                                                    <h6><a href="#">Booking Confirmed on <span> 21 Mar
                                                                                2024 </span> 10:30 AM</a></h6>
                                                                    <span class="message-time">Just Now</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="table-noti-info">
                                                                <div class="table-noti-icon color-blue">
                                                                    <i class="fa-solid fa-star"></i>
                                                                </div>
                                                                <div class="table-noti-message">
                                                                    <h6><a href="#">You have a <span> New </span> Review
                                                                            for your Appointment </a></h6>
                                                                    <span class="message-time">5 Days ago</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="table-noti-info">
                                                                <div class="table-noti-icon color-red">
                                                                    <i class="fa-solid fa-calendar-check"></i>
                                                                </div>
                                                                <div class="table-noti-message">
                                                                    <h6><a href="#">You have Appointment with <span>
                                                                                Ahmed </span> by 01:20 PM </a></h6>
                                                                    <span class="message-time">12:55 PM</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="table-noti-info">
                                                                <div class="table-noti-icon color-yellow">
                                                                    <i class="fa-solid fa-money-bill-1-wave"></i>
                                                                </div>
                                                                <div class="table-noti-message">
                                                                    <h6><a href="#">Sent an amount of <span> $200
                                                                            </span>
                                                                            for an Appointment by 01:20 PM </a></h6>
                                                                    <span class="message-time">2 Days ago</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="table-noti-info">
                                                                <div class="table-noti-icon color-blue">
                                                                    <i class="fa-solid fa-star"></i>
                                                                </div>
                                                                <div class="table-noti-message">
                                                                    <h6><a href="#">You have a <span> New </span> Review
                                                                            for your Appointment </a></h6>
                                                                    <span class="message-time">5 Days ago</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-5 d-flex">
                                <div class="dashboard-card w-100">
                                    <div class="dashboard-card-head">
                                        <div class="header-title">
                                            <h5>Clinics & Availability</h5>
                                        </div>
                                    </div>
                                    <div class="dashboard-card-body">
                                        <div class="clinic-available">
                                            <div class="clinic-head">
                                                <div class="clinic-info">
                                                    <span class="clinic-img">
                                                        <img src="assets/img/doctors-dashboard/clinic-02.jpg" alt="Img">
                                                    </span>
                                                    <h6>Sofi’s Clinic</h6>
                                                </div>
                                                <div class="clinic-charge">
                                                    <span>$900</span>
                                                </div>
                                            </div>
                                            <div class="available-time">
                                                <ul>
                                                    <li>
                                                        <span>Tue :</span>
                                                        07:00 AM - 09:00 PM
                                                    </li>
                                                    <li>
                                                        <span>Wed : </span>
                                                        07:00 AM - 09:00 PM
                                                    </li>
                                                </ul>
                                                <div class="change-time">
                                                    <a href="#">Change </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clinic-available mb-0">
                                            <div class="clinic-head">
                                                <div class="clinic-info">
                                                    <span class="clinic-img">
                                                        <img src="assets/img/doctors-dashboard/clinic-01.jpg" alt="Img">
                                                    </span>
                                                    <h6>The Family Dentistry Clinic</h6>
                                                </div>
                                                <div class="clinic-charge">
                                                    <span>$600</span>
                                                </div>
                                            </div>
                                            <div class="available-time">
                                                <ul>
                                                    <li>
                                                        <span>Sat :</span>
                                                        07:00 AM - 09:00 PM
                                                    </li>
                                                    <li>
                                                        <span>Tue : </span>
                                                        07:00 AM - 09:00 PM
                                                    </li>
                                                </ul>
                                                <div class="change-time">
                                                    <a href="#">Change </a>
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
        </div>



    </div>


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
