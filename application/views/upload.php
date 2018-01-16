<html>
    <head>
        <title>Upload Document</title>
        
        
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">  
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content=" " />

        <!-- Custom Theme files -->
        <link href="<?php echo base_url('css/style.css'); ?>  " rel="stylesheet" type="text/css" media="all"/>
        <link href="<?php echo base_url('css/bootstrap-responsive.css'); ?>  " rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('css/bootstrap.css'); ?>  " rel="stylesheet" type="text/css" />
    </head>
    <body>
        <?php echo "<script>
function fechar(){
window.close();
}
</script>";
        ?>
        <input type='button' onClick='fechar()' value='fechar'>
        <?php echo $error; ?>

        <?php echo form_open_multipart('http://dunavirtual.hol.es/check/index.php/Upload/do_upload'); ?>
        <?php $id = $this->uri->segment(4);
        echo $id;
        ?>
        <input type="file" name="userfile" size="20" />
        <input type="hidden" name="id" value="<?php echo $id; ?>"/>
        <br /><br />
        <span style="color: red;"> Revisao<input type="date" name="revisao"> </span> 
        <br /><br />
        <span style="color: red;">   <textarea name="comentario">Descrisao sobre cheque</textarea> </span>
        <br /><br />


        <input type="submit" value="upload" />

<?php echo form_close() ?>

    </body>
</html>