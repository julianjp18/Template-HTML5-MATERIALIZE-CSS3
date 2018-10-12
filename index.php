<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?= SITE_NAME ?> - Página principal</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?= RUTA_URL; ?>/css/font-awesome.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?= RUTA_URL; ?>/css/loader.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="<?= RUTA_URL; ?>/css/style-index.css">
   
    <!-- Compiled and minified JavaScript -->
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
    <script src="<?= RUTA_URL; ?>/js/main.js"></script>
</head>

<body>
    <div class="se-pre-con"></div>
    <div class="background-1" id="home">
        <div class="fondo-1">
            <div class="container header">
                <div class="row">
                    <div class="col s6 center-align" data-aos="fade-right">
                            <h1 class="title-welcome">Lleva tus academias de baile a otro nivel con</h1>
                            <span class="center-align">SideFlip</span>      
                            <h2 class="see-more">Ver más</h2>
                            <a href="#what-is"><span class="center-align"><i class="fa fa-chevron-down"></i></span></a>
                    </div>
                    <div class="col s6">
                        <img class="img-women to-center" data-aos="zoom-in" src="<?= RUTA_URL; ?>/img/sd-1.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav>
        <div class="nav-wrapper">
            <div class="container">
                <a href="#!" class="brand-logo">SideFlip</a>
                <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                    <li class=""><a href="#what-is">¿Qué es SideFlip?</a></li>
                    <li class=""><a href="#services">Servicios</a></li>
                    <li class=""><a href="#prices">Precios</a></li>
                    <li class=""><a href="#clients" data-ancla="clients">Clientes</a></li>
                    <li class=""><a href="#contact-us">Contacto</a></li>
                    <li class=""><a href="<?= RUTA_URL; ?>/pages/ingresar">Ingresar</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <ul class="sidenav" id="mobile-demo">
        <li class=""><a href="#what-is">¿Qué es SideFlip?</a></li>
        <li class=""><a href="#services">Servicios</a></li>
        <li class=""><a href="#prices">Precios</a></li>
        <li class=""><a href="#clients">Clientes</a></li>
        <li class=""><a href="#contact-us">Contacto</a></li>
        <li class=""><a href="<?= RUTA_URL; ?>/pages/ingresar">Ingresar</a></li>
    </ul>
    <div class="background-2" id="what-is">
        <div class="container">
            <div class="row">
                <div class="col s12 center-align">
                    <h2 class="title-what-is"  data-aos="zoom-in">¿Qué es SideFlip?</h2>
                    <div class="line-shape"></div>
                    <br>
                    <p class="text-sideflip">
                        SideFlip es la plataforma ideal para gestionar la asistencia a clases en cada una de sus academias de baile, contamos con membresias para todos sus integrantes (Estudiantes, docentes y asesores).
                        En esta aplicación los Asesores pueden programar una clase y los estudiantes la visualizan en tiempo real a través de su cuenta.
                    </p>
                    <br>
                        <div class="main-center">
                            <a class="btn see-more" href="#">Conoce más</a>
                        </div>
                    <br>
                    <br>
                </div>
            </div>
            <div class="row">
                <div class="col s12">
                        <h2 class="center-align">
                            Conectate con nosotros a través de nuestras redes sociales <br>
                            <br>
                            <span class="fa fa-facebook-square hoverable"></span>
                            <span class="fa fa-twitter-square hoverable"></span>
                            <span class="fa fa-youtube-square hoverable"></span>
                        </h2>         
                </div>
            </div>
        </div>
    </div>
    <div class="background-3" id="services">
        <div class="fondo-3">
            <div class="container">
                <div class="row">
                    <div class="col s12 center-align">
                        <h2 class="title-services"  data-aos="zoom-in">Servicios</h2>
                        <div class="line-shape-2"></div>
                        <br>
                        <p class="text-services">
                            SideFlip es la plataforma ideal para gestionar la asistencia a clases en cada una de sus academias de baile, contamos con membresias para todos sus integrantes (Estudiantes, docentes y asesores).
                            En esta aplicación los Asesores pueden programar una clase y los estudiantes la visualizan en tiempo real a través de su cuenta.
                        </p>
                        <br>
                        <div class="row row-services">
                            <div class="col s4">
                                <span class="fa fa-user-circle"></span>
                                <h3>Docentes</h3>
                                <p class="text-services">
                                    SideFlip es la plataforma ideal para gestionar la asistencia a clases en cada una de sus academias de baile
                                </p>
                            </div>
                            <div class="col s4">
                                <span class="fa fa-users"></span>
                                <h3>Estudiantes</h3>
                                <p class="text-services">
                                    SideFlip es la plataforma ideal para gestionar la asistencia a clases en cada una de sus academias de baile
                                </p>
                            </div>
                            <div class="col s4">
                                <span class="fa fa-address-book"></span>
                                <h3>Asesores</h3>
                                <p class="text-services">
                                    SideFlip es la plataforma ideal para gestionar la asistencia a clases en cada una de sus academias de baile
                                </p>
                            </div>   
                        </div>
                        <div class="row row-services">
                            <div class="col s4">
                                <span class="fa fa-calendar"></span>
                                <h3>Calendario dinámico</h3>
                                <p class="text-services">
                                    SideFlip es la plataforma ideal para gestionar la asistencia a clases en cada una de sus academias de baile
                                </p>
                            </div>
                            <div class="col s4">
                                <span class="fa fa-briefcase"></span>
                                <h3>En tiempo real</h3>
                                <p class="text-services">
                                    SideFlip es la plataforma ideal para gestionar la asistencia a clases en cada una de sus academias de baile
                                </p>
                            </div>
                            <div class="col s4">
                                <span class="fa fa-comments"></span>
                                <h3>Mensajería</h3>
                                <p class="text-services">
                                    SideFlip es la plataforma ideal para gestionar la asistencia a clases en cada una de sus academias de baile
                                </p>
                            </div> 
                        </div>
                        <br>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="background-2" id="prices">
        <div class="container">
            <div class="row center-align">
                <div class="col s12">
                    <h2 class="title-what-is"  data-aos="zoom-in">Precios</h2>
                    <div class="line-shape"></div>
                    <br>
                    <p class="main-center text-sideflip">
                        SideFlip es la plataforma ideal para gestionar la asistencia a clases en cada una de sus academias de baile, contamos con membresias para todos sus integrantes (Estudiantes, docentes y asesores).
                        En esta aplicación los Asesores pueden programar una clase y los estudiantes la visualizan en tiempo real a través de su cuenta.
                    </p>
                    <br>
                    <div class="row">     
                        <div class="columns col s6">
                            <ul class="price free">
                                <li class="header-columns">Gratis</li>
                                <li>$ 0.0 / año</li>
                                <li>Agrega Estudiantes sin límites</li>
                                <li>Máximo 3 docentes</li>
                                <li>1 Asesor</li>
                                <li>Hasta 3 categorias</li>
                                <li>Hasta 5 clases por categoria a la semana</li>
                            </ul>
                        </div>
                    
                        <div class="columns col s6">
                            <ul class="price premium">
                                <li class="header-columns">Premium</li>
                                <li>$ 50.000 / año</li>
                                <li>Agrega Estudiantes sin límites</li>
                                <li>Agrega docentes sin límites</li>
                                <li>Asesores ilimitados</li>
                                <li>Las categorias que quieras</li>
                                <li>Las clases que quieras a la semana</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col s12">
                    <div class="price-more-div center-align">
                        <a class="price-more" href="#">Más información <i class="fa fa-chevron-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="background-2" id="clients">
        <div class="container">
            <div class="row">
                <div class="col s12 center-align">
                    <h2 class="title-what-is"  data-aos="zoom-in">Nuestros clientes</h2>
                    <div class="line-shape"></div>
                    <br>
                    <p class="text-sideflip">
                        SideFlip es la plataforma ideal para gestionar la asistencia a clases en cada una de sus academias de baile, contamos con membresias para todos sus integrantes (Estudiantes, docentes y asesores).
                        En esta aplicación los Asesores pueden programar una clase y los estudiantes la visualizan en tiempo real a través de su cuenta.
                    </p>
                </div>
            </div>
        </div>
        <div class="container-grid">
            <div class="item-grid">
                <img src="<?= RUTA_URL ?>/img/clients/logogolden.png" alt="">
            </div>
            <div class="item-grid black">
                <img src="http://www.danceinmotion.co/images/logo_dance.svg" alt="">
            </div>
            <div class="item-grid">
                <img src="<?= RUTA_URL ?>/img/clients/logogolden.png" alt="">
            </div>
            <div class="item-grid black">
                <img src="http://www.danceinmotion.co/images/logo_dance.svg" alt="">
            </div>
            <div class="item-grid">
                <img src="<?= RUTA_URL ?>/img/clients/logogolden.png" alt="">
            </div>
        </div>
    </div>
    <div class="background-4" id="contact-us">
        <div class="fondo-4">
            <div class="container">
                <div class="row">
                    <div class="col s12 center-align">
                        <h2 class="title-services main-center"  data-aos="zoom-in">Contáctenos</h2>
                        <div class="line-shape-2"></div>
                        <br>
                        <p class="text-services">
                            SideFlip es la plataforma ideal para gestionar la asistencia a clases en cada una de sus academias de baile, contamos con membresias para todos sus integrantes (Estudiantes, docentes y asesores).
                            En esta aplicación los Asesores pueden programar una clase y los estudiantes la visualizan en tiempo real a través de su cuenta.
                        </p>
                        <br>   
                    </div>
                </div>
                <div class="row">
                    <form class="col s12" action="" method="POST">
                        <div class="row">
                            <div class="input-field col s6">
                                <input type="text" name="txt_subject" id="txt_subject" required placeholder="Asunto" class="validate">
                                <label for="txt_subject">Asunto</label>
                            </div>
                            <div class="input-field col s6">
                                <input type="email" name="txt_email" id="txt_email" required placeholder="Correo electrónico" class="validate">
                                <label for="txt_email">Correo electrónico</label>
                            </div>
                        </div>   
                        <div class="row">
                            <div class="input-field col s12">
                                <textarea name="txt_comments" id="txt_comments" cols="30" rows="10" class="materialize-textarea" placeholder="Escribe tu texto aqui.."></textarea>
                                <label for="txt_comments">Mensaje</label>
                            </div>
                        </div>
                        <div class="center-align">
                            <button type="submit" class="btn send-form">Enviar</button>
                        </div>                  
                    </form>  
                </div>
            </div>
        </div>
    </div>
    <?php require RUTA_APP.'/views/inc/footer-supervisor.inc'; ?>