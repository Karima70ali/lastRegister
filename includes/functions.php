<?php
function redirect_to( $location = NULL ) {
  if ($location != NULL) {
    header("Location: {$location}");
    exit;
  }
}

function __autoload($class_name){
	$class_name=strtolower($class_name);
	$path=LIB_PATH.DS."{$class_name}.php";
	if(file_exists($path)){
		require_once($path);
	}else{die("the file {$class_name}.php could not be found");}
	
	
	
} 

function include_layout_template($template=""){
	include(SITE_ROOT.DS.'public'.DS.'layouts'.DS.$template);
}


function strip_zeros_from_date( $marked_string="" ) {
  // first remove the marked zeros
  $no_zeros = str_replace('*0', '', $marked_string);
  // then remove any remaining marks
  $cleaned_string = str_replace('*', '', $no_zeros);
  return $cleaned_string;
}



function output_message($message="") {
  if (!empty($message)) { 
    return "<p class=\"message\">{$message}</p>";
  } else {
    return "";
  }
}


$firstNameErr  = $passwordErr= $emailErr = "";
$firstName  = $password= $email = "";


function firstname ($name=""){


    if (empty($name)) {
  $firstNameErr = "first Name is required";
  return   $firstNameErr;
  } 


    else if  (!preg_match("/^[a-zA-Z ]*$/",$name)) {
     $firstNameErr = "Only letters and white space allowed"; 
       return   $firstNameErr;
    
  }
    else 
  {
    $firstName = test_input($name);
    return   "";
    }

  
 
}
function lastname ($name=""){


    if (empty($name)) {
  $firstNameErr = "Last Name is required";
  return   $firstNameErr;
  } 


    else if  (!preg_match("/^[a-zA-Z ]*$/",$name)) {
     $firstNameErr = "Only letters and white space allowed"; 
       return   $firstNameErr;
    
  }
    else 
  {
    $firstName = test_input($name);
    return   "";
    }

  
 
}



 function email ($email){


  
  if (empty($email)) {
  $emailErr = "Email is required";
  return $emailErr;
  } 
else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
     $emailErr = "Invalid email format"; 
     return $emailErr;
    }

  else {
    $email = test_input($email);
    return "";
   
  }
}




function password ($password){
   if (empty($password)) {
  $passwordErr = "password is required";
  return $passwordErr;
  }
   else  if (!preg_match("/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,16}$/",$password)) {
  $passwordErr = "the password does not meet the requirements!"; 
    return $passwordErr;
    }

  
   else {
    $password = test_input($password);
      return "";
}
}

function confirmPassword  ($pass1,$pass2){

  if($pass1==$pass2){
    return "";
  }
  
  else{
    return "Not Match your password";
  }
}












function log_action ($action,$message=""){
	$logfile='log.txt';
	$new =file_exists($logfile)?false:true;
	if($handle=fopen($logfile,'a')){
		$timestamp=strftime("%Y-%m-%d %H:%M:%S",time());
		$content="{$timestamp}|{$action}:{$message}\n";
		fwrite($handle,$content);
		fclose($handle);
		
	}else
		{echo "could not open file";}
}




  function password_encrypt($password) {
  	$hash_format = "$2y$10$";   // Tells PHP to use Blowfish with a "cost" of 10
	  $salt_length = 22; 					// Blowfish salts should be 22-characters or more
	  $salt = generate_salt($salt_length);
	  $format_and_salt = $hash_format . $salt;
	  $hash = crypt($password, $format_and_salt);
		return $hash;
	}
	
	function generate_salt($length) {
	  // Not 100% unique, not 100% random, but good enough for a salt
	  // MD5 returns 32 characters
	  $unique_random_string = md5(uniqid(mt_rand(), true));
	  
		// Valid characters for a salt are [a-zA-Z0-9./]
	  $base64_string = base64_encode($unique_random_string);
	  
		// But not '+' which is valid in base64 encoding
	  $modified_base64_string = str_replace('+', '.', $base64_string);
	  
		// Truncate string to the correct length
	  $salt = substr($modified_base64_string, 0, $length);
	  
		return $salt;
	}
	
	function password_check($password, $existing_hash) {
		// existing hash contains format and salt at start
	  $hash = crypt($password, $existing_hash);
	  if ($hash === $existing_hash) {
	    return true;
	  } else {
	    return false;
	  }
	}
	





  

?>