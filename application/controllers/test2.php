<?php
class Test2 extends CI_Controller
{
    function index()
    {
        if(isset($_POST['a']))
        {
            
        }
        $this->load->view('test2/index');
                
    }
}