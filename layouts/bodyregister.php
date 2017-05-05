<body>
<div class="main">
<div class="mcolor"><?php echo output_message($message1); echo "<br/>" ;echo output_message($message2); ?></div>
 <div class="social-icons">
   <div class="col_1_of_f span_1_of_f">
  
      <?php require_once("../../includes/indexGoogle.php"); ?>
   </div> 
  
  <div class="clear"> </div> 
      </div>
      <h2>Or Signup with</h2>
      
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  <span class="error"><?php echo $firstname."<br/>"; echo $lastname."</br>";  echo $email."<br/>"; echo $password."<br/>"; echo $confirmPass."<br/>";?></span> 
  
     <div class="lable">

          <div class="col_1_of_2 span_1_of_2">
           <input type="text" class="text" name="firstName" value=""  id="active" placeholder="First Name">
             
           </div>
                <div class="col_1_of_2 span_1_of_2">

                <input type="text" class="text" value="" name="lastName" placeholder="Last Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Last Name';}">
                </div>
                <div class="clear"> </div>
     </div>
     <div class="lable-2">
     <!-- onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'your@email.com ';}" -->
          <input type="text" class="text" value="" placeholder="your@email.com" name="email" >
          <input type="password" class="text" value="" placeholder=" Password" name="password">
          <span class="ncolor">you need to enter at least one caapital letter ,8 charachters letters and numbers</span>
            <input type="password" class="text" value="" placeholder="confirm Password" name="confirmPass">
     </div>
    <h3> creating an account, you agree to our <span class="term"><a >Terms & Conditions</a></span></h3>
     <div class="submit">
     <input type="submit"  name="submit" value="create ana account" >
    
     <hr>
      <a class="submit2" href="login.php"  >Login if you have an account</a>
     </div>
     <div class="clear"> </div>
  </form>