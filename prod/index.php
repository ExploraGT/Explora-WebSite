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
	
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="resources/css/normalize.css">
	<link rel="stylesheet" type="text/css" href="resources/css/style.css">
	<link rel="stylesheet" type="text/css" href="resources/css/queries.css">
	
	
	<title>Páginas Web y Business Intelligence Guatemala | Explora</title>
    
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
	  <!-- Modal Contacto-->
		<div class='modal-wrapper' id='contactoExplora'>
		   <div class='contactoExplora-form'>
				<p><b><span style='color:#f89c1c'>CONT&Aacute;CTATE </span> CON NOSOTROS</b></p>
				
				<h4>¡D&eacute;janos apoyarte tomando las mejores decisiones en la web!</h4>
				<div>
					<form method='GET' action='lib/enviar_contacto.php'>
						<input type='text' id='nombre_modal' name ='nombre_modal' class='nombre-modal' placeholder='  ¿Cu&aacute;l es tu nombre?' required>
						<input type='text' id='correo_modal' name ='correo_modal' class='correo-modal' placeholder='  ¿Cu&aacute;l es tu correo?' required>
						<textarea id='proy_modal' name ='proy_modal' class='proy-modal' placeholder='Cu&eacute;ntanos de tu proyecto' rows='10' cols='50' required></textarea>
						<div class='g-recaptcha' id='recaptcha-contacto' data-sitekey='6LcWKlIUAAAAAK6SorixoTI7QVftGtaY3AZIoNQ7'></div>
						<input type='submit' name='submitlogin' id='enviar_modal' class='enviar-modal' placeholder='Enviar' value='Enviar' onclick='alert();'>
					</form>
				</div>
				<h5>¡Pronto nos pondr&eacute;mos en contacto contigo!</h5>
			  <a class='contactoExplora-cerrar' href='#'>x</a>
		     
		   </div>
		</div>
    <section>
	   <?php showMenu(); ?>
		<div class="img-section1">
			
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
			
			<div class="paginaWeb-txt"><b><a class="enlace-exp" href="http://www.explora.gt/paginasWeb.php#" >Diseño Web </a> y <a class="enlace-exp" href="http://www.explora.gt/analytics.php#" >Business Intelligence</a> en Guatemala<br><i>la combinaci&oacute;n perfecta</i></b></div>
			<!--div class="cuadrado1"><p class="TextoC1"><b>Cont&aacute;ctanos</p></div-->
			<input class="btn-Contactanos" type="button" value="Cont&aacute;ctanos" onclick="window.location.href='#contactoExplora'" />
		</div>
    </section>
    <section>
	
	    <div class="hp-paginaWeb"></div>
		<div class="img-section2">
		     <div class="div2_1"><b>P&aacute;ginas Web</b></div><br>
			 <div class="div2_2"><b>DESARROLLAMOS TUS SUEÑOS</b></div>
			 <div class="div2_3">Tenemos experiencia trabajando con p&aacute;ginas web en Guatemala, desde sitios de pequeños negocios con grandes sueños y sitios grandes con alcance internacional.</div>
			 <div class="div2_4">Diseñamos p&aacute;ginas web creativas que tienen impacto para obtener resultados correctos para su negocio. Ofrecemos servicios personalizados que incluyen:</div>
			 <div class="div2_5">
					 <div class="success1_1">
					       <amp-img src='resources/css/img/icons/success.png' height='35px' width='35px'
						   sizes="(max-width: 767px) 25px, 25px"
				           heights="(max-width:767px) 25px, 25px">
						   </amp-img>
					 </div>
				     <div class="success1">Creaci&oacute;n del sitio</div><br><br>
					 
					 <div class="success2_1">
					       <amp-img src='resources/css/img/icons/success.png' height='35px' width='35px'
						   sizes="(max-width: 767px) 25px, 25px"
				           heights="(max-width:767px) 25px, 25px">
						   </amp-img>
					 </div><br>
				     <div class="success2">Ecommerce</div><br><br>
					 
				     <div class="success3_1">
					       <amp-img src='resources/css/img/icons/success.png' height='35px' width='35px'
						   sizes="(max-width: 767px) 25px, 25px"
				           heights="(max-width:767px) 25px, 25px">
						   </amp-img>
					 </div><br>
				     <div class="success3">Formularios personalizados</div><br><br>
					 
					 <div class="success4_1">
					       <amp-img src='resources/css/img/icons/success.png' height='35px' width='35px'
						   sizes="(max-width: 767px) 25px, 25px"
				           heights="(max-width:767px) 25px, 25px">
						   </amp-img>
					 </div><br>
				     <div class="success4">Planes de mantenimiento</div>
			 </div>
			 <!--div class="cuadrado2"><p style="position:relative;top:21%;"><b>Creamos tu p&aacute;gina web</p></div-->
			 <input class="btn-Creamos-Pagina-Web" type="button" value="Creamos tu p&aacute;gina web" onclick="window.location.href='#contactoExplora'" />
		</div>
		<div class="hp-servicios"></div>
    </section>
	<section>
		<div class="img-section3">
		     <div class="div3_1"><b>Analytics</b></div><br>
			 <div class="div3_2">BUSINESS</div>
			 <div class="div3_2">INTELLIGENCE</div>
			 <div class="div3_3">Creemos en el potencial de la Big Data de tu empresa. <b>Analiza y obt&eacute;n soluciones flexibles  y f&aacute;ciles </b>de implementar para aumentar la productividad de tu negocio.</div>
		     <!--div class="cuadrado3"><p style="position:relative;top:10%;"><b>Quiero resultados</b></p></div-->
			 <!--input class="btn-Quiero-resultados" type="button" value="Quiero resultados" onclick="window.location.href='#contactoExplora'" /-->
		</div>
    </section>
	<section>
		<div class="img-section4">
		    <div class="div4_1">Tus clientes se quedar&aacute;n con <b>la mejor impresi&oacute;n de tu negocio</b> al ingresar a tu p&aacute;gina web.</div>
		    <!--div class="cuadrado4"><p style="position:relative;top:20%;"><b>Crea tu sitio web</b></p></div-->
			<input class="btn-Crea-tu-sitio-web" type="button" value="Crea tu sitio web" onclick="window.location.href='#contactoExplora'" />
		</div>
	    <div class="nuestro_trabajo">
			<div class="div4_2">La calidad de</div>
			<div class="div4_3"> NUESTRO TRABAJO</div> 
			<div class="div4_4"> habla por s&iacute; misma</div>
		<div>
    </section>
	<section>
	     <div class="hp-div"></div>
		 <div class="img-productos"></div>
	</section>
	<section class="clientes">
		<div class="grupoDent"></div>
		<div class="lilah"></div>
		<div class="uvg"></div>
		<div class="streetMKT"></div>
		<div class="europcar"></div>
    </section>
	<section>
	    <?php showFooter()?>
	</section>
   <script src="resources/js/menu.js"></script>
   <script src="resources/js/contacto.js"></script>
   <!--Referencia recaptcha/api en español-->
   <script src='https://www.google.com/recaptcha/api.js?hl=es'></script>
  </body>
</html>