<?php
  class Post_model extends CI_Model{

      public function __construct(){
        $this->load->database();
      }

      public function get_posts($id = FALSE){
        if ($id == FALSE) {
          $query = $this->db->get('posts');
          return $query->result_array();
        } else {
          $query = $this->db->get_where('posts', array('id' => $id));
          return $query->row_array();
        }

      }

      public function update_post(){
        $data = array(
          'title' => $this->input->post('title'),
          'body' => $this->input->post('body')
        );
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('posts', $data);
      }

  }
