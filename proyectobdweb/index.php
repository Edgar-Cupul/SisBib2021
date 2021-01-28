<?php 
     include('php/comentarios.php');
     $myItems = recoreComents();
?>

<!DOCTYPE html>
<html lang="es">
<head>

	<title>Sistema bibliotecario</title>
	<!--

    Template 2106 Soft Landing

	http://www.tooplate.com/view/2106-soft-landing

     Editado por: Edgar Rolando Cupul Martín
                  Lizbeth Dolores Monforte Loría
    -->
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="team" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/owl.carousel.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/tooplate-style.css">


     <!-- UTIL SCRIPTS -->
     <script src="js/recuperador.js"></script>

</head>
<body>

     <!-- PRE LOADER -->
     <section class="preloader">
          <div class="spinner">

               <span class="spinner-rotate"></span>

          </div>
     </section>


     <!-- MENU -->
     <section class="navbar custom-navbar navbar-fixed-top" role="navigation">
          <div class="container">

               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                    <!-- lOGO TEXT HERE -->
                    <a href="index.php" class="navbar-brand">Sistema bibliotecario</a>
               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                         <li><a href="#home" class="smoothScroll">Inicio</a></li>
                         <li><a href="#feature" class="smoothScroll">Novedades</a></li>
                         <li><a href="#testimonial" class="smoothScroll">Opiniones de usuario</a></li>
                         <li><a href="#registry" class="smoothScroll">Registro</a></li>
                         <!-- <li><a href="#about" class="smoothscroll">Acerca de</a></li> -->
                         <li><a href="#contact" class="smoothScroll">Contáctanos</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                         <li><a href="#">Di hola - <span>ejemplo@correo.com</span></a></li>
                    </ul>
               </div>

          </div>
     </section>


     <!-- FEATURE -->
     <section id="home" data-stellar-background-ratio="0.5">
          <div class="overlay"></div>
          <div class="container">
               <div class="row">

                    <div class="col-md-offset-3 col-md-6 col-sm-12">
                         <div class="home-info">
                              <h1>¡Ayúdanos a mantener el orden de la lectura!</h1>
                              <form action="referencias.php" method="post" class="online-form">
                                   <h3>Correo:</h3>
                                   <input type="text" name="email" class="form-control" placeholder="Ingresa tu correo" required>
                                   <h3>Matricula:</h3>
                                   <input type="text" name="matricula" class="form-control" placeholder="Ingresa tu matricula" required>
                                   <p></p>
                                   <input type="submit" class="confirm-btn" value="Buscar libros para mí" style="margin-left: 0px"></input>
                              </form>     
                         </div>
                    </div>

               </div>
          </div>
     </section>

     <!-- NOVEDADES -->
     <section id="feature" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <div class="section-title">
                              <h1>¿Qué hay de nuevo?</h1>
                         </div>
                    </div>

                    <div class="col-md-6 col-sm-6">
                         <ul class="nav nav-tabs" role="tablist">
                              <li class="active"><a href="#tab01" aria-controls="tab01" role="tab" data-toggle="tab">Registro</a></li>

                              <li><a href="#tab02" aria-controls="tab02" role="tab" data-toggle="tab">Movilidad</a></li>

                              <li><a href="#tab03" aria-controls="tab03" role="tab" data-toggle="tab">Soporte</a></li>
                         </ul>

                         <div class="tab-content">
                              <div class="tab-pane active" id="tab01" role="tabpanel">
                                   <div class="tab-pane-item">
                                        <h2>Diseño novedoso y renovado</h2>
                                        <p>Hemos hecho de esta página una forma más rápida y sencilla para acceder a los contenidos
                                        de los libros que soliciten, quizá en futuras actualizaciones cambien algunas cosas.</p>
                                   </div>
                                   <div class="tab-pane-item">
                                        <h2>Fácil de usar</h2>
                                        <p>Diseñamos este portal web para que sea fácil para el usuario acceder y estar aquí. 
                                        Cualquier sugerencia con la página, pueden establecerse comentarios debajo.</p>
                                   </div>
                              </div>


                              <div class="tab-pane" id="tab02" role="tabpanel">
                                   <div class="tab-pane-item">
                                        <h2>Navegadores compatibles</h2>
                                        <p>Lo siguientes navegadores tienen compatibilidad con la página, para su uso correcto.</p>
                                        <ol type="A">
                                             <li>Google Chrome</li>
                                             <li>Mozilla Firefox</li>
                                             <li>Safari</li>
                                        </ol>
                                   </div>
                              </div>

                              <div class="tab-pane" id="tab03" role="tabpanel">
                                   <div class="tab-pane-item">
                                        <h2>Mejoras en el contacto</h2>
                                        <p>Ahora puedes contactarnos mediante un correo o por los comentarios en la parte de abajo.
                                         Nos ayudas mucho con tu aporte y comentarios constructivos.</p>
                                   </div>
                                   <div class="tab-pane-item">
                                        <h2>Inclusión de manejo de datos</h2>
                                        <p>En este proyecto es importante el manejo de los datos, por lo hemos agregado software 
                                        para este fin en especial. Cualquier error, háganlo saber en la seccion de contacto.</p>
                                   </div>
                              </div>
                         </div>

                    </div>

                    <div class="col-md-6 col-sm-6">
                         <div class="feature-image">
                              <img src="images/libros-computadora.jpg" class="img-responsive" alt="Thin Laptop">                             
                         </div>
                    </div>

               </div>
          </div>
     </section>


     <!-- TESTIMONIAL -->
     <section id="testimonial" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-12">
                         <div class="testimonial-image"></div>
                    </div>

                    <div class="col-md-6 col-sm-12">
                         <div class="testimonial-info">
                              
                              <div class="section-title">
                                   <h1>Lo que piensan nuestros usuarios</h1>
                              </div>

                              <div class="owl-carousel owl-theme">
                                   <?php 
                                   //include('php/comentari.php');
                                   echo $myItems;
                                   ?>
                              </div>

                         </div>
                    </div>
                    
               </div>
          </div>
     </section>


     <!-- REGISTRO  -->
     <section id="registry" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <div class="section-title">
                              <h1>¿Eres nuevo por aquí?</h1>
                              <h2>¡Ingresa tus datos para estar en el sistema!</h2>
                         </div>
                         <div>
                              <button type="confirm" class="confirm-btn" onclick="location.href='php/Alumno.php'">Administrar estudiantes</button>
                              <p></p>
                              <button type="confirm" class="confirm-btn" onclick="location.href='Libro.html'">Registrar libro</button>
                         </div>
                    </div>

               </div>
          </div>
     </section>   

     <!-- CONTACT -->
     <section id="contact" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-offset-1 col-md-10 col-sm-12">
                         <form id="contact-form" role="form" action="" method="post">
                              <div class="section-title">
                                   <h1>Contáctanos</h1>
                              </div>
                              <div class="col-md-4 col-sm-4">
                                   <input type="text" class="form-control" placeholder="Nombre completo" name="name" required>
                              </div>
                              <div class="col-md-4 col-sm-4">
                                   <input type="email" class="form-control" placeholder="Direccion de correo" name="email" required>
                              </div>
                              <div class="col-md-4 col-sm-4">
                                   <input type="submit" class="form-control" name="send message" value="Enviar mensaje">
                              </div>
                              <div class="col-md-12 col-sm-12">
                                   <textarea class="form-control" rows="8" placeholder="Escribe tu mensaje" name="message" required></textarea>
                              </div>
                         </form>
                    </div>

               </div>
          </div>
     </section>       


     <!-- FOOTER -->
     <footer id="footer" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                    <div class="copyright-text col-md-12 col-sm-12">
                         <div class="col-md-6 col-sm-6">
                              <p>Copyright &copy; 2020 UADY PS - Design: Tooplate from WELCA</p>
                         </div>

                         <div class="col-md-6 col-sm-6">
                              <ul class="social-icon">
                                   <li><a href="#" class="fa fa-facebook-square" attr="facebook icon"></a></li>
                                   <li><a href="#" class="fa fa-twitter"></a></li>
                                   <!-- <li><a href="#" class="fa fa-instagram"></a></li> -->
                              </ul>
                         </div>
                    </div>

               </div>
          </div>
     </footer>


     <!-- SCRIPTS -->
     <script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/jquery.stellar.min.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/custom.js"></script>


</body>
</html>