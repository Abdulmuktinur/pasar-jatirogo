<?php

Class Fungsi {

    protected $ci;

    public function __construct(){

        $this->ci =& get_instance();
    }

    function admin_login(){
        $this->ci->load->model('M_login');
        $admin_id = $this->ci->session->userdata('ADMIN_ID');
        $user_data = $this->ci->M_login->get($admin_id)->row();
        return $user_data;
    }
}