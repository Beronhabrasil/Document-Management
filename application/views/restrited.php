

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


<div class="container-fluid" style="margin-left: 00px;">
    <body data-site="">
        <div id="session_info">
            <h5>Bem vindo &nbsp; </h5>

            <?php
            echo $this->session->id . " -- " .
            $this->session->nome . " " .
            $this->session->sobrenome . " -- " .
            $this->session->email . "  " .
            "Status =  " . $this->session->logged_in;
            ?>   </div>



        <hr>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">

                </div>
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home</a></li>
                   
                    <li> <a  data-toggle="modal" data-target="#myModal"><b>Cliente</b></a></li>
                    </li>

                    <li> <a class="navbar-brand"<a href="logout"> Logout</a> </li>
                </ul>
            </div>

        </nav>


       




        <h3 style="color:whitesmoke; ">Dados Relevantes</h3>

        <hr>
        <div class="table-responsive" style="table-layout:fixed; width:1500px;word-wrap: break-word;">
            <table class="table table-bordered" style="border-spacing: 7px;
                   border-collapse: separate; ">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Sobrenome</th>
                        <th>RG</th>
                        <th>CPF</th>
                       <th>N-cheque</th>
                     
                        <th>Endereço</th>
                        <th>Cheques</th>
                        <th>Inserir-DOC</th>
                        <th>Status</th>

                        <th>editar</th>

                        <th>Apaguar</th>

                    </tr>
                </thead>     

                <tbody>

                    <?php
                    echo $this->session->id;
                    foreach ($query as $row) {
                        ?>



                    <form class="data_<?php echo $row->id; ?> ">
                        <input id="valor" class="j_id" type="hidden"  name="id" value="<?php echo $row->id; ?>"/> 
                        <tr>
                            <td><input type="text"  name="nome"  value="<?php echo $row->nome; ?>"/></td>
                            <td><input type="text"  name="sobrenome" value="<?php echo $row->sobrenome; ?>" /></td>
                            <td><input type="text"  name="rg" value="<?php echo $row->rg; ?>" />  </td>
                            <td><input type="text"  name="cpf" value="<?php echo $row->cpf; ?>" />  </td>
                            <td><?php echo $row->np; ?> </td>
                           
                          
                            <td><input type="text"  name="endereco" value="<?php echo $row->endereco; ?>" />  </td>
                            <td> <a class=" btn btn-warning" href="http://dunavirtual.hol.es/check/index.php/sistema/doc_list/np/<?php echo $row->np ?>" onclick="window.open(this.href, 'child', 'scrollbars,width=1400,height=600');
                                return false">Documento</a></td>  </td>
                            <td>   <a class="btn btn-primary" href="http://dunavirtual.hol.es/check/index.php/sistema/load_upload_form/id/<?php echo $row->np; ?>" onclick="window.open(this.href, 'child', 'scrollbars,width=400,height=500');
                                return false">Inserir</a></td>     
                            <td>  <select name="status">
                                    <option value="Ativo"><?php echo $row->status; ?></option>       
                                  
                                    <option value="em processo">em processo</option>
                                    <option value="Aguardando">Aguardando</option>
                                    <option value="cancelado">cancelado</option>
                                </select> 
                            </td> 
                            <td> <button class="btn-1" data-form =".data_<?php echo $row->id; ?>" type="button"  data-msg="Deseja alterar estas informações?" class="btn btn-primary">editar</button></td>


                            </td>         
                    </form>
                    <td>  
                        <form action="#" class="form-submit-delete" method="post">
                            <?php
                            $id = $this->session->id;
                            ?>
                            <input type="hidden" name="id" value="<?php echo $row->id; ?>">
                            <input type="submit" value="apagar">

                        </form>  
                        </tr>









                    <?php } ?> 

                    </div>



                    </tbody>
                    <div class="clearfix"></div> 
                    <div class="resposta"></div>
                    <!--=====================================QUERY USERDATA=======================================================-->









                    <?php $id = $this->session->id; ?>





                    <script>


                        $(document).ready(function ()
                        {

                        $(".btn-1").click(function () {
                        var form = $(this).attr("data-form");
                        var msg = $(this).attr("data-msg");
                        var confi = confirm(msg);
                        if (confi === true) {
                        var data = $(form).serialize();
                        $.ajax({
                        type: "POST",
                                url: "<?php echo base_url('index.php/sistema/data_user') ?>",
                                data: data,
                                async: false,
                                dataType: "Json",
                                success: function (data) {

                                if (data.error) {
                                alert(data.error[0]);
                                } else {
                                console.log(data)

                                        $(".resposta").append('');
                                $.each(data.success, function (k, v) {
                                console.log(k)
                                        var h = "<td>Cpf:" + v['cpf'] + "</td><td>Rg:" + v['rg'] + "</td><td>Endereço:" + v['endereco'] + "</td>";
                                alert(h);
                                })
                                }
                                }, error: function (error) {
                        $(".resposta").html(error.responseText);
                        }
                        });
                        }
                        })





   //================================================// designer area ===========================================


                                var session_info = $("#session_info");
                        session_info.css({margin: 0, color: "white"});
                        $(".footer").css({color: "white"});
                        $("th").css({color: "orange", text: "bold text-transform :lowercase"});
                        var td = $("td");
                        td.css({color: "white",font: "italic bold 12px/30px Georgia, serif"});
                        td.mouseover(function ()
                        {
                        td.css({color: "red", text: "bold"});
                        });
                        td.mouseleave(function ()
                        {
                        td.css({color: "black", text: "bold"});
                        });
                        var input = $("input");
                        input.css({width: "100%"});
                        $(".panel").hide();
                        var menu_c = $(".audiencia");
                        menu_c.mouseover(function () {
                        $(".panel").show();
                        menu_c.click(function () {
                        $(".panel").hide();
                        });
                        });
                        //================================================// designer area end ===========================================

//================================================// querys ===========================================


                        $(".form-submit-delete").submit(function ()
                        {
                        $.ajax(
                        {
                        url: "<?php echo site_url('index.php/Sistema/delete'); ?>",
                                type: "POST",
                                data: $(this).serialize(),
                                success: function () {
                                location.reload()
                                },
                                error: function () {
                                alert("Erro interno , contrate o adminstrador")
                                }

                        });
                        return false;
                        });

                       //form insert
                        $(".form-submit").submit(function ()
                        {
                        $.ajax(
                        {
                        url: "<?php echo site_url('index.php/Sistema/data_insert_user'); ?>",
                                type: "POST",
                                data: $(this).serialize(),
                                success: function () {
                                location.reload()
                                },
                                error: function () {
                                alert("Erro interno , contrate o adminstrador")
                                }

                        });
                        return false;
                        });
                        });

                         //================================================// end querys ===========================================
                    </script>


                    </tbody>
            </table>
           


            <div id="myModal" class="modal fade" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Cadastro Cliente</h4>
                        </div>
                        <div class="modal-body">

                            <p>
                            <form action="#" class="form-submit" method="post">
<?php
$id = $this->session->id;
echo $id;
?>
                                <input type="hidden" name="id" value="<?php echo $id; ?>"
                                 <p>Nome</p>
                                <input type="text" placeholder="Nome" name="nome" required="">
                                <p>Sobrenome</p>
                                <input type="text" placeholder="Sobrenome" name="sobrenome" required="">
                                <p>RG</p>
                                <input type="text" placeholder="RG" name="rg" required="">
                                <p>CPF</p>
                                <input type="text" placeholder="cpf" name="cpf" required="">
                               
                                <p>N°-check</p>
                                <input type="text" placeholder="Cheque" name="np" maxlength="7"  id="pin" pattern="\d{7}" required="">
                                <p>cheque-origem</p>
                                <input type="text" placeholder="cheque-origem" name="comarca" required="">
                                <p>Endereco</p>
                                <input type="text" placeholder="Endereco" name="endereco" required="">
                                <p>Status</p>
                                <input type="text" placeholder="Status" name="status" required="">
                                <input type="submit" value="enviar">

                            </form>  

                            <script>
                                $(function () {


                                });
                            </script>  






                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>

                </div>
            </div>
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



