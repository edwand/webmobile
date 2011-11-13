<?php

class Home extends CI_Controller{
    function  __construct() {
        parent::__construct();
    }

    function index(){
        $this->load->view('home');
    }

    function tampilkuis(){
        $this->load->model('mkuis');
        $data['kuis']=$this->mkuis->tampil();
        $this->load->view('kuis', $data);
    }
    
}

?>
