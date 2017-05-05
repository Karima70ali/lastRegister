<?php

if($session->is_logged_in()){
	redirect_to("home.php");
}
$message="";
if(isset($_POST['submit'])){


 $username=trim($_POST['username']);
 $password=trim($_POST['password']);

	$found_user=User::attempt_login($username,$password);
	if($found_user){
		$session->login($found_user);
	log_action('login',"{$found_user["first_name"]} logged in ");
		redirect_to("home.php");
	}
	else
	{
		
		$message="incorect username and password";
	}
	
}
else
{
	$username="";
	$password="";
}

?>