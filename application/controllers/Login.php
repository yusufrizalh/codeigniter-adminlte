<?php

class Login extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->model('login_model');
    }
    
    public function index() {
        $this->load->view('login/index');
    }

    public function login_action() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $where = array(
            'username' => $username, 
            'password' => $password
        );
        
        $cek_login = $this->login_model->cek_login('admin', $where)->num_rows();
        if($cek_login > 0) {
            $data_session = array(
                'nama' => $username, 
                'status' => "login"
            );
            $this->session->set_userdata($data_session);
            redirect(base_url("dashboard"));
        } else {
            echo "Username atau Password Salah!";
        }
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect(base_url('login'));
    }
}