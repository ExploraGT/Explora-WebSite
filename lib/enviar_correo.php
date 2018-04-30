<?php

    require_once "recaptchalib.php";

	$name = $_GET["txtNombre"];
	$telefono = $_GET["txtTelefono"];
	
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
			$message.="Telefono: ".$telefono."\n";

			$headers = 'From: '.$to."\r\n".'Reply-To: '.$to."\r\n".'X-Mailer: PHP/'.phpversion();

			mail($to, $subject, $message, $headers);

			header("location:../index.php");
	}
	else
	 {
		 header("location:../index.php");
		echo"<script language='javascript'>window.alert('Verifica el recaptcha')</script>";
	 }
?>
