
<?php error_reporting(0); ?> 
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


    <div class="container-fluid" style="margin-left: 00px;">
        <body data-site="">
            <div id="session_info">
                <h5>Bem vindo &nbsp; </h5>

                <?php
                echo $this->session->id . " ---> " . "---" .
                $this->session->user . " Usuario" . "---->" .
                $this->session->ip_adresse . "Endereço de ip-acessado" . "----->" .
                $this->session->last_visit . " Ultima visita " . "---->" .
                "Status =  " . $this->session->logged_in;
                ?>   </div>



            <hr>
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">

                    </div>
                    <ul class="nav navbar-nav">
                       
                       

                        </li>

                        <li> <a class="navbar-brand"<a href="logout"> Logout</a> </li>
                    </ul>
                </div>

            </nav>


            <h3 style="color:whitesmoke; ">Dados Relevantes</h3>

            <hr>
            <div class="table-responsive" style="table-layout:fixed; width:1200px;word-wrap: break-word;">
                <table class="table table-bordered" style="border-spacing: 7px;
                       border-collapse: separate; ">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Sobrenome</th>
                            <th>RG</th>
                            <th>CPF</th>

                            <th>Endereço</th>
                            <th>Cheques</th>

                            <th>Status</th>



                        </tr>
                    </thead>     

                    <tbody>
                        <?php
                        foreach ($query as $row) {
                            ?>


                            <tr>
                                <td><?php echo $row->nome; ?></td>
                                <td><?php echo $row->sobrenome; ?></td>
                                <td><?php echo $row->rg; ?></td>
                                <td><?php echo $row->cpf; ?></td>
                                <td><?php echo $row->endereco; ?></td>
                                <td> <a class=" btn btn-warning" href="http://dunavirtual.hol.es/check/index.php/sistema/doc_list/np/<?php echo $row->np; ?>" onclick="window.open(this.href, 'child', 'scrollbars,width=1400,height=600');
                                            return false">Cheques</a></td>  
                                <td> <?php echo $row->status; ?>  </td>


                            </tr>









                        <?php } ?> 

                    </tbody>
                </table>               
                <!--=====================================QUERY USERDATA=======================================================-->



              








                <!-- //login ends here -->
                <!-- copyrights -->  
                <div class="copy-rights wthree">		 	
                    <p>© 2016 . All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank"></a> </p>		 	
                </div>

                <!-- //copyright -->
                <script src="<?php echo base_url('js/jquery.magnific-popup.js" type="text/javascript'); ?>"></script>
        </body>
</html>

<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo (ENVIRONMENT === 'development') ? '' . '</strong>' : '' ?></p>

</div>


</div>

</body>
</html>



