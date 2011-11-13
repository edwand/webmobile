<?php

class Login extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('mlogin');
    }

    function index() {
        if ($this->session->userdata('login') == true) {
            redirect('home');
        }
        $this->load->view('login');
    }

    function otentik() {
        $this->form_validation->set_rules("username", "username", "required");
        $this->form_validation->set_rules("password", "password", "required");
        if ($this->form_validation->run() == true) {
            $username = $this->input->post("username", true);
            $password = $this->input->post("password", true);
            if ($this->mlogin->cek($username, $password) == true) {
                $session = $this->mlogin->proses($username, $password);
                $this->session->set_userdata("id", $session['id']);
                $this->session->set_userdata("login", "true");
                redirect("home", "refresh");
            } else {
                redirect("login", "refresh");
            }
        } else {
            $this->index();
        }
    }

    function logout() {
        $this->session->unset_userdata('id');
        $this->session->unset_userdata('login');
        $this->session->sess_destroy();
        redirect('login');
    }

    function signup() {
        $this->load->view('signup');
    }

    function simpan() {
        $this->form_validation->set_rules("username", "username", "required");
        $this->form_validation->set_rules("password", "password", "required");
        $this->form_validation->set_rules("nama", "nama", "required");
        $this->form_validation->set_rules("jkel", "jkel", "required");
        $this->form_validation->set_rules("date", "date", "required");
        $this->form_validation->set_rules("alama", "alamat", "required");
        if ($this->form_validation->run() == true) {
            $simpan['username'] = $this->input->post("username", true);
            $pass = md5($this->input->post("password", true));
            $simpan['password'] = $pass;
            $simpan['nama'] = $this->input->post("nama", true);
            $simpan['jkel'] = $this->input->post("jkel", true);
            $simpan['tgllahir'] = $this->input->post('date');
            $simpan['alamat'] = $this->input->post("alamat", true);
            $this->mlogin->simpan($simpan);
            redirect("login/terimakasih");
        }  else {
            redirect('login/signup', 'refresh');
        }
    }

    function terimakasih() {
        $this->load->view('terimakasih');
    }

}
?>
