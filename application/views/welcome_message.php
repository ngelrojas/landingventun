<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Ventun</title>

  <!-- Bootstrap core CSS -->
  <link href="<?php echo base_url();?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="<?php echo base_url();?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/simple-line-icons/css/simple-line-icons.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">

  <!-- Plugin CSS -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/device-mockups/device-mockups.min.css">

  <!-- Custom styles for this template -->
  <link href="<?php echo base_url()?>assets/css/new-age.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">VENTUN</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#download">Descargar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#features">Novedades</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#contact">Contactos</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <header class="masthead">
    <div class="container h-100">
      <div class="row h-100">
        <div class="col-lg-7 my-auto">
          <div class="header-content mx-auto">
            <h1 class="mb-5">New Age is an app landing page that will help you beautifully showcase your new mobile app, or anything else!</h1>
            <a href="#download" class="btn btn-outline btn-xl js-scroll-trigger">Start Now for Free!</a>
          </div>
        </div>
        <div class="col-lg-5 my-auto">
          <div class="device-container">
            <div class="device-mockup iphone6_plus portrait white">
              <div class="device">
                <div class="screen">
                  <!-- Demo image for screen mockup, you can put an image here, some HTML, an animation, video, or anything else! -->
                  <img src="<?php echo base_url()?>assets/img/demo-screen-1.jpg" class="img-fluid" alt="">
                </div>
                <div class="button">
                  <!-- You can hook the "home button" to some JavaScript events or just remove it -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>

  <section class="download bg-primary text-center" id="download">
    <div class="container">
      <div class="row">
        <div class="col-md-8 mx-auto">
          <h2 class="section-heading">Descubre todo lo que es Ventun!</h2>
          <p>Nuetra aplication esta disponible para descargar! Comienza ahora!</p>
          <div class="badges">
            <a class="badge-link" href="#"><img src="<?php echo base_url();?>assets/img/google-play-badge.svg" alt=""></a>
            <a class="badge-link" href="#"><img src="<?php echo base_url();?>assets/img/app-store-badge.svg" alt=""></a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="features" id="features">
    <div class="container">
      <div class="section-heading text-center">
        <h2>Sin limetes, Descubre todo lo que podes hacer ahora</h2>
        <p class="text-muted">Check out what you can do with this app theme!</p>
        <hr>
      </div>
      <div class="row">
        <div class="col-lg-4 my-auto">
          <div class="device-container">
            <div class="device-mockup iphone6_plus portrait white">
              <div class="device">
                <div class="screen">
                  <!-- Demo image for screen mockup, you can put an image here, some HTML, an animation, video, or anything else! -->
                  <img src="<?php echo base_url()?>assets/img/demo-screen-1.jpg" class="img-fluid" alt="">
                </div>
                <div class="button">
                  <!-- You can hook the "home button" to some JavaScript events or just remove it -->
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-8 my-auto">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-6">
                <div class="feature-item">
                  <i class="icon-screen-smartphone text-primary"></i>
                  <h3>Device Mockups</h3>
                  <p class="text-muted">Ready to use HTML/CSS device mockups, no Photoshop required!</p>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="feature-item">
                  <i class="icon-camera text-primary"></i>
                  <h3>Flexible Use</h3>
                  <p class="text-muted">Put an image, video, animation, or anything else in the screen!</p>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-6">
                <div class="feature-item">
                  <i class="icon-present text-primary"></i>
                  <h3>Free to Use</h3>
                  <p class="text-muted">As always, this theme is free to download and use for any purpose!</p>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="feature-item">
                  <i class="icon-lock-open text-primary"></i>
                  <h3>Open Source</h3>
                  <p class="text-muted">Since this theme is MIT licensed, you can use it commercially!</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="cta">
    <div class="cta-content">
      <div class="container">
        <h2>Stop waiting.<br>Start building.</h2>
        <a href="#contact" class="btn btn-outline btn-xl js-scroll-trigger">Let's Get Started!</a>
      </div>
    </div>
    <div class="overlay"></div>
  </section>

  <section class="contact bg-primary" id="contact">
    <div class="container">

      <h2>CONTACTENOS</h2>
		<h6 class="required">todos los campos son requeridos *</h6>
		<div class="form-send">
	        <form id="send_form" method="POST" class="form" >
	          <div class="form-group">
	            <label class="col-6" >
	              <input type="text" name="name_email" class="form-control" id="name_email" placeholder="Nombre y Apellido" required/>
	              <span class="name_email">este campo es requerido</span>
	            </label>            
	          </div>
	          <div class="form-group">
	              <label class="col-6">
	              <input type="email" name="from_email" id="from_email" class="form-control" placeholder="Email" required/>
	              <span class="from_email">este campo es requerido</span>
	              <span class="from_email_format">debe ser un email valido</span>
	            </label>
	          </div>
		    	<div class="form-group">
		            <label class="col-6">
		              <input type="text" name="cell_email" id="cell_email" class="form-control" placeholder="Numero de Telefono o Celular" required/>
		              <span class="cell_email">este campo es requerido</span>
		              <span class="cell_email_format">este campo es requerido</span>
		            </label>
	        	</div> 
	          <div class="form-group">
	            <label class="col-6">

	              <textarea name="message" id="message_email" class="form-control" cols="30" rows="10" placeholder="Mensaje"> </textarea>
	              <span class="message_email">este campo es requerido</span>
	            </label>
	          </div>

	          <div class="form-group">
	            <button type="button" id="send" class="btn btn-primary">Enviar</button>  
	          </div>
	          
	        </form>
	        <div class="load">
	        	<img src="<?php echo base_url()?>assets/img/load.gif" alt="cotizate"/>
	        </div>
	        <div class="success alert alert-success">
	          <h4>Nos pondremos en contacto lo mas antes posible.</h4>
	        </div>
	        <div class="error alart alert-danger">
	          <h4>Intentelo mas tarde porfavor.</h4>
	        </div>			
		</div>


      <ul class="list-inline list-social">
        <li class="list-inline-item social-twitter">
          <a href="#">
            <i class="fab fa-twitter"></i>
          </a>
        </li>
        <li class="list-inline-item social-facebook">
          <a href="#">
            <i class="fab fa-facebook-f"></i>
          </a>
        </li>
        <li class="list-inline-item social-google-plus">
          <a href="#">
            <i class="fab fa-google-plus-g"></i>
          </a>
        </li>
      </ul>
    </div>
  </section>

  <footer>
    <div class="container">
      <p>&copy; Ventun 2019. All Rights Reserved.</p>
      <ul class="list-inline">
        <li class="list-inline-item">
          <a href="#">Privacy</a>
        </li>
        <li class="list-inline-item">
          <a href="#">Terms</a>
        </li>
        <li class="list-inline-item">
          <a href="#">FAQ</a>
        </li>
      </ul>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="<?php echo base_url();?>assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url();?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="<?php echo base_url();?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="<?php echo base_url();?>assets/js/new-age.min.js"></script>
  <script type="text/JavaScript">
  	var baseUrl = '<?=base_url()?>index.php/Welcome/sendemail';
  </script>
  <script src="<?php echo base_url();?>assets/js/send.js"></script>

</body>

</html>
