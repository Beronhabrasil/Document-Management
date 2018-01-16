

 <input type='button' onClick='fechar()' value='fechar'>



<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of upload
 *
 * @author jonny
 */
class Upload extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->model('query');
    }

    public function index() {
        $this->load->view('upload_form', array('error' => ' '));
    }

    public function do_upload() {


        $config['upload_path'] = 'images/';
        $config['allowed_types'] = 'pdf|png|jpg|jpeg|';
        $config['max_width'] = 0;
        $config['max_height'] = 0;
        $config['max_size'] = 0;
        $config['encrypt_name'] = true;

        $this->load->library('upload', $config);
        if (!$this->upload->do_upload()) {
            $error = array('error' => $this->upload->display_errors());
            print_r($error);
        } else {
            $arr_image = array('upload_data' => $this->upload->data());

            foreach ($arr_image as $value) {
                echo $value['orig_name'];
                $data = array(
                    'pic' => $value['file_name'],
                    'revisao' => $this->input->post('revisao'),
                    'comentario' => $this->input->post('comentario'),
                    'np' => $this->input->post('id'),
                );

                echo "<script> alert('Documento anexado ao preocesso')</script>)";

                $this->query->insert_pic($data);
                  echo "<script>
function fechar(){
window.close();
}
</script>"; 
                
                
            }
        }
    }

}

 