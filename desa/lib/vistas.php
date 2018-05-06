<?php
$form_placeholder = '';
function showMenu(){
    print"
        <div class='NavMenu'>
			  <input type='checkbox' id='btnMenu'></input>
				  <label id='lblMenu' for='btnMenu'>
					 <amp-img src='resources/css/img/icons/menu.png' height='30px' width='30px'></amp-img>
				  </label>
			  <div class='menu'>
				 <ul>
					 <li class='submenu' id='webDev'><a href='http://www.explora.gt/paginasWeb.php#'><b>WEB DEVELOPMENT</b></a>
						 <ul>
							<li><a href='http://www.explora.gt/paginasWeb.php#paginas-web'><b>Pagina Web</b></a><hr noshade='noshade'/></li>
							<li><a href='http://www.explora.gt/paginasWeb.php#seo'><b>SEO</b></a><hr noshade='noshade'/></li>
							<li><a href='http://www.explora.gt/paginasWeb.php#hosting'><b>Hosting</b></a><hr noshade='noshade'/></li>
							<li><a href='http://www.explora.gt/paginasWeb.php#dominio'><b>Dominio</b></a></li>
						 </ul>
					 </li>
					 <!--li id='analytics'><a href=''><b>ANALYTICS</b></a></li>
					 <li id='branding'><a href=''><b>BRANDING</b></a></li>
					 <li id='portafolio'><a href=''><b>PORTAFOLIO</b></a></li>
					 <li id='team'><a href=''><b>TEAM</b></a></li-->
					 <li id='contacto'><a href='#contactoExplora'><amp-img srcset='resources/css/img/icons/phone.png' height='25px' width='25px'></amp-img> <p class='escribenos'><b> Cont&aacutectanos</b></p></a></li>
				 </ul>
			  </div>
		</div>
    ";
}

function showFooter(){
    print"
           <div class='footer'>
		    <p><b>Nos encantar&iacute;a conocerte.</b><br><br> D&eacute;janos tus datos y nos pondremos en contacto contigo.</p> 
			
			<form method='GET' action='lib/enviar_correo.php'>
				<input type='text' id='txtNombre' name ='txtNombre' placeholder='  Nombre' required>
				<input type='text' id='txtTelefono' name ='txtTelefono' placeholder='  T&eacute;lefono' onkeypress='return justNumbers(event);' required>
				<div class='g-recaptcha' id='recaptcha-footer' data-sitekey='6LcWKlIUAAAAAK6SorixoTI7QVftGtaY3AZIoNQ7'></div>
				<input type='submit' name='submitlogin' id='btnEnviar' placeholder='Nombre' value='Enviar' onclick='alert();'>
			</form>
			
			<a href='tel:+502 5633 6449' id='telefono'>+502 56336449</a>
			  <label class='lblTelefono' for='telefono'>
				 <amp-img src='resources/css/img/icons/phone.png' height='28px' width='28px'></amp-img>
			  </label>
			
			<a href='mailto:letstalk@explora.gt' id='mail'>letstalk@explora.gt</a>
			  <label class='lblMail' for='mail'>
				 <amp-img src='resources/css/img/icons/envelope.png' height='28px' width='28px'></amp-img>
			  </label>
			
			<a href='https://www.facebook.com/Exploragt/' id='fb' title='' target='_blank'>
			    <amp-img src='resources/css/img/icons/facebook-logo.png' height='58px' width='58px'
				 sizes='(max-width: 767px) 40px, 58px'
				 heights='(max-width:767px) 40px, 58px'
				 ></amp-img></a>
			  
			<a href='https://www.instagram.com/exploradlv/' id='im' title='' target='_blank'>
			     <amp-img src='resources/css/img/icons/instagram-logo.png' height='58px' width='58px'
				 sizes='(max-width: 767px) 40px, 58px'
				 heights='(max-width:767px) 40px, 58px'>
				 </amp-img>
			</a>
			 
			
			<a href='https://www.linkedin.com/company/explora-ingenieria' id='in' title='' target='_blank'>
			    <amp-img srcset='resources/css/img/icons/linkedin-logo.png' height='58px' width='58px'   
				 sizes='(max-width: 767px) 40px, 58px'
				 heights='(max-width:767px) 40px, 58px'>
		         </amp-img>
			</a>
			
			<br><br><br><br>
			
            <div class='firma'><amp-img src='resources/css/img/icons/copyright.png' height='12px' width='12px'></amp-img> 2017 Explora | Disfruta la vida. All Rights Reserved.</div> 
			
		 </div>
    ";
}

function showContact(){
	
    print"
       <!-- Modal Escenario-->
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
		
	
    ";
}

?>