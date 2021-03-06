<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>DNC | Venezuela</title>
    <link rel="icon" type="image/png" href="resources/assets/img/favicon-dnc.png"/>
    <!--Google web fonts-->
    <link
        href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,300italic,400italic,600,700,600italic,200,200italic'
        rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Play:400,700' rel='stylesheet' type='text/css'>
    <!-- Bootstrap -->
    <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font awesome-->
    <link href="bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- Owl-->
    <link rel="stylesheet" href="bower_components/owl.carousel/dist/assets/owl.carousel.min.css">
    <!-- Personal styles -->
    <link rel="stylesheet" type="text/css" href="resources/assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="resources/assets/css/app.css">
    <link rel="stylesheet" type="text/css" href="resources/assets/css/menu.css">
    <script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>
<!--menu-->
<div class="header">
    <button id="btn-hamburger" class="c-hamburger c-hamburger--htx">
        <span></span>
    </button>
</div>
<nav id="nav-menu" class="menu-collapsed">
    <ul>
        <li>
            <a class="nav-btn" data-scroll href="#home">Home</a>
        </li>
        <li>
            <a class="nav-btn" data-scroll href="#services">Nuestros Servicios</a>
        </li>
        <li>
            <a class="nav-btn" data-scroll href="#projects">Nuestros Proyectos</a>
        </li>
        <li>
            <a class="nav-btn" data-scroll href="#clients">Nuestros Clientes</a>
        </li>
        <li>
            <a class="nav-btn" data-scroll href="#team">Nuestro Equipo</a>
        </li>
        <li>
            <a class="nav-btn" data-scroll href="#about">Sobre Nosotros</a>
        </li>
        <li>
            <a class="nav-btn" data-scroll href="#contact">Contactanos</a>
        </li>
    </ul>
</nav>

<!--Slide-->
<div id="home-carousel" class="carousel fade-carousel slide slide-new" data-ride="carousel" data-interval="2000">
    <!-- Overlay -->
    <div class="overlay"></div>

    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#home-carousel" data-slide-to="0" class="active"></li>
        <li data-target="#home-carousel" data-slide-to="1"></li>
        <li data-target="#home-carousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" id="home">
        <div class="item slides active">

            <div class="hero">
                <hgroup>
                    <h1>Somos <span>DNC</span></h1>
                    <h3>Inicia tu proyecto de forma impresionante</h3>
                </hgroup>
                <a class="btn btn-info btn-lg" data-scroll href="#services" role="button">Ver nuestros servicios</a>
            </div>
        </div>
        <div class="item slides">

            <div class="hero">
                <hgroup>
                    <h1>Somos <span>Inteligentes</span></h1>

                    <h3>Inicia tu proyecto de forma impresionante</h3>
                </hgroup>
                <a class="btn btn-info btn-lg" data-scroll href="#services" role="button">Ver nuestros servicios</a>
            </div>
        </div>
        <div class="item slides">

            <div class="hero">
                <hgroup>
                    <h1>Somos <span>Asombrosos</span></h1>

                    <h3>Inicia tu proyecto de forma impresionante</h3>
                </hgroup>
                <a class="btn btn-info btn-lg" data-scroll href="#services" role="button">Ver nuestros servicios</a>
            </div>
        </div>
    </div>
</div>
<!--Section 2 services-->
<div class="service_area" id="services">
    <div class="section">
        <h1>Nuestros <span>Servicios</span></h1>
        <hr>
    </div>
    <div class="container">
        <div class="row">
            <div class="service_section wow bounceInLeft animated">
                <div class="col-xs-6 col-sm-4">
                    <div class="single_service">
                        <div class="ico"><i class="fa fa-desktop"></i></div>
                        <h2>Desarrollo de Sitios Web</h2>

                        <p>Construimos bellos sitios web que son fáciles de usar y amigables a los usuarios. Nuestro
                            equipo de diseño web utiliza técnicas de diseño inteligente para involucrar a sus visitantes
                            del sitio web, y lo más importante convertirlos de visitantes a clientes.</p>
                    </div>
                </div>

                <div class="col-xs-6 col-sm-4">
                    <div class="single_service">
                        <div class="ico"><i class="fa fa-cloud"></i></div>
                        <h2>Servicios de informática en la nube</h2>

                        <p>Ofrecemos los mejores servicios de computación en internet, por medio de la implementación,
                            asesoría y personalización de las soluciones de última generación en el mercado
                            internacional cloud.</p>
                    </div>
                </div>

                <div class="col-xs-6 col-sm-4">
                    <div class="single_service">
                        <div class="ico"><i class="fa fa-amazon"></i></div>
                        <h2>Servicios de Gestión AWS</h2>

                        <p>Ofrecemos la gestión, asesoría y acompañamiento en los servicios web de Amazon, permítanos
                            gestionar su infraestructura para que solo tenga que preocuparse de su negocio.</p>
                    </div>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="service_section wow bounceInLeft animated">
                <div class="col-xs-6 col-sm-4">
                    <div class="single_service">
                        <div class="ico"><i class="fa fa-shopping-cart"></i></div>
                        <h2>Sitios Web de Comercio Electrónico</h2>

                        <p>Ofrecemos soluciones por medio de sitios web de comercio electrónico que te permitirán
                            catapultar tus ventas, llegando a más clientes, por medio del mercado más grande del mundo
                            llamado internet.</p>
                    </div>
                </div>

                <div class="col-xs-6 col-sm-4">
                    <div class="single_service">
                        <div class="ico"><i class="fa fa-mobile"></i></div>
                        <h2>Desarrollo App Movil</h2>

                        <p>El desarrollo de apps móviles se ha convertido en una industria multimillonaria con grandes
                            expectativas de futuro. Nosotros te ofrecemos de tu aplicación para que no te quedes
                            atrás.</p>
                    </div>
                </div>

                <div class="col-xs-6 col-sm-4">
                    <div class="single_service">
                        <div class="ico"><i class="fa fa-cogs"></i></div>
                        <h2>Servicios CRM</h2>

                        <p>Ofrecemos software y metodologías de calidad que le permitirán mantener una gestión eficiente
                            de los recursos de información de sus clientes dentro de sus plataformas de trabajo.</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- service area end   -->
<!--Section 3 projects-->
<div class="project_area" id="projects">
    <div class="section">
        <h1>Nuestros <span>Proyectos</span></h1>
        <hr>
    </div>
    <div class="container">
        <div class="row">
            <div class="project_section">
                <div class="single_project col-md-4 slider-content">
                    <a href="#">
                        <img src="resources/assets/img/projects/sportcloud.jpg" alt="">

                        <div class="slider-text">
                            <h3>Sport Cloud</h3>

                            <p>Sitio web deportivo especializado en ofrecer servicios de streaming en vivo de eventos
                                deportivos, informacion de atletas y otros servicios mas.</p>
                        </div>
                    </a>
                </div>
                <div class="single_project col-md-4 slider-content">
                    <a href="#">
                        <img src="resources/assets/img/projects/anchorage.jpg" alt="">

                        <div class="slider-text">
                            <h3>Anchorage</h3>

                            <p>Sitio web de la tienda online para la marca española de franelas Anchorage, desde la cual
                                se pueden realizar compras y pedidos personalizados de las franelas en tiempo real.</p>
                        </div>
                    </a>
                </div>
                <div class="single_project col-md-4 slider-content">
                    <a href="#">
                        <img src="resources/assets/img/projects/ngncloud.jpg" alt="">

                        <div class="slider-text">
                            <h3>NGN Cloud</h3>

                            <p>Sitio web Coorporativo de la empresa española NGN Cloud, en que se muestran las bondades
                                y servicios ofrecidos por la misma.</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- project area end   -->
<!--Section 4 thought-->
<div class="getit_area">
    <div class="container">
        <div class="row">
            <div class="getit_section">
                <h1>El diseño no es solo lo que se ve o lo que se siente. Diseño es cómo funciona.</h1>
                <span>Steve Jobs</span>
            </div>
        </div>
    </div>
</div>
<!--  thought area end -->
<!--Section 5 work-->
<div class="work_area">
    <div class="container">
        <div class="row">
            <div class="work_section">
                <h1 class="wow bounceInLeft">Tecnologias <span>de nuestro proceso de trabajo</span></h1>

                <div class="col-md-12 wow bounceInRight animated">
                    <div class="bs-example">
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#sectionA"><i class="fa fa-code"></i></a></li>
                            <li><a data-toggle="tab" href="#sectionB"><i class="fa fa-cogs"></i></a></li>
                            <li><a data-toggle="tab" href="#sectionC"><i class="fa fa fa-tasks"></i></a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="sectionA" class="tab-pane fade in active">
                                <h1>Programacion</h1>
                                <hr>
                                <div class="row">
                                    <div class="col-md-3">
                                        <a href="#" class="thumbnail not-border">
                                            <img src="resources/assets/img/programacion/html5.png" alt="...">
                                        </a>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="#" class="thumbnail not-border">
                                            <img src="resources/assets/img/programacion/css3.png" alt="...">
                                        </a>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="#" class="thumbnail not-border">
                                            <img src="resources/assets/img/programacion/angular.png" alt="...">
                                        </a>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="#" class="thumbnail not-border">
                                            <img src="resources/assets/img/programacion/laravel.png" alt="...">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div id="sectionB" class="tab-pane fade">
                                <h1>Plataformas</h1>
                                <hr>
                                <div class="row">
                                    <div class="col-md-3">
                                        <a href="#" class="thumbnail not-border">
                                            <img src="resources/assets/img/platforms/aws.png" alt="...">
                                        </a>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="#" class="thumbnail not-border">
                                            <img src="resources/assets/img/platforms/wowza.png" alt="...">
                                        </a>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="#" class="thumbnail not-border">
                                            <img src="resources/assets/img/platforms/mysql.png" alt="...">
                                        </a>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="#" class="thumbnail not-border">
                                            <img src="resources/assets/img/platforms/ubuntu.png" alt="...">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div id="sectionC" class="tab-pane fade">
                                <h1>Metodologias</h1>
                                <hr>
                                <div class="row">
                                    <div class="col-md-3">
                                        <a href="#" class="thumbnail not-border">
                                            <img src="resources/assets/img/metodology/scrum.png" alt="...">
                                        </a>
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
<!-- work area end   -->
<!--Section 6 clients-->
<div class="client_area" id="clients">
    <div class="section">
        <h1>Nuestros <span>Clientes</span></h1>
        <hr>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="well">
                    <div id="clients-carousel" class="carousel slide fade-carousel2" data-ride="carousel"
                         data-interval="2000">

                        <!-- Carousel items -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="row">
                                    <div class="col-xs-6 col-sm-3"><a href="#x" class="thumbnail"><img
                                                src="resources/assets/img/clients/sport.jpg" alt="Image"
                                                class="img-responsive"></a>
                                    </div>
                                    <div class="col-xs-6 col-sm-3"><a href="#x" class="thumbnail"><img
                                                src="resources/assets/img/clients/zoom.jpg" alt="Image"
                                                class="img-responsive"></a>
                                    </div>
                                    <div class="col-xs-6 col-sm-3"><a href="#x" class="thumbnail"><img
                                                src="resources/assets/img/clients/ngn.jpg" alt="Image"
                                                class="img-responsive"></a>
                                    </div>
                                    <div class="col-xs-6 col-sm-3"><a href="#x" class="thumbnail"><img
                                                src="resources/assets/img/clients/anchorage.jpg" alt="Image"
                                                class="img-responsive"></a>
                                    </div>
                                </div>
                                <!--/row-->
                            </div>
                            <!--/item-->
                            <div class="item">
                                <div class="row">
                                    <div class="col-xs-6 col-sm-3"><a href="#x" class="thumbnail"><img
                                                src="resources/assets/img/clients/sport.jpg" alt="Image"
                                                class="img-responsive"></a>
                                    </div>
                                    <div class="col-xs-6 col-sm-3"><a href="#x" class="thumbnail"><img
                                                src="resources/assets/img/clients/zoom.jpg" alt="Image"
                                                class="img-responsive"></a>
                                    </div>
                                    <div class="col-xs-6 col-sm-3"><a href="#x" class="thumbnail"><img
                                                src="resources/assets/img/clients/ngn.jpg" alt="Image"
                                                class="img-responsive"></a>
                                    </div>
                                    <div class="col-xs-6 col-sm-3"><a href="#x" class="thumbnail"><img
                                                src="resources/assets/img/clients/anchorage.jpg" alt="Image"
                                                class="img-responsive"></a>
                                    </div>
                                </div>
                                <!--/row-->
                            </div>
                            <!--/item-->
                            <div class="item">
                                <div class="row">
                                    <div class="col-xs-6 col-sm-3"><a href="#x" class="thumbnail"><img
                                                src="resources/assets/img/clients/sport.jpg" alt="Image"
                                                class="img-responsive"></a>
                                    </div>
                                    <div class="col-xs-6 col-sm-3"><a href="#x" class="thumbnail"><img
                                                src="resources/assets/img/clients/zoom.jpg" alt="Image"
                                                class="img-responsive"></a>
                                    </div>
                                    <div class="col-xs-6 col-sm-3"><a href="#x" class="thumbnail"><img
                                                src="resources/assets/img/clients/ngn.jpg" alt="Image"
                                                class="img-responsive"></a>
                                    </div>
                                    <div class="col-xs-6 col-sm-3"><a href="#x" class="thumbnail"><img
                                                src="resources/assets/img/clients/anchorage.jpg" alt="Image"
                                                class="img-responsive"></a>
                                    </div>
                                </div>
                                <!--/row-->
                            </div>
                            <!--/item-->
                        </div>
                        <!--carousel-indicators-->
                        <ol class="carousel-indicators">
                            <li data-target="#clients-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#clients-carousel" data-slide-to="1"></li>
                            <li data-target="#clients-carousel" data-slide-to="2"></li>
                        </ol>
                        <!--/carousel-indicators-->
                    </div>
                    <!--/myCarousel-->
                </div>
                <!--/well-->
            </div>
        </div>
    </div>
</div>
<!-- testimonial area end   -->
<!--Section 7 team-->
<div class="team_area" id="team">
    <div class="section">
        <h1>Nuestro <span>Equipo</span></h1>
        <hr>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xs-6 col-md-4">
                <div class="thumbnail text-center team_section">
                    <figure><img src="resources/assets/img/team/01.jpg" alt="..." class="img-circle"></figure>
                    <h3>Carlos Pineda</h3>
                    <span>CEO</span>
                    <ul class="social social-circle">
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-6 col-md-4">
                <div class="thumbnail text-center team_section">
                    <figure><img src="resources/assets/img/team/05.jpg" alt="..." class="img-circle"></figure>
                    <h3>Javier Bastidas</h3>
                    <span>Lider de Proyectos</span>
                    <ul class="social social-circle">
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-6 col-md-4">
                <div class="thumbnail text-center team_section">
                    <figure><img src="resources/assets/img/team/03.jpg" alt="..." class="img-circle"></figure>
                    <h3>Jose Figueredo</h3>
                    <span>Director de sistemas</span>
                    <ul class="social social-circle">
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-6 col-md-4">
                <div class="thumbnail text-center team_section">
                    <figure><img src="resources/assets/img/team/07.jpg" alt="..." class="img-circle"></figure>
                    <h3>Pedro Gorrin</h3>
                    <span>Director de desarrollo</span>
                    <ul class="social social-circle">
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-6 col-md-4">
                <div class="thumbnail text-center team_section">
                    <figure><img src="resources/assets/img/team/08.jpg" alt="..." class="img-circle"></figure>
                    <h3>Paulimar Angulo</h3>
                    <span>Desarrollador Senior</span>
                    <ul class="social social-circle">
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-6 col-md-4">
                <div class="thumbnail text-center team_section">
                    <figure><img src="resources/assets/img/team/04.jpg" alt="..." class="img-circle"></figure>
                    <h3>Alexis Vasquez</h3>
                    <span>Desarrollador Senior</span>
                    <ul class="social social-circle">
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-6 col-md-4">
                <div class="thumbnail text-center team_section">
                    <figure><img src="resources/assets/img/team/06.jpg" alt="..." class="img-circle"></figure>
                    <h3>Carlos Bullones</h3>
                    <span>Desarrollador Junior</span>
                    <ul class="social social-circle">
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-6 col-md-4">
                <div class="thumbnail text-center team_section">
                    <figure><img src="resources/assets/img/team/02.jpg" alt="..." class="img-circle"></figure>
                    <h3>Yessica Fernandez</h3>
                    <span>Especialista en Contenido y SEO</span>
                    <ul class="social social-circle">
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-6 col-md-4">
                <div class="thumbnail text-center team_section">
                    <figure><img src="resources/assets/img/team/03.jpg" alt="..." class="img-circle"></figure>
                    <h3>Gleycer Parra</h3>
                    <span>Desarrollador Junior</span>
                    <ul class="social social-circle">
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- team area end   -->
<!--Section 8 about-->
<div class="about_area" id="about">
    <div class="container">
        <div class="section">
            <h1>Sobre <span>Nosotros</span></h1>
            <hr>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 about-text">
                <p>somos una organizacion que se destaca por satisfacer comprometidamente las necesidades de nuestros
                    clientes por medio de servicios de ultima generacion, manteniendo los estandares y los valores que
                    nos caracterizan para producir productos de calidad internacional.</p>
            </div>
        </div>
    </div>
</div>
<!-- about area end-->
<!--Section 9 contact-->
<div class="contact_area" id="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section">
                    <h1><span>Contactanos</span></h1>
                    <hr>

                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="contact-form">

                        <?php
                        if (isset($_SESSION['error'])) {
                            $error = $_SESSION['error'];
                            if ($error) {
                                session_destroy();
                                echo '<div class="alert alert-danger" role="alert">
                                            <strong>Lo sentimos tu mensaje no pudo ser enviado</strong>
                                      </div>';
                            } else {
                                session_destroy();
                                echo '<div class="alert alert-success" role="alert">
                                                <strong>Mensaje enviado</strong>
                                      </div>';

                            }

                        }
                        ?>

                        <form role="form" id="formContact" name="formContact" method="post" action="contact.php">
                            <div class="form-group">
                                <input type="text" class="form-control form-effect" id="name" name="name"
                                       placeholder="Nombre" value="<?php echo (isset($_SESSION['name'])) ? $_SESSION['name'] : '' ; ?>" required/>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control form-effect" id="email" name="email"
                                       placeholder="Correo Electronico" value="<?php echo isset($_SESSION['email']) ? $_SESSION['email'] : '' ; ?>" required/>
                            </div>
                            <div class="form-group">
                                <textarea type="textarea" class="form-control form-effect" id="message" name="message"
                                          placeholder="Mensaje" required><?php echo isset($_SESSION['message']) ? $_SESSION['message'] : '' ; ?></textarea>
                            </div>
                            <div align="center" class="form-group">
                                <div class="g-recaptcha" data-callback="enableBtn"
                                     data-sitekey="6LdTdyETAAAAAIKq2OBkwbG2M9Mr-NaMluYsCct8"></div>
                            </div>
                            <button type="submit" class="btn btn-info btn-sub" id="buttonForm" disabled>Enviar</button>
                        </form>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="address-space">
                        <p><i class="fa fa-map-marker fa-2x"></i>&nbsp;&nbsp; Carrera 13 con calle 43, Barquisimeto Edo
                            Lara, Venezuela.</p>

                        <p><i class="fa fa-phone fa-2x"></i>&nbsp;&nbsp; (+58) 251 2377993</p>

                        <p><i class="fa fa-envelope-o fa-2x"></i>&nbsp;&nbsp; info@dnc.com</p>
                    </div>
                    <div class="social-space">
                        <h3>Siguenos por</h3>
                        <ul class="social social-circle">
                            <li><a href="https://twitter.com/dncomputing" target="_blank"><i class="fa fa-twitter"
                                                                                             aria-hidden="true"></i></a>
                            </li>
                            <li><a href="#" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="https://www.linkedin.com/in/dncomputing-c-a-dncomputing-c-a-a2599095"
                                   target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p class="copyright_section">© DNC Derechos Reservados 2016</p>
            </div>
        </div>
    </div>
</div>
<!-- contact area end   -->

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<script src="bower_components/owl.carousel/dist/owl.carousel.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="resources/assets/js/scrollupto.js"></script>
<script src="bower_components/smooth-scroll/dist/js/smooth-scroll.min.js"></script>
<script src="resources/assets/js/app.js"></script>

</body>
</html>