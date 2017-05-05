<?php
require_once("../../includes/phpMailer/class.phpmailer.php");
require_once("../../includes/phpMailer/class.smtp.php");
require_once("../../includes/phpMailer/language/phpmailer.lang-br.php");
class Mail {
	public static function sendmail ($name,$mail){
$to=$mail;
$to_name=$name;
$subject="confirmation mail".strftime("%T",time());
$message="Thanks ". $to_name." for your registration ";
$message=wordwrap($message,70);
$from_name="our website";
$from="you@yourdomain.com";
$mail=new PHPMailer();



$mail->IsSMTP();
$mail->Host       = "smtp.mailtrap.io"; // SMTP server example
//$mail->SMTPDebug  = 0;                     // enables SMTP debug information (for testing)
$mail->Port       = 2525;                    // set the SMTP port for the GMAIL server
$mail->SMTPAuth   = true;                  // enable SMTP authentication
$mail->Username   = "cd07fda06e932f"; // SMTP account username example
$mail->Password   = "deb392501f05a8";  


$mail->FromName=$from_name;
$mail->From=$from;
 $mail->AddAddress($to,$to_name) ."</br>";
$mail->Subject=$subject;
$mail->Body=$message;
$result =$mail->Send();

if($result){
	return true;
}
else {
	return false;
}
}
}
?>