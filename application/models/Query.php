<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Query
 *
 * @author jonny
 */
class Query extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function insert($data) {
        $this->db->insert('data', $data);
    }
    
    public function verify_user($user, $pass) {
        $this->db->select('*');
        $this->db->from('data');
        $this->db->where('email', $user);
        $this->db->where('senha', $pass);
        $query = $this->db->get();
        return $query->result();
    }

    public function userdata() {
        $this->db->select('*');
        $this->db->from('data');
        // $this->db->where('id',$id);
        $query = $this->db->get();
        return $query->result();
    }

    public function form_insert($data, $id) {
        $this->db->where("id", $id);
        $this->db->update("data_user", $data);
    }

    public function data_user_query($id) {
        $this->db->select('*');
        $this->db->from('data');
        $this->db->join('data_user','data.id = data_user.id_user');
      $this->db->where('data.id',$id);
        $query = $this->db->get();
        return $query->result();
    }
    
     public function insert_form_user($data, $id) {
        $this->db->where("id", $id);
        $this->db->insert("data", $data);
    }
    
    public function user_i($data) {
       
        $this->db->insert("data_user",$data) ;
        
    }
    
    public function insert_pic($data)
    {
    //$this->db->where("id_user",$id);    
    $this->db->insert("pic",$data);
    
    } 
    
     public function doc_user1($id) {
        $this->db->select('*');
        $this->db->from('pic');
        //$this->db->join('data_user','data.id = data_user.id_user');
      $this->db->where('id',$id);
        $query = $this->db->get();
        return $query->result();
    }
    
     public function select_list_doc($np) 
     { 
       $this->db->select('pic.id,pic.id,pic.comentario,pic.pic,pic.revisao');
        $this->db->from('pic');
        $this->db->join('data_user','pic.np = data_user.np');
      $this->db->where('pic.np',$np);
      $this->db->group_by('pic.id');
        $query = $this->db->get();
        return $query->result();
    }
    
     public function process_insert($data) {
            
        $this->db->insert("data_user",$data) ;
        
    }
    
  
    public function doc_db($id)
    {
        $this->db->select('*');
        $this->db->from('pic');
        
     $this->db->where('id',$id);
     // $this->db->group_by('id');
        $query = $this->db->get();
        return $query->result();
    }
    
    public function delete_du($id) {
           $this->db->where("id",$id);
           $this->db->delete("data_user");

    
   
    }
    
    
    public function login_query($user,$pass)
    {
        $this->db->select("*") ;
        $this->db->from('user');
        $this->db->where("user",$user);
        $this->db->where("pass",$pass);
        $result = $this->db->get();
        return $result->result();
    }
    
    public function list_client()
    {
        $this->db->select('*');
        $this->db->from('data_user');
        $query = $this->db->get();
        return $query->result();
    }
    
}
