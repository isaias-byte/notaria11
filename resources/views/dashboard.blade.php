@extends('layouts.tiny')
@section('contenido')
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
                    Somos una Notaría representada por el Licenciado Felipe Torres Pacheco, Notario Público Número 11 del Municipio de Guadalajara, Jalisco y el Maestro Diego Torres Soule, Notario Público Número 108 y Corredor Número 70 del Municipio de Guadalajara, Jalisco, y Notarios del Patrimonio Inmueble Federal.<br>Actualmente está formada por un equipo de profesionales, entre ellos:
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
@endsection