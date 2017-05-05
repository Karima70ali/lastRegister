<?php
require_once("../../includes/intialize.php");
?>
<?php

$firstNameErr  = $passwordErr= $emailErr = "";
$firstName  = $password= $email = "";
$errors=array();
if(isset($_POST['submit'])){


  if (empty($_POST["userName"])) {
    $errors['uerName']=$firstNameErr = "first Name is required";
  } else {
    $firstName = test_input($_POST["userName"]);
    
    if (!preg_match("/^[a-zA-Z ]*$/",$firstName)) {
     $errors['userName']= $firstNameErr = "Only letters and white space allowed"; 
    }
  }
  
 
  
  if (empty($_POST["email"])) {
    $errors['email']=$emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $errors['email']=$emailErr = "Invalid email format"; 
    }
  }
    
	/*
	    if (empty($_POST["password"])) {
   $errors['password']= $passwordErr = "password is required";
  } else {
    $password = test_input($_POST["password"]);
    
    if (!preg_match("/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,16}$/",$password)) {
    $errors['password']=  $passwordErr = "the password does not meet the requirements!"; 
    }

  }
  
  
	*/ 
    
  
  
  $user=new User();
$confirm=new Confirm();
$message="";
if(!$errors){
 
	
	//$fields_required =array("firstName","email","password","re_password");
	//validate_presences($fields_required);
	
	//$fields_with_max_length = array("firstName" =>10,"lastName" =>10,"email" =>20,"password"=>16,"re_password" =>16);
	
	//validate_max_lengths($fields_with_max_length);
	
	$enc_password=password_encrypt($password);
	
	//$confirmed_code=rand();
	
	$user->username=$firstName;
	$user->password=$enc_password;
	$user->email=$email;
	
	
	
	
	//$user = $database->query("INSERT INTO `users` VALUES(NULL,'$firstName','$enc_password','$email')"); 

	
	

		if($user->create() ){
		$message="u have inserted ";		
		}
		else
		{
		$message="u can't inserted ";	
		}







}




$userID=$database->insert_id();

$key=$firstName.$email.date('MY');
$key=md5($key);


$email2=$email;

$confirm = $database->query("INSERT INTO `confirm` VALUES(NULL,'$userID','$key','$email2')"); 



    if($confirm ){
     //  include_once 'swiftmailert/lib/swift_required.php'; 

require_once '../../swiftmailer/lib/swift_required.php';





$info = array(
    'username' => $firstName,
    'email' => $email,
    'key' => $key
);
             
//send the email
if(send_email($info)){
                                 
    //email sent
 $message="u have confirmed ";  
                 
}else{
                     
   $message="u have not confirmed ";  
                 
}


}










 
















  }
/*    include_once 'swiftmailer/lib/swift_required.php';


$info = array(
    'username' => $username,
    'email' => $email,
    'key' => $key
);
             
//send the email
if(send_email($info)){
                                 
    //email sent
    
       $message="u have confirmed ";  
                 
}else{
                     

     $message="Could not send confirm email ";   
                 
}*/

    







/* 		
$result=mail($email, $subject, $message2, $headers);
if($result){
	$message="u must varify";
} */		

		

?>




<html >
 <head>
 <title>register</title>
 <link href="../stylesheets/main.css" media="all" rel="stylesheet" type="text/css"/>
<style>
.error {color: #FF0000;}
</style>
 </head>
<body>
<div id="header">
<h1>register page </h1>
</div>
<div id="main">

<h2>register page</h2>
<p><span class="error">* required field.</span></p>
<?php echo output_message($message); ?>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  

  First Name: <input type="text" name="userName" value="">
  <span class="error">* <?php echo $firstNameErr;?></span>
  <br><br>

    password: <input type="password" name="userPassword" value="">
  <span class="error">*<?php echo $passwordErr;?></span></br>
  <p>password must contain at least one capital letter,number not less than 8</p>
  <br><br>


  E-mail: <input type="text" name="email" value="">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>


   
  <input type="submit" name="submit" value="Submit"/>  

</form>
	</div>
		
    <div id="footer">Copyright <?php echo date("Y", time()); ?>, Karima Ali</div>
  </body>
</html>
<?php if(isset($database)){$database->close_connection();} ?>