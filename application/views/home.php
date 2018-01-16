<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>



<!DOCTYPE HTML>
<html>
<head>
<title>Popular Login</title>  
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">  
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Popular " />
<!-- Custom Theme files -->
<link href="<?php echo base_url('css/style.css'); ?>  " rel="stylesheet" type="text/css" media="all"/>
<!-- //Custom Theme files -->
<!-- web-font -->
<link href='<?php echo base_url('css/fots.css'); ?> ' rel='stylesheet' type='text/css'>
<!-- //web-font -->
<!-- pop-up-box -->
<script src="<?php echo base_url('js/jquery-2.2.3.min.js'); ?>"></script> 
 <link href="<?php echo base_url('css/style.css'); ?>  " rel="stylesheet" type="text/css" media="all"/>
        <link href="<?php echo base_url('css/bootstrap-responsive.css'); ?>  " rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('css/bootstrap.css'); ?>  " rel="stylesheet" type="text/css" />
<script>
	$(document).ready(function() {
		
		});
                
                
              //  $("#test").css({color:"blue",width: "400px"});
               
	}); 
</script>
<!-- //pop-up-box --> 
</head>
<body>
   
	<!-- login starts here -->
	<div class="login agile">
		<div class="w3agile-border">
			<h2>Sistema de Gerenciamento de Documento</h2>
			<div class="login-main login-agileits"> 
				<h1>Login</h1> 
				<form action="<?php echo base_url('index.php/sistema/login');?>" method="post">
					<p>Email</p>
					<input type="text" placeholder="example@gmail.com" name="user" required="">
					<p>Password</p>
					<input type="password" placeholder="Password" name="pass" required="">
					<input type="submit" value="Login">
				</form>
                                <br>
				
                                <h3> <span class=" btn btn-success"<?php echo anchor('sistema/loadform/', 'Registrar ?'); ?>  </span> </h3>
			
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
                                        <a href="http://localhost/send/sistema/loadform">Sign Up</a>
 
                                        
				</form>
				<div class="social-btns w3l w3-agileits">
                                    
                                    
					<a class="fa" href="#"> Facebook</a>
					<a class="g" href="#"> Google</a>
				</div>  
			</div> 
		</div>
		<!-- //modal -->  
	</div>
	<!-- //login ends here -->
	<!-- copyrights -->  
	<div class="copy-rights wthree">		 	
		<p>©Calheiro. All Rights Reserved | Design by  <a href="http://beronha.net16.net/" target="_blank">Websaoluis</a> </p>		 	
	</div>
	<!-- //copyright -->
	<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
</body>
</html>

<p class="footer " style="color:white;">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>'  .'</strong>' : '' ?></p>
</div>

<?php     ?>

</body>
</html>

                                 