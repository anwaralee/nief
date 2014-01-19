<?php
    class Login extends CI_Controller
    {
        function __construct()
        {
            parent::__construct();
            if($this->session->userdata('admin'))
            {
                
            }
            $this->load->model('admin_model');   
        }
        
        function login()
        {
            $this->load->view('admin/login_view');
        }
        
        function login_verify()
        {
           $this->load->admin_model('login_verify'); 
        }
    }
?>