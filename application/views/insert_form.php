
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>



<!DOCTYPE HTML>
<html>
    <head>
        <title></title>  
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">  
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
       
        <!-- Custom Theme files -->
        <link href="<?php echo base_url('css/style.css'); ?>  " rel="stylesheet" type="text/css" media="all"/>
        <!-- //Custom Theme files -->
        <!-- web-font -->
        <link href='<?php echo base_url('css/fots.css'); ?> ' rel='stylesheet' type='text/css'>
        <!-- //web-font -->
        <!-- pop-up-box -->
        <script src="<?php echo base_url('js/jquery-2.2.3.min.js'); ?>"></script> 
        
            <script>
        
        </script>
        <!-- //pop-up-box --> 
    </head>
    <body>

        <!-- login starts here -->
        <div class="login agile">
            <div class="w3agile-border">
                <h2>Register</h2>
                
               
                <div class="login-main login-agileits"> 

                    <form action="<?php echo site_url('Sistema/data_insert_user'); ?>" method="post">
                        <?php $id = $this->uri->segment(4);
                        echo $id; ?>
                        <input type="hidden" name="id" value="<?php echo $id; ?>"
                               <p>Nome</p>
                        <input type="text" placeholder="Nome" name="nome" required="">
                        <p>Sobrenome</p>
                        <input type="text" placeholder="Sobrenome" name="sobrenome" required="">
                        <p>RG</p>
                        <input type="text" placeholder="RG" name="rg" required="">
                        <p>CPF</p>
                        <input type="text" placeholder="cpf" name="cpf" required="">
                        <p>RG</p>
                        <input type="text" placeholder="RG" name="rg" required="">
                        <p>N°-Processo</p>
                        <input type="text" placeholder="RG" name="np" maxlength="12"  id="pin" pattern="\d{12}" required="">
                        <p>Comarca</p>
                        <input type="text" placeholder="Onde" name="comarca" required="">
                        <p>Endereco</p>
                        <input type="text" placeholder="Endereco" name="endereco" required="">
                        <p>Status</p>
                        <input type="text" placeholder="Status" name="status" required="">
                        <input type="submit" value="enviar">
                        <span style="background-color:white; color: black;font-family:cursive; margin-left:400px;"> <?php echo anchor('sistema', 'retornar', ''); ?></span>
                    </form>


                </div>
            </div>
            <!-- modal -->
            <div id="small-dialog" class="mfp-hide">
                <h5 class="w3ls-title">Inserir Cliente</h5>
                <div class="login-modal login"> 


                    </form>

                </div> 
            </div>
            <!-- //modal -->  
        </div>
        <!-- //login ends here -->
        <!-- copyrights -->  
        <div class="copy-rights wthree">		 	
            <p>© 2016 Popular Login Form. All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">Calheiro</a> </p>		 	
        </div>
       
        
        <!-- //copyright -->
       

        <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo (ENVIRONMENT === 'development') ? 'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
    </div>

</body>
</html>







