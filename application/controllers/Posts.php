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

    public function edit($id){

      $data = array();

      $data['title'] = 'Edit this post';

      $data['post'] = $this->post_model->get_posts($id);

      $this->load->view('templates/header');
      $this->load->view('posts/edit', $data);
      $this->load->view('templates/footer');

    }

    public function edit_conf(){
      $data['title'] = 'Are you sure you want to edit this post?';
      $this->load->view('templates/header');
      $this->load->view('posts/edit_conf', $data);
      $this->load->view('templates/footer');
    }

    public function edit_comp(){
      $data['title'] = 'Edited successfully.';

      $this->post_model->update_post();

      $this->load->view('templates/header');
      $this->load->view('posts/edit_comp', $data);
      $this->load->view('templates/footer');

    }
  }
