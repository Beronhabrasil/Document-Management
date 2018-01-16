<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>



<!DOCTYPE HTML>
<html>
<head>
<title>Area Usuario</title>  
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">  
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content=" " />

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

<!-- //pop-up-box --> 
</head>
<body>
         
 <?php  echo "<script>
function fechar(){
window.close();
}
</script>";
?>
        <button onClick='fechar()' value='fechar' class="btn btn-primary ">X</button>
     
	
	<div class="login agile">
		<div class="w3agile-border">
			<h2>Register</h2>
			<div class="login-main login-agileits"> 
			
                            <div style="background-color: red">
                       
                            </div>
   <?php $id = $this->uri->segment(4); ?> 
          <form  action="<?php echo  base_site('sistema/user_info');?>" method="post">
          <input  type="hidden"  name="id" value="<?php echo $id; ?>"/>
          <p>nome</p><input type="text"  name="nome" />
            <p>numero</p><input type="text"  name="numero" />
           <p>comarca</p><input type="text"  name="comarca" />
             <p>instancia</p><input type="text"  name="instancia" />
               <p>data</p><input type="text"  name="data" />
              <input type="submit" value="Submit"/>
            </form>              
                            

                            
</div></div></div> 
		 
	<script>
   $(function(){
               
              
              

            })

</script>
	<!-- //login ends here -->
	<!-- copyrights -->  
	<div class="copy-rights wthree">		 	
		<p> </p>		 	
	</div>
	<!-- //copyright -->
	

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

</body>
</html>


