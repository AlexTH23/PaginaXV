<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Reservation - Miriams´S Coreography</title>
    <link rel="icon" href="img/IconoVentana.ico" type="image/x-icon">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet"> 
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/style.css">
    <link href="css/style.min.css" rel="stylesheet">

    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body>

    <!-- Navbar Start -->
    <div class="container-fluid p-0 nav-bar">
        <nav class="navbar navbar-expand-lg bg-none navbar-dark py-3">
            <a href="index.php" class="navbar-brand d-flex align-items-center px-lg-4 m-0">
                <img src="img/Icono.png" alt="Logo" 
                     style="width:40px; height:40px; object-fit:contain; margin-right:8px;">
            </a>

            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav ml-auto p-4">
                    <a href="index.php" class="nav-item nav-link">Home</a>
                    <a href="about.php" class="nav-item nav-link">About Me</a>
                    <a href="service.php" class="nav-item nav-link">Services</a>
                    <a href="menu.php" class="nav-item nav-link">Images of my Work</a>

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle active" data-toggle="dropdown">Information</a>
                        <div class="dropdown-menu text-capitalize">
                            <a href="reservation.php" class="dropdown-item active">Reservation</a>
                            <a href="testimonial.php" class="dropdown-item">Testimonial</a>
                        </div>
                    </div>
                    <a href="contact.php" class="nav-item nav-link">Contact</a>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 position-relative overlay-bottom">
        <div class="d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5" style="min-height: 400px">
            <h1 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase">Reservation</h1>
            <div class="d-inline-flex mb-lg-5">
                <p class="m-0 text-white"><a class="text-white" href="index.php">Home</a></p>
                <p class="m-0 text-white px-2">/</p>
                <p class="m-0 text-white">Reservation</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


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

                    <!-- Formulario -->
                    <div class="col-lg-6">
                        <div class="text-center p-5" style="background: rgba(51, 33, 29, .8); border-radius: 10px;">
                            <h2 class="text-white mb-4 mt-3">CONSULTA TU RESERVACIÓN</h2>

                            <form id="contactForm" class="w-100">

                                <h4 class="text-white mb-3">Contact</h4>

                                <div class="mb-3 d-flex justify-content-center">
                                    <a href="#" class="text-white mx-2">Privacy Policy</a>
                                    <a href="#" class="text-white mx-2">Terms & Conditions</a>
                                </div>

                                <div class="form-group text-left">
                                    <label class="text-white">Name</label>
                                    <input type="text" id="name" class="form-control" placeholder="Enter your name" required>
                                </div>

                                <div class="form-group text-left mt-3">
                                    <label class="text-white">Phone</label>
                                    <input type="text" id="phone" class="form-control" placeholder="Phone number" required>
                                </div>

                                <div class="form-group text-left mt-3">
                                    <label class="text-white">Email</label>
                                    <input type="email" id="email" class="form-control" placeholder="Email address" required>
                                </div>

                                <div class="form-group text-left mt-3">
                                    <label class="text-white">Message</label>
                                    <textarea id="message" class="form-control" cols="30" rows="4" placeholder="Write your message" required></textarea>
                                </div>

                                <button type="submit" class="btn btn-light mt-4 px-4 py-2" id="sendBtn">Send</button>

                            </form>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Reservation End -->


    <!-- Footer Start -->
    <div class="container-fluid footer text-white mt-5 pt-5 px-0 position-relative overlay-top">
        <div class="row mx-0 pt-5 px-sm-3 px-lg-5 mt-4">
            <div class="col-lg-3 col-md-6 mb-5">
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
        <div class="container-fluid text-center text-white border-top mt-4 py-4 px-sm-3 px-md-5">
            <p class="mb-2 text-white">Copyright &copy; <a class="font-weight-bold" href="#">Domain</a>. All Rights Reserved.</p>
            <p class="m-0 text-white">Designed by <a class="font-weight-bold" href="https://htmlcodex.com">HTML Codex</a></p>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top">
        <i class="fa fa-angle-double-up"></i>
    </a>

    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- 🔥 SCRIPT PARA ENVIAR A TU API CON SWEETALERT -->
    <script>
        document.getElementById("contactForm").addEventListener("submit", async function(e) {
            e.preventDefault();

            const btn = document.getElementById("sendBtn");

            const data = {
                name: document.getElementById("name").value.trim(),
                phone: document.getElementById("phone").value.trim(),
                email: document.getElementById("email").value.trim(),
                message: document.getElementById("message").value.trim()
            };

            // Validaciones
            if (data.name.length < 3) 
                return Swal.fire("Error", "Name must have at least 3 characters.", "error");

            if (!/^\d{10}$/.test(data.phone))
                return Swal.fire("Error", "Phone must be 10 digits.", "error");

            if (!data.email.includes("@"))
                return Swal.fire("Error", "Invalid email address.", "error");

            if (data.message.length < 3)
                return Swal.fire("Error", "Message is too short.", "error");

            // Loader:
            btn.disabled = true;
            btn.innerHTML = "Sending...";

            try {
                const response = await fetch("https://goldfish-app-zpia5.ondigitalocean.app/libros", {
                    method: "POST",
                    headers: { "Content-Type": "application/json" },
                    body: JSON.stringify(data)
                });

                if (response.ok) {
                    Swal.fire({
                        icon: "success",
                        title: "Message Sent!",
                        text: "We received your reservation request.",
                        confirmButtonColor: "#28a745"
                    });

                    document.getElementById("contactForm").reset();

                } else {
                    Swal.fire("Error", "The server rejected your request.", "error");
                }

            } catch (error) {
                Swal.fire("Connection Error", "Could not reach the server.", "error");
            }

            btn.disabled = false;
            btn.innerHTML = "Send";
        });
    </script>

</body>
</html>
