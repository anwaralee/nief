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
            $this->load->helper('ckeditor');
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
            $data['ckeditor'] = array(
 
			//ID of the textarea that will be replaced
			'id' 	=> 	'content',
			'path'	=>	'js/ckeditor',
 
			//Optionnal values
			'config' => array(
				'width' 	=> 	"550px",	//Setting a custom width
				'height' 	=> 	'100px',	//Setting a custom height
				'toolbar' 	=> 	array(	//Setting a custom toolbar
					array('Bold', 'Italic'),
					array('Underline', 'Strike', 'FontSize','NumberedList'),
					array('Smiley'),
					'/'
				)
			),
 
 
			//Replacing styles from the "Styles tool"
			'styles' => array(
 
				//Creating a new style named "style 1"
				'style 1' => array (
					'name' 		=> 	'Blue Title',
					'element' 	=> 	'h2',
					'styles' => array(
						'color' 	=> 	'Blue',
						'font-weight' 	=> 	'bold'
					)
				),
 
				//Creating a new style named "style 2"
				'style 2' => array (
					'name' 	=> 	'Red Title',
					'element' 	=> 	'h2',
					'styles' => array(
						'color' 		=> 	'Red',
						'font-weight' 		=> 	'bold',
						'text-decoration'	=> 	'underline'
					)
				)				
			)
		);
        $data['ckeditor2'] = array(
 
			//ID of the textarea that will be replaced
			'id' 	=> 	'content2',
			'path'	=>	'js/ckeditor',
 
			//Optionnal values
			'config' => array(
				'width' 	=> 	"550px",	//Setting a custom width
				'height' 	=> 	'100px',	//Setting a custom height
				'toolbar' 	=> 	array(	//Setting a custom toolbar
					array('Bold', 'Italic'),
					array('Underline', 'Strike', 'FontSize','NumberedList'),
					array('Smiley'),
					'/'
				)
			),
 
 
			//Replacing styles from the "Styles tool"
			'styles' => array(
 
				//Creating a new style named "style 1"
				'style 1' => array (
					'name' 		=> 	'Blue Title',
					'element' 	=> 	'h2',
					'styles' => array(
						'color' 	=> 	'Blue',
						'font-weight' 	=> 	'bold'
					)
				),
 
				//Creating a new style named "style 2"
				'style 2' => array (
					'name' 	=> 	'Red Title',
					'element' 	=> 	'h2',
					'styles' => array(
						'color' 		=> 	'Red',
						'font-weight' 		=> 	'bold',
						'text-decoration'	=> 	'underline'
					)
				)				
			)
		);
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