<?php
class Home extends CI_Controller{
    function index()
    {
        $this->load->view('home/index');
    }
    function about()
    {
        $this->load->view('home/about');
    }
    function missions()
    {
        $this->load->view('home/missions');
    }

    function contact()
    {
        $this->load->view('home/contact');
    }    
}