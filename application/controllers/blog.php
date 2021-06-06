<?php

class Blog extends CI_Controller{
    public function index(){
        // $data['nama'] = 'tutorial ci 3';
        $this->load->view('header');
        $this->load->view('blog/index');
        $this->load->view('footer');
    }

    public function add(){
        $this->load->view('blog/add');
    }

}

?>