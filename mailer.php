<?php
$email_to = "info@partyrazzievents.com
";
$name = $_POST["name"];
$phone = $_POST["phone"];
$email = $_POST["email"];
$message = $_POST["message"];
$text = "NAME: $name<br>
		 PHONE: $phone<br>
         EMAIL: $email<br>	 
         MESSAGE: $message";
$headers = "MIME-Version: 1.0" . "\r\n"; 
$headers .= "Content-type:text/html; charset=utf-8" . "\r\n"; 
$headers .= "From: <$email>" . "\r\n";
mail($email_to, "Message", $text, $headers);
?>