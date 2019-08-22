<?php
  class Posts extends CI_Controller{

    public function index($id = FALSE){
      $data = array();
      $data['title'] = 'Recent Posts';

      $data['posts'] = $this->post_model->get_posts();

      $this->load->view('templates/header');
      $this->load->view('posts/index', $data);
      $this->load->view('templates/footer');
    }

    public function view($id){

      $data = array();
      $data['post'] = $this->post_model->get_posts($id);
      $this->load->view('templates/header');
      $this->load->view('posts/view', $data);
      $this->load->view('templates/footer');
    }
  }
