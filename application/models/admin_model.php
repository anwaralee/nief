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
    }
?>