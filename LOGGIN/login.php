<!doctype html>
<html>
    <head>
        <link rel="shortcut icon" href="#" />
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!--diseño-->
        <meta name="keywords" content="">
        <meta name="description" content="">
        <meta name="page_type" content="np-template-header-footer-from-plugin">

        <title>Login - Administración </title>
        <link rel = "icon" href = "IMG/icono.png" type = "img/png">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
       <link rel="stylesheet" href="css/estilos.css">
        <link rel="stylesheet" href="plugins/sweetalert2/sweetalert2.min.css"> 

        <!--css del hotel-->
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
                        <img src="img/logo_titulo10.png" alt=""> 
                    </a>

                    <ul class="nav-menu">
                        <li> 
                            <a href="../index.php" style="text-decoration:none;" >INICIO</a> 
                        </li>
                        <li> 
                            <a href="../habitaciones.php" style="text-decoration:none;">HABITACIONES</a> 
                        </li>
                        <li> 
                            <a href="../informacion.php" style="text-decoration:none;">INFORMACIÓN</a> 
                        </li>
                        <li> 
                            <a href="../reserva.php" style="text-decoration:none;">RESERVAS</a> 
                        </li>
                        <li> 
                            <a href="#" style="text-decoration:none;" class="inicio">LOGIN</a> 
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
     <div class="container-login">
        <div class="wrap-login">
            <center><img src="img/icono.png" width="100px" height="100px"></center>
            <br>
            <br>
            <h3><form class="login-form validate-form" id="formLogin" action="" method="post">
                <center><span class="login-form-title">LOGIN</span></center>
                <br>
                <div class="wrap-input100" data-validate = "Usuario incorrecto">
                    <input class="input100" type="text" id="usuario" name="usuario" placeholder="Usuario">
                    <span class="focus-efecto"></span>
                </div>
                <br>
                <div class="wrap-input100" data-validate="Password incorrecto">
                    <input class="input100" type="password" id="password" name="password" placeholder="Password">
                    <span class="focus-efecto"></span>
                </div>
                
                <div class="container-login-form-btn">
                    <div class="wrap-login-form-btn">
                        <div class="login-form-bgbtn"></div>
                        <br>
                        <center><button type="submit" name="submit" class="login-form-btn">CONECTAR</button></center>
                    </div>
                </div>
            </form></h3>
        </div>
    </div>     
        
        
     <script src="jquery/jquery-3.3.1.min.js"></script>    
     <script src="bootstrap/js/bootstrap.min.js"></script>    
     <script src="popper/popper.min.js"></script>    
        
     <script src="plugins/sweetalert2/sweetalert2.all.min.js"></script>    
     <script src="js/codigo.js"></script>    
    </body>
</html>