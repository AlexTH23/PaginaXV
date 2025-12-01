<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Home - Miriams´S Coreography</title>
    <link rel="icon" href="img/IconoVentana.ico" type="image/x-icon">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free Website Template" name="keywords">
    <meta content="Free Website Template" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="manifest" href="manifest.json">

    <style>
        .cafe-claro {
            color: hsl(25, 51%, 42%);
        }
    </style>
<style>
    /* Ajuste SOLO para imágenes baile */
    .image-container{
        display: flex;
        justify-content: center;
        gap: 20px;
        flex-wrap: wrap;
    }
    .image-container div{
        width: 30%;
        min-width: 250px;
        overflow: hidden;
        border-radius: 12px;
    }
    .image-container img{
        width: 100%;
        height: 280px;
        object-fit: cover; /* evita deformación y recorta para verse limpia */
        border-radius: 12px;
        transition: 0.4s ease;
    }
    .image-container img:hover{
        transform: scale(1.05);
    }

    /* 📱 Responsive para móvil */
    @media (max-width: 768px){
        .image-container div{
            width: 45%;
        }
        .image-container img{
            height: 220px;
        }
    }
    @media (max-width: 500px){
        .image-container div{
            width: 100%;
        }
        .image-container img{
            height: 200px;
        }
    }
</style>

</head>
<style>
    /* Mantiene el diseño actual en PC — SIN cambios drásticos */

    /* 🔻 Solo se aplica en celular */
    @media (max-width: 768px) {
        .image-container{
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 15px;
        }

        .image-container div{
            width: 48%;       /* 2 por fila en tablet/celular grande */
            min-width: 160px;
        }

        .image-container img{
            width: 100%;
            height: 180px;   /* Reduce alto para que no se desborden */
            object-fit: cover;
            border-radius: 10px;
        }
    }

    /* 🔻 Aún más responsivo para celulares pequeños */
    @media (max-width: 480px){
        .image-container div{
            width: 100%;    /* 1 imagen por fila */
        }

        .image-container img{
            height: 160px; /* Se adapta mejor en pantallas muy pequeñas */
        }
    }
</style>

<body>
    <!-- Navbar Start -->
    <div class="container-fluid p-0 nav-bar">
        <nav class="navbar navbar-expand-lg bg-none navbar-dark py-3">
            <!-- 🔹 Aquí va tu imagen como icono -->
            <a href="index.php" class="navbar-brand d-flex align-items-center px-lg-4 m-0">
                <img src="img/Icono.png" 
                     alt="Logo" 
                     style="width:40px; height:40px; object-fit:contain; margin-right:8px;">
            </a>

            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav ml-auto p-4">
                    <a href="index.php" class="nav-item nav-link active">Home</a>
                    <a href="about.php" class="nav-item nav-link">About Me</a>
                    <a href="service.php" class="nav-item nav-link">Services</a>
                    <a href="menu.php" class="nav-item nav-link">Images of my Work</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Information</a>
                        <div class="dropdown-menu text-capitalize">
                            <a href="reservation.php" class="dropdown-item">Reservation</a>
                            <a href="testimonial.php" class="dropdown-item">Testimonial</a>
                        </div>
                    </div>
                    <a href="contact.php" class="nav-item nav-link">Contact</a>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->

    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div id="blog-carousel" class="carousel slide overlay-bottom" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/rosas.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <p><p><em class="cafe-claro"><h1> 15 CHOREOGRAPHY</h1></em></p></p>
                        <h2 class="text-white m-0">by Miriam</h2>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/rosas.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <h2 class="text-primary font-weight-medium m-0">"DANCE IS THE BEST THERAPY FOR THE BODY AND THE SOUL."</h2>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#blog-carousel" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#blog-carousel" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="section-title">
                <h1 class="text-primary text-uppercase" style="letter-spacing: 5px;">About Me</h1>
            </div>
            <div class="row">
                <div class="col-lg-4 py-0 py-lg-5">
                    <h5 class="mb-3 text-center text-danger">Hello! My name is Miriam and i reside in Los Angeles.</h5>
                    <p class="text-justify">
                        My passion strated when i was in high school when i joined a dance team. Family and friends reached 
                        out to me to help them with their dances for their "QUINCIAÑERAS" and that is how this journey began. 
                        when they saw how passionate i was about creating something unique and making rehearsals fun, friends 
                        of quinciañeras i taught and friends of family contacted me to do theirs also. This went on for many 
                        years being contacted by many people across the San Fernando valley. Now, I have over 10 years of 
                        experience creating beautiful dances of different kinds for quinciañerasand sweet 16 events.
                    </p>
                </div>
                <div class="col-lg-4 py-5 py-lg-0" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100" src="img/aboutme.jpeg" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-4 py-0 py-lg-5">
                    <br><br>
                    <h5 class="mb-3 text-warning text-center">GOALS</h5>
                <p class="text-justify">
                    My goal when working whit quinciañeras and sweet 16's is to make fun and memorable experiences  for all 
                    who participate in the dances i choreograph.
                    <br><br> To create a special dances where the start of the show feels 
                    confident and beauutiful on their special day
                </p>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Service Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="section-title">
                <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">SERVICES</h4>
                <h1 class="display-4">___________________________</h1>
                <br>
            </div>
            <div class="row">
                <div class="col-lg-6 mb-5">
                    <div class="row align-items-center">
                        <div class="col-sm-5">
                            <img class="img-fluid mb-3 mb-sm-0" src="img/surprize1.jpeg" alt="">
                        </div>
                        <div class="col-sm-7">
                            <h4 class="text-warning text-center">BAILES SORPRESA</h4>
                            <p class="m-0">A high-energy surprise dance performance filled with fun choreography and unexpected moments. <br> Perfect for entertaining guests and creating a memorable highlight during the celebration.</p>
                            <center><br>
                                <button class="button" data-bs-toggle="modal" data-bs-target="#miVentanaEmergente1">
                                    <span class="button-content">WATCH VIDEO</span>
                                  </button> 
                            </center>
                            
                            <!-- ///////////////// INICIO DE LA PRIMER EMERGENTE /////////////// -->
                            <div class="modal fade" id="miVentanaEmergente1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title text-black text-center" id="exampleModalLabel">VIDEO OF BAILE SORPRESA</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <p class="text-black text-center"> DAME UNA DESCRIPCION PARA AQUI
                                                <center>
                                                    <video width="480" height="270" controls>
                                                        <source src="img/sorpresa.mp4" type="video/mp4">
                                                    </video>
                                                </center>
                                            </p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                            <!-- Puedes agregar más botones si es necesario -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ////////////////// FIN PRIMERA EMERGENTE ////////////// -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-5">
                    <div class="row align-items-center">
                        <div class="col-sm-5">
                            <img class="img-fluid mb-3 mb-sm-0" src="img/VALS1.jpeg" alt="">
                        </div>
                        <div class="col-sm-7">
                            <h4 class="text-warning text-center">VALS</h4>
                            <p class="m-0 text-center">A classic and elegant waltz that captures the beauty and tradition of the moment.  <br> This performance showcases graceful movement, emotional connection, and timeless style. </p>
                            <center> <br>
                                <button class="button" data-bs-toggle="modal" data-bs-target="#miVentanaEmergente2">
                                    <span class="button-content">WATCH VIDEO</span>
                                  </button> 
                            </center>

                            <!-- //////////////// INICIO SEGUNDA EMERGENTE //////////////// -->
                            <div class="modal fade" id="miVentanaEmergente2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title text-black text-center" id="exampleModalLabel">VIDEO OF BAILE SORPRESA</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <p class="text-black text-center"> DAME UNA DESCRIPCION PARA AQUI o video
                                                <center>
                                                    <video width="480" height="270" controls>
                                                        <source src="img/sorpresa.mp4" type="video/mp4">
                                                    </video>
                                                </center>
                                            </p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                            <!-- Puedes agregar más botones si es necesario -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ////////////////// FIN DE SEGUNDA EMERGENTE///////// -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-5">
                    <div class="row align-items-center">
                        <div class="col-sm-5">
                            <img class="img-fluid mb-3 mb-sm-0" src="img/papa2.jpg" alt="">
                        </div>
                        <div class="col-sm-7">
                            <h4 class="text-warning text-center">Father/Daughter Surprise Dance</h4>
                            <p class="m-0 text-center">A heartwarming and fun father-daughter dance that starts traditionally and transforms into an upbeat surprise routine. A perfect blend of emotion, personality, and entertainment for all guests  </p> <br>
                            <center>
                                <button class="button" data-bs-toggle="modal" data-bs-target="#miVentanaEmergente3">
                                <span class="button-content">WATCH VIDEO</span>
                              </button> 
                            </center>
                            
                            <!-- /////////////////// TERCRE EMERGENTE INICIO ////////////// -->
                            <div class="modal fade" id="miVentanaEmergente3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title text-black text-center" id="exampleModalLabel">VIDEO OF BAILE SORPRESA</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <p class="text-black text-center"> DAME UNA DESCRIPCION PARA AQUI o video
                                                <center>
                                                    <video width="480" height="270" controls>
                                                        <source src="img/sorpresa.mp4" type="video/mp4">
                                                    </video>
                                                </center>
                                            </p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                            <!-- Puedes agregar más botones si es necesario -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /////////////////// FIN TERCERA EMERGENTE ///////////// -->
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mb-5">
                    <div class="row align-items-center">
                        <div class="col-sm-5">
                            <img class="img-fluid mb-3 mb-sm-0" src="img/dulces16.jpg" alt="">
                        </div>
                        <div class="col-sm-7">
                            <h4 class="text-warning text-center">SWEET 16</h4>
                            <p class="m-0 text-center">A captivating Sweet 16 presentation featuring expressive choreography and a celebratory vibe. This performance brings emotion, joy, and unforgettable moments to the event.</p> <br>
                            <center>
                                 <button class="button" data-bs-toggle="modal" data-bs-target="#miVentanaEmergente4">
                                <span class="button-content">WATCH VIDEO</span>
                              </button> 
                            </center>
                           
                            <!-- ////////////////// INICIO CUARTA EMERGENTE /////////// -->
                            <div class="modal fade" id="miVentanaEmergente4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title text-black text-center" id="exampleModalLabel">VIDEO OF BAILE SORPRESA</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <p class="text-black text-center"> DAME UNA DESCRIPCION PARA AQUI o video o musica algo
                                                <center>
                                                    <video width="480" height="270" controls>
                                                        <source src="img/sorpresa.mp4" type="video/mp4">
                                                    </video>
                                                </center>
                                            </p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                            <!-- Puedes agregar más botones si es necesario -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ///////////////// FIN CUARTA EMERGENTE /////////// -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-5">
                    <div class="row align-items-center">
                        <div class="col-sm-5">
                            <img class="img-fluid mb-3 mb-sm-0" src="img/edition.jpg" alt="">
                        </div>
                        <div class="col-sm-7">
                            <h4 class="text-warning text-center">SWEET 16 EDITION</h4>
                            <p class="m-0 text-center">A cinematic Sweet 16 highlight edit that showcases the celebration through dynamic cuts, emotional moments, and a polished visual style that brings the event to life. </p> <br>
                            <center>
                                 <button class="button" data-bs-toggle="modal" data-bs-target="#miVentanaEmergente5">
                                <span class="button-content">WATCH VIDEO</span>
                              </button> 
                            </center>
                           
                            <!-- ////////////////// INICIO quinta EMERGENTE /////////// -->
                            <div class="modal fade" id="miVentanaEmergente5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title text-black text-center" id="exampleModalLabel">VIDEO OF BAILE SORPRESA</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <p class="text-black text-center"> DAME UNA DESCRIPCION PARA AQUI o video o musica algo de lo que quieras
                                                <center>
                                                    <video width="480" height="270" controls>
                                                        <source src="img/sorpresa.mp4" type="video/mp4">
                                                    </video>
                                                </center>
                                            </p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                            <!-- Puedes agregar más botones si es necesario -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ///////////////// FIN quinta EMERGENTE /////////// -->
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mb-5">
                    <div class="row align-items-center">
                        <div class="col-sm-5">
                            <img class="img-fluid mb-3 mb-sm-0" src="img/music.jpg" alt="">
                        </div>
                        <div class="col-sm-7">
                            <h4 class="text-warning text-center">SWEET 16 CHOREOGRAPHY</h4>
                            <p class="m-0 text-center">A personalized Sweet 16 choreography filled with youthful energy, style, and celebration, featuring creative movement designed to highlight the birthday girl.</p> <br>
                            <center>
                                 <button class="button" data-bs-toggle="modal" data-bs-target="#miVentanaEmergente6">
                                <span class="button-content">WATCH VIDEO</span>
                              </button> 
                            </center>
                           
                            <!-- ////////////////// INICIO sexta EMERGENTE /////////// -->
                            <div class="modal fade" id="miVentanaEmergente6" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title text-black text-center" id="exampleModalLabel">VIDEO OF BAILE SORPRESA</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <p class="text-black text-center"> DAME UNA DESCRIPCION PARA AQUI o video o musica algo igual lo que puedas 
                                                <center>
                                                    <video width="480" height="270" controls>
                                                        <source src="img/sorpresa.mp4" type="video/mp4">
                                                    </video>
                                                </center>
                                            </p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                            <!-- Puedes agregar más botones si es necesario -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ///////////////// FIN sexta EMERGENTE /////////// -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Offer Start -->
    <div class="offer container-fluid my-5 py-5 text-center position-relative overlay-top overlay-bottom">
        <div class="container py-5">
            <h1 class="display-3 text-primary mt-3"></h1>
            <h1 class="text-white mb-3"></h1>
            <form class="form-inline justify-content-center mb-4">
            <center>
                <img src="img/momentos.png" alt="" height="200px">
            </center>
            <br>
            </form>
            
            <h4 class="text-white">DREAM, PLAN , DO</h4>
        </div>
    </div>
    <!-- Offer End -->


    <!-- Menu Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="section-title">
                <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">CONOCE MI AMBIENTE DE TRABAJO</h4>
                <h1 class="display-4">_______________________________</h1>
                <br>
                <br>
                <h1 class="display-4">IMAGES OF MY WORK</h1>
                <br>
                <br>

            </div>
            <div class="image-container">
                <div><img src="img/baile1.jpeg" alt="Imagen 1"></div>
                <div><img src="img/baile2.jpeg" alt="Imagen 2"></div>
                <div><img src="img/baile3.jpg" alt="Imagen 3"></div>
              </div>
              <br><br>
              <div class="image-container">
                <div><img src="img/baile4.jpg" alt="Imagen 1"></div>
                <div><img src="img/baile5.jpeg" alt="Imagen 2"></div>
                <div><img src="img/baile6.jpeg" alt="Imagen 3"></div>
              </div>
              <br><br>
              <div class="image-container">
                <div><img src="img/baile7.jpg" alt="Imagen 1"></div>
                <div><img src="img/baile8.jpg" alt="Imagen 2"></div>
                <div><img src="img/baile9.jpg" alt="Imagen 3"></div>
              </div>
        </div>
    </div>
    <!-- Menu End -->


    <!-- Reservation Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="reservation position-relative overlay-top overlay-bottom">
                <div class="row align-items-center">

                    <!-- Imagen -->
                    <div class="col-lg-6 my-5 my-lg-0">
                        <div class="p-5">
                            <center>
                                <img src="img/baile_recervacion.png" alt="" width="230px" height="340px" style="border-radius: 10px;">
                            </center>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <form action="https://formsubmit.co/angelicaseegio26@gmail.com" method="POST" class="w-100">
                            <h4 class="text-white mb-3">Contact</h4>

                            <div class="mb-3 d-flex justify-content-center">
                                <a href="#" class="text-white mx-2">Privacy Policy</a>
                                <a href="#" class="text-white mx-2">Terms & Conditions</a>
                            </div>

                            <div class="form-group text-left">
                                <label class="text-white">Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Enter your name" required>
                            </div>

                            <div class="form-group text-left mt-3">
                                <label class="text-white">Phone</label>
                                <input type="text" name="phone" class="form-control" placeholder="Phone number" required>
                            </div>

                            <div class="form-group text-left mt-3">
                                <label class="text-white">Email</label>
                                <input type="email" name="email" class="form-control" placeholder="Email address" required>
                            </div>

                            <div class="form-group text-left mt-3">
                                <label class="text-white">Message</label>
                                <textarea name="message" class="form-control" cols="30" rows="4" placeholder="Write your message"></textarea>
                            </div>

                            <button type="submit" class="btn btn-light mt-4 px-4 py-2">Send</button>

                            <input type="hidden" name="_next" value="http://127.0.0.1:5500/CORREO_FORMULARIO/www/index.php">
                            <input type="hidden" name="_captcha" value="false">
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Reservation End -->

    <!-- Testimonial Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="section-title">
                <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">Testimonial</h4>
                <h1 class="display-4">My Clients Say</h1>
            </div>
            <div class="owl-carousel testimonial-carousel">
                <div class="testimonial-item">
                    <div class="d-flex align-items-center mb-3">
                        <img class="img-fluid" src="img/usuario.jpg" alt="">
                        <div class="ml-3">
                            <h4>NOMBRE DE ALGUIEN</h4>
                        </div>
                    </div>
                    <p class="m-0">Le puedes decir a alguna señora que te haga una reseña pequeña sobre tu servicio</p>
                </div>
                <div class="testimonial-item">
                    <div class="d-flex align-items-center mb-3">
                        <img class="img-fluid" src="img/usuario.jpg" alt="">
                        <div class="ml-3">
                            <h4>NOMBRE DE ALGUIEN</h4>
                        </div>
                    </div>
                    <p class="m-0">Le puedes decir a alguna señora que te haga una reseña pequeña sobre tu servicio</p>
                </div>
                <div class="testimonial-item">
                    <div class="d-flex align-items-center mb-3">
                        <img class="img-fluid" src="img/usuario.jpg" alt="">
                        <div class="ml-3">
                            <h4>NOMBRE DE ALGUIEN</h4>
                        </div>
                    </div>
                    <p class="m-0">Le puedes decir a alguna señora que te haga una reseña pequeña sobre tu servicio</p>
                </div>
                <div class="testimonial-item">
                    <div class="d-flex align-items-center mb-3">
                        <img class="img-fluid" src="img/usuario.jpg" alt="">
                        <div class="ml-3">
                            <h4>NOMBRE DE ALGUIEN</h4>
                        </div>
                    </div>
                    <p class="m-0">Le puedes decir a alguna señora que te haga una reseña pequeña sobre tu servicio</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Footer Start -->
    <div class="container-fluid footer text-white mt-5 pt-5 px-0 position-relative overlay-top">
        <div class="row mx-0 pt-5 px-sm-3 px-lg-5 mt-4">
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;"></h4>
                <p><i class="fa fa-map-marker-alt mr-2"></i>123 Street, New York, USA</p>
                <p><i class="fa fa-phone-alt mr-2"></i>+012 345 67890</p>
                <p class="m-0"><i class="fa fa-envelope mr-2"></i>correomiriam@gmail.com</p>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">Follow Us</h4>
                <p>For more information and better contact, follow us on our social media accounts.</p>
                <div class="d-flex justify-content-start">
                    <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-lg btn-outline-light btn-lg-square" href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="container-fluid text-center text-white border-top mt-4 py-4 px-sm-3 px-md-5" style="border-color: rgba(256, 256, 256, .1) !important;">
            <p class="mb-2 text-white">Copyright &copy; <a class="font-weight-bold" href="#">Domain</a>. All Rights Reserved.</a></p>
            <p class="m-0 text-white">Designed by <a class="font-weight-bold" href="https://htmlcodex.com">HTML Codex</a></p>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>