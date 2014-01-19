<?php
    class Home_model extends CI_Model
    {
        function getAbout()
        {
            $q= $this->db->get_where('tbl_pages', array('id'=>1));
            if($q->num_rows()>0)
            {
                return $q->row_array();
            }
            return null;
        } 
        
        function getMissions()
        {
            $q=$this->db->get_where('tbl_pages',array('id'=>3));
            if($q->num_rows()>0)
            {
                return $q->row_array();
            }
            return null;
        } 
        
        function getContact()
        {
            $q=$this->db->get_where('tbl_pages',array('id'=>4));
            if($q->num_rows()>0)
            {
                return $q->row_array();
            }
            return null;
        }  
        
        function contactVerify()
        {
           $name=$this->input->post('fullname');
           $email= $this->input->post('email');
           $msg= $this->input->post('message');
        
          $this->load->library('email');
          $this->email->set_newline("\r\n");
          $this->email->from($email);
          $this->email->to('reshma.alee@gmail.com');
          $this->email->subject('Message from visitor '.$name);
          $this->email->message($msg);
          if($this->email->send())
         {
          $this->session->set_flashdata('email','Your email has been sent!');
         }
         else
        {
          $this->session->set_flashdata('email','Sorry there occured an error sending your email!');
        }
          
        }
    }