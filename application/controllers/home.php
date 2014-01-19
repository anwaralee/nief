<?php
class Home extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('home_model');
    }
    function index()
    {
        $this->load->view('home/index');
    }
    function about()
    {
        $data['about']=$this->home_model->getAbout();
        $this->load->view('home/about',$data);
    }
    function missions()
    {
        $data['missions']=$this->home_model->getMissions();
        $this->load->view('home/missions',$data);
    }

    function contact()
    {
        $data['contact']=$this->home_model->getContact();
        $this->load->view('home/contact',$data);
    }  
    
    function contact_verify()
    {
        if(isset($_POST['submit']))
        {
        $data['message']=$this->home_model->contactVerify();
        redirect('home/contact');
        }
    }  
}