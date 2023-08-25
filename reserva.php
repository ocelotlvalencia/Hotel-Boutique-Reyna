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
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
            <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
         <!------ Include the above in your HEAD tag ---------->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css" />        
            <link rel="stylesheet" href="css/stylo.css" type="text/css">     
  </head>
  
   <body>
    <header id="navigation-menu">
            <div class="container">
                <nav>
                    <a class="logo"> 
                        <img src="imagenes/logo_titulo10.png" alt=""> 
                    </a>

                    <ul class="nav-menu">
                        <li> 
                            <a style="text-decoration:none;" href="index.php">INICIO</a> 
                        </li>
                        <li> 
                            <a style="text-decoration:none;" href="habitaciones.php">HABITACIONES</a> 
                        </li>
                        <li> 
                            <a style="text-decoration:none;" href="informacion.php">INFORMACIÓN</a> 
                        </li>
                        <li> 
                            <a style="text-decoration:none;" href="reserva.php" class="inicio">RESERVAS</a> 
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
        <br>
        <br>
        <br>
        <div class="title_room text-center">
            <h2 class="title2">RESERVACIONES</h2>
        </div>
        <center>
            <div class="card mb-3" style="max-width: 1250px;">
                <div class="row no-gutters">
                    <div class="col-4 col-md-6" style="max-width: 1100px;">
                        <div id="carouselExampleControls1" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="imagenes/imag30.jpg" class="d-block w-100">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>HABITACIÓN DELUXE 1 QUEEN</h5>
                                        </div>
                                </div>
                                            <div class="carousel-item">
                                                <img src="imagenes/imag19.jpg" class="d-block w-100">
                                                    <div class="carousel-caption d-none d-md-block">
                                                        <h5>HABITACIÓN DELUXE 1 KING</h5>
                                                    </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img src="imagenes/img3.jpg" class="d-block w-100">
                                                    <div class="carousel-caption d-none d-md-block">
                                                        <h5>ESTUDIO FAMILIAR</h5>
                                                    </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img src="imagenes/img1.jpg" class="d-block w-100">
                                                    <div class="carousel-caption d-none d-md-block">
                                                        <h5>HABITACIÓN DELUXE DOBLE</h5>
                                                    </div>
                                            </div>
                            </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls1" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls1" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                        </div>
                    </div>
                                <div class="col-4 col-md-6">
                                    <div class="card-body">
                                        <div class="row">
                                            <div>
                                            <!-- AQUI SE  declara el formulario-->
                            <form name="reserva" action="insertar.php" method="post">
                                            <div class="tab-pane active" role="tabpanel" id="paso1" >
                                                <center><h3><b>INFORMACIÓN DE HUÉSPED</b></h3></center><br>
                                        <!-- esto es lo que va a aparecer dentro del paso -->
                                        <div class="col-md-4">
                                            <label class="form-label" for="num_personas">Número de personas</label>
                                            <select class="form-control"  name="num_personas" required>
                                                <option>Seleccionar</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="form-label" for="tipo_h">
                                            Tipo de Habitaciones
                                            </label>
                                            <select class="form-control" name="tipo_h" required>
                                                <option>Seleccionar</option>
                                                    <option value="Deluxe 1 King">DELUXE 1 KING</option>
                                                    <option value="Deluxe 1 Queen">DELUXE 1 QUEEN</option>
                                                    <option value="Deluxe Doble">DELUXE DOBLE</option>
                                                    <option value="Estudio Familiar">ESTUDIO FAMILIAR</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="form-label" for="fecha_llegada">Fecha de entrada</label>
                                                <input class="form-control" size="16" type="date"  name= "fecha_llegada"required>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="form-label" for="fecha_salida">Fecha de salida</label>
                                                <input class="form-control"  size="16" type="date"  name= "fecha_salida"required>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="form-label" for="name" required>Nombre(s)</label>
                                                <input class="form-control" type="text" name="name" placeholder="ingrese nombre" required>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="form-label" for="apellido">Apellidos</label>
                                                <input class="form-control"  type="text"  name= "apellido"placeholder="ingrese Apellidos"required>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="form-label" for="tel">Telèfono</label>
                                                <input class="form-control"  type="text" name="tel" placeholder="ingrese telèfono"required>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="form-label" for="direccion">Dirección</label>
                                                <input class="form-control"type="text" name="direccion" placeholder="ingrese direccion" required>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="form-label" for="email">Correo Electrónico</label>
                                                <input class="form-control" type="email" name="email" placeholder="ingrese correo"  require>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="form-label" for="forma_pago">Forma de pago</label>
                                                <select class="form-control" name="forma_pago" required>
                                                    <option value="Efectivo">1.-Efectivo</option>
                                                    <option value="Tarjeta">2.-Tarjeta</option>
                                                </select>
                                        </div>
                            </form>
                            <div class="pull-right">
                                <br>
                                <br>
                                <br>
                                <input type="reset" value="Cancelar" class="btn1 btn-dark-1">
                                <input type="submit" value="Confirmar" class="btn1 btn-dark-1">
                            </div>
                      </div>
                      
                      
                                        </div>
                                    </div>
                                </div>
                </div>
            </div>
        </center>
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

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
                <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script> 
</body>
</html>