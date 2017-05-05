<?php  
$firstname=$lastname=$email=$confirmPass="";
$errors=array();
 $message1=$message2=" ";
if(isset($_POST['submit'])){
$errors['firstname']=$firstname=firstname($_POST['firstName']);
$errors['lastname']=$lastname=lastname($_POST['lastName']);
$errors['email']=$email=email($_POST['email']);
$errors['password']=$password=password($_POST['password']);
$errors['confirmPass']=$confirmPass=confirmPassword($_POST['password'],$_POST['confirmPass']);

        	$user = new User();
	$password_encrypt=password_encrypt($_POST['password']);


    $user->oauth_provider="";
    $user->oauth_uid="";
   $user->first_name   = $_POST['firstName'];
     $user->last_name   = $_POST['lastName'];
     $user->password =$password_encrypt;
     $user->email = $_POST['email'];
       $user->active=0;
      $user->gender="";
       $user->locale="";
        $user->picture="";
         $user->link="";
          $user->created=date("Y-m-d H:i:s");
           $user->modified=date("Y-m-d H:i:s");

  if($firstname==="" && $lastname===""&&$email===""&&$password===""&&$confirmPass===""){
    if($user->save())
    {
    	$message1= "congrates you successfully registered";
     }
     else
     	{
        $message1= "sorry you are not registered";
   }

$userID = $database->insert_id();

$key = $_POST['firstName'] . $_POST['email'] . date('mY');
$key = md5($key);


$confirm = new Confirm();
$info = array(
    'userid' => $userID,
    'key' => $key,
    'email' => $_POST['email']
);

            
if($confirm->createConfirm($info)){
  $send_mail=Mail::sendmail($_POST['firstName'],$_POST['email']);

if($send_mail){
  $confirmingUser=$confirm->confirmingUser($_POST['email'],$key);
  if($confirmingUser){
  $message2= 'your mail has been confirmed ';
}
 }
 else
 {
  $message2= 'your mail has not been confirmed ';
 }
  }  
}
}
?>