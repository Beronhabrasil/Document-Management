<html>
    <head>
        <title>Area Usuario</title>  
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">  
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content=" " />

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

        <!-- //pop-up-box --> 
    </head>
    <style>hr { height:3px; border:none; color:rgb(60,90,180); background-color:rgb(60,90,180); }
        .colorgraph {
            height: 7px;
            border-top: 0;
            background: #c4e17f;
            border-radius: 5px;
            background-image: -webkit-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
            background-image: -moz-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
            background-image: -o-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
            background-image: linear-gradient(to right, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
        }</style>
    <body>
        
        
     <?php  echo "<script>
function fechar(){
window.close();
}
</script>";
?>
        <button onClick='fechar()' value='fechar' class="btn btn-primary ">X</button>
     
        
        <h4 style="color: white;">Processos documentos</h4>

        <table class="table-responsive table-bordered" style="margin-left:20px;">
            <thead>

            </thead>
            <tbody>



                <?php foreach ($list as $row) { ?>
                
     
                    <tr>
                         <br>
                        <td>
                            <h4 style="color: white;"> Documento  : &nbsp;<?php echo $row->id; ?> </h4> 
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h4 style="color: white;">  Revisao : &nbsp; <?php echo $row->revisao; ?>  </h4>    
                        </td>

                    </tr>
                    <tr>
                        <td>
                            <h4 style="color: white;"> Comentario :&nbsp;  <?php echo $row->comentario; ?>  </h4>    
                        </td>

                    </tr>

                <td>
              
                    <embed style="width:1200px; height:500px"  src="http://dunavirtual.hol.es/check/images/<?php echo $row->pic; ?> "/>
   
                </td>
 
                <tr>
                    <td>

                    </td>

                </tr>
               
            <?php } ?>
                
                
            <br>

            <hr class="colorgraph">  

            </tbody>

        </table>

    </div>
    

    <!-- //login ends here -->
    <!-- copyrights -->  
    <div class="copy-rights wthree">		 	
        <p>© 2016 . All Rights Reserved | Design by @WEBSAOLUIS  <a href="http://w3layouts.com/" target="_blank"></a> </p>		 	
    </div>

    <!-- //copyright -->
    <script src="<?php echo base_url('js/jquery.magnific-popup.js" type="text/javascript'); ?>"></script>
</body>
</html>

<p class="footer" style="color: white;">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo (ENVIRONMENT === 'development') ? '' . '</strong>' : '' ?></p>

</div>




</body>
</html>




