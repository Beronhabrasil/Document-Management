<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>


<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Popular Login Form Widget Flat Responsive Widget Template :: w3layouts</title>  
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">  
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content=" />
<!-- Custom Theme files -->

<link href="http://dunavirtual.hol.es/check/css/style.css " rel="stylesheet" type="text/css" media="all"/>
<!-- //Custom Theme files -->
<!-- web-font -->
<link href="http://dunavirtual.hol.es/check/css/fonts.css" rel='stylesheet' type='text/css'>
<!-- //web-font -->
<!-- pop-up-box -->
<link href="http://dunavirtual.hol.es/check/css/bootstrap-responsive.css  " rel="stylesheet" type="text/css" />
<link href="http://dunavirtual.hol.es/check/css/bootstrap.css " rel="stylesheet" type="text/css" />
  <script src="http://dunavirtual.hol.es/check/js/query.js"></script>
    <script src="http://dunavirtual.hol.es/check/js/bootstrap.js"></script>

    <script src="http://dunavirtual.hol.es/check/js/jquery-2.2.3.min.js"></script> 
    <script src="http://dunavirtual.hol.es/check/js/jquery-3.1.0.min.js"></script>
    <script src="http://dunavirtual.hol.es/check/js/ajax.js"></script>



<script>
	$(document).ready(function() {
		
                
                
                
                
              //  $("#test").css({color:"blue",width: "400px"});
               
	}); 
</script>
<!-- //pop-up-box --> 
</head>
<body>
        
  <?php  echo "<script>
function fechar(){
window.close();
}
</script>";
?>
<input type='button' onClick='fechar()' value='fechar'>" 
	<!-- login starts here -->
	<div class="login agile">
		<div class="w3agile-border">
			<h2>Register</h2>
			<div class="login-main login-agileits"> 
				
				<form action="<?php echo site_url('sistema/register');?>" method="post">
				 <p>Nome</p>
					<input type="text"  name="nome" required="">
                                  <p>Sobrenome</p>
					<input type="text"  name="sobrenome" required="">      
                                    
                                    <p>Email</p>
					<input type="text" placeholder="example@gmail.com" name="email" required="">
					<p>Senha</p>
					<input type="password" placeholder="Password" name="senha" required="">
					<input type="submit" value="Register">
                                        <span style="background-color:white; color: black;font-family:cursive; margin-left:400px;"> <?php  echo anchor('sistema', 'retornar', ''); ?></span>
				</form>
				
				
			</div>
		</div>
		<!-- modal -->
		<div id="small-dialog" class="mfp-hide">
			<h5 class="w3ls-title">Sign Up</h5>
			<div class="login-modal login"> 
				<form action="#" method="post">
					<p>Your Name</p>
					<input type="text" placeholder="Your Name" name="" required="">
					<p>Email</p>
					<input type="text" placeholder="example@gmail.com" name="mail" required="">
					<p>Password</p>
					<input type="password" placeholder="Password" name="Password" required="">
					<input type="submit" value="Sign Up">
				</form>
				
			</div> 
		</div>
		<!-- //modal -->  
	</div>
	<!-- //login ends here -->
	<!-- copyrights -->  
	<div class="copy-rights wthree">		 	
		<p>© 2016 Popular Login Form. All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>		 	
	</div>
	<!-- //copyright -->
	<script src="<?php echo base_url('js/jquery.magnific-popup.js" type="text/javascript'); ?>"></script>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

</body>
</html>


