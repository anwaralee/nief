<?php
    class Admin_model extends CI_Model
    {
        function login_verify()
        {
            $un = $this->input->post('name');
            $pw = $this->input->post('pass');
            $arr = array('name'=>$un,'password'=>$pw);
            $q = $this->db->get_where('tbl_admin',$arr);
            if($q->num_rows()>0)
            {
                $this->session->set_userdata('admin',1);
                return true;
            }
            else{
                $this->session->set_flashdata('flash','Invalid Login');
            return false;
            }
        }
        
        function getPages()
        {
            $q=$this->db->get('tbl_pages');
            if($q->num_rows()>0)
            {
                return $q->result_array();
            }
            else return null;
        }
        
        function getPageContent($id)
        {
            $arr=array('id'=>$id);
            $q=$this->db->get_where('tbl_pages',$arr);
            if($q->num_rows()>0)
            {
                return $q->row_array();
            }
            else return null;
        }
        
        function editPageContent($id)
        {
           $title=$this->input->post('title');
           $content=$this->input->post('content');
           $key=$this->input->post('key');
           $desc=$this->input->post('desc');
           $data=array('title'=>$title, 'content'=>$content, 'meta_key'=>$key, 'meta_desc'=>$desc);
           $this->db->where('id',$id);
           $this->db->update('tbl_pages',$data);
           $this->session->set_flashdata('flash','Content edited successfully');
           return true; 
        }
        
        function editAccount()
        {
            $q=$this->db->get('tbl_admin');
            if($q->num_rows()>0)
            {
                return $q->row_array();
            }
            else return null;
        }
        
        function edit_account()
        {
            $name=$this->input->post('name');
            $pass=$this->input->post('pass');
            $email=$this->input->post('email');
            $data = array('name'=>$name, 'password'=>$pass, 'email'=>$email);
            $this->db->update('tbl_admin', $data);
            $this->session->set_flashdata('flash', 'Account details updated successfully');
            return true;
        }
    }
?>