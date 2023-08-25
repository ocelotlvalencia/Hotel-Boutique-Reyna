<!DOCTYPE html>
<html lang="es">
   <head>
	      <meta charset="UTF-8">
	      <title>Información</title>
	         <link rel = "icon" href = "imagenes/icono.png" type = "img/png">
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;500;700&display=swap" rel="stylesheet">
         <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
	      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
            <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
         <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
         <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
         <!------ Include the above in your HEAD tag ---------->

            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css" />
         <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.js"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.js"></script>
            <link rel="stylesheet" href="css/navegacion.css" type="text/css">
            <link rel="stylesheet" href="css/stylo.css" type="text/css">
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
                            <a href="index.php" style="text-decoration:none;">INICIO</a> 
                        </li>
                        <li> 
                            <a href="habitaciones.php" style="text-decoration:none;">HABITACIONES</a> 
                        </li>
                        <li> 
                            <a href="informacion.php" style="text-decoration:none;" class="inicio">INFORMACIÓN</a> 
                        </li>
                        <li> 
                            <a href="reserva.php"style="text-decoration:none;">RESERVAS</a> 
                        </li>
                        <li> 
                            <a href="#footer" style="text-decoration:none;">CONTACTO</a> 
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

         <div class="Chignahuapan">       
            <img src="imagenes/img21_1.jpg">
         </div>

         <section class = "hotel_concepto" id = "hotel_concepto">
            <div class = "sec-width">
               <div class = "title_room text-center">
                  <h2 class="title4">CHIGNAHUAPAN</h2>
               </div>
                     <div class = "hotel-container">
                        <!-- single customer -->
                        <div class = "hotel_con">
                           <p>La palabra Chignaguapan proviene del Nahutalt chicnahui, que significa "nueve"; alt, que significa "agua" y pan que significa "sobre, en". En conjunto dice "sobre las nueve aguas" o "donde abunda el agua". Chignahuapan es una pueblo lleno de sorpresas, que la caracteriza por su hermosa naturaleza, cultura, tradiciones, arquitectura, encontraras muchos lugares a los cuales podrás visitar como su famosa laguna "Almoloya" donde podrás realizar diversas actividades cerca del lago, donde apreciarás su belleza, ya que, está formado por nueve ojos de agua y logra mantener su color azul, un lugar perfecto para relajarte.
                           </p>
                        </div>
                     </div>
            </div> 
        </section>
        <br>

        <center>
               <div class="col-lg-6">
                  <div class="embed-responsive embed-responsive-16by9">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/nx67nB5PwMY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  </div>
                  <p>El vídeo pertenece a Viajefest</p>
               </div>
         </center>

        <section class = "hotel_concepto" id = "hotel_concepto">
            <div class = "sec-width">
               <div class = "title_room text-center">
                  <h2 class="title4">¿POR QUÉ CONOCER CHIGNAHUAPAN?</h2>
               </div>
                     <div class = "hotel-container">
                        <!-- single customer -->
                        <div class = "hotel_con">
                           <p>Chignahuapan se halla en la entrada de la Sierra Madre Oriental, donde comienzan las profundas y espectaculares barrancas del norte del estado.
                           La arquitectura tradicional de Chignahuapan se muestra en casonas de recios muros y techos de madera y teja. En su plaza principal destaca la colorida parroquia y su kiosco estilo mudéjar.
                           Ahí se producen decenas de millones de esferas navideñas cada año. Más de 200 fábricas y talleres alimentan a este pueblo, que contagia el colorido de las esferas y otros adornos festivos a sus fachadas. Un paseo por este Pueblo Mágico es un encuentro con el color, con los contrastes, con la alegría.
                           </p>
                        </div>
                     </div>
            </div>
        </section>
             
         <div class="container">
            <div class="row">
               <div class="title_room text-center">
                  <h2 class="title4">GALERÍA FOTOGRÁFICA</h2>
                     <p>Las imágenes pertenecen a Chignahuapan Travel</p>
               </div>
            </div>
               <div class="portfolio-item row">
                  <div class="item selfie col-lg-3 col-md-4 col-6 col-sm">
                     <a href="imagenes/galeria/grandes/img1.jpg" class="fancylight popup-btn" data-fancybox-group="light"> 
                        <img class="img-fluid" src="imagenes/galeria/img1.jpg" alt="">
                     </a>
                  </div>
                  <div class="item gts col-lg-3 col-md-4 col-6 col-sm">
                     <a href="imagenes/galeria/grandes/img2.jpg" class="fancylight popup-btn" data-fancybox-group="light"> 
                        <img class="img-fluid" src="imagenes/galeria/img2.jpg" alt="">
                     </a>
                  </div>
                  <div class="item selfie col-lg-3 col-md-4 col-6 col-sm">
                     <a href="imagenes/galeria/grandes/img3.jpg" class="fancylight popup-btn" data-fancybox-group="light">
                        <img class="img-fluid" src="imagenes/galeria/img3.jpg" alt="">
                     </a>
                  </div>
                  <div class="item gts col-lg-3 col-md-4 col-6 col-sm">
                     <a href="imagenes/galeria/grandes/img4.jpg" class="fancylight popup-btn" data-fancybox-group="light">
                        <img class="img-fluid" src="imagenes/galeria/img4.jpg" alt="">
                     </a>
                  </div>
                  <div class="item gts col-lg-3 col-md-4 col-6 col-sm">
                     <a href="imagenes/galeria/grandes/img5.jpg" class="fancylight popup-btn" data-fancybox-group="light">
                        <img class="img-fluid" src="imagenes/galeria/img5.jpg" alt="">
                     </a>
                  </div>
                  <div class="item gts col-lg-3 col-md-4 col-6 col-sm">
                     <a href="imagenes/galeria/grandes/img6.jpg" class="fancylight popup-btn" data-fancybox-group="light">
                        <img class="img-fluid" src="imagenes/galeria/img6.jpg" alt="">
                     </a>
                  </div>
                  <div class="item lap col-lg-3 col-md-4 col-6 col-sm">
                     <a href="imagenes/galeria/grandes/img7.jpg" class="fancylight popup-btn" data-fancybox-group="light">
                        <img class="img-fluid" src="imagenes/galeria/img7.jpg" alt="">
                     </a>
                  </div>
                  <div class="item lap col-lg-3 col-md-4 col-6 col-sm">
                     <a href="imagenes/galeria/grandes/img8.jpg" class="fancylight popup-btn" data-fancybox-group="light">
                        <img class="img-fluid" src="imagenes/galeria/img8.jpg" alt="">
                     </a>
                  </div>
                  <div class="item gts col-lg-3 col-md-4 col-6 col-sm">
                     <a href="imagenes/galeria/grandes/img9.jpg" class="fancylight popup-btn" data-fancybox-group="light">
                        <img class="img-fluid" src="imagenes/galeria/img9.jpg" alt="">
                     </a>
                  </div>
                  <div class="item lap col-lg-3 col-md-4 col-6 col-sm">
                     <a href="imagenes/galeria/grandes/img10.jpg" class="fancylight popup-btn" data-fancybox-group="light">
                        <img class="img-fluid" src="imagenes/galeria/img10.jpg" alt="">
                     </a>
                  </div>
                  <div class="item gts col-lg-3 col-md-4 col-6 col-sm">
                     <a href="imagenes/galeria/grandes/img11.jpg" class="fancylight popup-btn" data-fancybox-group="light">
                        <img class="img-fluid" src="imagenes/galeria/img11.jpg" alt="">
                     </a>
                  </div>
                  <div class="item gts col-lg-3 col-md-4 col-6 col-sm">
                     <a href="imagenes/galeria/grandes/img12.jpg" class="fancylight popup-btn" data-fancybox-group="light">
                        <img class="img-fluid" src="imagenes/galeria/img12.jpg" alt="">
                     </a>
                  </div>
                  <div class="item gts col-lg-3 col-md-4 col-6 col-sm">
                     <a href="imagenes/galeria/grandes/img13.jpg" class="fancylight popup-btn" data-fancybox-group="light">
                        <img class="img-fluid" src="imagenes/galeria/img13.jpg" alt="">
                     </a>
                  </div>
                  <div class="item gts col-lg-3 col-md-4 col-6 col-sm">
                     <a href="imagenes/galeria/grandes/img14.jpg" class="fancylight popup-btn" data-fancybox-group="light">
                        <img class="img-fluid" src="imagenes/galeria/img14.jpg" alt="">
                     </a>
                  </div>
                  <div class="item lap col-lg-3 col-md-4 col-6 col-sm">
                     <a href="imagenes/galeria/grandes/img15.jpg" class="fancylight popup-btn" data-fancybox-group="light">
                        <img class="img-fluid" src="imagenes/galeria/img15.jpg" alt="">
                     </a>
                  </div>
                  <div class="item gts col-lg-3 col-md-4 col-6 col-sm">
                     <a href="imagenes/galeria/grandes/img16.jpg" class="fancylight popup-btn" data-fancybox-group="light">
                        <img class="img-fluid" src="imagenes/galeria/img16.jpg" alt="">
                     </a>
                  </div>
                  <div class="item gts col-lg-3 col-md-4 col-6 col-sm">
                     <a href="imagenes/galeria/grandes/img17.jpg" class="fancylight popup-btn" data-fancybox-group="light">
                        <img class="img-fluid" src="imagenes/galeria/img17.jpg" alt="">
                     </a>
                  </div>
                  <div class="item selfie col-lg-3 col-md-4 col-6 col-sm">
                     <a href="imagenes/galeria/grandes/img18.jpg" class="fancylight popup-btn" data-fancybox-group="light">
                        <img class="img-fluid" src="imagenes/galeria/img18.jpg" alt="">
                     </a>
                  </div>
                  <div class="item selfie col-lg-3 col-md-4 col-6 col-sm">
                     <a href="imagenes/galeria/grandes/img19.jpg" class="fancylight popup-btn" data-fancybox-group="light">
                        <img class="img-fluid" src="imagenes/galeria/img19.jpg" alt="">
                     </a>
                  </div>
                  <div class="item selfie col-lg-3 col-md-4 col-6 col-sm">
                     <a href="imagenes/galeria/grandes/img20.jpg" class="fancylight popup-btn" data-fancybox-group="light">
                        <img class="img-fluid" src="imagenes/galeria/img20.jpg" alt="">
                     </a>
                  </div>
                  <div class="item lap col-lg-3 col-md-4 col-6 col-sm">
                     <a href="imagenes/galeria/grandes/img21.jpg" class="fancylight popup-btn" data-fancybox-group="light">
                        <img class="img-fluid" src="imagenes/galeria/img21.jpg" alt="">
                     </a>
                  </div>
                  <div class="item lap col-lg-3 col-md-4 col-6 col-sm">
                     <a href="imagenes/galeria/grandes/img22.jpg" class="fancylight popup-btn" data-fancybox-group="light">
                        <img class="img-fluid" src="imagenes/galeria/img22.jpg" alt="">
                     </a>
                  </div>
                  <div class="item lap col-lg-3 col-md-4 col-6 col-sm">
                     <a href="imagenes/galeria/grandes/img23.jpg" class="fancylight popup-btn" data-fancybox-group="light">
                        <img class="img-fluid" src="imagenes/galeria/img23.jpg" alt="">
                     </a>
                  </div>
                  <div class="item gts col-lg-3 col-md-4 col-6 col-sm">
                     <a href="imagenes/galeria/grandes/img24.jpg" class="fancylight popup-btn" data-fancybox-group="light">
                        <img class="img-fluid" src="imagenes/galeria/img24.jpg" alt="">
                     </a>
                  </div>
                  <div class="item gts col-lg-3 col-md-4 col-6 col-sm">
                     <a href="imagenes/galeria/grandes/img25.jpg" class="fancylight popup-btn" data-fancybox-group="light">
                        <img class="img-fluid" src="imagenes/galeria/img25.jpg" alt="">
                     </a>
                  </div>
                  <div class="item gts col-lg-3 col-md-4 col-6 col-sm">
                     <a href="imagenes/galeria/grandes/img26.jpg" class="fancylight popup-btn" data-fancybox-group="light">
                        <img class="img-fluid" src="imagenes/galeria/img26.jpg" alt="">
                     </a>
                  </div>
                  <div class="item lap col-lg-3 col-md-4 col-6 col-sm">
                     <a href="imagenes/galeria/grandes/img27.jpg" class="fancylight popup-btn" data-fancybox-group="light">
                        <img class="img-fluid" src="imagenes/galeria/img27.jpg" alt="">
                     </a>
                  </div>
                  <div class="item lap col-lg-3 col-md-4 col-6 col-sm">
                     <a href="imagenes/galeria/grandes/img28.jpg" class="fancylight popup-btn" data-fancybox-group="light">
                        <img class="img-fluid" src="imagenes/galeria/img28.jpg" alt="">
                     </a>
                  </div>
               </div>
         </div>
         <br>
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

                  // $('.portfolio-item').isotope({
                  //      itemSelector: '.item',
                  //      layoutMode: 'fitRows'
                  //  });
                  $('.portfolio-menu ul li').click(function(){
                  $('.portfolio-menu ul li').removeClass('active');
                  $(this).addClass('active');
            
                  var selector = $(this).attr('data-filter');
                  $('.portfolio-item').isotope({
                  filter:selector
                  });
                  return  false;
                  });
                  $(document).ready(function() {
                  var popup_btn = $('.popup-btn');
                  popup_btn.magnificPopup({
                  type : 'image',
                  gallery : {
                  enabled : true
                  }
                  });
                  });
	     </script>	
</body>
</html>