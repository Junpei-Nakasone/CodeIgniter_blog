<?php
  class Post_model extends CI_Model{

      public function __construct(){
        $this->load->database();
      }
      
      public function get_posts(){
        $query = $this->db->get('posts');
        return $query->row_array();
      }
  }
