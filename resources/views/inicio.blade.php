<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <title>Notaría 11</title>
    <!-- Simple bar CSS -->
    <link rel="stylesheet" href="{{ asset('css/simplebar.css') }}">
    <!-- Fonts CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- Icons CSS -->
    <link rel="stylesheet" href="{{ asset('css/feather.css') }}">
    <!-- Date Range Picker CSS -->
    <link rel="stylesheet" href="{{ asset('css/daterangepicker.css') }}">
    <!-- App CSS -->
    <link rel="stylesheet" href="{{ asset('css/app-light.css') }}" id="lightTheme">
    <link rel="stylesheet" href="{{ asset('css/app-dark.css') }}" id="darkTheme" disabled>

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('assets/favi/apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('assets/favi/apple-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('assets/favi/apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/favi/apple-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('assets/favi/apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('assets/favi/apple-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('assets/favi/apple-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('assets/favi/apple-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/favi/apple-icon-180x180.png') }}">
    <link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('assets/favi/android-icon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/favi/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('assets/favi/favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/favi/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('assets/favi/manifest.json') }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ asset('assets/favi/ms-icon-144x144.png') }}">
    <meta name="theme-color" content="#ffffff">
</head>

<body class="vertical  light  ">
    <div class="wrapper">
        <nav class="topnav navbar navbar-light">
            <button type="button" class="navbar-toggler text-muted mt-2 p-0 mr-3 collapseSidebar">
                <i class="fe fe-menu navbar-toggler-icon"></i>
            </button>
            <!-- <form class="form-inline mr-auto searchform text-muted">
                <input class="form-control mr-sm-2 bg-transparent border-0 pl-4 text-muted" type="search" placeholder="Type something..." aria-label="Search">
            </form> -->
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link text-muted my-2" href="#" id="modeSwitcher" data-mode="light">
                        <i class="fe fe-sun fe-16"></i>
                    </a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link text-muted my-2" href="./#" data-toggle="modal" data-target=".modal-shortcut">
                        <span class="fe fe-grid fe-16"></span>
                    </a>
                </li>
                <li class="nav-item nav-notif">
                    <a class="nav-link text-muted my-2" href="./#" data-toggle="modal" data-target=".modal-notif">
                        <span class="fe fe-bell fe-16"></span>
                        <span class="dot dot-md bg-success"></span>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-muted pr-0" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="avatar avatar-sm mt-2">
                            <img src="./assets/avatars/face-1.jpg" alt="..." class="avatar-img rounded-circle">
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Profile</a>
                        <a class="dropdown-item" href="#">Settings</a>
                        <a class="dropdown-item" href="#">Activities</a>
                    </div>
                </li> -->
                <div class="mt-2">
                    <li class="nav-item">
                        <a href="{{ route('login') }}" class="nav-link btn-outline-danger">
                        
                            <span class="">
                                Iniciar Sesión
                            </span>
                        </a>
                    </li>
                </div>
            </ul>
        </nav>
        <aside class="sidebar-left border-right bg-white shadow" id="leftSidebar" data-simplebar>
            <a href="#" class="btn collapseSidebar toggle-btn d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
                <i class="fe fe-x"><span class="sr-only"></span></i>
            </a>
            <nav class="vertnav navbar navbar-light">
                <!-- nav bar -->
                <div class="w-100 mb-4 d-flex">
                    <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="/">
                        <!-- <svg version="1.1" id="logo" class="navbar-brand-img brand-sm" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 120 120" xml:space="preserve">
                            <g>
                                <polygon class="st0" points="78,105 15,105 24,87 87,87 	" />
                                <polygon class="st0" points="96,69 33,69 42,51 105,51 	" />
                                <polygon class="st0" points="78,33 15,33 24,15 87,15 	" />
                            </g>
                        </svg> -->
                        <img src="{{ asset('assets/images/logo.png') }}" alt="" class="navbar-brand-img brand-sm" id="logo">
                    </a>
                </div>
                <div class="navbar-nav flex-fill w-100 mb-2">
                    <a href="#inicio" class="nav-link">
                        <i class="fe fe-home fe-16"></i>
                        <span class="ml-3 item-text"></span><span class="sr-only"></span>
                        Inicio

                    </a>
                </div>
                <!-- <ul class="navbar-nav flex-fill w-100 mb-2">
                    <li class="nav-item dropdown">
                        <a href="#inicio" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                            <i class="fe fe-home fe-16"></i>
                            <span class="ml-3 item-text">Inicio</span><span class="sr-only">(current)</span>
                        </a>
                        <ul class="collapse list-unstyled pl-4 w-100" id="inicio">
                            <li class="nav-item active">
                                <a class="nav-link pl-3" href="./index.html"><span class="ml-1 item-text">Default</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link pl-3" href="./dashboard-analytics.html"><span class="ml-1 item-text">Analytics</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link pl-3" href="./dashboard-sales.html"><span class="ml-1 item-text">E-commerce</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link pl-3" href="./dashboard-saas.html"><span class="ml-1 item-text">Saas Dashboard</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link pl-3" href="./dashboard-system.html"><span class="ml-1 item-text">Systems</span></a>
                            </li>
                        </ul>
                    </li>
                </ul> -->
                <p class="text-muted nav-heading mt-4 mb-1">
                    <span>Notaría 11 y 108</span>
                </p>
                <ul class="navbar-nav flex-fill w-100 mb-2">
                    <li class="nav-item dropdown">
                        <a href="#sobre-nosotros" class="nav-link">
                            <!-- <i class="fe fe-box fe-16"></i> -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
                            </svg>
                            <!-- <img src="{{ asset('assets/images/sobre-nosotros.png') }}"> -->
                            <span class="ml-3 item-text">Sobre Nosotros</span>
                        </a>
                    </li>
                    <li class="nav-item w-100">
                        <a class="nav-link" href="#director-firma">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
                            </svg>
                            <span class="ml-3 item-text">Director de la firma</span>
                            <!-- <span class="badge badge-pill badge-primary">New</span> -->
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#miembros-firma" class="nav-link">
                            <!-- <i class="fe fe-grid fe-16"></i> -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark" viewBox="0 0 16 16">
                                <path d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5L14 4.5zm-3 0A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h-2z" />
                            </svg>
                            <span class="ml-3 item-text">Miembros de la firma</span>
                        </a>
                        <ul class="collapse list-unstyled pl-4 w-100" id="tables">
                            <li class="nav-item">
                                <a class="nav-link pl-3" href="./table_basic.html"><span class="ml-1 item-text">Basic Tables</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link pl-3" href="./table_advanced.html"><span class="ml-1 item-text">Advanced Tables</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link pl-3" href="./table_datatables.html"><span class="ml-1 item-text">Data Tables</span></a>
                            </li>
                        </ul>
                    </li>
                    <!-- <li class="nav-item dropdown">
                        <a href="#charts" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                            <i class="fe fe-pie-chart fe-16"></i>
                            <span class="ml-3 item-text">Charts</span>
                        </a>
                        <ul class="collapse list-unstyled pl-4 w-100" id="charts">
                            <li class="nav-item">
                                <a class="nav-link pl-3" href="./chart-inline.html"><span class="ml-1 item-text">Inline Chart</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link pl-3" href="./chart-chartjs.html"><span class="ml-1 item-text">Chartjs</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link pl-3" href="./chart-apexcharts.html"><span class="ml-1 item-text">ApexCharts</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link pl-3" href="./datamaps.html"><span class="ml-1 item-text">Datamaps</span></a>
                            </li>
                        </ul>
                    </li> -->
                </ul>
            </nav>
        </aside>
        <main role="main" class="main-content">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <h1 class="page-title" id="inicio">Notaría 11 y 108</h1>
                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="{{ asset('assets/images/notaria11-imagen1.jpeg') }}" alt="Notaria11 y 108 Imagen 1">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="{{ asset('assets/images/notaria11-imagen2.jpeg') }}" alt="Notaria11 y 108 Imagen 2">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="{{ asset('assets/images/notaria11-imagen3.jpeg') }}" alt="Notaria11 y 108 Imagen 3">
                                </div>
                                
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                        <br>
                        <br>
                        <br>
                        <div id="sobre-nosotros">
                            <div class="container">
                                <div class="row align-items-center">
                                    <div class="col-lg-6 mb-5">
                                        <br>
                                        <br>
                                        <img src="{{ asset('assets/images/notaria11-imagen5.jpeg') }}" alt="Image" class="img-fluid">
                                    </div>
                                    <div class="col-lg-5 ml-auto section-title">
                                        <!-- <span class="sub-title mb-2 d-block">Acquaint Us</span> -->
                                        <h2 class="title text-danger mb-3">Sobre nosotros</h2>
                                        <p>
                                            Somos una Notaría representada por el Licenciado Felipe Torres Pacheco, Notario Público Número 11 del Municipio de Guadalajara, Jalisco y el Maestro Torres Soule, Notario Público Número 108 y Corredor Número 70 del Municipio de Guadalajara, Jalisco, y Notarios del Patrimonio Inmueble Federal.<br>Actualmente está formada por un equipo de profesionales, entre ellos:
                                        </p>
                                        <div class="d-flex">
                                            <ul class="mr-5">
                                                <li>Abogados</li>
                                                <li>Pasantes</li>
                                                <li>Personal Administrativo</li>
                                            </ul>
                                        </div>
                                        <p>
                                            Desde el inicio de operaciones, la Notaría ha recibido la confianza de numerosas empresas y organizaciones, tanto en el sector privado como público y de diferentes giros, tales como Financiero, Industrial y de servicios, entre otros.<br>Nuestra orientación y compromiso es hacia nuestros clientes, a la solución de sus problemas y a satisfacer sus expectativas con el apoyo de un excelente equipo de trabajo integrado por profesionales del Derecho con alto grado de responsabilidad, capacidad y actitud de servicio.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div id="director-firma">
                            <div class="col-md-7 section-title text-center mx-auto">
                                <span class="sub-title mb-2 d-block">Director de la firma de T y E Abogados S.C.</span>
                                <h2 class="title text-primary mb-3 text-danger">CURRICULUM DEL LICENCIADO FELIPE TORRES PACHECO NOTARIO PUBLICO NUMERO 11 DE GUADALAJARA, JALISCO</h2>
                            </div>

                            <div class="row mb-5">
                                <div class="col-lg-6 order-1 order-lg-2 mb-4 mb-lg-0">
                                    <img src="{{ asset('assets/images/jefe-notaria.png') }}" alt="LICENCIADO FELIPE TORRES PACHECO" class="img-fluid">
                                </div>
                                <div class="col-lg-5 h-100 jm-sticky-top mr-auto order-2 order-lg-1">
                                    <ul>
                                        <h4>
                                            <li>Estudios de Postgrado en Contratos, Bornemouth, Inglaterra.</li>
                                            <li>Diplomado en Derecho Notarial por la Universidad Nacional Autónoma de México.</li>
                                            <li>Diplomado en Derecho Contractual, Universidad Panamericana, sede Guadalajara.</li>
                                            <li>Diplomado en Derecho Constitucional, Universidad de Guadalajara.</li>
                                            <li>Diplomado en Negocios Internacionales, Universidad de Guadalajara.</li>
                                            <li>Diplomado en Derecho Canónico, Universidad Pontifica de México.</li>
                                            <li>Cursos de Derecho Fiscal, Empresarial y Civil en la Universidad Panamericana, sede</li>
                                            <li>Guadalajara y en la Asociación Nacional de Abogados de Empresa (ANADE).</li>
                                            <li>Profesor de Licenciatura y Postgrado en la Universidad Panamericana, sede Guadalajara.</li>
                                        </h4>
                                    </ul>
                                </div>
                            </div>
                            <br>
                            <div class="site-section" id="miembros-firma">
                                <div class="container">
                                    <div class="row mb-5">
                                        <div class="col-lg-6 section-title">
                                            <!-- <span class="sub-title mb-2 d-block">Meet The Team</span> -->
                                            <h2 class="title text-danger">Miembros de la firma</h2>
                                        </div>
                                    </div>
                                    <div class="row no-gutters">
                                        <div class="col-lg-6 mb-5 person">
                                            <img src="{{ asset('assets/images/jefe-notaria.png') }}" alt="Licenciado Felipe Torres Pacheco" class="img-fluid mb-5">

                                            <div class="row">
                                                <div class="col-lg-10 ml-auto">
                                                    <div class="pr-lg-5">
                                                        <h3>Licenciado Felipe Torres Pacheco</h3>
                                                        <!-- <span class="mb-4 d-block">CEO, Co-Founder</span>
                                                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                                                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                                                        <p class="d-flex align-items-center">
                                                            <span class="mr-3 text-black">Follow me:</span>
                                                            <a href="#" class="twitter pr-2 pt-2 pb-2 pl-0"><span class="icon-twitter"></span></a>
                                                            <a href="#" class="facebook p-2"><span class="icon-facebook"></span></a>
                                                            <a href="#" class="dribbble p-2"><span class="icon-dribbble"></span></a>
                                                            <a href="#" class="instagram p-2"><span class="icon-instagram"></span></a>
                                                            <a href="#" class="linkedin p-2"><span class="icon-linkedin"></span></a>
                                                        </p> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 person">
                                            <img src="{{ asset('assets/images/miembro-firma.png') }}" alt="Maestro Diego Torres Soulé" class="img-fluid mb-5">
                                            <div class="row">
                                                <div class="col-lg-10 ml-auto">
                                                    <div class="pr-lg-5">
                                                        <h3>Maestro Diego Torres Soulé</h3>
                                                        <!-- <span class="mb-4 d-block">CTO, Co-Founder</span>
                                                        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                                                        <p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way.</p>
                                                        <p class="d-flex align-items-center">
                                                            <span class="mr-3 text-black">Follow me:</span>
                                                            <a href="#" class="twitter pr-2 pt-2 pb-2 pl-0"><span class="icon-twitter"></span></a>
                                                            <a href="#" class="github p-2"><span class="icon-github"></span></a>
                                                            <a href="#" class="dribbble p-2"><span class="icon-dribbble"></span></a>
                                                            <a href="#" class="instagram p-2"><span class="icon-instagram"></span></a>
                                                            <a href="#" class="linkedin p-2"><span class="icon-linkedin"></span></a>
                                                        </p> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- .col-12 -->
                </div> <!-- .row -->
            </div> <!-- .container-fluid -->
            <div class="modal fade modal-notif modal-slide" tabindex="-1" role="dialog" aria-labelledby="defaultModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-sm" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="defaultModalLabel">Notifications</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="list-group list-group-flush my-n3">
                                <div class="list-group-item bg-transparent">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <span class="fe fe-box fe-24"></span>
                                        </div>
                                        <div class="col">
                                            <small><strong>Package has uploaded successfull</strong></small>
                                            <div class="my-0 text-muted small">Package is zipped and uploaded</div>
                                            <small class="badge badge-pill badge-light text-muted">1m ago</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-group-item bg-transparent">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <span class="fe fe-download fe-24"></span>
                                        </div>
                                        <div class="col">
                                            <small><strong>Widgets are updated successfull</strong></small>
                                            <div class="my-0 text-muted small">Just create new layout Index, form, table</div>
                                            <small class="badge badge-pill badge-light text-muted">2m ago</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-group-item bg-transparent">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <span class="fe fe-inbox fe-24"></span>
                                        </div>
                                        <div class="col">
                                            <small><strong>Notifications have been sent</strong></small>
                                            <div class="my-0 text-muted small">Fusce dapibus, tellus ac cursus commodo</div>
                                            <small class="badge badge-pill badge-light text-muted">30m ago</small>
                                        </div>
                                    </div> <!-- / .row -->
                                </div>
                                <div class="list-group-item bg-transparent">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <span class="fe fe-link fe-24"></span>
                                        </div>
                                        <div class="col">
                                            <small><strong>Link was attached to menu</strong></small>
                                            <div class="my-0 text-muted small">New layout has been attached to the menu</div>
                                            <small class="badge badge-pill badge-light text-muted">1h ago</small>
                                        </div>
                                    </div>
                                </div> <!-- / .row -->
                            </div> <!-- / .list-group -->
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary btn-block" data-dismiss="modal">Clear All</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="modal fade modal-shortcut modal-slide" tabindex="-1" role="dialog" aria-labelledby="defaultModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="defaultModalLabel">Shortcuts</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body px-5">
                    <div class="row align-items-center">
                        <div class="col-6 text-center">
                            <div class="squircle bg-success justify-content-center">
                                <i class="fe fe-cpu fe-32 align-self-center text-white"></i>
                            </div>
                            <p>Control area</p>
                        </div>
                        <div class="col-6 text-center">
                            <div class="squircle bg-primary justify-content-center">
                                <i class="fe fe-activity fe-32 align-self-center text-white"></i>
                            </div>
                            <p>Activity</p>
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-6 text-center">
                            <div class="squircle bg-primary justify-content-center">
                                <i class="fe fe-droplet fe-32 align-self-center text-white"></i>
                            </div>
                            <p>Droplet</p>
                        </div>
                        <div class="col-6 text-center">
                            <div class="squircle bg-primary justify-content-center">
                                <i class="fe fe-upload-cloud fe-32 align-self-center text-white"></i>
                            </div>
                            <p>Upload</p>
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-6 text-center">
                            <div class="squircle bg-primary justify-content-center">
                                <i class="fe fe-users fe-32 align-self-center text-white"></i>
                            </div>
                            <p>Users</p>
                        </div>
                        <div class="col-6 text-center">
                            <div class="squircle bg-primary justify-content-center">
                                <i class="fe fe-settings fe-32 align-self-center text-white"></i>
                            </div>
                            <p>Settings</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
        </main> <!-- main -->
    </div> <!-- .wrapper -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/moment.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/simplebar.min.js') }}"></script>
    <script src="{{ asset('js/daterangepicker.js') }}"></script>
    <script src="{{ asset('js/jquery.stickOnScroll.js') }}"></script>
    <script src="{{ asset('js/tinycolor-min.js') }}"></script>
    <script src="{{ asset('js/config.js') }}"></script>
    <script src="{{ asset('js/apps.js') }}"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-56159088-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-56159088-1');
    </script>
</body>

</html>