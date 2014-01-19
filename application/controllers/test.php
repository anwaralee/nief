<?php
class Test extends CI_Controller
{
    function index()
    {
        $this->load->model('test_model');
        $data['model'] = $this->test_model->getAll();
        $this->load->view('test/index',$data);
    }
}