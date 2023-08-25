<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Habitaciones</title>
            <link rel = "icon" href = "imagenes/icono.png" type = "img/png">
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;500;700&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/51939dafe8.js" crossorigin="anonymous"></script>
            <link rel="stylesheet" href="css/stylo.css" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    </head>
    <body>
		<header id="navigation-menu">
            <div class="container">
                <nav>
                    <a href="#" class="logo"> 
                        <img src="imagenes/logo_titulo10.png" alt=""> 
                    </a>

                    <ul class="nav-menu">
                        <li> 
                            <a style="text-decoration:none;" href="index.php">INICIO</a> 
                        </li>
                        <li> 
                            <a style="text-decoration:none;" href="habitaciones.php" class="inicio">HABITACIONES</a> 
                        </li>
                        <li> 
                            <a style="text-decoration:none;" href="informacion.php">INFORMACIÓN</a> 
                        </li>
                        <li> 
                            <a style="text-decoration:none;" href="#">RESERVAS</a> 
                        </li>
                        <li> 
                            <a style="text-decoration:none;" href="#footer">CONTACTO</a> 
                        </li>
                    </ul>

                        <div class="hambuger">
                            <span class="bar"></span>
                            <span class="bar"></span>
                            <span class="bar"></span>
                        </div>
                </nav>
            </div>
        </header>
            <script>
                const hambuger = document.querySelector('.hambuger');
                const navMenu = document.querySelector('.nav-menu');

                hambuger.addEventListener("click", mobileMenu);

                function mobileMenu() {
                hambuger.classList.toggle("active");
                navMenu.classList.toggle("active");
                }

                const navLink = document.querySelectorAll('.nav-link');
                navLink.forEach((n) => n.addEventListener("click", closeMenu));

                function closeMenu() {
                hambuger.classList.remove("active");
                navMenu.classList.remove("active");
                }
            </script>

        <div id="carouselExampleControls5" class="carousel slide" data-bs-ride="carousel">    
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="imagenes/hb_lux1.jpg" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="imagenes/hb_lux2.jpg" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="imagenes/hb_lux3.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls5" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls5" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <section class = "hotel_concepto" id = "hotel_concepto">
            <div class = "sec-width2">
                <div class = "title_room text-center">
                    <h3 class="title2" style="color: black;">HABITACIÓN DELUXE DOBLE</h3>
                </div>
                    <div class = "hotel-container">
                        <!-- single customer -->
                        <div class = "hotel_con">
                            <p>Habitación elegante, con una decoración exquisita, ubicada en el primer piso con acceso a ventana con una increíble vista al jardín, por lo que crea un ambiente familiar, cálido y acogedor. Se trata de una habitación diseñada para dos o más personas. Para comodidad de nuestros huespedes, hemos incluido televisión, acceso a internet, servicio a la habitación y baño privado con regadera, entre otros.
                            </p>
                        </div>
                        <br>
                        <br>
                    </div>
                    <div class="sec-width4">
                        <center>
                            <div class="row align-items-center" style="text-align: justify;">
                                <div class="row">
                                    <div class="col">
                                        <h6>SERVICIOS EN LA HABITACIÓN</h6><br>
                                            <ul class="fa-ul" style="font-weight: lighter;">
                                                <li><span class="fa-li"><i class="fa-solid fa-bed"></i></span>Dos camas matrimoniales</li>
                                                <li><span class="fa-li"><i class="fas fa-tshirt"></i></span>Plancha para ropa</li>
                                                <li><span class="fa-li"><i class="fas fa-wifi"></i></span>WIFI-gratis</li>
                                                <li><span class="fa-li"><i class="fa-solid fa-air-freshener"></i></span>Servicio de limpieza</li>
                                                <li><span class="fa-li"><i class="fas fa-female"></i></span>Servicio a cuarto</li>
                                                <li><span class="fa-li"><i class="fas fa-utensils"></i></span>Comida tradicional</li>
                                            </ul>
                                    </div>
                                    <div class="col" style="text-align: justify;">
                                        <h6>AMENIDADES DEL BAÑO</h6><br>
                                            <ul class="fa-ul" style="font-weight: lighter;">
                                                <li><span class="fa-li"><i class="fas fa-toilet"></i></span>Baño privado</li>
                                                <li><span class="fa-li"><i class="fa-solid fa-shower"></i></span>Ducha</li>
                                                <li><span class="fa-li"><i class="fas fa-wind"></i></span>Secadora de cabello</li>
                                                <li><span class="fa-li"><i class="fab fa-accusoft "></i></span>Toallas y sabanas de algodón</li>
                                                <li><span class="fa-li"><i class="fas fa-bed"></i></span>Exquisito duvet</li>
                                            </ul>
                                    </div>
                                    <div class="col" style="text-align: justify;">
                                        <h6>COMODIDADES</h6><br>
                                            <ul class="fa-ul" style="font-weight: lighter;">
                                                <li><span class="fa-li"><i class="fas fa-address-book"></i></span>Servicios de recepción</li>
                                                <li><span class="fa-li"><i class="fas fa-city"></i></span>Acceso a fábrica de esferas</li>
                                                <li><span class="fa-li"><i class="fas fa-seedling"></i></span>Jardín</li>
                                                <li><span class="fa-li"><i class="fas fa-chair"></i></span>Mesas y sillas de exterior</li>
                                                <li><span class="fa-li"><i class="fas fa-car"></i></span>Estacionamiento</li>
                                                <li><span class="fa-li"><i class="fas fa-spa"></i></span>Descuento en SPA</li>
                                                <li><span class="fa-li"><i class="fas fa-book"></i></span>Servicio de consejería</li>
                                                <li><span class="fa-li"><i class="fas fa-eye"></i></span>Seguridad 24 hrs</li>
                                                <li><span class="fa-li"><i class="fas fa-couch"></i></span>Mobiliario de madera maciza de cedro</li>
                                            </ul>
                                    </div>
                                </div>
                            </div>
                        </center>  
                    </div>
            </div>
        </section>

        <section class = "hotel_concepto" id = "hotel_concepto">
            <div class = "sec-width2 title_room">
                <a href="reserva.php" class="btn1 btn-dark-1">RESERVAR</a>
            </div>
        </section> 
        <br>
       
<!-- footer -->
        <footer class = "footer" id="footer">
            <div class = "footer-container">
                <div>
                    <img src="imagenes/logo_menu.png" width="280" height="260">
                    <br>
                </div>
                    <div>
                        <h2>Más Información</h2>
                        <br>
                            <div class = "contact-item"> 
                                <span>
                                    <i class = "fas fa-map-marker-alt"></i>
                                </span>
                                <span>
                                    Francisco Javier Mina #17 col. Centro 73300
                                    Chignahuapan, Puebla, México
                                </span>
                            </div>
                            <div class = "contact-item">
                                <span>
                                    <i class = "fas fa-phone-alt"></i>
                                </span>
                                <span>
                                    <a href="tel:248 115 2776">+52 248 115 2776
                                </span>
                            </div>
                            <div class = "contact-item">
                                <span>
                                    <i class = "fas fa-envelope"></i>
                                </span>
                                <span>
                                    <a href="mailto:hboutique_reyna@hotmail.com?"> hboutique_reyna@hotmail.com</a>
                                </span>
                            </div>
                            <br>
                                <ul class = "social-icons">
                                    <li class = "flex">
                                        <a href='https://api.whatsapp.com/send?phone=+522481152776&text=Necesito+mas+información.';  class="whatsappbutton"><i class = "fa fa-whatsapp fa-2x"></i>
                                    </li>
                                    <li class = "flex">
                                        <a href='https://www.facebook.com/Hotel-Boutique-Reyna-100634289323761'; class="facebookbutton"><i class = "fa fa-facebook fa-2x"></i>
                                    </li>
                                    <li class = "flex">
                                        <a href='https://www.instagram.com/hboutique_reyna/';class="envelopebutton"><i class = "fa fa-instagram fa-2x"></i>
                                        </a>
                                    </li>
                                </ul>
                    </div>
                    <div class="map-responsive">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d481239.27977374493!2d-98.24904050245496!3d19.55526690629802!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d06c6c6b165555%3A0x8972ec3bc4640392!2sHotel%20boutique%20Reyna!5e0!3m2!1ses-419!2smx!4v1648074162152!5m2!1ses-419!2smx" width="350" height="250" align="right" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
            </div>
        </footer>
        <!-- end of footer -->

	       <script type="text/javascript">
		          window.addEventListener("scroll", function(){
			      var header = document.querySelector("header");
			      header.classList.toggle("abajo",window.scrollY>0);
		          })
	       </script>	

 
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
                <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
                    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
                        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>  
                            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>