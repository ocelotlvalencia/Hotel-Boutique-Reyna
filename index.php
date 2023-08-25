<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
            <title>Hotel Boutique Reyna</title>
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
                <script src="js/jquery.flexslider.js"></script> 
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
                            <a style="text-decoration:none;" href="index.php" class="inicio">INICIO</a> 
                        </li>
                        <li> 
                            <a style="text-decoration:none;" href="habitaciones.php">HABITACIONES</a> 
                        </li>
                        <li> 
                            <a style="text-decoration:none;" href="informacion.php">INFORMACIÓN</a> 
                        </li>
                        <li> 
                            <a style="text-decoration:none;" href="reserva.php">RESERVAS</a> 
                        </li>
                        <li> 
                            <a style="text-decoration:none;" href="#footer">CONTACTO</a> 
                        </li>
                        <li> 
                            <a style="text-decoration:none;" href="LOGGIN/login.php">LOGIN</a> 
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
        
	<!--/.Carousel Wrapper-->
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators" style="height:auto">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="5" aria-label="Slide 6"></button>
            </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="imagenes/sala10.jpg" class="d-block w-100">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>HOTEL BOUTIQUE REYNA</h5>
                                <p>Tú y tus seres queridos merecen lo mejor y sólo lo mejor, merecen sólo disfrute y confort. El disfrute y confort que hallarán en este Hotel Boutique en todo momento.</p>
                            </div>
                    </div>
                        <div class="carousel-item">
                            <img src="imagenes/sala11.jpg" class="d-block w-100">
                        </div>
                        <div class="carousel-item">
                            <img src="imagenes/imag18.jpg" class="d-block w-100">
                        </div>
                        <div class="carousel-item">
                            <img src="imagenes/sala3.jpeg" class="d-block w-100">
                        </div>
                        <div class="carousel-item">
                            <img src="imagenes/sala4.jpeg" class="d-block w-100">
                        </div>
                        <div class="carousel-item">
                            <img src="imagenes/img27.jpg" class="d-block w-100">
                        </div>
                </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
        </div>
        <br>

<!-- body content  -->
        <section class = "hotel_concepto" id = "hotel_concepto">
            <div class = "sec-width">
               <div class = "title_room text-center">
                    <img src="imagenes/icono.png" width="220" height="170">
                    <br>
                    <br>
                    <br>
                    <h2 class="title2">HOTEL BOUTIQUE</h2>
                </div>
                    <div class = "hotel-container">
                        <!-- single customer -->
                        <div class = "hotel_con">
                            <p>La finalidad de nuestro hotel, es hacer sentir al cliente como en casa. Buscando crear una experiencia única para el huesped. La exclusividad que ofrecemos es una de sus principales características, al tratarse de un hotel pequeño, la privacidad e intimidad están garantizadas. Además, el entorno donde se encuentra ubicado marcar la diferencia con otro tipo de alojamiento. Está dotados de infraestructuras modernas y de todas las tecnologías para que el huésped pueda disponer de todas las comodidades y vivir una estancia de lujo.
                            Siendo un alojamiento de calidad donde reina la exclusividad en el servicio ofrecido y también por el ambiente que emana de sus instalaciones, además del entorno donde se ubica el hotel, la historia de la zona, de la edificación, el respeto por preservar esta historia, la armonía con su entorno, la exquisitez en su decoración, el mimo en sus detalles, una atención que haga sentir al cliente parte de la familia del lugar.
                            </p>
                        </div>
                    </div>
            </div>
        </section>

 <!-- body content  -->
        <section class="services sec-width" id="services">
            <div class="title_room text-center">
                <h2 class="title">SERVICIOS</h2>
            </div>
            <div class = "services-container">
                <!-- single service -->
                <article class = "service">
                    <div class = "service-icon">
                        <span>
                            <i class = "fas fa-utensils"></i>
                        </span>
                    </div>
                        <div class = "service-content">
                            <h2>DESAYUNO</h2>
                            <p>La mejor forma de iniciar el día es disfrutar de un gran desayuno saludable y delicioso, ya que es la llave de acceso a las posibilidades que nos ofrece el día. Por lo que el hotel te ofrece un desayuno equilibrado cada mañana, que te ayudará a obtener la energía que necesitas para sacar el máximo provecho del día.</p>
                        </div>
                </article>
                <!-- end of single service -->
                <!-- single service -->
                <article class = "service">
                    <div class = "service-icon">
                        <span>
                            <i class = "fas fa-spa"></i>
                        </span>
                    </div>
                    <div class = "service-content">
                        <h2>SPA/TEMASCAL</h2>
                        <p>El hotel Boutique Reyna ofrece a los clientes, exclusivos tratamientos de spa (masajes, tratamientos faciales y corporales) y un mayor nivel de comodidades y servicios con excelentes productos y cosméticos Spa. </p>
                       
                    </div>
                </article>
                <!-- end of single service -->
                <!-- single service -->
                <article class = "service">
                    <div class = "service-icon">
                        <span>
                            <i class = "fas fa-car"></i>
                        </span>
                    </div>
                    <div class = "service-content">
                        <h2>ESTACIONAMIENTO</h2>
                        <p>Al llegar al hotel, tendrán la seguridad de contar con un estacionamiento disponible, seguro y gratuito, exclusivamente para nuestros clientes. Donde podrán tener la confianza de dejar su vehículo a nuestro cuidado y disfrutar de su estadía en el hotel.</p>                   
                    </div>
                </article>
                <!-- end of single service -->
                <!-- single service -->
                <article class = "service">
                    <div class = "service-icon">
                        <span>
                            <i class = "fas fa-wifi"></i>
                        </span>
                    </div>
                    <div class = "service-content">
                        <h2>INTERNET/CLAVE</h2>
                        <p>Contamos con internet totalmente gratis para todos nuestros huespédes. Podrá conectarse a internet vía Wifi totalmente gratis desde su habitación o desde cualquiera de nuestros espacios. Con la finalidad de que este servicio ayude hacer más agradable su estadía en el hotel y la estancia más cómoda.</p>
                    </div>
                </article>
                <!-- end of single service -->
            </div>
        </section>
<!-- end of content SERVICIOS -->

        <section class = "hotel_concepto" id = "hotel_concepto">
            <div class = "sec-width2">           	
               <div class = "title_room text-center">
                <h2 class="title2">HABITACIONES</h2>
            </div>
                    <div class = "hotel-container">
                        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active" data-bs-interval="10000">
                                    <img src="imagenes/imag18.jpg" class="d-block w-100">
                                </div>
                                <div class="carousel-item" data-bs-interval="2000">
                                    <img src="imagenes/ks4.jpeg" class="d-block w-100">
                                </div>
                                <div class="carousel-item">
                                    <img src="imagenes/lux2ca.jpeg" class="d-block w-100">
                                </div>
                                <div class="carousel-item">
                                    <img src="imagenes/ef4.jpeg" class="d-block w-100">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>                   
	                    <div class = "hotel_con">
                    	   <center>
                                <a href="habitaciones.php" type = "button" class = "btn3 btn-dark3">VER TODAS, HAZ CLIC AQUÍ</a>
                            </center>
                        </div>
                    </div>
            </div>
        </section>

        <center>
            <div id="fb-root"></div>
                <script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v13.0" nonce="NwOya9ZJ"></script>
                        <div class="fb-comments" data-href="https://valencia11.000webhostapp.com/" data-width="1200" data-numposts="5"></div>
       </center>

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

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>