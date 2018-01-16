


<?php

defined('BASEPATH') OR exit('No direct script access allowed');

error_reporting(0);

global $doc;

class Sistema extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('session');

        $this->load->model('query');
    }

    public function index() {
        $this->load->view('home');
    }

    public function register() {

        $POST = filter_input_array(INPUT_POST, FILTER_DEFAULT);
        if (in_array('', $POST)):
            echo "Oppss!Todos os campos são obrigatorios";
        else:



            $data = array(
                'nome' => $this->input->post('nome'),
                'sobrenome' => $this->input->post('sobrenome'),
                'email' => $this->input->post('email'),
                'senha' => $this->input->post('senha')
            );

            $this->load->model('query');
            $this->query->insert($data);



            print_r($data);




            redirect('/sistema');

        endif;
    }

    public function loadform() {
        $this->load->view('form_insert');
    }

    public function login($user, $pass) {

        $user = $this->input->post('user');
        $pass = $this->input->post('pass');


        $this->load->model('query');
        $userexists = $this->query->verify_user($user, $pass);

        if ($userexists) {

            $user['user'] = $sessionData = 
               ['id' => $userexists[0]->id,
                'nome' => $userexists[0]->nome,
                'sobrenome' => $userexists[0]->sobrenome,
                'email' => $userexists[0]->email,
                'logged_in' => TRUE];

            $this->load->model('query');
            $last = $this->query->data_user_query($userexists[0]->id);

            $json = $this->query->data_user_query($userexists[0]->id);

            $doc = $this->query->doc_user1($userexists[0]->id);

            $result = json_encode($json);


            $resultq2['user'] = $user;
            $resultq1['query'] = $last;
            $resultq3['json'] = $result;
            $resultq4['doc'] = $doc;

            $data = array_merge($resultq1, $resultq2, $resultq3, $resultq4);


            $this->session->set_userdata($sessionData);
            $this->load->view('restrited', $data);
        } else {
            redirect('http://dunavirtual.hol.es/check/index.php/sistema/error_login');
        }
    }

    // $this->load->model('query');       
    //$userdata['query']  =  $this->query->userdata(); 





    public function error_login() {
        $this->load->view('error_login');
    }

    public function logout() {
        $this->session->unset_userdata($sessionData);


        redirect('http://dunavirtual.hol.es/check/index.php/');
    }

    public function data_user($id) {
        $json['success'] = false;
        $json['error'] = false;
        $data = array(
            'nome' => $this->input->post('nome'),
            'sobrenome' => $this->input->post('sobrenome'),
            'rg' => $this->input->post('rg'),
            'cpf' => $this->input->post('cpf'),
           // 'np' => $this->input->post('np'),
            'comarca' => $this->input->post('comarca'),
            'status' => $this->input->post('status'),
            'endereco' => $this->input->post('endereco'),
        );
        
     

      //  print_r($data);
        $json['success'] = $data;

        $id = $this->input->post('id');



        $this->query->form_insert($data, $id);
        $this->load->model('query');
        $ht = $this->query->data_user_query($id);
        if (!$ht):
            $json['error'] = ['Usuario não eoncontrado', "erro"];
        else:
            $json['success'] = $ht;
            $result = $json;
            foreach ($result as $value) {

                // print_r($value);
                echo $value[0]->nome."".
                 $value[0]->sobrenome."".
                $value[0]->rg.""
                . $value[0]->cpf.""
                . $value[0]->comarca.""
                . $value[0]->status.""
               .$value[0]->endereco;
            }


        endif;
      
    }

    public function form_user_insert() {
        $this->load->view('form_user_insert');
    }

    function data_insert_data($id) {

        $data = array(
            'cpf' => $this->input->post('cpf'),
            'rg' => $this->input->post('rg'),
            'endereco' => $this->input->post('endereco')
        );

        print_r($data);
        $id = $this->input->post('id');
        $this->load->model('query');
        $this->query->insert_form_user($data, $id);
    }

    function load_upload_form() {
        $this->load->view('upload');
    }

    public function doc_list($np) {

        $np = $this->uri->segment(4);


        $data['list'] = $this->query->select_list_doc($np);



        $this->load->view('list', $data);
    }

    public function data_insert_user($id) {
        $data = array(
            'nome' => $this->input->post('nome'),
            'sobrenome' => $this->input->post('sobrenome'),
            'rg' => $this->input->post('rg'),
            'cpf' => $this->input->post('cpf'),
            'np' => $this->input->post('np'),
            'comarca' => $this->input->post('comarca'),
            'status' => $this->input->post('status'),
            'id_user' => $this->input->post('id'),
            'endereco' => $this->input->post('endereco')
        );

        print_r($data);
       
        // $json['success'] = $data;

        $this->load->model('query');

        $this->query->process_insert($data);
    }

    public function load_user_form() {
        $this->load->view('insert_form');
    }

    public function show_doc($id) {
        $id = $this->uri->segment(4);
        $result['show_doc'] = $this->query->doc_db($id);


        $this->load->view('result_doc', $result);
    }

    public function to_list() {

        $this->load->view('list-to-do');
    }
    
    
    public function delete($id) {
 
    $id =  $this->input->post('id');
   $this->query->delete_du($id);
   
    }
    
   
    

}
