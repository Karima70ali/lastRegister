<?php

require_once("../../includes/intialize.php");

$session->logout();
session_destroy();
redirect_to("index.php");



//Unset token and user data from session
require_once("../../includes/gpConfig.php");

unset($_SESSION['token']);
unset($_SESSION['userData']);

//Reset OAuth access token
$gClient->revokeToken();

?>