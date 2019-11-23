<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Pizzeria - Il Nuraghe</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nothing+You+Could+Do" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('page/css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('page/css/animate.css')}}">
    
    <link rel="stylesheet" href="{{asset('page/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('page/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('page/css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{asset('page/css/aos.css')}}">

    <link rel="stylesheet" href="{{asset('page/css/ionicons.min.css')}}">

    <link rel="stylesheet" href="{{asset('page/css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('page/css/jquery.timepicker.css')}}">

    
    <link rel="stylesheet" href="{{asset('page/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('page/css/icomoon.css')}}">
    <link rel="stylesheet" href="{{asset('page/css/style.css')}}">


    <style type="text/css">
      
      @media only screen and (max-width: 700px) {
        .img-logo {
          width: 40%;
          height: 40%
        }
     }
    </style>
  </head>
  <body id="app">

  	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
		      <a class="navbar-brand" href="{{url('/')}}">
            <img class="img-logo" src="{{asset('page/pizza/logo_n.png')}}">
          </a>
		      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
		        <span class="oi oi-menu"></span> Menu
		      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="index.html" class="nav-link">Inicio</a></li>
	          <li class="nav-item"><a href="#menu" class="nav-link">Menu</a></li>
	          <li class="nav-item"><a href="#about" class="nav-link">Nosotros</a></li>
	          <li class="nav-item"><a href="#service" class="nav-link">Servicios</a></li>
	          <li class="nav-item"><a href="#contact" class="nav-link">Contacto</a></li>
	        </ul>
	      </div>
		  </div>
	  </nav>
    <!-- END nav -->

    <section class="home-slider owl-carousel img" style="background-image: url({{url('page/images/bg_01.jpg')}});">
      <div class="slider-item">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text align-items-center" data-scrollax-parent="true">

            <div class="col-md-6 col-sm-12 ftco-animate">

            	<span class="subheading">Delicioso</span>

              <h1 class="mb-4">Variedad Italiana</h1>
              <p class="mb-4 mb-md-5">Ofrecemos un menú caracterizado por su variedad Italiana y sabor inigualable.</p>
              <p><!--<a href="#" class="btn btn-primary p-3 px-xl-4 py-xl-3">Order Now</a>--> <a href="#menu" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">Ver Menu</a></p>
            </div>
            <div class="col-md-6 ftco-animate">
            	<img src="{{asset('page/images/bg_1.png')}}" class="img-fluid" alt="">
            </div>

          </div>
        </div>
      </div>

      <div class="slider-item">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text align-items-center" data-scrollax-parent="true">

            <div class="col-md-6 col-sm-12 order-md-last ftco-animate">
            	<span class="subheading">Crujiente</span>
              <h1 class="mb-4">Il Nuraghe Pizza</h1>
              <p class="mb-4 mb-md-5">Prueba las Pizzas mas crujientes de la cuidad.</p>
              <p><!--<a href="#" class="btn btn-primary p-3 px-xl-4 py-xl-3">Order Now</a>--> <a href="#menu" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">Ver Menu</a></p>
            </div>
            <div class="col-md-6 ftco-animate">
            	<img src="{{asset('page/images/bg_2.png')}}" class="img-fluid" alt="">
            </div>

          </div>
        </div>
      </div>

      <div class="slider-item" style="background-image: url(page/images/bg_02.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

            <div class="col-md-7 col-sm-12 text-center ftco-animate">
            	<span class="subheading">Bienvenidos</span>
              <h1 class="mb-4">Tenemos para ti las mejores pizzas</h1>
              <p class="mb-4 mb-md-5">Il Nuraghe te ofrece gran variedad en pizzas, pastas y bebidas.</p>
              <p><!--<a href="#" class="btn btn-primary p-3 px-xl-4 py-xl-3">Order Now</a>--> <a href="#menu" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">Ver Menu</a></p>
            </div>

          </div>
        </div>
      </div>
    </section>

    <section class="ftco-intro">
    	<div class="container-wrap">
    		<div class="wrap d-md-flex">
	    		<div class="info">
	    			<div class="row no-gutters">
	    				<div class="col-md-4 d-flex ftco-animate">
	    					<div class="icon"><span class="icon-phone"></span></div>
	    					<div class="text">
	    						<h3>34 918 04 44 75</h3>
	    						<p>LLamanos</p>
	    					</div>
	    				</div>
	    				<div class="col-md-4 d-flex ftco-animate">
	    					<div class="icon"><span class="icon-my_location"></span></div>
	    					<div class="text"> 
	    						<h3>Sector Islas, 13</h3>
	    						<p>28760 Tres Cantos, Madrid, España</p>
	    					</div>
	    				</div>
	    				<div class="col-md-4 d-flex ftco-animate">
	    					<div class="icon"><span class="icon-clock-o"></span></div>
	    					<div class="text">
	    						<h3>Abierto Martes - Domingo</h3>
	    						<p>13:15pm - 16:00pm</p>
	    						<p>20:00pm - 23:00pm</p>
	    					</div>
	    				</div>
	    			</div>
	    		</div>
	    		<div class="social d-md-flex pl-md-5 p-4 align-items-center">
	    			<div class="text">
	    						<h3>Redes Sociales</h3>
	    						
	    					
	    			<ul class="social-icon">
              
              <li class="ftco-animate"><a href="https://www.facebook.com/pizzeriailnuraghe3c/"><span class="icon-facebook"></span></a></li>
              <li class="ftco-animate"><a href="https://www.instagram.com/pizzeriailnuraghe3c/?hl=es-la"><span class="icon-instagram"></span></a></li>
            </ul></div>
	    		</div>
    		</div>
    	</div>
    </section>

    <section class="ftco-about d-md-flex" id="about">
    	<div class="one-half img" style="background-image: url(page/pizza/vista_01.jpeg);"></div>
    	<div class="one-half ftco-animate">
        <div class="heading-section ftco-animate ">
          <h2 class="mb-4">Bienvenidos a <span class="flaticon-pizza">Pizzeria</span> Il Nuraghe</h2>
        </div>
        <div class="text-justify">
  				<p> Somos un restaurante, que se especializa en la comida italiana, dentro de los cuales se encuentran: Pizzas Artesanales, pastas con diferentes tipos de salsas, ensaladas tradicionales y deliciosos postres, nos encontramos ubicados en el sector Islas 13 Tres cantos Madrid.</p>
  				<p > Nuestro objetivo principal es ofrecer un agradable y placentero servicio a  la comunidad Madrileña y Tricantina para satisfacer las necesidades de nuestros clientes. Es por ello que nuestros platos están hecho con los mas frescos ingredientes y con los mas altos estándares de calidad.
  				El nombre Il Nuraghe es inspirado al que el fundador es de origen serdhegno y Es el principal tipo de edificio megalítico que se puede encontrar en Cerdeña, remontándose a años anteriores al 1000 a. C. Actualmente se ha convertido en el símbolo de Cerdeña y su cultura distintiva. Sin duda, los nuragas tenían un contenido simbólico significativo. Podían transmitir riqueza o poder, o ser un indicativo de que el lugar era un pueblo.</p>
  				<p >
  				Actualmente continuamos Trabajando bajo los mismos estándares, mejorando cada día para ofrecerles a nuestra distinguida clientela un excelente servicio, enfocándonos en nuevas metas.

  				</p>
  			</div>
    	</div>
    </section>

    <section class="ftco-section ftco-services" id="#service">
    	<div class="overlay"></div>
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">Nuestros Servicios</h2>
            <p>El compromiso principal del Il Nuraghe es la satisfacción de las necesidades de los clientes, para ellos tenemos.</p>
          </div>
        </div>
    		<div class="row">
          <div class="col-md-4 ftco-animate">
            <div class="media d-block text-center block-6 services">
              <div class="icon d-flex justify-content-center align-items-center mb-5">
              	<span class="flaticon-diet"></span>
              </div>
              <div class="media-body">
                <h3 class="heading" id="comida">Comida De Calidad</h3>
                <p>Ofrecemos un menú caracterizado por su variedad Italiana, sabor inigualable, altos niveles de calidad además del excelente servicio.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="media d-block text-center block-6 services">
              <div class="icon d-flex justify-content-center align-items-center mb-5">
              	<span class="flaticon-bicycle"></span>
              </div>
              <div class="media-body">
                <h3 class="heading" id="rapida">Rapida Entrega</h3>
                <p>Nos caracterizamos en realizar tus pedidos de manera rapida, eficaz y de calidad.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="media d-block text-center block-6 services">
              <div class="icon d-flex justify-content-center align-items-center mb-5"><span class="flaticon-pizza-1"></span></div>
              <div class="media-body">
                <h3 class="heading" id="recetas">Recetas Originales</h3>
                <p>Ofrecemos gran variedad de recetas originales, inspiradas en nuestras raices italianas.</p>
              </div>
            </div>    
          </div>
        </div>
    	</div>
    </section>

    <section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">Il Nuraghe Top</h2>
            <p>Traemos Para Ti el TOP de Nuestas Mejores Pizzas</p>
          </div>
        </div>
    	</div>
    	<div class="container-wrap">
    		<div class="row no-gutters d-flex">
    			
          @foreach($top as $topping)
          <div class="col-lg-4 d-flex ftco-animate">
    				<div class="services-wrap d-flex">
    					<a href="#" class="img" style="background-image: url({{url('storage/pizza/'.$topping->image)}});"></a>
    					<div class="text p-4">
    						<h3>{{$topping->name}}</h3>
    						<p>Tomate, Mozzarella, Alcachofas, Jamon York, Champiñones Frescos. </p>
    						<p class="price"><span>€{{$topping->price}}</span> </p>
    					</div>
    				</div>
    			</div>
          @endforeach


    		</div>
    	</div>	

<section class="ftco-section"id="menu">
    <section class="ftco-menu" >
    	<div class="container-fluid">
    		<div class="container">
    		<div class="row justify-content-center mb-5 5">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">Nuestro Menu</h2>
            <p>Tenemos Para Ti Gran Variedad De Pizzas, Pastas, Bebidas y Más Que Podras Escoger a Tú Antojo.</p>
          </div>
        </div>
    	</div>
    		<div class="row d-md-flex">
	    		<div class="col-lg-4 ftco-animate img f-menu-img mb-5 mb-md-0" style="background-image: url(pizza/vista_03.jpeg);">
	    		</div>
	    		<div class="col-lg-8 ftco-animate p-md-5">
		    		<div class="row">
		          <div class="col-md-12 nav-link-wrap mb-5">
		            <div class="nav ftco-animate nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                  @foreach($category as $cat)
		              <a class="nav-link @if($loop->iteration==1) active @endif" id="v-pills-{{$cat->id}}-tab" data-toggle="pill" href="#v-pills-{{$cat->id}}" role="tab" aria-controls="v-pills-{{$cat->id}}" aria-selected="true">{{$cat->name}}</a>

                  @endforeach



		            </div>
		          </div>
		          <div class="col-md-12 d-flex align-items-center">
		            
		            <div class="tab-content ftco-animate" id="v-pills-tabContent">
                  
                  @foreach($category as $cat)
		              <div class="tab-pane fade show @if($loop->iteration==1) active @endif" id="v-pills-{{$cat->id}}" role="tabpanel" aria-labelledby="v-pills-{{$cat->id}}-tab">
		              	<div class="row">
                      @foreach($col as $prod)


		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url(pizza/pizza_02.jpeg);"></a>
		              				<div class="text">
		              					<h3><a href="#"></a></h3>
		              					<p>Tomate, Mozzarella, Tomate Cherry, Rucula, Queso Palma.</p>
		              					<p class="price"><span>€ </span></p>
		              					<!--<p><a href="#" class="btn btn-white btn-outline-white">Add to cart</a></p>-->
		              				</div>
		              			</div>
		              		</div>

                      @endforeach

		              </div>
               </div>
                  @endforeach

		           







		          </div>
		        </div>
		      </div>
		    </div>
    	</div>
    </section>
       </section>

  
		
		<section class="ftco-appointment" id="#contact">
			<div class="overlay"></div>
    	<div class="container-wrap">
    		<div class="row no-gutters d-md-flex align-items-center">
    			<div class="col-md-6 d-flex align-self-stretch">
    			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3029.562051639512!2d-3.703806684598598!3d40.5954213793446!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd43d4dffaa28ca1%3A0x1cb309c4a7e80564!2sPizzeria%20Il%20Nuraghe!5e0!3m2!1ses-419!2sve!4v1573323604528!5m2!1ses-419!2sve" width="800" height="600" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    			</div>
	    		<div class="col-md-6 appointment ftco-animate">
	    			<h3 class="mb-3">Contactanos</h3>
	    			<form action="#" class="appointment-form">
	    				<div class="d-md-flex">
		    				<div class="form-group">
		    					<input type="text" class="form-control" placeholder="Nombre">
		    				</div>
	    				</div>
	    				<div class="d-me-flex">
	    					<div class="form-group">
		    					<input type="text" class="form-control" placeholder="Apellido">
		    				</div>
	    				</div>
	    				<div class="form-group">
	              <textarea name="" id="" cols="30" rows="3" class="form-control" placeholder="Mensaje"></textarea>
	            </div>
	            <div class="form-group">
	              <input type="submit" value="Enviar" class="btn btn-primary py-3 px-4">
	            </div>
	    			</form>
	    		</div>    			
    		</div>
    	</div>
    </section>

    <footer class="ftco-footer ftco-section img">
    	<div class="overlay"></div>
      <div class="container">
        <div class="row mb-5">
          <div class="col-lg-3 col-md-6 mb-5 mb-md-5">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Sobre Nosotros</h2>
              <p>Somos un restaurante, que se especializa en la comida italiana, dentro de los cuales se encuentran: Pizzas Artesanales, pastas con diferentes tipos de salsas, ensaladas tradicionales y deliciosos postres.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
               
                <li class="ftco-animate"><a href="https://www.facebook.com/pizzeriailnuraghe3c/"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="https://www.instagram.com/pizzeriailnuraghe3c/?hl=es-la"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          
          <div class="col-lg-2 col-md-6 mb-5 mb-md-5">
             <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">Servicios</h2>
              <ul class="list-unstyled">
                <li><a href="#comida" class="py-2 d-block">Comida Saludable</a></li>
                <li><a href="#rapida" class="py-2 d-block">Entrega Rapida</a></li>
                <li><a href="#recetas" class="py-2 d-block">Recetas Originales</a></li>
              
              </ul>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mb-5 mb-md-5">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">¿Tienes Alguna Pregunta?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">Sector Islas, 13 28760 Tres Cantos, Madrid, España</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">34 918 04 44 75</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">pizzeríailnuraghe3c@gmail.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script>  <i class="icon-heart" aria-hidden="true"></i> by <a href="" target="_blank">Encode</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="{{asset('page/js/jquery.min.js')}}"></script>
  <script src="{{asset('page/js/jquery-migrate-3.0.1.min.js')}}"></script>
  <script src="{{asset('page/js/popper.min.js')}}"></script>
  <script src="{{asset('page/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('page/js/jquery.easing.1.3.js')}}"></script>
  <script src="{{asset('page/js/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('page/js/jquery.stellar.min.js')}}"></script>
  <script src="{{asset('page/js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('page/js/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{asset('page/js/aos.js')}}"></script>
  <script src="{{asset('page/js/jquery.animateNumber.min.js')}}"></script>
  <script src="{{asset('page/js/bootstrap-datepicker.js')}}"></script>
  <script src="{{asset('page/js/jquery.timepicker.min.js')}}"></script>
  <script src="{{asset('page/js/scrollax.min.js')}}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="{{asset('page/js/google-map.js')}}"></script>
  <script src="{{asset('page/js/main.js')}}"></script>
  <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
  <script type="text/javascript">
    
var app = new Vue({
    el: '#app',
    created(){
    },  

    data: {   
    },

    watch: {
    }
  });
  </script>

  </body>
</html>