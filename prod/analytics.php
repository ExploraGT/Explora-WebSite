<?php 	
		require_once "lib/vistas.php";
?>
<!doctype html>
<!--Identifica la página como contenido AMP-->
<html amp lang="es">
  <head>
    <meta charset="utf-8">
	
	<!--Incluye y carga la librerías AMP JS-->
    <script async src="https://cdn.ampproject.org/v0.js"></script>
	<script async custom-element="amp-form" src="https://cdn.ampproject.org/v0/amp-form-0.1.js"></script>
	
	<!--Incluye JQuery-->
	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	
	<link href="https://fonts.googleapis.com/css?family=Raleway:400" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="resources/css/normalize.css">
	<link rel="stylesheet" type="text/css" href="resources/css/style.css">
	<link rel="stylesheet" type="text/css" href="resources/css/queries.css">
	
	
	<title>Business Intelligence y Big Data en Guatemala | Explora Guatemala</title>
    
	<!--Hace que una página sea reconocible-->
	<link rel="canonical" href="http://www.explora.gt/index.php">
	
	 <link rel="apple-touch-icon" sizes="120x120" href="favicons/apple-touch-icon.png">
     <link rel="icon" type="image/png" href="favicons/favicon-32x32.png" sizes="32x32">
     <link rel="icon" type="image/png" href="favicons/favicon-16x16.png" sizes="16x16">
     
	<meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
    
	<script type="application/ld+json">
      {
        "@context": "http://schema.org",
        "@type": "Explora"
      }
    </script>
	
	<!--CSS-->
	<style amp-custom>
		
		@media only screen and (max-width: 1100px) {
		
			.NavMenu{top:1.8%;}
		
		}
		
		@media only screen and (max-width: 767px) {
		
			.NavMenu{top:2.5%;}
		
		}
	
	</style>
	
	
	<!--Referencia recaptcha/api en español-->
	<script src='https://www.google.com/recaptcha/api.js?hl=es'></script>
	
	<script type="text/javascript">
	   function justNumbers(e)
        {
			var keynum = window.event ? window.event.keyCode : e.which;
			if ((keynum == 8) || (keynum == 46))
			return true;
			 
			return /\d/.test(String.fromCharCode(keynum));
        }
		
		function alert()
		{
              window.alert("");			
		}
	</script>
	
  </head>
  <body>
  <?php showContact();?>
    <section>
		<div class="img-analytics"> <!--1800x800px-->
		<?php showMenu(); ?>	
			<a href="tel:+502 5633 6449" id='noTel'>5633-6449</a>
			<label class="NumTelefono" for='noTel'>
			 <amp-img src='resources/css/img/icons/phone-orange.png' height='25px' width='25px'
			     sizes="(max-width: 767px) 15px, 15px"
				 heights="(max-width:767px) 15px, 15px">
			 </amp-img>
			 
			</label>
			
			<div class="img-logo"><!--50%-->
			   <a href="http://www.explora.gt" id='img-logo'>
			   <amp-img src='resources/css/img/icons/explora_logo.png' height='242px' width='242px'
				 	    sizes="(min-width: 1025px) 250px,
						       (min-width: 869px) 166px,
							   (min-width: 767px) 150px,
							   (min-width: 10px) 108px, 224px"
					    heights="(min-width:1025px) 125px,
						         (min-width:869px) 83px,
								 (min-width:767px) 75px,
								 (min-width:10px) 54px, 112px">
			   </amp-img>
			   </a>
			</div>
			
			
			<div class="conduce-tu-neg">
			   CONDUCE TU NEGOCIO <br><b>ANALIZANDO CADA <br>UNO</b> DE TUS DATOS
			</div>
		</div>
    </section>
	<br>
    <section class="nav-modelos">
		<a name='modelos' id='modelos'></a>
		<div class="div-modelos">
		  <hr>
		  <h2>Analytics</h2>
		  <h1>DESARROLLO DE MODELOS ANAL&Iacute;TICOS</h1>
		  <p>Analizamos todos tus datos, identificamos patrones y comportamientos; a partir de eso construimos una soluci&oacute;n que incrementa los resultados de tu negocio.</p>
		  <input class="btn-resultados-modelo" type="button" value="Quiero resultados" onclick="window.location.href='#contactoExplora'" />
		  <div class="img-modelos"> <!--87.5%-->
			   <amp-img src='resources/css/img/icons/modelos.jpg' height='242px' width='242px'
			   sizes="(min-width: 1250px) 400px,
			          (min-width: 1025px) 350px,
			          (min-width: 869px) 320px,
					  (min-width: 767px) 280px,
					  (min-width: 410px) 280px,
					  (min-width: 326px) 250px,
					  (min-width: 10px) 230px, 200px"
			   heights="(min-width:1250px) 350px,
			            (min-width:1025px) 306.25px,
			            (min-width:869px) 280px,
						(min-width:767px) 245px,
						(min-width:410px) 245px,
						(min-width:326px) 219px,
						(min-width:10px) 201px, 200px"> 		      
			   </amp-img>
			</div>
		</div>
	</section>
	<section class="nav-insights">
		<a name='insights' id='insights'></a>
		<div class="div-insights">
		  <hr>
		  <h2>Analytics</h2>
		  <h1>AN&Aacute;LISIS & INSIGHTS </h1>
		  <p>Realizamos an&aacute;lisis de datos no convencionales, utilizamos t&eacute;cnicas de <b>DATA MINING y BIG DATA.</b> Obt&eacute;n hallazgos de alto impacto para el desempeño de tu negocio.</p>
		  <input class="btn-analizar-insights" type="button" value="Quiero analizar" onclick="window.location.href='#contactoExplora'" />
		  <div class="img-insights"> <!--87.5%-->
			   <amp-img src='resources/css/img/icons/insights.jpg' height='242px' width='242px'
			   sizes="(min-width: 1250px) 400px,
			          (min-width: 1025px) 350px,
			          (min-width: 869px) 320px,
					  (min-width: 767px) 280px,
					  (min-width: 410px) 280px,
					  (min-width: 326px) 250px,
					  (min-width: 10px) 230px, 200px"
			   heights="(min-width:1250px) 350px,
			            (min-width:1025px) 306.25px,
			            (min-width:869px) 280px,
						(min-width:767px) 245px,
						(min-width:410px) 245px,
						(min-width:326px) 219px,
						(min-width:10px) 201px, 200px"> 		      
			   </amp-img>
			</div>
		</div>
	</section>
	<section class="nav-herramientas">
		<a name='herramientas' id='herramientas'></a>
		<div class="div-herramientas">
		  <hr>
		  <h2>Analytics</h2>
		  <h1>DESARROLLO DE HERRAMIENTAS DE BUSINESS INTELLIGENCE</h1>
		  <p>Diseñamos dashboards que muestran la informaci&oacute;n de tu empresa en tiempo real, te ayudar&aacute; a tomar la mejor decisi&oacute;n. Toma la decisi&oacute;n adecuada en el momento adecuado. </p>
		  <input class="btn-dashboard-herramientas" type="button" value="Dashboard propio" onclick="window.location.href='#contactoExplora'" />
		  <div class="img-herramientas"> <!--87.5%-->
			   <amp-img src='resources/css/img/icons/herramientas.jpg' height='242px' width='242px'
			   sizes="(min-width: 1250px) 400px,
			          (min-width: 1025px) 350px,
			          (min-width: 869px) 320px,
					  (min-width: 767px) 280px,
					  (min-width: 410px) 280px,
					  (min-width: 326px) 250px,
					  (min-width: 10px) 230px, 200px"
			   heights="(min-width:1250px) 350px,
			            (min-width:1025px) 306.25px,
			            (min-width:869px) 280px,
						(min-width:767px) 245px,
						(min-width:410px) 245px,
						(min-width:326px) 219px,
						(min-width:10px) 201px, 200px"> 		      
			   </amp-img>
			</div>
		</div>
	</section>
	<section class="nav-analisis-datos">
		<a name='analisis-datos' id='analisis-datos'></a>
		<div class="div-analisis-datos">
		  <hr>
		  <h2>Analytics</h2>
		  <h1>INTEGRACI&Oacute;N DE FUENTES DE DATOS</h1>
		  <p>Centralizamos la informaci&oacute;n de tu negocio para que tengas una sola fuente y una sola verdad que permita agilizar el an&aacute;lisis de los datos y generar m&aacute;s valor</p>
		  <input class="btn-valor-analisis-datos" type="button" value="Generar valor" onclick="window.location.href='#contactoExplora'" />
		  <div class="img-analisis-datos"> <!--87.5%-->
			   <amp-img src='resources/css/img/icons/fuentes.jpg' height='242px' width='242px'
			   sizes="(min-width: 1250px) 400px,
			          (min-width: 1025px) 350px,
			          (min-width: 869px) 320px,
					  (min-width: 767px) 280px,
					  (min-width: 410px) 280px,
					  (min-width: 326px) 250px,
					  (min-width: 10px) 230px, 200px"
			   heights="(min-width:1250px) 350px,
			            (min-width:1025px) 306.25px,
			            (min-width:869px) 280px,
						(min-width:767px) 245px,
						(min-width:410px) 245px,
						(min-width:326px) 219px,
						(min-width:10px) 201px, 200px"> 		      
			   </amp-img>
			</div>
		</div>
	</section>
	 
    <br><br><br>
	<section style="position:relative;">
	    <?php showFooter()?>
	</section>
   <script src="resources/js/menu.js"></script>
   <script src="resources/js/contacto.js"></script>
   <!--Referencia recaptcha/api en español-->
   <script src='https://www.google.com/recaptcha/api.js?hl=es'></script>
  </body>
</html>