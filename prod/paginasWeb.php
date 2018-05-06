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
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="resources/css/normalize.css">
	<link rel="stylesheet" type="text/css" href="resources/css/style.css">
	<link rel="stylesheet" type="text/css" href="resources/css/queries.css">
	
	
	<title>Desarrollamos tu p&aacute;gina Web | Explora Guatemala</title>
    
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
		@media only screen and (max-width: 767px) {
		
			.NavMenu{top:1.5%;}
		
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
		<div class="img-pagina-web"> <!--700x470px-->
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
		</div>
    </section>
	<br>
    <section class="nav-paginas-web">
		 <div class='menu-pw'>
			  <ul>
				 <li><a href='#paginas-web'>Paginas Web</a></li>
				 <li><a href='#seo'>SEO</a></li>
				 <li><a href='#hosting'>Hosting</a></li>
				 <li><a href='#dominio'>Dominio</a></li>
			  </ul>
		  </div>
		<a name='paginas-web' id='paginas-web'></a>
		<div class="div-paginas-web">
		    <div class="diseño-sitios">
				 <h2>P&aacute;ginas Web</h2>
				 <h3><b>DISEÑO DE SITIOS PERSONALIZADOS</b></h3>
				 <p>
					 <span style="font-weight:bold;">Creamos atractivos, innovadores diseños de p&aacute;ginas web que cumplen al 100% con las necesidades de tu negocio.</span>
					 <br><br>
					 Nos enfocamos a ofrecer un diseño considerando las nuevas tendencias y apto para visualizarlo en cualquier navegador y dispositivo m&oacute;vil,
					 con el objetivo de brindarles a sus clientes una experiencia que los haga regresar para adquirir sus productos y/o servicios. 
				 </p>
				  <div class="PW_pencil">
							   <amp-img src='resources/css/img/icons/pw_pencil.png' height='242px' width='242px'
							   sizes="(min-width: 1025px) 242px,
							          (min-width: 767px) 200px,
									  (min-width: 410px) 70px,
									  (min-width: 10px) 70px, 242px"
							   heights="(min-width: 1025px) 242px,
							            (min-width:767px) 200px,
										(min-width:410px) 70px,
										(min-width:10px) 70px, 242px">
							   </amp-img>
				  </div>
		     </div>
			<hr class="div-paginas-web-hr1">
			<div class="pw-mantenimiento">
			     <div class="PW_page">
					   <amp-img src='resources/css/img/icons/pw_page.png' height='140px' width='140px'
					   sizes="(min-width: 410px) 140px,
        					  (min-width: 10px) 110px, 140px"
					   heights="(min-width:410px) 140px,
					            (min-width:10px) 110px, 140px">
					   </amp-img>
				  </div>
				  <p>
					  <span style="color:#005d9e;">Mantenimiento</span> 
					  Mant&eacute;n tu p&aacute;gina web <span style="font-weight:bold;">actualizada</span> y en buen estado para que se muestre correctamente en los navegadores  y dispositivos m&oacute;viles.
					  <br><br>
					  <label>Contamos con paquetes, diseñador a las necesidades de la <span style="font-weight:bold;">p&aacute;gina web de su empresa</span></label>
				  </p>
				  
			</div>
			<div class="ecommerce">
			      <div class="PW_ecommerce"><!--83%-->
					   <amp-img src='resources/css/img/icons/pw_ecommerce.png' height='140px' width='116.2px'
					   sizes="(min-width: 410px) 116.2px,
					          (min-width: 10px) 91.3px, 116.2px"
					   heights="(min-width:767px) 140px,
					            (min-width:10px) 110px, 140px">
					   </amp-img>
				  </div>
				  <p>
				  <span style="color:#005d9e;">Ecommerce </span> 
				  Cambia la forma en que las personas compran tus productos y crea una <span style="font-weight:bold;">tienda en l&iacute;nea.</span>
				  <br><br>
				  <label>Bríndale una excelente experiencia a tus clientes haciendo posible la compra de productos y/o 
				  servicios en todo momento y en cualquier lugar de <span style="font-weight:bold;">Guatemala.</span> </label>
				  </p>
			</div>
			<hr class="div-paginas-web-hr2">
			<div class="planes">
			    <h2><b>Mantenimiento de P&aacute;ginas Web</b></h2>
				<h3>PLANES QUE SE ACOMODAN A TU P&Aacute;GINA</h3>
				<div class="plan-basico">
				    <div class="img-pw-basico">
					   <amp-img src='resources/css/img/icons/pw_plan_basico.png' height='140px' width='140px'
					   sizes="(min-width: 1250px) 130px,
					          (min-width: 1025px) 110px,
					          (min-width: 869px) 100px,
							  (min-width: 767px) 70px,
							  (min-width: 410px) 90px,
							  (min-width: 10px) 75px, 140px"
					   heights="(min-width: 1250px) 130px,
					            (min-width: 1025px) 110px,
					            (min-width:869px) 100px,
								(min-width:767px) 70px,
								(min-width:410px) 90px,
								(min-width:10px) 75px, 140px">
					   </amp-img>
					</div>
					<p style="font-weight:bold;">PLAN B&Aacute;SICO</p>
					<input class="btn-plan-basico" type="button" value="Contratar plan" onclick="window.location.href='#contactoExplora'" />
				</div>
				<div class="p-plan-basico">
				    Mantenimiento de pequeñas o ligeras actualizaciones en su página web existente.	
				   <br><br>
					<span style="color:#005d9e">Algunos ejemplos:</span> 
					<ul>
						   <li>Comprobar registros de error en la página web</li>
						   <li>Solución de problemas del funcionamiento. </li>
						   <li>Limpieza de archivos viejos. </li>
						   <li>Modificar contenido con texto, imágenes, etc.</li>
					</ul>
				</div>
			<hr class="div-paginas-web-hr3">
			    	<div class="plan-premium">
				    <div class="img-pw-premium"><!--56.33%-->
					   <amp-img src='resources/css/img/icons/pw_plan_premium.png' height='140px' width='140px'
					   sizes="(min-width: 1250px) 130px,
					          (min-width: 1025px) 110px,
					          (min-width: 869px) 100px,
							  (min-width: 767px) 70px,
							  (min-width: 410px) 90px,
							  (min-width: 326px) 75px,
							  (min-width: 10px) 75px, 140px"
					   heights="(min-width:1250px) 73.22px,
					            (min-width:1025px) 61.96px,
					            (min-width:869px) 56.33px,
								(min-width:767px) 39.43px,
								(min-width:410px) 50.69px,
								(min-width:326px) 42.24px,
								(min-width:10px) 42.24px, 78.86px">
					   </amp-img>
					</div>
					<p><b>PLAN PREMIUM</b></p>
					<input class="btn-plan-premium" type="button" value="Contratar plan" onclick="window.location.href='#contactoExplora'" />
					</div>
					<div class="p-plan-premium">
						Mantenimiento m&aacute;s mejora continua y optimizaci&oacute;n de su p&aacute;gina web.
					   <br><br>
						<ul>
							   <li>Informe estad&iacute;stico de la p&aacute;gina web. </li>
							   <li>Optimizaci&oacute;n de p&aacute;gina web. </li>
							   <li>Rediseño de pequeñas secciones de la p&aacute;gina web.</li>
						</ul>
						
					</div>
			</div>
		</div>
	</section>
	<section class="nav-seo" >
		<a name='seo' id='seo'></a>
		<div class="div-seo">
		    <div class="img-seo"><!--75%-->
			   <amp-img src='resources/css/img/pw_seo.png' height='140px' width='140px'
			   sizes="(min-width: 1250px) 653.33px,
			          (min-width: 1025px) 580px,
			          (min-width: 869px) 500px,
					  (min-width: 767px) 385px,
					  (min-width: 410px) 450px,
					  (min-width: 326px) 380px,
					  (min-width: 10px) 330px, 653.33px"
			   heights="(min-width:1250px) 490px,
			            (min-width:1025px) 435px,
			            (min-width:869px) 375px,
						(min-width:767px) 288.75px,
						(min-width:410px) 337.5px,
						(min-width:326px) 285px,
						(min-width:10px) 247.5px, 490px">
			   </amp-img>
			</div>
            <h3>Innovaciones en la  web</h3>
            <h1><b>SEO</b></h1>			
			<h2>Search Engine Optimization</h2>
			<input class="btn-mas-info-seo" type="button" value="M&aacute;s Informaci&oacute;n" onclick="window.location.href='#contactoExplora'" />
			<p>
			     Ubica tu p&aacute;gina web por encima de tus competidores aplicando palabras clave y frases a tu contenido.
				 Har&aacute;n posible que tus clientes encuentren f&aacute;cilmente tu p&aacute;gina web a trav&eacute;s de los motores de b&uacute;squeda
			</p>
		</div>
	</section>
	<section class="nav-hosting">
		<a name='hosting' id='hosting'></a>
		<div class="div-hosting">
		    <div class="img-hosting">
			   <!--29%-->
			   <amp-img src='resources/css/img/icons/pw_hosting.png' height='140px' width='140px'
			   sizes="(min-width: 1025px) 340px,
			          (min-width: 869px) 310px,
					  (min-width: 410px) 250px,
					  (min-width: 326px) 290px,
					  (min-width: 10px) 260px, 340px"
			   heights="(min-width:1025px) 99px,
			            (min-width:869px) 89px, 
						(min-width:410px) 75.11px,
						(min-width:326px) 84.1px,
						(min-width:10px) 67.6px, 99px">
			   </amp-img>
			</div>
            <p>
			    Ofrecemos espacio en la web incluyendo correos ilimitados de Outlook con su dominio. 
				El espacio es utilizado a la necesidad de la página web de su negocio. 
				<span style="color:#408cc1">Brindamos los siguientes beneficios:</span>
            </p>	
            <hr>	
            <div class="hosting-carga">
			    <span style="color:#035086">Carga en Web m&aacute;s r&aacute;pida</span><br>
				Utilizamos 5 centros de data distribuidos en tres continentes que permiten ofrecer velocidad &oacute;ptima a los visitantes de su website. 
                <br><br>
                La ubicaci&oacute;n estrat&eacute;gica para los sitios de Guatemala es en Chicago proporcionando buenos resultados. 
            </div>		
            <div  class="hosting-proteccion">
			    <span style="color:#035086">Protecci&oacute;n</span><br>
				Previene SPAM, hacks y p&eacute;rdida de data. Realiza 1 copia al d&iacute;a de backup del website. 
                <br><br>
                Ofrecemos una monitorizaci&oacute;n autom&aacute;tica r&aacute;pida y un sistema de vigilancia que 
				corrige los problemas de sobrecarga e interrupci&oacute;n. 
            </div >	
            <div  class="hosting-apoyo">
			    <span style="color:#035086">Apoyo</span><br>
				Contamos con equipo de soporte disponible en horario flexible para resolver problemas 
				de forma instant&aacute;nea y eficiente que surjan en su website. 
            </div>			
            <a href="http://www.explora.gt/hosting/Planes Explora-Hosting.pdf" target="_blank">			
				<input class="btn-plan-hosting" type="button" value="Planes de Hosting" onclick="" />
			</a>
		</div>
	</section>
	<section class="nav-dominio" id='dominio'>
		<a name='dominio' id='dominio'></a>
		<div class="div-dominio">
		    <div class="img-dominio">
			   <!--26%-->
			   <amp-img src='resources/css/img/icons/pw_dominio.png' height='140px' width='140px'
			   sizes="(min-width: 1025px) 410px,
			          (min-width: 869px) 385px,
					  (min-width: 767px) 300px,
					  (min-width: 410px) 370px,
					  (min-width: 326px) 310px,
					  (min-width: 10px) 290px, 410px"
			   heights="(min-width:1025px) 106.6px,
			            (min-width:869px) 100.1px,
						(min-width:767px) 78px,
						(min-width:410px) 96.2px,
						(min-width:326px) 80.6px,
						(min-width:10px) 75.4px, 106.6px">
			   </amp-img>
			</div>
			<p>
			    Obtén tu propio dominio con nosotros. Utiliza el nombre que consideres que describa mejor a tu negocio y te haga sobresalir. 
                <br><span style="font-weight:bold;">Te ayudamos con el brainstorming.</span>
			</p>
			<input class="btn-mas-info-hosting" type="button" value="M&aacute;s Informaci&oacute;n" onclick="window.location.href='#contactoExplora'" />
		</div>
		
	</section>
    <br><br><br><br><br><br><br>
	<section style="position:relative;">
	    <?php showFooter()?>
	</section>
   <script src="resources/js/menu.js"></script>
   <script src="resources/js/contacto.js"></script>
   <!--Referencia recaptcha/api en español-->
   <script src='https://www.google.com/recaptcha/api.js?hl=es'></script>
  </body>
</html>