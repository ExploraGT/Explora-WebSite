<?php

    require_once "recaptchalib.php";
	
	$name = $_GET["nombre_modal"];
	$email = $_GET["correo_modal"];
	$descripcion = $_GET["proy_modal"];
	
	
			  foreach ($_GET as $key => $value) {
				echo '<p><strong>' . $key.':</strong> '.$value.'</p>';
			  }
			
    // your secret key
    $secret = "6LcWKlIUAAAAADuyGZNb3dphqxB2VwYMTrLKJAYI";
    // empty response
    $response = null;
    $reCaptcha = new ReCaptcha($secret);
	
	
	// if submitted check response
	if ($_GET["g-recaptcha-response"]) {
		$response = $reCaptcha->verifyResponse(
			$_SERVER["REMOTE_ADDR"],
			$_GET["g-recaptcha-response"]
		);
	}

	if ($response != null && $response->success) {
          
		$to = "letstalk@explora.gt";
		$subject = "Contacto Explora";

		$message.="Nombre:  ".$name."\n";
		$message.="Correo: ".$email."\n";
		$message.="Descripcion proyecto: ".$descripcion."\n";
		
		$headers = 'From: '.$to."\r\n".'Reply-To: '.$to."\r\n".'X-Mailer: PHP/'.phpversion();

		mail($to, $subject, $message, $headers);
		
		header("location:../index.php");
     } 
	 else
	 {
		 header("location:../index.php#contactoExplora");
		echo"<script language='javascript'>alert('Error')</script>";
	 }
	  

?>