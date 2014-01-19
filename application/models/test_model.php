<?php
class Test_model extends CI_Model
{
    function getAll()
    {
        /*
        $this->db->where(array('id'=>1));
        $q = $this->db->get('tbl_pages');
        */
        $q = $this->db->get_where('tbl_pages',array('id'=>1));
        if($q->num_rows() > 0)
        {
            return $q->result_array();
        }
        return null;
    }
}