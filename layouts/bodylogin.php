<body>
<div class="main">

      <h2>Login please</h2>
      <?php echo output_message($message); ?>
		<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
		
		
		   <div class="lable">

		  
                <div class="col_1_of_2 span_1_of_2">

                </div>
                <div class="clear"> </div>
		   </div>
		   <div class="lable-2">

		   <!-- onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'your@email.com ';}" -->
		    <input type="text" class="text" value="<?php echo htmlentities($username); ?>" placeholder=" User Name" name="username">
		        
		     <input type="password" class="text" value="<?php echo htmlentities($password); ?>" placeholder=" Password" name="password">
		       
		   </div>
		
		   <div class="submit">
			  <input type="submit"  name="submit" value="Login" >
			 
			
		   </div>
		   <div class="clear"> </div>
		</form>
		<!-----//end-main---->
		</div>