<?php
    class Dashboard extends CI_Controller
    {
        function __construct()
        {
            parent::__construct();
            if(!$this->session->userdata('admin'))
            {
                redirect('admin');
            }
            $this->load->model('admin_model');
        }    
        
        function index()
        {
            $this->load->view('admin/dashboard_view');   
        }
        
        function pages()
        {
            $data['pages']=$this->admin_model->getPages();
            $this->load->view('admin/pages_view',$data);
        }
        
        function edit_page($id)
        {
            $data['content']=$this->admin_model->getPageContent($id);
            $this->load->view('admin/edit_page_view',$data);
        }
        
        function edit_page_content($id)
        {
            $this->admin_model->editPageContent($id);
            redirect('admin/dashboard/edit_page/'.$id);
        }
        
        function logout()
        {
            $this->session->unset_userdata('admin');
            redirect('admin');
        }
        
        function account()
        {
            $data['content']=$this->admin_model->editAccount();
            $this->load->view('admin/account_view',$data);
        }
        
        function edit_account()
        {
            $this->admin_model->edit_account();
            redirect('account');
        }
    } 
?>