<?php

class M_login extends CI_Model
{
    public function login($post)
    {
        $this->db->select('*');
        $this->db->from('admin');
        $this->db->where('USERNAME', $post['username']);
        $this->db->where('PASSWORD', md5($post['password']));
        
        return $this->db->get();
    }

    public function get($id = null){

        $this->db->from('admin');
        if($id != null){
            $this->db->where('ADMIN_ID', $id);
        }
        $query = $this->db->get();
        return $query;
    }
}