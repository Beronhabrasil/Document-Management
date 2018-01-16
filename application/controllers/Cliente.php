<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of cliente
 *
 * @author jonny
 */
class Cliente extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('session');

        $this->load->model('query');
    }

    function index() {

        $this->load->view('client');
    }

    function login() {

        $POST = filter_input_array(INPUT_POST, FILTER_DEFAULT);
        $user = $this->input->post('user');
        $pass = $this->input->post('pass');
        if (in_array('', $POST)) :
            echo 'algo no login esta errado';
         else :


            $user = $this->input->post('user');
            $pass = $this->input->post('pass');
        


            
       $userexists =     $this->query->login_query($user, $pass);
       
       
       
    
       
       if($userexists ):
           
          
      $ipaddress = $_SERVER['REMOTE_ADDR'];
      $visit = date("Y/m/d");
      $user_agent = $_SERVER['HTTP_USER_AGENT'];  
       $this->load->library('session');
       $sessionData = array(
               
                'user' => $userexists[0]->user,
                'id'   => $userexists[0]->id,
                'ip_adresse' => $ipaddress,
                'last_visit'    => $visit,
                'user_agent'=>   $user_agent,
                'logged_in' => TRUE
                 
               );
    
        $this->session->set_userdata($sessionData);
        $get_data =   $this->query->list_client();
           
                $data_user['query2'] =  $get_data;
               $data_login['user'] = $userexists;
               
               $result1 = $data_user['query2'];
               $result2 = $data_login['user'];
            
               
         $data['query'] = array_merge($result1,$result2);
               
               $this->load->view('client_restrited',$data);
           
       
 
     
       
       
       else: $this->load->view('error_login');
       endif;
       
            
        endif;
    }

   public function logout() {
        $this->session->unset_userdata($sessionData);
 redirect('http://dunavirtual.hol.es/check/index.php/cliente');

     
    }
      
  
}
