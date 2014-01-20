<?php
    class Login extends CI_Controller
    {
        function __construct()
        {
            parent::__construct();
            if($this->session->userdata('admin'))
            {
                redirect('dashboard'); 
            }
            $this->load->model('admin_model');   
        }
        
        function index()
        {
            $this->load->view('admin/login_view');
        }
        
        function login_verify()
        {
           $q = $this->admin_model->login_verify();
           if($q)
           {
            redirect('dashboard');
           } 
           else
           redirect('admin');
        }
        
        
        
    }
?>